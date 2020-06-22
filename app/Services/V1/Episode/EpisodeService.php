<?php

namespace App\Services\V1\Episode;

use App\Repositories\V1\Episode\EpisodeRepository;

class EpisodeService
{
    private $episodeRepository;
    
    /**
     * Create a new Repository instance.
     * @return void
     */
    public function __construct(EpisodeRepository $episodeRepository)
    {
        $this->episodeRepository = $episodeRepository;
    }

    /**
     * Return the list of episodes
     * @return App\Models\V1\Episode
     */
    public function index()
    {
        return $this->episodeRepository->index();
    }

    /**
     * Update an existing episode
     * @return App\Models\V1\Episode
     */
    public function update($data)
    {
        return $this->episodeRepository->update($data);
    }

    /**
     * Remove an existing episode
     * @return App\Models\V1\Episode
     */
    public function destroy($data)
    {
        return $this->episodeRepository->destroy($data);
    }

    /**
     * Create one new episode
     * @return App\Models\V1\Episode
     */
    public function store($data)
    {
        return $this->episodeRepository->store($data);
    }

    /**
     * Obtains and show one episode
     * @return App\Models\V1\Episode
     */
    public function show($data)
    {
        return $this->episodeRepository->show($data);
    }
}
