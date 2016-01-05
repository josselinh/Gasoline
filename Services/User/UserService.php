<?php

namespace Gasoline\Services\User;

use Gasoline\Models\User\User;
use Gasoline\Repositories\User\UserRepository;

class UserService
{

    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * Default constructor
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Get user by id
     * @param integer $id
     * @return User
     */
    public function getUser($id)
    {
        return $this->userRepository->getUser($id);
    }

    /**
     * Get users
     * @return Array of User
     */
    public function getUsers()
    {
        return $this->userRepository->getUsers();
    }

}
