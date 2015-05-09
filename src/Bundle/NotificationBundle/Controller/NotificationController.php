<?php

namespace Moraspirit\NotificationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Moraspirit\EntityBundle\Entity\Notification;

class NotificationController extends Controller
{
    public function seenAction($notificationID)
    {
        $em = $this->getDoctrine()->getManager();
        $Repository = $em->getRepository('MoraspiritEntityBundle:Notification');
        $notification = $Repository->find($notificationID);
        $notification->setSeen(1);
        $em->persist($notification);
        $em->flush();
        
        return $this->redirect($this->generateUrl('moraspirit_homepage'));
    }
    
    public function showAllAction(){
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
       $AllNotificationsQuery = $NotificationRepository->createQueryBuilder('p')
                    ->where('p.userid = :id')
                    ->setParameter('id', $user->getId())
                    ->setMaxResults(10)
                    ->orderBy('p.id', 'DESC')
                    ->getQuery();
            $AllNotifications = $AllNotificationsQuery->getResult();
    	return $this->render('MoraspiritNotificationBundle:Task:allnotification.html.twig',array(
    		'Notifications' => $Notifications,
    		'AllNotifications' => $AllNotifications
    	));
    }
    
    public function indexAction()
    {
        $message = \Swift_Message::newInstance()
                ->setSubject('Bundle Registration')
                ->setFrom('Moraspirit@gmail.com')
                ->setTo('rshariffdeen@gmail.com')
                ->setBody("TESTING" , 'text/html'
                )
        ;
        $this->get('mailer')->send($message);
        return true;
    }
}