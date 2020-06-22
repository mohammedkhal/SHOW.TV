<?php

namespace App\Services\V1\Series;

use App\Repositories\V1\Series\SeriesRepository;

class SeriesService
{
    private $seriesRepository;
    
    /**
     * Create a new Repository instance.
     * @return void
     */
    public function __construct(SeriesRepository $seriesRepository)
    {
        $this->seriesRepository = $seriesRepository;
    }

    /**
     * Return the list of serieses
     * @return App\Models\V1\Series
     */
    public function index()
    {
        return $this->seriesRepository->index();
    }

    /**
     * Update an existing series
     * @return App\Models\V1\Series
     */
    public function update($data)
    {
        return $this->seriesRepository->update($data);
    }

    /**
     * Remove an existing series
     * @return App\Models\V1\Series
     */
    public function destroy($data)
    {
        return $this->seriesRepository->destroy($data);
    }

    /**
     * Create one new series
     * @return App\Models\V1\Series
     */
    public function store($data)
    {
        return $this->seriesRepository->store($data);
    }

    /**
     * Obtains and show one series
     * @return App\Models\V1\Series
     */
    public function show($data)
    {
        return $this->seriesRepository->show($data);
    }
}
