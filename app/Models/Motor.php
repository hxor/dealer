<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    protected $fillable = ['category_id', 'gallery_id', 'slug', 'title', 'desc', 'year', 'price', 'image'];
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function gallery(){
    	return $this->belongsTo('App\Models\Gallery');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function spec(){
      return $this->hasOne('App\Models\Spec');
    }
}
