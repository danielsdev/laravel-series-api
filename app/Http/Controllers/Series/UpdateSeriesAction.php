<?php

namespace App\Http\Controllers\Series;

use App\Http\Controllers\Controller;
use App\Models\Series;
use Illuminate\Http\Request;

class UpdateSeriesAction extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function __invoke(int $id, Request $request)
    {
        $data = $request->only(['name']);
        $series = Series::whereId($id)
            ->first();

        //Series::where(‘id’, $series)->update($request->all());
        
        $series->fill($data);
        $series->save();

        return response('', 204);
    }
}
