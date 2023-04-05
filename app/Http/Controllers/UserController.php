<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return redirect()->route('profile');
    }
    public function store(){
        return'toi la store';
    }
    public function show($abc){
        return 'don hang so'.$abc;
    }
    //
}
