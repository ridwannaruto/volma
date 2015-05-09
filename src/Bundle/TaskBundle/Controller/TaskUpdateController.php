<?php

namespace Bundle\TaskBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Moraspirit\EntityBundle\Entity\Task;
use Moraspirit\EntityBundle\Form\TaskType;
use Moraspirit\EntityBundle\Entity\Notification;
use Moraspirit\EntityBundle\Entity\Trackreport;
use Moraspirit\EntityBundle\Entity\Comments;
use Moraspirit\EntityBundle\Form\CommentsType;

class TaskUpdateController extends BaseTaskController {




    private function getUserAction($userID) {
        $em = $this->getDoctrine()->getManager();
        $UserRepository = $em->getRepository('MoraspiritEntityBundle:User');
        $manager = $UserRepository->find(array('id' => $userID));
        return $manager;
    }


    public function editTaskAction(Request $request, $taskID) {

$usersms = "94717519786";
		$passwordsms = "5592";
$tosms = "";

        $user = $this->authenticateAction();
        if ($user) {
            $access = $user->getAccesslevel();
            if ($access == 'Head' || $access == 'Admin') {
                $em = $this->getDoctrine()->getManager();
                $repository = $em->getRepository('MoraspiritEntityBundle:Task');
                $task = $repository->find($taskID);
                $NotificationRepository = $em->getRepository('MoraspiritEntityBundle:Notification');
            $NotificationsQuery = $NotificationRepository->createQueryBuilder('p')
                    ->where('p.userid = :id AND p.seen = 0')
                    ->setParameter('id', $user->getId())
                    ->setMaxResults(10)
                    ->orderBy('p.id', 'DESC')
                    ->getQuery();
	    $Notifications = $NotificationsQuery->getResult();

                $form = $this->createForm(new TaskType(), $task, array(
                    'action' => $this->generateUrl('moraspirit_task_edit', array('taskID' => $taskID)),
                    'method' => 'PUT',
                    'attr' => array(
                        'class' => 'form-horizontal center'
                    )
                ));
                $form->handleRequest($request);

                if ($form->isValid()) {
$tosms = $task->getUser()->getPhonenumber();
                    $User = $this->getUserAction($task->getUser()->getId())->getFirstname();
                    $task->setLeader($task->getLeader()->getId());
                    $task->setUser($task->getUser()->getId());
                    $task->setProject($task->getProject()->getId());
                    
                   
                   
                    try {
                        $em->persist($task);
                        $em->flush();

$textsms = urlencode("Your Project has been updated. Please check Bundle for more details");


					$baseurlsms ="http://www.textit.biz/sendmsg";
					$urlsms = "$baseurlsms/?id=$usersms&pw=$passwordsms&to=$tosms&text=$textsms";
					$retsms = file($urlsms);

					$ressms= explode(":",$retsms[0]);
                    } catch (\Exception $e) {
                       // echo $e;
                        return $this->render('MoraspiritTaskBundle:Tasks:edit.html.twig', array(
                                    'message' => ' Opz! something went wrong!',
                                    'type' => 'E',
                                    'form' => $form->createView(),
                                    'Notifications' => $Notifications
                        ));
                    }


                    $this->setNotification('Task Details Updated', "Details of your task has been updated. Click the following link to get the latest details.", 1, $task->getUser(), $task->getId(), $task->getProject());


                    return $this->redirect($this->generateUrl('moraspirit_task_index', array(
                                        'type' => 'S',
                                        'message' => "succesfully updated new details and notified user")));
                }

                return $this->render('MoraspiritTaskBundle:Tasks:edit.html.twig', array(
                            'form' => $form->createView(),
                            'Notifications' => $Notifications
                ));
            } else {
                return $this->render('MoraspiritStyleBundle:Error:permission.html.twig',array(
                	'Notifications' => $Notifications
                ));
            }
        }
        return $this->redirect($this->generateUrl('moraspirit_site_login'));
    }

