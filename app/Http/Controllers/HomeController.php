<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
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

      //  return view('home')->with(['title' => $title, 'content' => $content]);//load view home.php
      return View::make('home',compact('title','content'));
    //   $contentView = view('home');
    //   $contentView = $contentView->render();
    //   dd($contentView);
    }
    public function storeInfo(Request $request)
    {
      $message = $request->input('message');
      return $message;
      
    }
    public function update(Request $request,string $id){
      // dd($id);
      // dd($request->path());
      // if($request->routeIs('admin.*')){
      //   echo 'la admin';
      // }
      // $urlWithQueryString = $request->fullUrl();
      // echo $urlWithQueryString;
      // $haha= $request->fullUrlWithQuery(['type' => 'phone']);
      // echo $haha;
      $input = $request->collect();
      // return $input;
    //   $request->collect()->each(function (string $user) {
    //     // ...
    //     echo $user;
    //     echo '</br>';
        
        
    // });
    // dd($request->all()) ;
    // $name =$request->input('names.0');
    // echo $name;
    // $input = $request->input();
    // dd($input);  
      // return $request->all();
  //     $request->whenHas('jdasdja', function (string $input) {
  //       // ...
  //       echo 'có name';
  //   } ,function () {
  //     // The "name" value is not present...
  //     echo'khong co';
  // });
  // dd($request->merge(['votes' => 0])->all());
  // $request->flash();
  // return redirect('viewinfo')->withInput();
 $file= $request->file('photo');
 $extension = $request->photo->extension();
 dd($extension);

    }
  
}
