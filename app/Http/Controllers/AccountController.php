<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        return view('website.account.index');
    }
    public function setting()
    {
        return view('website.account.setting');
    }
}
