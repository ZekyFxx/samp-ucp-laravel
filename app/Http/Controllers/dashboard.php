<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class dashboard extends Controller
{
    $user = User::all();
    return response()->view('dashboard',$user,200);
}
