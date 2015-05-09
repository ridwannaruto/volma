<?php

namespace Moraspirit\UserBundle\Controller;

use Moraspirit\EntityBundle\Entity\Account;
use Moraspirit\EntityBundle\Form\AccountType;
use Moraspirit\EntityBundle\Form\PasswordType;
use Swift_Message;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Exception\Exception;

class AccountController extends Controller {

    public function indexAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoraspiritEntityBundle:User');
        $id = $session->get('user');
        $user = $repository->findOneBy(array('id' => $id));
        
        $NotificationRepository = $em->getRepository('MoraspiritEntityBundle:Notification');
            $NotificationsQuery = $NotificationRepository->createQueryBuilder('p')
                    ->where('p.userid = :id AND p.seen = 0')
                    ->setParameter('id', $user->getId())
                    ->setMaxResults(10)
                    ->orderBy('p.id', 'DESC')
                    ->getQuery();
	$Notifications = $NotificationsQuery->getResult();

        if ($user) {
            $account = new Account();
            $form = $this->createForm(new AccountType(), $account, array(
                'action' => $this->generateUrl('moraspirit_account'),
                'attr' => array(
                    'class' => 'form-horizontal center'
                )
            ));
            $form->handleRequest($request);

            if ($form->isValid()) {
		$password = hash('md5',$account->getCurrentpassword());
                $account = $form->getData();
                if ($password == $user->getPassword()) {
                    if ($account->getNewpassword() == $account->getConfirmpassword()) {
                        $user->setPassword(hash('md5',$account->getNewpassword()));
                        try {
                            $em->persist($user);
                            $em->flush();
                        } catch (Exception $ex) {
                            return $this->render('MoraspiritUserBundle:Account:Settings.html.twig', array(
                                    'form' => $form->createView(),
                                    'type'  => 'E',
                                    'message'   => 'opz! Something went wrong!',
                                    'Notifications' => $Notifications
                        ));
                        }

                        return $this->render('MoraspiritUserBundle:Account:Settings.html.twig', array(
                                    'form' => $form->createView(),
                                    'type'  => 'S',
                                    'message'   => 'successfully changed your password',
                                    'Notifications' => $Notifications
                        ));
                    } else {
                        return $this->render('MoraspiritUserBundle:Account:Settings.html.twig', array(
                                    'form' => $form->createView(),
                                    'type'  => 'E',
                                    'message'   => 'new password did not match with its confirmation',
                                    'Notifications' => $Notifications
                        ));
                    }
                } else {
                    return $this->render('MoraspiritUserBundle:Account:Settings.html.twig', array(
                                    'form' => $form->createView(),
                                    'type'  => 'E',
                                    'message'   => 'please enter the correct password',
                                    'Notifications' => $Notifications
                        ));
                }
            }
            return $this->render('MoraspiritUserBundle:Account:Settings.html.twig', array(
                        'form' => $form->createView(),
                        'Notifications' => $Notifications
            ));
        }
        return $this->redirect($this->generateUrl('moraspirit_site_login'));
    }
    
    public function forgotPasswordAction(Request $request){
        if ($request->getMethod() == 'POST') {
            $useremail = $request->get('email');
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('MoraspiritEntityBundle:User')->findOneBy(array('email'=>$useremail));
            if($user){
                $link = "http://volma.moraspirit.com" .$this->generateUrl('moraspirit_reset_password', array('userId'=>$user->getId()));
                $message = \Swift_Message::newInstance()
                ->setSubject('Bundle Password Resetting')
                ->setFrom('moraspirit@gmail.com')
                ->setTo($useremail)
                ->setBcc('rshariffdeen@gmail.com')
                ->setBody(
                $this->renderView(
                        'MoraspiritUserBundle:Account:resetmail.html.twig', array('name'=>$user->getFirstname(),'link'=>$link)
                ), 'text/html'
                )
        ;
        return $this->render('MoraspiritUserBundle:Account:ForgotPassword.html.twig', array(
                                    'type'  => 'S',
                                    'message'   => 'Password reset link has been sent to your mail'
                        ));
        $this->get('mailer')->send($message);
            }else{
                return $this->render('MoraspiritUserBundle:Account:ForgotPassword.html.twig', array(
                                    'type'  => 'E',
                                    'message'   => 'please enter your correct email address'
                        ));
            }
        }
        return $this->render('MoraspiritUserBundle:Account:ForgotPassword.html.twig');
    }
    
    public function resetPasswordAction(Request $request, $userId){
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('MoraspiritEntityBundle:User')->findOneBy(array('id'=>$userId));
        $account = new Account();
            $form = $this->createForm(new PasswordType(), $account, array(
                'action' => $this->generateUrl('moraspirit_reset_password',array('userId'=>$userId)),
                'attr' => array(
                    'class' => 'form-horizontal center'
                )
            ));
        $NotificationRepository = $em->getRepository('MoraspiritEntityBundle:Notification');
            $NotificationsQuery = $NotificationRepository->createQueryBuilder('p')
                    ->where('p.userid = :id AND p.seen = 0')
                    ->setParameter('id', $user->getId())
                    ->setMaxResults(10)
                    ->orderBy('p.id', 'DESC')
                    ->getQuery();
	$Notifications = $NotificationsQuery->getResult();
        $form->handleRequest($request);
        if($form->isValid()){
            $account = $form->getData();
            if ($account->getNewpassword() == $account->getConfirmpassword()) {
                        $user->setPassword(hash('md5',$account->getNewpassword()));
                        try {
                            $em->persist($user);
                            $em->flush();
                        } catch (Exception $ex) {
                            return $this->render('MoraspiritUserBundle:Account:ResetPassword.html.twig', array(
                                    'form' => $form->createView(),
                                    'type'  => 'E',
                                    'message'   => 'opz! Something went wrong!'
                        ));
                        }

                        return $this->render('MoraspiritSiteBundle:Authentication:login.html.twig', array(
                                    'type'  => 'S',
                                    'message'   => 'successfully changed your password. Login with your new password'
                        ));
                    } else {
                        return $this->render('MoraspiritUserBundle:Account:ResetPassword.html.twig', array(
                                    'form' => $form->createView(),
                                    'type'  => 'E',
                                    'message'   => 'new password did not match with its confirmation'
                        ));
                    }
        }
        return $this->render('MoraspiritUserBundle:Account:ResetPassword.html.twig',array(
        'userId'=>$userId,
        'form' => $form->createView()));
    }
}