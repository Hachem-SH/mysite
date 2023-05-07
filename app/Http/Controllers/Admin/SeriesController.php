<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Serie;
use App\Models\Serie_season;
use App\Models\Serie_episode;
use Illuminate\Support\Facades\File;

class SeriesController extends Controller
{
    public function index( )
    {
        $serie=Serie::orderBy('created_at', 'desc')->get();

        return view('admin.series.index' , compact('serie'));

    }

    public function add( )
    {

        return view('admin.series.add');

    }


    public function insert(Request $request)

    {

        $request->validate([

            'name' => ['required'],
            'slug' => ['required', 'unique:series'],
            'story' => ['required'],
            'poster' => ['required']

        ]);


        $serie=new Serie();
        if($request->hasFile('poster'))
        {

            $file=$request->file('poster');
            $extention = $file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/uploads/series',$filename);
            $serie->poster=$filename;
        }

        $serie->name=$request->input('name');
        $serie->slug=$request->input('slug');
        $serie->story=$request->input('story');


        $serie->imdb=$request->input('imdb');

        $serie->release_year=$request->input('release_year');
        $serie->country=$request->input('country');

        $serie->trending=$request->input('trending') == TRUE?'1':'0';


        $serie->action=$request->input('action') == TRUE?'1':'0';
        $serie->fantasy=$request->input('fantasy')== TRUE?'1':'0';
        $serie->comedy=$request->input('comedy') == TRUE?'1':'0';
        $serie->romance=$request->input('romance')== TRUE?'1':'0';
        $serie->drama=$request->input('drama') == TRUE?'1':'0';
        $serie->mystery=$request->input('mystery')== TRUE?'1':'0';
        $serie->adventure=$request->input('adventure')== TRUE?'1':'0';



        $serie->hd=$request->input('hd')== TRUE?'1':'0';
        $serie->fhd=$request->input('fhd') == TRUE?'1':'0';
        $serie->dvd=$request->input('dvd')== TRUE?'1':'0';
        $serie->s=$request->input('s')== TRUE?'1':'0';
        $serie->e=$request->input('e')== TRUE?'1':'0';
        $serie->t=$request->input('t')== TRUE?'1':'0';




        $serie->meta_keywords=$request->input('meta_keywords');

        $serie->save();

        return redirect()->route('series')->with('status','Serie Added Successfully');



    }



    public function edit($id)
    {
        $serie=Serie::find($id);
        return view('admin.series.edit', compact('serie'));

    }

    public function update(Request $request,$id)
    {



        $serie=Serie::find($id);
        if($request->hasFile('poster'))
        {
            $path='assets/uploads/series/'.$serie->poster;
            if(File::exists($path))
            {
                File::delete($path);

            }

            $file=$request->file('poster');
            $extention = $file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/uploads/series',$filename);
            $serie->poster=$filename;
        }

        $serie->name=$request->input('name');
        $serie->slug=$request->input('slug');
        $serie->story=$request->input('story');

        $serie->imdb=$request->input('imdb');

        $serie->release_year=$request->input('release_year');

        $serie->country=$request->input('country');

        $serie->trending=$request->input('trending') == TRUE?'1':'0';



        $serie->action=$request->input('action') == TRUE?'1':'0';
        $serie->fantasy=$request->input('fantasy')== TRUE?'1':'0';
        $serie->comedy=$request->input('comedy') == TRUE?'1':'0';
        $serie->romance=$request->input('romance')== TRUE?'1':'0';
        $serie->drama=$request->input('drama') == TRUE?'1':'0';
        $serie->mystery=$request->input('mystery')== TRUE?'1':'0';
        $serie->adventure=$request->input('adventure')== TRUE?'1':'0';






        $serie->hd=$request->input('hd')== TRUE?'1':'0';
        $serie->fhd=$request->input('fhd') == TRUE?'1':'0';
        $serie->dvd=$request->input('dvd')== TRUE?'1':'0';
        $serie->s=$request->input('s')== TRUE?'1':'0';
        $serie->e=$request->input('e')== TRUE?'1':'0';
        $serie->t=$request->input('t')== TRUE?'1':'0';





        $serie->meta_keywords=$request->input('meta_keywords');

        $serie->update();


        return redirect()->route('series')->with('status','Serie Updated Successfully');

    }

    public function destroy($id)
    {
        $serie=Serie::find($id);


        $serie_seasons=Serie_season::where('serie_id', $serie->id)->get();

        foreach($serie_seasons as $item)
        {
            if($item->poster)
        {
            $path='assets/uploads/series/seasons/'.$item->poster;
            if(File::exists($path))
            {
                File::delete($path);

            }
        }
            $item->delete();
        }

        if($serie->poster)
        {
            $path='assets/uploads/series/'.$serie->poster;
            if(File::exists($path))
            {
                File::delete($path);

            }
        }
        $serie->delete();
        return redirect()->route('series')->with('status','Serie Deleted Successfully');
    }






    public function seasons_index($id)
    {
        $serie_seasons=Serie_season::where('serie_id', $id)->get();

        return view('admin.series.seasons.index' , compact('serie_seasons'));

    }

    public function seasons_add($serie_id)
    {

         $id=$serie_id;
        return view('admin.series.seasons.add' , compact('id'));

    }

