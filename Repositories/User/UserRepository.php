<?php

namespace Gasoline\Repositories\User;

use Frwoph\Vendor\Frwoph\ePdo\ePdo;
use Gasoline\Models\User\User;

/**
 * User Repository
 */
class UserRepository
{

    /**
     * @var
     */
    private $pdo;

    /**
     * Default constructor
     * @param ePdo $pdo
     */
    public function __construct(ePdo $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Get user by id
     * @param integer $id
     * @return User
     */
    public function getUser($id = null)
    {
        $statement = $this->pdo->getPdo()->prepare('SELECT * FROM users WHERE id = :id');
        $statement->bindValue('id', $id);
        $statement->execute();
        $result = $statement->fetch();

        $user = new User();
        $user->setId($result['id']);
        $user->setLogin($result['login']);
        $user->setPassword($result['password']);
        $user->setEmail($result['email']);

        return $user;
    }

    /**
     * Get users
     * @return Array of User
     */
    public function getUsers()
    {
        $statement = $this->pdo->getPdo()->prepare('SELECT * FROM users');
        $statement->execute();
        $results = $statement->fetchAll();

        $users = array();

        foreach ($results as $result) {
            $user = new User();
            $user->setId($result['id']);
            $user->setLogin($result['login']);
            $user->setPassword($result['password']);
            $user->setEmail($result['email']);
            $users[] = $user;
        }

        return $users;
    }

}
