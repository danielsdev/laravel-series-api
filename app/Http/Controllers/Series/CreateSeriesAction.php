<?php

namespace App\Http\Controllers\Series;

use App\Http\Controllers\Controller;
use App\Models\Series;
use Illuminate\Http\Request;

class CreateSeriesAction extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function __invoke(Request $request)
    {
        $data = $request->only(['name']);
        $series = Series::create($data);

        return response()->json($series);
    }
}
