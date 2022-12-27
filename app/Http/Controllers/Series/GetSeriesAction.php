<?php

namespace App\Http\Controllers\Series;

use App\Http\Controllers\Controller;
use App\Models\Series;
use Illuminate\Http\Response;

class GetSeriesAction extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function __invoke(int $id)
    {
        $series = Series::with('seasons.episodes')->find($id);

        if (null === $series) {
            return response()->json([
                'message' => 'Series not found',
            ], Response::HTTP_NOT_FOUND);
        }

        return response()->json($series);
    }
}
