<?php

namespace Gasoline\Controllers\Users;

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

        return $user;
    }

}
