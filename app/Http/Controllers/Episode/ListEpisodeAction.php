<?php

namespace App\Http\Controllers\Episode;

use App\Http\Controllers\Controller;
use App\Models\Series;

class ListEpisodeAction extends Controller
{
    public function __invoke(int $id)
    {
        $series = Series::with('episodes')->find($id);

        return response()->json($series->episodes);
    }
}
