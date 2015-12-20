<?php

namespace Gasoline\Controllers\Users;

use Frwoph\Vendors\FrwophResponse\FrwophResponse;
use Frwoph\Vendors\FrwophView\FrwophView;
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
    public function viewAction($id, $format)
    {
        $user = $this->userService->getUser($id);

        $view = new FrwophView();
        $view->setPage('Users/view');
        $view->setLayout('default');
        $view->addValue('user', $user);
        $view->addValue('title_for_layout', 'My super title');

        return new FrwophResponse($view, 200, array('Content-Type: text/html'));
    }

}
