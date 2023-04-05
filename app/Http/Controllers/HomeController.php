<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    //action index()
    public function index(){
        $title ="hoc lap trinh ";
        $content = 'hoc lap trinh laravel';
        /**
         * [
         *     'title' => $title,
         *     'content' => $content
         * ]
         * compact('title','content')
         * 
         */

       return view('home')->with(['title' => $title, 'content' => $content]);//load view home.php
      // return View::make('home',compact('title','content'));
    //   $contentView = view('home');
    //   $contentView = $contentView->render();
    //   dd($contentView);
    }
}
