@extends('.admin.layouts.admin')


@section('title')
 Edit Serie
@endsection

@section('content')


<div class="card container">

    <div class="card-header">
        <h4>Edit Serie</h4>
    </div>

    <div class="card-body">

        <form action="{{ url('serie-edited/'.$serie->id) }}" method="POST" enctype="multipart/form-data">
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
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $serie->name }}">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">Slug</label>
        @error('slug')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{ $serie->slug }}">
    </div>

    <div class="col-md-12 mb-3">
        <label for="">Story</label>
        @error('story')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <textarea name="story" rows="3" class="form-control @error('story') is-invalid @enderror">{{ $serie->story }}</textarea>
    </div>




    <div class="col-md-6 mb-3">
        <label for="">IMDB Rating</label>

        <input type="text" class="form-control " name="imdb" value="{{ $serie->imdb }}">
    </div>


    <div class="col-md-6 mb-3">
        <label for="">Release Year</label>

        <input type="text" class="form-control " name="release_year" value="{{  $serie->release_year  }}">
    </div>


    <div class="col-md-6 mb-3">
        <label for="">Country</label>

        <input type="text" class="form-control " name="country" value="{{  $serie->country  }}">
    </div>


    <div class="col-md-12 mb-3">
        <h5>Trending</h5>
    </div>


    <div class="col-md-6 mb-3">
        <label for="">Trending</label>
        <input type="checkbox" {{  $serie->trending =='1' ? 'checked':'' }} name="trending">
    </div>



    <div class="col-md-12 mb-3">
        <h5>Category</h5>
    </div>


    <div class="col-md-6 mb-3">
        <label for="">Action</label>
        <input type="checkbox" {{  $serie->action =='1' ? 'checked':'' }} name="action">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">Fantasy</label>
        <input type="checkbox" {{ $serie->fantasy=='1' ? 'checked':'' }} name="fantasy">
    </div>
    <div class="col-md-6 mb-3">
        <label for="">Comedy</label>
        <input type="checkbox" {{ $serie->comedy=='1' ? 'checked':'' }} name="comedy">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">Romance</label>
        <input type="checkbox" {{ $serie->romance=='1' ? 'checked':'' }} name="romance">
    </div>
    <div class="col-md-6 mb-3">
        <label for="">Drama</label>
        <input type="checkbox" {{ $serie->drama=='1' ? 'checked':'' }} name="drama">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">Mystery</label>
        <input type="checkbox" {{ $serie->mystery=='1' ? 'checked':'' }} name="mystery">
    </div>
    <div class="col-md-6 mb-3">
        <label for="">Adventure</label>
        <input type="checkbox" {{ $serie->adventure=='1' ? 'checked':'' }} name="adventure">
    </div>





    <div class="col-md-12 mb-3">
        <h5>Age Classification And Quality</h5>
    </div>


    <div class="col-md-6 mb-3">
        <label for="">HD</label>
        <input type="checkbox" {{  $serie->hd =='1' ? 'checked':'' }} name="hd">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">FHD</label>
        <input type="checkbox" {{ $serie->fhd=='1' ? 'checked':'' }} name="fhd">
    </div>
    <div class="col-md-6 mb-3">
        <label for="">DVD</label>
        <input type="checkbox" {{ $serie->dvd=='1' ? 'checked':'' }} name="dvd">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">+16</label>
        <input type="checkbox" {{ $serie->s=='1' ? 'checked':'' }} name="s">
    </div>
    <div class="col-md-6 mb-3">
        <label for="">+18</label>
        <input type="checkbox" {{ $serie->e=='1' ? 'checked':'' }} name="e">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">+13</label>
        <input type="checkbox" {{ $serie->t=='1' ? 'checked':'' }} name="t">
    </div>












    <div class="col-md-12 mb-3">
        <label for="">Meta Keywords</label>
        <textarea name="meta_keywords" rows="3" class="form-control">{{ $serie->meta_keywords }}</textarea>
    </div>



    <div class="col-md-12">
        <label for="">Poster</label>
        @error('poster')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <br><br>
    @if ($serie->poster)
    <img src="{{ asset('assets/uploads/series/'.$serie->poster) }}" alt="category image" width="100">

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
