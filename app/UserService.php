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
    public function getLoggedInUser($email, $password)
    {
        $user = \App\User::where('email', '=', $email)
            ->where('password', '=', $password)->first();

        return $user;
    }
}