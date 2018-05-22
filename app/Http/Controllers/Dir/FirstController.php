<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 17.05.18
 * Time: 9:13
 */

namespace App\Http\Controllers\Dir;
use App\Http\Controllers\Controller;

class FirstController extends  Controller {
        public function show(){
            echo __METHOD__;
        }
}