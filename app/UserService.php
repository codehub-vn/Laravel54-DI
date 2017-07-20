<?php
/**
 * Created by PhpStorm.
 * User: codehub.vn
 * Date: 19/07/2017
 * Time: 19:57
 */

namespace App;


class UserService
{
    private $_dbService;

    public function __construct(\App\RedisService $dbService)
    {
        $this->_dbService = $dbService;
    }


    public function getLoggedInUser($email, $password)
    {
        $user = $this->_dbService->getLoggedInUser($email, $password);
        return $user;
    }
}