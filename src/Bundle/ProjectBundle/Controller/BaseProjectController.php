<?php

namespace Bundle\ProjectBundle\Controller;

use Bundle\CoreBundle\Controller\BaseController;
use Bundle\CoreBundle\Values\RepositoryName;
use Bundle\CoreBundle\Values\GenericMessage;
use Bundle\NotificationBundle\Entity\Notification;

abstract class BaseProjectController extends BaseController{

    public $STATUS_PROJECT_ONGOING = 0;
    public $STATUS_PROJECT_COMPLETED = 1;

    protected function setNotification($heading, $message, $type, $user, $project) {
        $em = $this->getDoctrine()->getManager();
        $notification = new Notification();
        $notification->setTask(0);
        $notification->setHeading($heading);
        $notification->setDetails($message);
        $notification->setProject($project);
        $notification->setSeen(0);
        $notification->setTimestamp(new \DateTime());
        $notification->setType($type);
        $notification->setUserid($user);
        $em->persist($notification);
        $em->flush();
    }

    protected function notificationAction($projectID,$notificationID){
    	$loggedUser = $this->authenticateAction();
    	if($loggedUser){
        	$notification = $this->findEntityById(RepositoryName::$REPOSITORY_NOTIFICATION,$notificationID);
        	$notification->setSeen(1);
        	$this->saveEntityInstantly($notification);
        
        	return $this->redirect($this->generateUrl('project_details',array('projectID'=>$projectID)));
    	}
    }

    protected function getUser($userId) {
        return $this->findEntityById(RepositoryName::$REPOSITORY_USER,$userId);
    }


}