<?php

namespace App\Http\Controllers\V1\Episode;

use App\Http\Controllers\Controller;
use App\Services\V1\Episode\EpisodeService;

class IndexController extends Controller
{
    /**
     * The service to consume the episode
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
     * Return the list of episodes
     * @return view
     */
    public function index()
    {
        $episodes = $this->episodeService->index();

        return view('episode.index', compact('episodes'));
    }

    /**
     * Obtains and show one episode
     * @return view
     */
    public function show($episodeID)
    {
        $data['episode_id'] = $episodeID;
        $episodes = $this->episodeService->show($data);

        return view('episode.index');

    }
}
