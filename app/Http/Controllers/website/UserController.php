<?php

namespace App\Http\Controllers\website;

use App\roduct;
use App\User;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::where('id', Auth::user()->id)->get();
        return View('website.subadmin.products.profile', compact('user'));
    }
}
