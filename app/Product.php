<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = [ 'id', 'ident', 'name', 'image', 'xml_name', 'xml_cat', 'cat_id', 'price', 'remote_images' ];
	// , 'menu'
    public static function boot()
    {
        parent::boot();

        self::creating(function($model){
            // ... code here
        });

        self::created(function($model){
            // ... code here
        });

        self::updating(function($model){
            // ... code here
            // dd($model);
            // $model->price
        });

        self::updated(function($model){
            // ... code here
        });

        self::deleting(function($model){
            // ... code here
        });

        self::deleted(function($model){
            // ... code here
        });
    }


}
