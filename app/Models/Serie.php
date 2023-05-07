<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;
    protected $table='series';
    protected $fillable=[
        'name',
        'slug',
        'story',
        'poster',

        'imdb',

        'trending',


        'action',
        'fantasy',
        'comedy',
        'romance',
        'drama',
        'mystery',
        'adventure',


        'hd',
        'fhd',
        'dvd',
        's',
        'e',
        't',

        'release_year',
        'country',


        'meta_keywords',


    ];
}
