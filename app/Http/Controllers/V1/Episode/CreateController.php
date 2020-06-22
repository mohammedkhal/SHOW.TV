<?php

namespace App\Http\Controllers\V1\Episode;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Episode\StoreRequest;
use App\Services\V1\Episode\EpisodeService;

class CreateController extends Controller
{
    /**
     * The service to consume the Episode
     * @var EpisodeService
     */
    public $episodeService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(EpisodeService $episodeService)
    {
        $this->episodeService = $episodeService;
    }

    /**
     * Create one new Episode
     * @return View
     */
    public function store(StoreRequest $request)
    {
        $data = $request->all();

        $episode = $this->episodeService->store($data);

        return redirect()->route('episode.index');
    }
}
