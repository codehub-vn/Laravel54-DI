<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function profile()
    {
        return "Hiển thị profile của user đăng nhập!";
    }
}
