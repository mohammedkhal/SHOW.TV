<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    //Constants
    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'serieses';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'show_days',
        'show_hours',
        'status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'description' => 'string',
        'show_days' => 'string',
        'show_hours' => 'string',
        'status' => 'string',
    ];

    /**
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * @return App/Models/V1/Episode
     */
    public function episodes()
    {
        return $this->hasMany(Episode::class, 'series_id', 'id');
    }
}