    public function seasons_insert( Request $request)
    {
        $serie_season=new Serie_season();


        if($request->hasFile('poster'))
        {

            $file=$request->file('poster');
            $extention = $file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/uploads/series/seasons',$filename);
            $serie_season->poster=$filename;
        }

        $serie_season->serie_id=$request->input('serie_id');
        $serie_season->name=$request->input('name');
        $serie_season->story=$request->input('story');

        $serie_season->save();

        return redirect()->route('seasons',['id'=>$serie_season->serie_id])->with('status','Season Added Successfully');

    }


    public function seasons_edit($id)
    {
        $serie_season=Serie_season::find($id);
        return view('admin.series.seasons.edit', compact('serie_season'));

    }

    public function seasons_update(Request $request,$id)
    {



        $serie_season=Serie_season::find($id);
        if($request->hasFile('poster'))
        {
            $path='assets/uploads/series/seasons/'.$serie_season->poster;
            if(File::exists($path))
            {
                File::delete($path);

            }

            $file=$request->file('poster');
            $extention = $file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/uploads/series/seasons',$filename);
            $serie_season->poster=$filename;
        }


        $serie_season->name=$request->input('name');
        $serie_id=$serie_season->serie_id;
        $serie_season->story=$request->input('story');


        $serie_season->update();



        return redirect()->route('seasons',['id'=>$serie_id])->with('status','Season Updated Successfully');

    }

    public function seasons_destroy($id)
    {
        $serie_season=Serie_season::find($id);




        if($serie_season->poster)
        {
            $path='assets/uploads/series/seasons/'.$serie_season->poster;
            if(File::exists($path))
            {
                File::delete($path);

            }
        }
        $serie_season->delete();
        return back()->with('status','Season Deleted Successfully');
    }

    public function episodes_index($id)
    {
        $serie_episodes=Serie_episode::where('season_id', $id)->get();

        return view('admin.series.seasons.episodes.index' , compact('serie_episodes'));

    }


    public function episodes_add($season_id)
    {

         $id=$season_id;
        return view('admin.series.seasons.episodes.add' , compact('id'));

    }

    public function episodes_insert( Request $request)
    {
        $serie_episodes=new Serie_episode();
        $serie_episodes->season_id=$request->input('season_id');


        $id=$request->input('season_id');
        $serie_episodes->number=$request->input('number');
        $serie_episodes->server_link_mega=$request->input('server_link_mega');
        $serie_episodes->server_link_drive=$request->input('server_link_drive');
        $serie_episodes->server_link_ok=$request->input('server_link_ok');
        $serie_episodes->server_link_mp4upload=$request->input('server_link_mp4upload');
        $serie_episodes->server_link_4shared=$request->input('server_link_4shared');
        $serie_episodes->server_link_uptobox=$request->input('server_link_uptobox');
        $serie_episodes->server_link_vidshare=$request->input('server_link_vidshare');

        $serie_episodes->down_link_mega=$request->input('down_link_mega');
        $serie_episodes->down_link_drive=$request->input('down_link_drive');
        $serie_episodes->down_link_ok=$request->input('down_link_ok');
        $serie_episodes->down_link_mp4upload=$request->input('down_link_mp4upload');
        $serie_episodes->down_link_4shared=$request->input('down_link_4shared');
        $serie_episodes->down_link_uptobox=$request->input('down_link_uptobox');
        $serie_episodes->down_link_vidshare=$request->input('down_link_vidshare');


        $serie_episodes->save();

        return redirect()->route('episodes' ,['id'=>$id])->with('status','Episode Added Successfully');

    }

    public function episodes_edit($id)
    {
        $serie_episodes=Serie_episode::find($id);
        return view('admin.series.seasons.episodes.edit', compact('serie_episodes'));

    }

    public function episodes_update(Request $request,$id)
    {



        $serie_episodes=Serie_episode::find($id);

        $serie_episodes->number=$request->input('number');

        $serie_episodes->server_link_mega=$request->input('server_link_mega');
        $serie_episodes->server_link_drive=$request->input('server_link_drive');
        $serie_episodes->server_link_ok=$request->input('server_link_ok');
        $serie_episodes->server_link_mp4upload=$request->input('server_link_mp4upload');
        $serie_episodes->server_link_4shared=$request->input('server_link_4shared');
        $serie_episodes->server_link_uptobox=$request->input('server_link_uptobox');
        $serie_episodes->server_link_vidshare=$request->input('server_link_vidshare');

        $serie_episodes->down_link_mega=$request->input('down_link_mega');
        $serie_episodes->down_link_drive=$request->input('down_link_drive');
        $serie_episodes->down_link_ok=$request->input('down_link_ok');
        $serie_episodes->down_link_mp4upload=$request->input('down_link_mp4upload');
        $serie_episodes->down_link_4shared=$request->input('down_link_4shared');
        $serie_episodes->down_link_uptobox=$request->input('down_link_uptobox');
        $serie_episodes->down_link_vidshare=$request->input('down_link_vidshare');

        $season_id=$serie_episodes->season_id;

        $serie_episodes->update();



        return redirect()->route('episodes',['id'=>$season_id])->with('status','Episode Updated Successfully');

    }

    public function episodes_destroy($id)
    {
        $serie_episodes=Serie_episode::find($id);


        $serie_episodes->delete();
        return back()->with('status','Episode Deleted Successfully');
    }
}
