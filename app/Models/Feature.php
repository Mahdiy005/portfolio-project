<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Feature extends Model
{
    use HasFactory;
    use HasSlug;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'features';

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
    /**
     * The attributes that are guarded from mass assignment.
     *
     * @var array
     */
    protected $guarded = ['id'];

    ##-------------- Relationships

    ##-------------- Custome Function

    ##-------------- Attributes

}
