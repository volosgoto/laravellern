<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 17.05.18
 * Time: 9:13
 */

namespace App\Http\Controllers;


class FirstController extends Controller {
        public function show($id){
//            echo __METHOD__;
            echo $id;
        }

//        public function addComment(){
//            var_dump($_POST);
//            return;
//        }
}