    public function feedbackAction($taskID) {
        $user = $this->authenticateAction();
        if ($user) {
            $access = $user->getAccesslevel();
            if ($access == 'Head' || $access == 'Admin') {
                $em = $this->getDoctrine()->getManager();
                $TaskRepository = $em->getRepository('MoraspiritEntityBundle:Task');
                $Task = $TaskRepository->find($taskID);
                $NotificationRepository = $em->getRepository('MoraspiritEntityBundle:Notification');
            $NotificationsQuery = $NotificationRepository->createQueryBuilder('p')
                    ->where('p.userid = :id AND p.seen = 0')
                    ->setParameter('id', $user->getId())
                    ->setMaxResults(10)
                    ->orderBy('p.id', 'DESC')
                    ->getQuery();
	    $Notifications = $NotificationsQuery->getResult();
                $User = $this->getUserAction($Task->getUser());
                return $this->render('MoraspiritTaskBundle:Tasks:complete.html.twig', array(
                            'Task' => $Task,
                            'User' => $User,
                            'Notifications' => $Notifications
                ));
            } else {
                return $this->render('MoraspiritStyleBundle:Error:permission.html.twig',array(
                	'Notifications' => $Notifications
                ));
            }
        }
        return $this->redirect($this->generateUrl('moraspirit_site_login'));
    }

    public function completeTaskAction(Request $request) {
        $user = $this->authenticateAction();
        if ($user) {
            $access = $user->getAccesslevel();
            if ($access == 'Head' || $access == 'Admin') {
                $taskID = $request->get('taskID');
                $em = $this->getDoctrine()->getManager();
                $repository = $em->getRepository('MoraspiritEntityBundle:Task');
                $task = $repository->find($taskID);
                $task->setEndtimestamp(new \DateTime());
                $task->setCompleted(1);
                $taskRating = $request->get('rating');
                $taskWeight = $task->getWeight();
                $task->setRate($taskRating);
                
                $NotificationRepository = $em->getRepository('MoraspiritEntityBundle:Notification');
            	$NotificationsQuery = $NotificationRepository->createQueryBuilder('p')
                    ->where('p.userid = :id AND p.seen = 0')
                    ->setParameter('id', $user->getId())
                    ->setMaxResults(10)
                    ->orderBy('p.id', 'DESC')
                    ->getQuery();
	    	$Notifications = $NotificationsQuery->getResult();
                
                $CareerRepository = $em->getRepository('MoraspiritEntityBundle:Trackreport');
                $userCareer = $CareerRepository->findOneBy(array('user'=>$task->getUser()));
                $currentRating = $userCareer->getOverallrating();
                $totalWeight = $userCareer->getTotalWeight();
                $newRating = (($currentRating * $totalWeight)+($taskRating* $taskWeight))/($totalWeight + $taskWeight);
                
                $userCareer->setOverallrating($newRating);
                $userCareer->setTotalweight($totalWeight + $taskWeight);
                
                $feedbacks = $userCareer->getComments();
                if ($feedbacks == null){
                    $feedbacks = array();                    
                }
                $feedbacks[] = array($task->getLeader(),$request->get('feedback'));
                $userCareer->setComments($feedbacks);
                
                try {
                    $em->persist($userCareer);
                    $em->persist($task);
                    $em->flush();
                } catch (\Exception $e) {
                    //echo $e;
                    return $this->redirect($this->generateUrl('moraspirit_task_details', array(
                                        'type' => 'E',
                                        'message' => " opz! somethings went wrong!",
                                        'taskID' => $taskID
                    )));
                }

                $this->setNotification('Task Completed', "Congratulations! You have completed your Task with a Rating of " . $taskRating . "/10.", 3, $task->getUser(), $task->getId(), $task->getProject());


                return $this->redirect($this->generateUrl('moraspirit_task_details', array(
                                    'type' => 'S',
                                    'message' => " successfully saved changes and notified user",
                                    'taskID' => $taskID
                )));
            } else {
                return $this->render('MoraspiritStyleBundle:Error:permission.html.twig',array(
                	'Notifications' => $Notifications
                ));
            }
        }
        return $this->redirect($this->generateUrl('moraspirit_site_login'));
    }


}