<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
        public function about() {
            $data = ['title' => 'Page About'];


            if (view()->exists('default.about')) {
                $view = view('default.about', $data)->render();
//               return view('default.index', $data);
                return $view;
            } abort(404);
        }
}
