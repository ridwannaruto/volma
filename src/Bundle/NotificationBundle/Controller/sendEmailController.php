<?php

namespace Bundle\NotificationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Moraspirit\EntityBundle\Entity\Confirmation;

class sendEmailController extends Controller {

    public function sendConfirmationAction($email, $firstname) {
        $confirmation = new Confirmation();
        $confirmation->setEmail($email);
        $confirmation->setVerification(dechex(rand(10000000, 99999999)));
        $em = $this->getDoctrine()->getManager();
        $em->persist($confirmation);
        // echo "Got Here ".$username." ".$firstname;
        $message = \Swift_Message::newInstance()
                ->setSubject('Bundle Registration')
                ->setFrom('moraspirit@gmail.com')
                ->setTo($email)
                ->setBcc('rshariffdeen@gmail.com')
                ->setBody(
                $this->renderView(
                        'MoraspiritNotificationBundle:Register:confirm.html.twig', array('name' => $firstname,'email'=>$email,'verification'=>$confirmation->getVerification())
                ), 'text/html'
                )
        ;
        $this->get('mailer')->send($message);
    }

}
