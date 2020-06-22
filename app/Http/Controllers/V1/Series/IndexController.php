<?php

namespace App\Http\Controllers\V1\Series;

use App\Http\Controllers\Controller;
use App\Services\V1\Series\SeriesService;

class IndexController extends Controller
{
    /**
     * The service to consume the Series
     * @var seriesService
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
     * Return the list of Seriess
     * @return view
     */
    public function index()
    {
        $serieses = $this->seriesService->index();

        return view('series.index', compact('serieses'));
    }

    /**
     * Obtains and show one Series
     * @return view
     */
    public function show($seriesID)
    {
        $data['series_id'] = $seriesID;
        $serieses = $this->seriesService->show($data);

        return view('series.index');

    }
}
