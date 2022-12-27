<?php

namespace App\Http\Controllers\Series;

use App\Http\Controllers\Controller;
use App\Models\Series;
use App\Repositories\SeriesRepository;
use Illuminate\Http\Request;

class CreateSeriesAction extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(private readonly SeriesRepository $repository)
    {

    }

    public function __invoke(Request $request)
    {
        $data = $request->only(['name', 'seasonsQty', 'episodesPerSeason']);
        $series = $this->repository->add($data);

        return response()->json($series);
    }
}
