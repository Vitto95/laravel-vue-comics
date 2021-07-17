<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'thumb',
        'price',
        'series',
        'sale_date',
        'type',
        'author',
        'writer'
    ];
}
