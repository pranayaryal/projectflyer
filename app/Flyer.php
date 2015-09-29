<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Photo;

/**
 * Class Flyer
 * @package App
 */
class Flyer extends Model
{

    /**
     * Fillable fields for a Flyer
     * @var array
     */
    protected $fillable = [
        'street',
        'city',
        'state',
        'country',
        'zip',
        'price',
        'description'
    ];

    /**
     * Scope query to those located at a given address
     * @param Builder $query
     * @param string  $zip
     * @param string  $street
     * @return Builder
     */
    public static function locatedAt($zip, $street){
        $street = str_replace('-', ' ', $street);

        return static:: where(compact('zip', 'street'))->firstOrFail();

    }

    public function getPriceAttribute($price)
    {
        return '$'. number_format($price);
    }

    public function addPhotos(Photo $photo)
    {
        return $this->photos()->save($photo);
    }

    /**
     * A flyer is composed of many photos
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos()
    {
        return $this->hasMany('App\Photo');
    }
}
