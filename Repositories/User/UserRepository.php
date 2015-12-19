<?php

namespace Gasoline\Repositories\User;

use Gasoline\Models\User\User;

class UserRepository
{

    /**
     * @var
     */
    private $pdo;

    /**
     * Default constructor
     * @param EnhancedPdo $pdo
     */
    public function __construct($pdo)
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

}
