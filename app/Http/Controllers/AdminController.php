<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Admin',
            'list' => ['Home', 'Admin'],
        ];
        $page = (object) [
            'title' => 'Selamat datang di Admin',
        ];

        $activeMenu = 'dashboard';

        return view('admin', compact('breadcrumb', 'page', 'activeMenu'));
    }
}
