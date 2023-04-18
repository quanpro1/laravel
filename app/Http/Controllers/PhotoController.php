<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\View;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return redirect()->away('https://www.google.com');
        // return redirect('admin/unicode')->with('status','Profile updated');
        //
        // return response()->json([
        //     'name' => 'Abigail',
        //     'state' => 'CA',
        // ]);
        // $data =['name'=>'loz'];
        // return view('admin.profile',$data);
        // if (View::exists('admin.profile')) {
        //     // ...
        //     return '123';
        // }
        return view('admin.profile',['info'=>['name'=>'cc','tuoi'=>4]]);
    }
     
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
