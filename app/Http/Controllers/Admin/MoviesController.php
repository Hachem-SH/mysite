<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\File;

class MoviesController extends Controller
{
    public function index( )
    {
        $movie=Movie::orderBy('created_at', 'desc')->get();

        return view('admin.movies.index' , compact('movie'));

    }
    public function add( )
    {

        return view('admin.movies.add');

    }

    public function insert(Request $request)

    {

        $request->validate([

            'name' => ['required'],
            'slug' => ['required', 'unique:movies'],
            'story' => ['required'],
            'poster' => ['required']

        ]);


        $movie=new Movie();
        if($request->hasFile('poster'))
        {

            $file=$request->file('poster');
            $extention = $file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/uploads/movies',$filename);
            $movie->poster=$filename;
        }

        $movie->name=$request->input('name');
        $movie->slug=$request->input('slug');
        $movie->story=$request->input('story');


        $movie->imdb=$request->input('imdb');

        $movie->release_year=$request->input('release_year');
        $movie->running_time=$request->input('running_time');
        $movie->country=$request->input('country');

        $movie->trending=$request->input('trending') == TRUE?'1':'0';


        $movie->action=$request->input('action') == TRUE?'1':'0';
        $movie->fantasy=$request->input('fantasy')== TRUE?'1':'0';
        $movie->comedy=$request->input('comedy') == TRUE?'1':'0';
        $movie->romance=$request->input('romance')== TRUE?'1':'0';
        $movie->drama=$request->input('drama') == TRUE?'1':'0';
        $movie->mystery=$request->input('mystery')== TRUE?'1':'0';
        $movie->adventure=$request->input('adventure')== TRUE?'1':'0';



        $movie->hd=$request->input('hd')== TRUE?'1':'0';
        $movie->fhd=$request->input('fhd') == TRUE?'1':'0';
        $movie->dvd=$request->input('dvd')== TRUE?'1':'0';
        $movie->s=$request->input('s')== TRUE?'1':'0';
        $movie->e=$request->input('e')== TRUE?'1':'0';
        $movie->t=$request->input('t')== TRUE?'1':'0';




        $movie->server_link_mega=$request->input('server_link_mega');
        $movie->server_link_drive=$request->input('server_link_drive');
        $movie->server_link_ok=$request->input('server_link_ok');
        $movie->server_link_mp4upload=$request->input('server_link_mp4upload');
        $movie->server_link_4shared=$request->input('server_link_4shared');
        $movie->server_link_uptobox=$request->input('server_link_uptobox');
        $movie->server_link_vidshare=$request->input('server_link_vidshare');

        $movie->down_link_mega=$request->input('down_link_mega');
        $movie->down_link_drive=$request->input('down_link_drive');
        $movie->down_link_ok=$request->input('down_link_ok');
        $movie->down_link_mp4upload=$request->input('down_link_mp4upload');
        $movie->down_link_4shared=$request->input('down_link_4shared');
        $movie->down_link_uptobox=$request->input('down_link_uptobox');
        $movie->down_link_vidshare=$request->input('down_link_vidshare');

        $movie->meta_keywords=$request->input('meta_keywords');

        $movie->save();

        return redirect()->route('movies')->with('status','Movie Added Successfully');

    }

    public function edit($id)
    {
        $movie=Movie::find($id);
        return view('admin.movies.edit', compact('movie'));

    }

    public function update(Request $request,$id)
    {



        $movie=Movie::find($id);
        if($request->hasFile('poster'))
        {
            $path='assets/uploads/movies/'.$movie->poster;
            if(File::exists($path))
            {
                File::delete($path);

            }

            $file=$request->file('poster');
            $extention = $file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/uploads/movies',$filename);
            $movie->poster=$filename;
        }

        $movie->name=$request->input('name');
        $movie->slug=$request->input('slug');
        $movie->story=$request->input('story');

        $movie->imdb=$request->input('imdb');

        $movie->release_year=$request->input('release_year');
        $movie->running_time=$request->input('running_time');
        $movie->country=$request->input('country');

        $movie->trending=$request->input('trending') == TRUE?'1':'0';



        $movie->action=$request->input('action') == TRUE?'1':'0';
        $movie->fantasy=$request->input('fantasy')== TRUE?'1':'0';
        $movie->comedy=$request->input('comedy') == TRUE?'1':'0';
        $movie->romance=$request->input('romance')== TRUE?'1':'0';
        $movie->drama=$request->input('drama') == TRUE?'1':'0';
        $movie->mystery=$request->input('mystery')== TRUE?'1':'0';
        $movie->adventure=$request->input('adventure')== TRUE?'1':'0';






        $movie->hd=$request->input('hd')== TRUE?'1':'0';
        $movie->fhd=$request->input('fhd') == TRUE?'1':'0';
        $movie->dvd=$request->input('dvd')== TRUE?'1':'0';
        $movie->s=$request->input('s')== TRUE?'1':'0';
        $movie->e=$request->input('e')== TRUE?'1':'0';
        $movie->t=$request->input('t')== TRUE?'1':'0';



        $movie->server_link_mega=$request->input('server_link_mega');
        $movie->server_link_drive=$request->input('server_link_drive');
        $movie->server_link_ok=$request->input('server_link_ok');
        $movie->server_link_mp4upload=$request->input('server_link_mp4upload');
        $movie->server_link_4shared=$request->input('server_link_4shared');
        $movie->server_link_uptobox=$request->input('server_link_uptobox');
        $movie->server_link_vidshare=$request->input('server_link_vidshare');

        $movie->down_link_mega=$request->input('down_link_mega');
        $movie->down_link_drive=$request->input('down_link_drive');
        $movie->down_link_ok=$request->input('down_link_ok');
        $movie->down_link_mp4upload=$request->input('down_link_mp4upload');
        $movie->down_link_4shared=$request->input('down_link_4shared');
        $movie->down_link_uptobox=$request->input('down_link_uptobox');
        $movie->down_link_vidshare=$request->input('down_link_vidshare');

        $movie->meta_keywords=$request->input('meta_keywords');

        $movie->update();


        return redirect()->route('movies')->with('status','Movie Updated Successfully');

    }

    public function destroy($id)
    {
        $movie=Movie::find($id);
        if($movie->poster)
        {
            $path='assets/uploads/movies/'.$movie->poster;
            if(File::exists($path))
            {
                File::delete($path);

            }
        }
        $movie->delete();
        return redirect()->route('movies')->with('status','Movie Deleted Successfully');
    }

}
