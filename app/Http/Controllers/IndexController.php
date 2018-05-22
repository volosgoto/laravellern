<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
        public function show(){
//            return view('default.welcome');
//            return view('default.template', ['title' => 'Hello']);
            $data = ['title' => 'Hello'];
//            return view('default.template', $data);
//            return view('default.template')->with('title', 'Hello');
//            $view = view('default.template');
//            $view->with('title', 'Hello');


            if (view()->exists('default.template')) {
                $view = view('default.template', $data)->render();
//               return view('default.template', $data);
                return $view;
            } abort(404);

        }
}
