<?php

namespace Gasoline\Controllers\Users;

use Frwoph\Vendor\Frwoph\Response\Response;
use Frwoph\Vendor\Frwoph\View\View;
use Gasoline\Services\User\UserService;

class UsersController
{

    /**
     * @var UserService
     */
    private $userService;

    /**
     * Default constructor
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    
    /**
     * List all users
     * @return Response
     */
    public function indexAction()
    {
        return new Response(new View('Users/index', array('users' => $this->userService->getUsers())));
    }

    /**
     * View action
     * @return Response
     */
    public function viewAction($id)
    {
        $user = $this->userService->getUser($id);

        $view = new View();
        $view->setPage('Users/view');
        $view->setLayout('default');
        $view->addValue('user', $user);

        return new Response($view);
    }

}
