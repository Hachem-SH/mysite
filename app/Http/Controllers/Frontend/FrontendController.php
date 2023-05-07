<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Serie;
use App\Models\Serie_season;
use App\Models\Serie_episode;

class FrontendController extends Controller
{
    public function index()
    {

        $movie=Movie::orderBy('created_at', 'desc')->get();
        $serie_seasons=Serie_season::orderBy('created_at', 'desc')->get();
        return view('frontend.home', compact(['movie','serie_seasons']));
    }

    public function viewmoviedetails($movie_slug)
    {

        $movie=Movie::where('slug',$movie_slug)->first();
        $movies=Movie::orderBy('created_at', 'desc')->get();

                return view('frontend.movies.details', compact(['movie','movies']));



    }

    public function viewmovie($movie_slug)
    {

        $movie=Movie::where('slug',$movie_slug)->first();

                return view('frontend.movies.view', compact('movie'));


    }

    public function viewseriedetails($serie_slug)
    {


        $serie=Serie::where('slug',$serie_slug)->first();
        $id=$serie->id;
        $serie_seasons=Serie_season::where ('serie_id',$id)->get();



                return view('frontend.series.details', compact(['serie','serie_seasons']));



    }

    public function series()
    {


        $serie=Serie::orderBy('created_at', 'desc')->get();

                return view('frontend.series.series', compact('serie'));



    }

    public function movies()
    {


        $movie=Movie::orderBy('created_at', 'desc')->get();

                return view('frontend.movies.movies', compact('movie'));



    }


    public function viewserieseasonsdetails($serie_slug,$season)
    {


        $serie=Serie::where('slug',$serie_slug)->first();

        $id=$serie->id;

        $serie_season=Serie_season::where ('serie_id',$id)
        ->where('name',$season)->first();

        $serie_episodes=Serie_episode::where('season_id',$serie_season->id)->get();



                return view('frontend.series.seasons.details', compact(['serie_season','serie_episodes']));



    }


    public function viewserie($serie_slug,$season,$ep)
    {


        $serie=Serie::where('slug',$serie_slug)->first();

        $id=$serie->id;

        $serie_season=Serie_season::where ('serie_id',$id)
        ->where('name',$season)->first();

        $serie_episodes=Serie_episode::where('season_id',$serie_season->id)->where('number',$ep)->first();



                return view('frontend.series.seasons.episodes.view', compact(['serie_episodes']));



    }


}
