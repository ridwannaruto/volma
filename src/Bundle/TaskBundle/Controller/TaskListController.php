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

class TaskListController extends BaseTaskController {


    public function indexAction(Request $request) {

        $user = $this->authenticateAction();
        if ($user) {
            $type = $user->getAccessLevel();
            $pillar = $user->getPillar();
//echo $pillar;
            $em = $this->getDoctrine()->getManager();
            $TaskRepository = $em->getRepository('MoraspiritEntityBundle:Task');
            $NotificationRepository = $em->getRepository('MoraspiritEntityBundle:Notification');
            $NotificationsQuery = $NotificationRepository->createQueryBuilder('p')
                    ->where('p.userid = :id AND p.seen = 0')
                    ->setParameter('id', $user->getId())
                    ->setMaxResults(10)
                    ->orderBy('p.id', 'DESC')
                    ->getQuery();
	    $Notifications = $NotificationsQuery->getResult();
            if ($type == 'Admin') {
                $CompleteTaskQuery = $em->createQuery('SELECT t.id,t.user,t.name as taskname,t.pillar, t.description, t.project, p.name as projectname, u.firstname, u.lastname FROM Moraspirit\EntityBundle\Entity\User u,Moraspirit\EntityBundle\Entity\Task t, Moraspirit\EntityBundle\Entity\Project p WHERE  t.user = u.id AND t.project = p.id AND t.completed=1');
                $IncompleteTaskQuery = $em->createQuery('SELECT t.id,t.user,t.name as taskname,t.pillar, t.description, t.project, p.name as projectname, u.firstname, u.lastname FROM Moraspirit\EntityBundle\Entity\User u,Moraspirit\EntityBundle\Entity\Task t, Moraspirit\EntityBundle\Entity\Project p WHERE  t.user = u.id AND t.project = p.id AND t.completed=0');
             
                
               
                $CompletedTasks = $CompleteTaskQuery->getResult();
                $IncompleteTasks = $IncompleteTaskQuery->getResult();
                return $this->render('MoraspiritTaskBundle:Tasks:index.html.twig', array(
                            'Tasks' => $CompletedTasks,
                            'ITasks' => $IncompleteTasks,
                            'message' => $request->get('message'),
                            'type' => $request->get('type'),
                            'Notifications' => $Notifications
                ));
            }
            if ($type == 'Head') {

$CompleteTaskQuery = $em->createQuery('SELECT t.id,t.user,t.name as taskname,t.pillar, t.description, t.project, p.name as projectname, u.firstname, u.lastname FROM Moraspirit\EntityBundle\Entity\User u,Moraspirit\EntityBundle\Entity\Task t, Moraspirit\EntityBundle\Entity\Project p WHERE  t.user = u.id AND t.project = p.id AND t.completed=1 AND t.pillar=:pillar ORDER by t.id DESC')->setParameter('pillar', $pillar);
                $IncompleteTaskQuery = $em->createQuery('SELECT t.id,t.user,t.name as taskname,t.pillar, t.description, t.project, p.name as projectname, u.firstname, u.lastname FROM Moraspirit\EntityBundle\Entity\User u,Moraspirit\EntityBundle\Entity\Task t, Moraspirit\EntityBundle\Entity\Project p WHERE  t.user = u.id AND t.project = p.id AND t.completed=0 AND t.pillar=:pillar ORDER by t.id DESC')->setParameter('pillar', $pillar);

               
                $CompletedTasks = $CompleteTaskQuery->getResult();
                $IncompleteTasks = $IncompleteTaskQuery->getResult();
                return $this->render('MoraspiritTaskBundle:Tasks:index.html.twig', array(
                            'Tasks' => $CompletedTasks,
                            'ITasks' => $IncompleteTasks,
                            'message' => $request->get('message'),
                            'type' => $request->get('type'),
                            'Notifications' => $Notifications
                ));
            } else {

$CompleteTaskQuery = $em->createQuery('SELECT t.id,t.user,t.name as taskname,t.pillar, t.description, t.project, p.name as projectname, u.firstname, u.lastname FROM Moraspirit\EntityBundle\Entity\User u,Moraspirit\EntityBundle\Entity\Task t, Moraspirit\EntityBundle\Entity\Project p WHERE  t.user = u.id AND t.project = p.id AND t.completed=1 AND t.user=:userID ORDER by t.id DESC')->setParameter('userID', $user->getId());
                $IncompleteTaskQuery = $em->createQuery('SELECT t.id,t.user,t.name as taskname,t.pillar, t.description, t.project, p.name as projectname, u.firstname, u.lastname FROM Moraspirit\EntityBundle\Entity\User u,Moraspirit\EntityBundle\Entity\Task t, Moraspirit\EntityBundle\Entity\Project p WHERE  t.user = u.id AND t.project = p.id AND t.completed=0 AND t.user=:userID ORDER by t.id DESC')->setParameter('userID', $user->getId());

                $CompletedTasks = $CompleteTaskQuery->getResult();
                $IncompleteTasks = $IncompleteTaskQuery->getResult();

                return $this->render('MoraspiritTaskBundle:Tasks:index.html.twig', array(
                            'Tasks' => $CompletedTasks,
                            'ITasks' => $IncompleteTasks,
                            'Notifications' => $Notifications
                ));
            }
        }

        return $this->redirect($this->generateUrl('moraspirit_site_login'));
    }


}