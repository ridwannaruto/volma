<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // moraspirit_comment_new
        if ($pathinfo === '/newComment') {
            return array (  '_controller' => 'Moraspirit\\CommentBundle\\Controller\\CommentController::newCommentAction',  '_route' => 'moraspirit_comment_new',);
        }

        // moraspirit_comment_delete
        if (0 === strpos($pathinfo, '/deleteComment') && preg_match('#^/deleteComment/(?P<commentID>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_moraspirit_comment_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moraspirit_comment_delete')), array (  '_controller' => 'Moraspirit\\CommentBundle\\Controller\\CommentController::deleteCommentAction',));
        }
        not_moraspirit_comment_delete:

        // moraspirit_checkRegisterEmail
        if ($pathinfo === '/check') {
            return array (  '_controller' => 'Moraspirit\\NotificationBundle\\Controller\\NotificationController::indexAction',  '_route' => 'moraspirit_checkRegisterEmail',);
        }

        // moraspirit_notification_see
        if (0 === strpos($pathinfo, '/home') && preg_match('#^/home/(?P<notificationID>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moraspirit_notification_see')), array (  '_controller' => 'Moraspirit\\NotificationBundle\\Controller\\NotificationController::seenAction',));
        }

        // moraspirit_allnotification
        if ($pathinfo === '/allnotifications') {
            return array (  '_controller' => 'Moraspirit\\NotificationBundle\\Controller\\NotificationController::showAllAction',  '_route' => 'moraspirit_allnotification',);
        }

        if (0 === strpos($pathinfo, '/project')) {
            // moraspirit_project_index
            if ($pathinfo === '/projects') {
                return array (  '_controller' => 'Moraspirit\\ProjectBundle\\Controller\\ProjectController::indexAction',  '_route' => 'moraspirit_project_index',);
            }

            // moraspirit_project_details
            if (0 === strpos($pathinfo, '/projectdetails') && preg_match('#^/projectdetails/(?P<projectID>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moraspirit_project_details')), array (  '_controller' => 'Moraspirit\\ProjectBundle\\Controller\\ProjectController::detailsAction',));
            }

        }

        // moraspirit_project_new
        if ($pathinfo === '/newProject') {
            return array (  '_controller' => 'Moraspirit\\ProjectBundle\\Controller\\ProjectController::newProjectAction',  '_route' => 'moraspirit_project_new',);
        }

        // moraspirit_project_edit
        if (0 === strpos($pathinfo, '/editProject') && preg_match('#^/editProject/(?P<projectID>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moraspirit_project_edit')), array (  '_controller' => 'Moraspirit\\ProjectBundle\\Controller\\ProjectController::editProjectAction',));
        }

        // moraspirit_project_delete
        if (0 === strpos($pathinfo, '/deleteProject') && preg_match('#^/deleteProject/(?P<projectID>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_moraspirit_project_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moraspirit_project_delete')), array (  '_controller' => 'Moraspirit\\ProjectBundle\\Controller\\ProjectController::deleteProjectAction',));
        }
        not_moraspirit_project_delete:

        // moraspirit_project_complete
        if (0 === strpos($pathinfo, '/completeProject') && preg_match('#^/completeProject/(?P<projectID>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moraspirit_project_complete')), array (  '_controller' => 'Moraspirit\\ProjectBundle\\Controller\\ProjectController::completeAction',));
        }

        // moraspirit_project_details_notification
        if (0 === strpos($pathinfo, '/projectdetails') && preg_match('#^/projectdetails/(?P<projectID>[^/]++)/(?P<notificationID>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moraspirit_project_details_notification')), array (  '_controller' => 'Moraspirit\\ProjectBundle\\Controller\\ProjectController::notificationAction',));
        }

        if (0 === strpos($pathinfo, '/task')) {
            // moraspirit_task_index
            if ($pathinfo === '/tasks') {
                return array (  '_controller' => 'Moraspirit\\TaskBundle\\Controller\\TaskController::indexAction',  '_route' => 'moraspirit_task_index',);
            }

            if (0 === strpos($pathinfo, '/taskdetails')) {
                // moraspirit_task_details
                if (preg_match('#^/taskdetails/(?P<taskID>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'moraspirit_task_details')), array (  '_controller' => 'Moraspirit\\TaskBundle\\Controller\\TaskController::detailAction',));
                }

                // moraspirit_task_details_notification
                if (preg_match('#^/taskdetails/(?P<taskID>[^/]++)/(?P<notificationID>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'moraspirit_task_details_notification')), array (  '_controller' => 'Moraspirit\\TaskBundle\\Controller\\TaskController::notificationAction',));
                }

            }

        }

        // moraspirit_task_new
        if ($pathinfo === '/newTask') {
            return array (  '_controller' => 'Moraspirit\\TaskBundle\\Controller\\TaskController::newTaskAction',  '_route' => 'moraspirit_task_new',);
        }

        // moraspirit_task_edit
        if (0 === strpos($pathinfo, '/editTask') && preg_match('#^/editTask/(?P<taskID>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moraspirit_task_edit')), array (  '_controller' => 'Moraspirit\\TaskBundle\\Controller\\TaskController::editTaskAction',));
        }

        // moraspirit_task_delete
        if (0 === strpos($pathinfo, '/deleteTask') && preg_match('#^/deleteTask/(?P<taskID>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_moraspirit_task_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moraspirit_task_delete')), array (  '_controller' => 'Moraspirit\\TaskBundle\\Controller\\TaskController::deleteTaskAction',));
        }
        not_moraspirit_task_delete:

        // moraspirit_task_completePage
        if (0 === strpos($pathinfo, '/feedbackTask') && preg_match('#^/feedbackTask/(?P<taskID>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moraspirit_task_completePage')), array (  '_controller' => 'Moraspirit\\TaskBundle\\Controller\\TaskController::completePageAction',));
        }

        // moraspirit_task_complete
        if (0 === strpos($pathinfo, '/completeTask') && preg_match('#^/completeTask/(?P<taskID>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_moraspirit_task_complete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moraspirit_task_complete')), array (  '_controller' => 'Moraspirit\\TaskBundle\\Controller\\TaskController::completeTaskAction',));
        }
        not_moraspirit_task_complete:

        // moraspirit_profile
        if (0 === strpos($pathinfo, '/profile') && preg_match('#^/profile/(?P<userID>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moraspirit_profile')), array (  '_controller' => 'Moraspirit\\UserBundle\\Controller\\ProfileController::indexAction',));
        }

        // moraspirit_account
        if ($pathinfo === '/account') {
            return array (  '_controller' => 'Moraspirit\\UserBundle\\Controller\\AccountController::indexAction',  '_route' => 'moraspirit_account',);
        }

        // moraspirit_forgot_password
        if ($pathinfo === '/forgotpassword') {
            return array (  '_controller' => 'Moraspirit\\UserBundle\\Controller\\AccountController::forgotPasswordAction',  '_route' => 'moraspirit_forgot_password',);
        }

        // moraspirit_reset_password
        if (preg_match('#^/(?P<userId>[^/]++)/resetpassword$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moraspirit_reset_password')), array (  '_controller' => 'Moraspirit\\UserBundle\\Controller\\AccountController::resetPasswordAction',));
        }

        // moraspirit_profile_edit
        if ($pathinfo === '/editprofile') {
            return array (  '_controller' => 'Moraspirit\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'moraspirit_profile_edit',);
        }

        // moraspirit_profile_picture
        if ($pathinfo === '/profilepicture') {
            return array (  '_controller' => 'Moraspirit\\UserBundle\\Controller\\ProfileController::pictureAction',  '_route' => 'moraspirit_profile_picture',);
        }

        // moraspirit_homepage
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'Moraspirit\\SiteBundle\\Controller\\HomeController::indexAction',  '_route' => 'moraspirit_homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // moraspirit_site_login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'Moraspirit\\SiteBundle\\Controller\\AuthenticationController::loginAction',  '_route' => 'moraspirit_site_login',);
            }

            // moraspirit_site_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Moraspirit\\SiteBundle\\Controller\\AuthenticationController::logoutAction',  '_route' => 'moraspirit_site_logout',);
            }

        }

        // moraspirit_site_register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'Moraspirit\\SiteBundle\\Controller\\AuthenticationController::registerAction',  '_route' => 'moraspirit_site_register',);
        }

        // moraspirit_site_Emailverification
        if (0 === strpos($pathinfo, '/activate') && preg_match('#^/activate/(?P<verification>[^/]++)/(?P<email>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moraspirit_site_Emailverification')), array (  '_controller' => 'Moraspirit\\SiteBundle\\Controller\\AuthenticationController::verifyAction',));
        }

        // moraspirit_site_deleteConfirmation
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<verification>[^/]++)/(?P<email>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moraspirit_site_deleteConfirmation')), array (  '_controller' => 'Moraspirit\\SiteBundle\\Controller\\AuthenticationController::deleteConfirmationAction',));
        }

        // moraspirit_newsfeed
        if ($pathinfo === '/newsfeed') {
            return array (  '_controller' => 'Moraspirit\\SiteBundle\\Controller\\NewsController::newsAction',  '_route' => 'moraspirit_newsfeed',);
        }

        // moraspirit_pillar
        if (0 === strpos($pathinfo, '/pillar') && preg_match('#^/pillar/(?P<pillarName>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moraspirit_pillar')), array (  '_controller' => 'Moraspirit\\SiteBundle\\Controller\\PillarController::detailsAction',));
        }

        // moraspirit_site_Activate
        if (0 === strpos($pathinfo, '/activate') && preg_match('#^/activate/(?P<userID>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moraspirit_site_Activate')), array (  '_controller' => 'Moraspirit\\SiteBundle\\Controller\\AuthenticationController::activateAction',));
        }

        // moraspirit_site_Reject
        if (0 === strpos($pathinfo, '/reject') && preg_match('#^/reject/(?P<userID>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moraspirit_site_Reject')), array (  '_controller' => 'Moraspirit\\SiteBundle\\Controller\\AuthenticationController::rejectAction',));
        }

        // moraspirit_members
        if ($pathinfo === '/members') {
            return array (  '_controller' => 'Moraspirit\\SiteBundle\\Controller\\MemberController::indexAction',  '_route' => 'moraspirit_members',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
