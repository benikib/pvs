<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $admins=count(Admin::all());
        $users=count(User::all());
        return view('dashboard', compact('admins','users'));
   }
}
