<?php

namespace App\Http\Controllers\V1\Series;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Series\StoreRequest;
use App\Services\V1\Series\SeriesService;

class CreateController extends Controller
{
    /**
     * The service to consume the Series
     * @var SeriesService
     */
    public $seriesService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(SeriesService $seriesService)
    {
        $this->seriesService = $seriesService;
    }

    /**
     * Create one new Series
     * @return View
     */
    public function store(StoreRequest $request)
    {
        $data = request()->all();

        $series = $this->seriesService->store($data);

        return redirect()->route('series.index');
    }
}
