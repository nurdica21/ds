<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index($user){
     
        $user = User::findorFail($user);
        $canBeEdited = $user->id == Auth::user()->id;
        

        return view('dashboard',['user'=>$user]);
    }

    public function edit(User $user){
     
        return view('dashboard.edit', compact('user'));
    }

    
}
