<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAboutController extends Controller
{
    public function Home()
    {
        return view('admin.home');
    }
}
