<?php

namespace App\Http\Controllers\Series;

use App\Http\Controllers\Controller;
use App\Models\Series;
use Illuminate\Http\Response;

class DeleteSeriesAction extends Controller
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
        Series::destroy($id);

        return response('', Response::HTTP_NO_CONTENT);
    }
}
