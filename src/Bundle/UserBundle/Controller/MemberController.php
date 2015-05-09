<?php

namespace Bundle\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Moraspirit\EntityBundle\Entity\User;
use Moraspirit\EntityBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Session\Session;

class MemberController extends Controller {

    public function indexAction() {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('MoraspiritEntityBundle:User');  
        $NotificationRepository = $em->getRepository('MoraspiritEntityBundle:Notification');      
        $id = $session->get('user');
        $user = $repository->findOneBy(array('id' => $id));
	$NotificationsQuery = $NotificationRepository->createQueryBuilder('p')
                    ->where('p.userid = :id AND p.seen = 0')
                    ->setParameter('id', $user->getId())
                    ->setMaxResults(10)
                    ->orderBy('p.id', 'DESC')
                    ->getQuery();
        $Notifications = $NotificationsQuery->getResult();
        if ($user) {
            $members = $repository->findAll();
           
                return $this->render('MoraspiritSiteBundle:Members:index.html.twig', array(                            
                            'members' => $members,
                            'Notifications' => $Notifications
                            
                ));
        }

        return $this->render('MoraspiritSiteBundle:Index:index.html.twig');
    }

}
