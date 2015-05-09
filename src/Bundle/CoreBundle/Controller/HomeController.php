<?php

namespace Bundle\CoreBundle\Controller;

use Bundle\CoreBundle\Values\RepositoryName;
use Bundle\CoreBundle\Values\RouteName;
use Bundle\CoreBundle\Values\TwigTemplate;
use Moraspirit\EntityBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Session\Session;

class HomeController extends BaseController {

    public function indexAction() {
        $session = $this->getRequest()->getSession();
        $loggedUserId = $session->get($this->SESSION_KEY_USER_ID);
        $loggedUser = $this->findEntityById(RepositoryName::$REPOSITORY_USER,$loggedUserId);

        if ($loggedUser) {
            $userRole = $loggedUser->getAccesslevel();
            $notificationList = $this->getNotificationList($loggedUserId);

            if ($userRole == $this->USER_ROLE_ADMIN) {
                $taskList = $this->getTaskListForAdmin();
                return $this->render(TwigTemplate::$TWIG_HOME_ADMIN, array(
                    $this->KEY_TASK_LIST => $taskList,
                    $this->KEY_NOTIFICATION_LIST => $notificationList,
                ));
            }
            if ($userRole == $this->USER_ROLE_HEAD) {
                $taskList = $this->getTaskListForHead($loggedUser->getPillar());
                return $this->render(TwigTemplate::$TWIG_HOME_HEAD, array(
                    $this->KEY_TASK_LIST => $taskList,
                    $this->KEY_NOTIFICATION_LIST => $notificationList,
                ));
            }
            if ($userRole == $this->USER_ROLE_VOLUNTEER) {
                $taskList = $this->getTaskListForVolunteer($loggedUserId);
                return $this->render(
                    TwigTemplate::$TWIG_HOME_VOLUNTEER, array(
                    $this->KEY_TASK_LIST => $taskList,
                    $this->KEY_NOTIFICATION_LIST => $notificationList,
                ));
            }
        }

        return $this->redirect($this->generateUrl(RouteName::$ROUTE_LOGIN));
    }



    private function getTaskListForAdmin(){
        $taskRepository = $this->getRepository(RepositoryName::$REPOSITORY_TASK);
        $taskQuery = $taskRepository->createQueryBuilder('p')
            ->where('p.completed= 0')
            ->orderBy('p.id', 'DESC')
            ->getQuery();
        return $taskQuery->getResult();
    }

    private function getTaskListForHead($department){
        $taskRepository = $this->getRepository(RepositoryName::$REPOSITORY_TASK);
        $taskQuery = $taskRepository->createQueryBuilder('p')
            ->where('p.pillar = :pillar AND p.completed= 0')
            ->setParameter('pillar',$department)
            ->orderBy('p.id', 'DESC')
            ->getQuery();
        return $taskQuery->getResult();
    }

    private function getTaskListForVolunteer($userId){
        $taskRepository = $this->getRepository(RepositoryName::$REPOSITORY_TASK);
        $taskQuery = $taskRepository->createQueryBuilder('p')
            ->where('p.user = :id AND p.completed= 0')
            ->setParameter('id', $userId)
            ->orderBy('p.id', 'DESC')
            ->getQuery();
        return $taskQuery->getResult();
    }
}