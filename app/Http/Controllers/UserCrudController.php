<?php

namespace App\Http\Controllers;
use App\Models\User;

use App\resources\views\uses\usersAll;

use Illuminate\Http\Request;

class UserCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       
        /*dd($users);*/
        

        $users = User::all();  
        dd($users); 
         /*return view('users.usersAll',compact('users'));*/
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
        /*$users=User::find($id);*/
        /*return view ('users.userShow',compact('user'));*/

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
