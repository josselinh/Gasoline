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
     * View action
     */
    public function viewAction($id)
    {
        $user = $this->userService->getUser($id);

        $view = new View();
        $view->setPage('Users/view');
        $view->setLayout('default');
        $view->addValue('user', $user);
        $view->addValue('title_for_layout', 'My super title');

        return new Response($view, 200, array('Content-Type: text/html'));
    }

}
