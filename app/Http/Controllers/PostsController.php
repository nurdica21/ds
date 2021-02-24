<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function create(User $user){
        
        return view('posts.create', compact('user'));

    }

     
    
}
