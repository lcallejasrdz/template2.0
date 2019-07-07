<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Sentinel;
use DB;

class ViewProduct extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'id',
        'name',
        'slug',
        'description',
        'price',
        'created_at'
    ];

    public function scopeData($query)
    {
        return $query->get();
    }
}
