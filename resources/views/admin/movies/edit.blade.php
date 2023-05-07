@extends('.admin.layouts.admin')


@section('title')
 Edit Movie
@endsection

@section('content')


<div class="card container">

    <div class="card-header">
        <h4>Edit Movie</h4>
    </div>

    <div class="card-body">

        <form action="{{ url('movie-edited/'.$movie->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

<div class="row">

    <div class="col-md-6 mb-3">
        <label for="">Name</label>
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $movie->name }}">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">Slug</label>
        @error('slug')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{ $movie->slug }}">
    </div>

    <div class="col-md-12 mb-3">
        <label for="">Story</label>
        @error('story')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <textarea name="story" rows="3" class="form-control @error('story') is-invalid @enderror">{{ $movie->story }}</textarea>
    </div>




    <div class="col-md-6 mb-3">
        <label for="">IMDB Rating</label>

        <input type="text" class="form-control " name="imdb" value="{{ $movie->imdb }}">
    </div>


    <div class="col-md-6 mb-3">
        <label for="">Release Year</label>

        <input type="text" class="form-control " name="release_year" value="{{  $movie->release_year  }}">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">Running Time On Minutes</label>

        <input type="text" class="form-control " name="running_time" value="{{  $movie->running_time  }}">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">Country</label>

        <input type="text" class="form-control " name="country" value="{{  $movie->country  }}">
    </div>


    <div class="col-md-12 mb-3">
        <h5>Trending</h5>
    </div>


    <div class="col-md-6 mb-3">
        <label for="">Action</label>
        <input type="checkbox" {{  $movie->trending =='1' ? 'checked':'' }} name="trending">
    </div>



    <div class="col-md-12 mb-3">
        <h5>Category</h5>
    </div>


    <div class="col-md-6 mb-3">
        <label for="">Action</label>
        <input type="checkbox" {{  $movie->action =='1' ? 'checked':'' }} name="action">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">Fantasy</label>
        <input type="checkbox" {{ $movie->fantasy=='1' ? 'checked':'' }} name="fantasy">
    </div>
    <div class="col-md-6 mb-3">
        <label for="">Comedy</label>
        <input type="checkbox" {{ $movie->comedy=='1' ? 'checked':'' }} name="comedy">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">Romance</label>
        <input type="checkbox" {{ $movie->romance=='1' ? 'checked':'' }} name="romance">
    </div>
    <div class="col-md-6 mb-3">
        <label for="">Drama</label>
        <input type="checkbox" {{ $movie->drama=='1' ? 'checked':'' }} name="drama">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">Mystery</label>
        <input type="checkbox" {{ $movie->mystery=='1' ? 'checked':'' }} name="mystery">
    </div>
    <div class="col-md-6 mb-3">
        <label for="">Adventure</label>
        <input type="checkbox" {{ $movie->adventure=='1' ? 'checked':'' }} name="adventure">
    </div>





    <div class="col-md-12 mb-3">
        <h5>Age Classification And Quality</h5>
    </div>


    <div class="col-md-6 mb-3">
        <label for="">HD</label>
        <input type="checkbox" {{  $movie->hd =='1' ? 'checked':'' }} name="hd">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">FHD</label>
        <input type="checkbox" {{ $movie->fhd=='1' ? 'checked':'' }} name="fhd">
    </div>
    <div class="col-md-6 mb-3">
        <label for="">DVD</label>
        <input type="checkbox" {{ $movie->dvd=='1' ? 'checked':'' }} name="dvd">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">+16</label>
        <input type="checkbox" {{ $movie->s=='1' ? 'checked':'' }} name="s">
    </div>
    <div class="col-md-6 mb-3">
        <label for="">+18</label>
        <input type="checkbox" {{ $movie->e=='1' ? 'checked':'' }} name="e">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">+13</label>
        <input type="checkbox" {{ $movie->t=='1' ? 'checked':'' }} name="t">
    </div>







    <div class="col-md-12 mb-3">
        <h5>Server Links</h5>
    </div>
    <div class="col-md-12 mb-3">
        <label for="">Mega</label>
    <input type="text" class="form-control " name="server_link_mega" value="{{ $movie->server_link_mega }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">Drive</label>
    <input type="text" class="form-control" name="server_link_drive" value="{{ $movie->server_link_drive }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">Ok</label>
    <input type="text" class="form-control " name="server_link_ok" value="{{ $movie->server_link_ok }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">Mp4Upload</label>
    <input type="text" class="form-control " name="server_link_mp4upload" value="{{ $movie->server_link_mp4upload }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">4Shared</label>
    <input type="text" class="form-control " name="server_link_4shared" value="{{ $movie->server_link_4shared }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">Uptobox</label>
    <input type="text" class="form-control " name="server_link_uptobox" value="{{ $movie->server_link_uptobox }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">VidShare</label>
    <input type="text" class="form-control" name="server_link_vidshare" value="{{ $movie->server_link_vidshare }}">
    </div>
    <div class="col-md-12 mb-3">
       <h5>Download Links</h5>
    </div>
    <div class="col-md-12 mb-3">
        <label for="">Mega</label>
    <input type="text" class="form-control " name="down_link_mega" value="{{ $movie->down_link_mega }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">Drive</label>
    <input type="text" class="form-control" name="down_link_drive" value="{{ $movie->down_link_drive }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">Ok</label>
    <input type="text" class="form-control " name="down_link_ok" value="{{ $movie->down_link_ok }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">Mp4Upload</label>
    <input type="text" class="form-control " name="down_link_mp4upload" value="{{ $movie->down_link_mp4upload }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">4Shared</label>
    <input type="text" class="form-control " name="down_link_4shared" value="{{ $movie->down_link_4shared }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">Uptobox</label>
    <input type="text" class="form-control " name="down_link_uptobox" value="{{ $movie->down_link_uptobox }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">VidShare</label>
    <input type="text" class="form-control" name="down_link_vidshare" value="{{ $movie->down_link_vidshare }}">
    </div>




    <div class="col-md-12 mb-3">
        <label for="">Meta Keywords</label>
        <textarea name="meta_keywords" rows="3" class="form-control">{{ $movie->meta_keywords }}</textarea>
    </div>



    <div class="col-md-12">
        <label for="">Poster</label>
        @error('poster')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <br><br>
    @if ($movie->poster)
    <img src="{{ asset('assets/uploads/movies/'.$movie->poster) }}" alt="category image" width="100">

    @endif
    <br><br>
        <input type="file" class="form-control @error('poster') is-invalid @enderror" name="poster">
        <br><br>
    </div>


    <div class="col-md-12">

        <button type="submit" class="btn btn-primary">Submit</button>
    </div>







        </form>
    </div>


</div>

<br>



@endsection
