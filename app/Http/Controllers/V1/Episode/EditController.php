<?php

namespace App\Http\Controllers\V1\Episode;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\V1\Episode\EpisodeService;

class EditController extends Controller
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
     * Update an existing episode
     * @return View
     */
    public function update(Request $request, $episodeID)
    {
        $data = $request->all();
        $data['episode_id'] = $episodeID;

        $episode = $this->episodeService->update($data);

        return route('episode.index');
    }

    /**
     * Remove an existing episode
     * @return View
     */
    public function destroy($episodeID)
    {
        $data['episode_id'] = $episodeID;
        $episode = $this->episodeService->destroy($data);

        return route('episode.index');
    }
}
