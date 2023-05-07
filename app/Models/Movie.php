<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $table='movies';
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
        'running_time',
        'country',



        'server_link_mega',
        'server_link_drive',
        'server_link_ok',
        'server_link_mp4upload',
        'server_link_4shared',
        'server_link_uptobox',
        'server_link_vidshare',

        'down_link_mega',
        'down_link_drive',
        'down_link_ok',
        'down_link_mp4upload',
        'down_link_4shared',
        'down_link_uptobox',
        'down_link_vidshare',

        'meta_keywords',


    ];
}
