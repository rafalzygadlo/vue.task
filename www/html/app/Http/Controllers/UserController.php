<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;

class UserController extends Controller
{
    //

    public function index()
    {
        $users = User::all();
        $params = array
        (
            'users' => $users
        );    
        
        return Inertia::render('Users', $params);
    }
}
