<?php

namespace App\Repositories\V1\Series;

use App\Models\V1\Series;
use App\Repositories\Repository;

class SeriesRepository extends Repository
{
    /**
     * Create a new Series instance.
     * @return object
     */
    public function getModel()
    {
        return new Series;
    }

    /**
     * Return the list of serieses
     * @return colection of seriesse
     */
    public function index()
    {
        $serieses = $this->getModel();

        $serieses = $serieses->whereStatus(Series::STATUS_ACTIVE)->get();

        return $serieses;
    }

    /**
     * Create one new series
     * @return App\Models\V1\Series
     */
    public function store($data)
    {
        $series = $this->getModel();

        $series->title = $data['title'];
        $series->description = $data['description'];
        $series->show_days = $data['show_days'];
        $series->show_hours = $data['show_hours'];

        $series->save();

        return $series;
    }

    /**
     * Update an existing series
     * @return App\Models\V1\Series
     */
    public function update($data)
    {
        $series = $this->getModel();

        $series = $series->findOrFail($data['series_id'])->first();

        $series->title = $data['title'];
        $series->description = $data['description'];
        $series->show_days = $data['show_days'];
        $series->show_hours = $data['show_hours'];

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

        $series = $series->findOrFail($data['series_id'])->first();

        return $series;
    }


    /**
     * Remove an existing series
     * @return App\Models\V1\Series
     */
    public function destroy($data)
    {
        $series = $this->getModel();

        $series = $series->findOrFail($data['series_id'])->first();
        $series->status = Series::STATUS_INACTIVE;

        $series->save();

        return $series;
    }
}
