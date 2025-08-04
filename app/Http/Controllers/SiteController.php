<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $app_name = 'Blog 241';
        return view('home', compact('app_name'));
    }

    public function create()
    {
        return view('site.create');
    }

    public function edit()
    {
        return view('site.edit');
    }

    public function show()
    {
        return view('site.show');
    }

    public function contact()
    {
        $email = 'contact@shop241.com';
        return view('site.contact', compact('email'));
    }
}
