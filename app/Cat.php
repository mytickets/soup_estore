<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Kalnoy\Nestedset\NodeTrait;


class Cat extends Model
{
    // use NodeTrait;
	// protected $fillable = [ 'id', 'ident', 'name', 'image', 'xml_name', 'parent_id', '_lft', '_rgt', 'menu' ];
	protected $fillable = [ 'id', 'ident', 'name', 'image', 'xml_name', 'parent_id', 'menu', 'menu_left' ];
}
