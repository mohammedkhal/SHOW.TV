<?php

namespace App\Http\Controllers\V1\Series;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\V1\Series\SeriesService;

class EditController extends Controller
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
     * Update an existing series
     * @return View
     */
    public function update(Request $request, $seriesID)
    {
        $data = $request->all();
        $data['series_id'] = $seriesID;

        $series = $this->seriesService->update($data);

        return route('series.index');
    }

    /**
     * Remove an existing series
     * @return View
     */
    public function destroy($seriesID)
    {
        $data['series_id'] = $seriesID;
        $series = $this->seriesService->destroy($data);

        return route('series.index');
    }
}
