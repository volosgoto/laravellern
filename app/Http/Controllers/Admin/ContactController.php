<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{

//    protected $request;
//
//    public function __construct(Request $request) {
//        $this->request = $request;
//    }


    public function show(Request $request, $id = false){
//        print_r($request->all());
        print_r($request->input('name')); // конкретный элемент массива
//        echo '<h1>'.$id.'</h1>';
            return view('default.contact', ['title' => 'Contacts'])->render();
    }


}
