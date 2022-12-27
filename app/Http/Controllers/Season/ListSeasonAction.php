<?php

namespace App\Http\Controllers\Season;

use App\Http\Controllers\Controller;
use App\Models\Series;

class ListSeasonAction extends Controller
{
    public function __invoke(int $id)
    {
        $series = Series::with('seasons')->find($id);

        return response()->json($series->seasons()->get());
    }
}
