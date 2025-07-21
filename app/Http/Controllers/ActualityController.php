<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actuality;

class ActualityController extends Controller
{
    //
    public function showActuality($item_id, $slug)
    {
        $actuality = Actuality::where('id', $item_id)->where('slug', $slug)->firstOrFail();
        // dd($actuality);
        // Here you would typically fetch the actuality by its ID and slug
        // For example:
        // $actuality = Actuality::where('id', $item_id)->where('slug', $slug)->firstOrFail();
        
        // For now, just return the view
        // return view('actuality.show', compact('actuality'));
        
        // Placeholder for the actual view rendering
        // You can replace 'actuality.show' with the actual view file you want to render
        // and pass the fetched actuality data to it.
        // For example:
        // return view('actuality.show', ['actuality' => $actuality]);
        // For now, just return the view without any data  
    
        return view('actuality.show', compact('actuality'));
    }
}
