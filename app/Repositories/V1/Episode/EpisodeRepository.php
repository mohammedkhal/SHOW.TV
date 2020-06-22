<?php

namespace App\Repositories\V1\Episode;

use App\Models\V1\Episode;
use App\Repositories\Repository;

class EpisodeRepository extends Repository
{
    /**
     * Create a new episode instance.
     * @return object
     */
    public function getModel()
    {
        return new episode;
    }

    /**
     * Return the list of serieses
     * @return colection of seriesse
     */
    public function index()
    {
        $serieses = $this->getModel();

        $serieses = $serieses->whereStatus(Episode::STATUS_ACTIVE)->get();

        return $serieses;
    }

     /**
     * Create one new series
     * @return App\Models\V1\Episode
     */
    public function store($data)
    {
        $series = $this->getModel();

        $series->title = $data['title'];
        $series->series_id = $data['series_id'];
        $series->description = $data['description'];
        $series->show_day = $data['show_day'];
        $series->show_hour = $data['show_hour'];
        $series->duration = $data['duration'];

        $series->save();

        return $series;
    }

    /**
     * Update an existing series
     * @return App\Models\V1\Episode
     */
    public function update($data)
    {
        $series = $this->getModel();

        $series = $series->findOrFail($data['series_id'])->first();

        $series->title = $data['title'];
        $series->description = $data['description'];
        $series->show_day = $data['show_day'];
        $series->show_hour = $data['show_hour'];
        $series->duration = $data['duration'];

        $series->save();

        return $series;
    }
    /**
     * Obtains and show one series
     * @return instence of seriess
     */
    public function show($data)
    {
        $series = $this->getModel();

        $series = $series->findOrFail($data['episode_id'])->first();

        return $series;
    }
    
    /**
     * Remove an existing series
     * @return App\Models\V1\Episode
     */
    public function destroy($data)
    {
        $series = $this->getModel();

        $series = $series->findOrFail($data['episode_id'])->first();
        $series->status = episode::STATUS_INACTIVE;

        $series->save();

        return $series;
    }
}
