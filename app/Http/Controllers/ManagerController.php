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

    public function about($locale)
    {
        $teams = TeamMember::where('lang', $locale)->get();
        
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

    public function showActualities($locale)
    {
        $actualities = Actuality::orderBy('created_at', 'desc')
            ->where('lang', $locale)
            ->where('is_published', true)
            ->paginate(9);
            
        return view('actualities', compact('actualities'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function getPersonBiographie($locale, $item_id, $slug) {
        $item = TeamMember::where('id', $item_id)
            ->where('lang', $locale)
            ->where('slug', $slug)
            ->first();
            if (!$item) {
                abort(404);
            }

        return view('team-detail', compact('item'));
    }
}
