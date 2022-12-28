<?php

namespace App\Http\Controllers\Episode;

use App\Http\Controllers\Controller;
use App\Models\Episode;
use Illuminate\Http\Request;

class WatchEpisodeAction extends Controller
{
    public function __invoke(int $id, Request $request)
    {
        $episode = Episode::findOrFail($id);
        $episode->watched = $request->watched;
        $episode->save();

        return response()->json($episode);
    }
}
