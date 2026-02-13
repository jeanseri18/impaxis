<?php

namespace App\Http\Controllers;

use App\Models\Actuality;

class ActualityController extends Controller
{
    //
    public function showActuality($locale, $item_id, $slug)
    {
        $item = Actuality::where('id', $item_id)->where('slug', $slug)->firstOrFail();
        // Check if the item is published
        if (!$item->is_published) {
            abort(404); // Not found if the item is not published
        }
        // recuperer les 5 derniers articles
        $recentActualities = Actuality::where('is_published', true)
            ->where('id', '!=', $item_id) // Exclude the current item
            ->where('lang', $locale) // Filter by the same language
            ->orderBy('created_at', 'desc')
            ->take(4) // Limit to 4 recent articles
            ->get();
    
        return view('actuality.show', compact('item', 'recentActualities', 'locale'));
    }
}
