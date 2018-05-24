<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{

//    protected $request;
//
//    public function __construct(Request $request) {
//        $this->request = $request;
//    }


    public function show(Request $request, $id = false){
//        echo '<h1>'.$id.'</h1>';
//        print_r($request->all()); // все парметры вв виде массива
//        print_r($request->only()); // только указанные
//        print_r($request->input('name')); // конкретный элемент массива
//        print_r($request->input('name')); // конкретный элемент массива
//        $request->has()
//        $request->except() // исключить указанные
//        $request->email прямой доступ к свойству
//        $request->name
//        $request->path()
//        $request->is('contact/*') // Провкрка адреса по шаблону
//        $request->url();
//        $request->fullUrl();

// Тип запроса пользователя
//        $request->method();
// Проверка типа запроса
//        $request->isMethod('post');

        // сохраняете в сессию все веденные данные нужно подключить в файле Kernel.php
//$request->flash()
// очистить сессию
// $request->flash()

//        $request->flashOnly();
// $request->root();
// $request->exists();
// $request->query();
// $request->header();
// $request->server();
// $request->segments()
// $request->flash()//


//  return redirect()->route('home');

        // debug die
        //dd($_SERVER);
            return view('default.contact', ['title' => 'Contacts'])->render();
    }

}
