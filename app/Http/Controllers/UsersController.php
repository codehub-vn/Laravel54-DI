<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function profile(\App\UserService $userService)
    {
        $email = isset($_GET['email']) ? $_GET['email'] : null;
        $password = isset($_GET['password']) ? $_GET['password'] : null;

        $loggedInUser = $userService->getLoggedInUser($email, $password);

        if ($loggedInUser) {
            return "Chào " . $loggedInUser->name . "!";
        }
        return "Email hoặc pass không hợp lệ!";
    }
}
