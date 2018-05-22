<?php

namespace App\Http\Controllers;

/*

Route::controller('auth', 'LoginController') для CRUD
The controller method is deprecated since Laravel 5.3. But now, you can use the resource method, which is meant for the same purpose as the controller method: ...

Like This ::

Route::resource('auth', 'LoginController');

OR

Route::get('/auth','LoginController');

Route::post('/auth','LoginController');
 *
 *
 *
 * */

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex() { // префикс get соотвествует типу запроса (post, put и т.д.)
        echo __METHOD__;
    }

    public function index() { // префикс get соотвествует типу запроса (post, put и т.д.)
        echo __METHOD__;
    }


    public function postIndex() { // префикс post
        echo __METHOD__;
    }
}
