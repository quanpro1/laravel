<?php

namespace App\Http\Controllers;
use App\Http\Requests\TestValidateRequest;
use Illuminate\Http\Request;

class TestValidateController extends Controller
{ 
    public function createTest(TestValidateRequest $request){
        
        $validated = $request->validated();
        return $validated;
    }
    //
}
