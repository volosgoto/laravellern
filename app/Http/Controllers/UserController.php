<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Отклик на запрос GET /users
     */
    public function index()
    {
        echo __METHOD__;
    }

    /**
     * Отклик на запрос GET /users/show/1
     */
    public function getShow($id)
    {
        //
    }

    /**
     * Отклик на запрос GET /users/admin-profile
     */
    public function getAdminProfile()
    {
        //
    }

    /**
     * Отклик на запрос POST /users/profile
     */
    public function postProfile()
    {
        //
    }
}
