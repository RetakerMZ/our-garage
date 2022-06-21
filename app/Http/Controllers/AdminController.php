<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function landing()
    {
        return view('admin.layouts.main');
    }
}
