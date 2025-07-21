<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actuality;

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
    
    public function OurReferences()
    {
        return view('our-references');
    }

    public function showActualities()
    {
        // $actualities = Actuality::where('is_published', true)
        //     ->orderBy('published_at', 'desc')
        //     ->get();
        $actualities = Actuality::all();
        // dd($actualities);
        return view('actualities', compact('actualities'));
    }
}
