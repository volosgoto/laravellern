<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
        public function show(){
//            return view('default.welcome');
//            return view('default.template', ['title' => 'Hello']);
//            $data = ['title' => 'Hello'];
//            return view('default.template', $data);
//            return view('default.template')->with('title', 'Hello');
//            $view = view('default.template');
//            $view->with('title', 'Hello');


            $array = [

                'title'=>'Laravel P',
                'data' =>[
                    'one' => 'List 1',
                    'two' => 'List 2',
                    'three' => 'List 3',
                    'four' => 'List 4',
                    'five' => 'List 5'
                ],
                'dataI' =>['List 1','List 2','List 3','List 4','List 5'],

                'bvar' => true,
                'script' =>"<script>alert('hello')</script>"

            ];


            if (view()->exists('default.template')) {
                $view = view('default.index', $array)->render();
//               return view('default.index', $data);
                return $view;
            } abort(404);

        }
}
