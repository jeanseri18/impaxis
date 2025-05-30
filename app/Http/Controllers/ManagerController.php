<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    //
    public function Welcome()
    {
        return view('welcome');
    }

    public function About()
    {
        return view('about');
    }

    public function OurJobs()
    {
        return view('our-jobs');
    }
    
}
