<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{

    public function getLogin(){
        return view('admin.auth.login');
    }
}
