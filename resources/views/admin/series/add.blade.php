@extends('.admin.layouts.admin')


@section('title')
 Add Serie
@endsection

@section('content')


<div class="card container">

    <div class="card-header">
        <h4>Add Serie</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('serie-added') }}" method="POST" enctype="multipart/form-data">
            @csrf

<div class="row">

    <div class="col-md-6 mb-3">
        <label for="">Name</label>
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">Slug</label>
        @error('slug')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{ old('slug') }}">
    </div>




    <div class="col-md-12 mb-3">
        <label for="">Story</label>
        @error('story')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <textarea name="story" rows="3" class="form-control @error('story') is-invalid @enderror">{{ old('story') }}</textarea>
    </div>


    <div class="col-md-6 mb-3">
        <label for="">IMDB Rating</label>

        <input type="text" class="form-control " name="imdb" value="{{ old('imdb') }}">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">Release Year</label>

        <input type="text" class="form-control " name="release_year" value="{{ old('release_year') }}">
    </div>



    <div class="col-md-6 mb-3">
        <label for="">Country</label>

        <input type="text" class="form-control " name="country" value="{{ old('country') }}">
    </div>

    <div class="col-md-12 mb-3">
        <h5>Trending</h5>
    </div>


    <div class="col-md-6 mb-3">
        <label for="">Trending</label>
        <input type="checkbox" name="trending">
    </div>



    <div class="col-md-12 mb-3">
        <h5>Category</h5>
    </div>


    <div class="col-md-6 mb-3">
        <label for="">Action</label>
        <input type="checkbox" name="action">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">Fantasy</label>
        <input type="checkbox" name="fantasy">
    </div>
    <div class="col-md-6 mb-3">
        <label for="">Comedy</label>
        <input type="checkbox" name="comedy">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">Romance</label>
        <input type="checkbox" name="romance">
    </div>
    <div class="col-md-6 mb-3">
        <label for="">Drama</label>
        <input type="checkbox" name="drama">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">Mystery</label>
        <input type="checkbox" name="mystery">
    </div>
    <div class="col-md-6 mb-3">
        <label for="">Adventure</label>
        <input type="checkbox" name="adventure">
    </div>



    <div class="col-md-12 mb-3">
        <h5>Age Classification And Quality</h5>
    </div>


    <div class="col-md-6 mb-3">
        <label for="">FHD</label>
        <input type="checkbox" name="fhd">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">HD</label>
        <input type="checkbox" name="hd">
    </div>
    <div class="col-md-6 mb-3">
        <label for="">DVD</label>
        <input type="checkbox" name="dvd">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">+16</label>
        <input type="checkbox" name="s">
    </div>
    <div class="col-md-6 mb-3">
        <label for="">+18</label>
        <input type="checkbox" name="e">
    </div>

    <div class="col-md-6 mb-3">
        <label for="">+13</label>
        <input type="checkbox" name="t">
    </div>













    <div class="col-md-12 mb-3">
        <label for="">Meta Keywords</label>
        <textarea name="meta_keywords" rows="3" class="form-control"></textarea>
    </div>



    <div class="col-md-12">
        <label for="">Poster</label>
        @error('poster')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <input type="file" class="form-control @error('poster') is-invalid @enderror" name="poster">
    </div>
    <br><br><br><br>

    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>







        </form>
    </div>


</div>

<br>



@endsection
