<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actuality;
use App\Models\TeamMember;

class ManagerController extends Controller
{
    //
    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        $teams = TeamMember::all();
        return view('about', compact('teams'));
    }

    public function ourJobs()
    {
        return view('our-jobs');
    }
    
    public function ourReferences()
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

    public function contact()
    {
        return view('contact');
    }

    public function getPersonBiographie($item_id, $slug) {
        $item = TeamMember::where('id', $item_id)->where('slug', $slug)->first();
        return view('team-detail', compact('item'));
    }
}
