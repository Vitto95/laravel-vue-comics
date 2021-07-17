<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'price',
        'series',
        'sale_date',
        'type',
        'author',
        'writer'
    ];
}
