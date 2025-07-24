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
        $actualities = Actuality::orderBy('created_at', 'desc')
            ->where('is_published', true)
            ->paginate(9);
            
        return view('actualities', compact('actualities'));
    }
}
