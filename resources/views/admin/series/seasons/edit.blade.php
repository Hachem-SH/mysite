@extends('.admin.layouts.admin')


@section('title')
  Edit Season
@endsection

@section('content')


<div class="card container">

    <div class="card-header">
        <h4>Edit Season</h4>
    </div>

    <div class="card-body">

        <form action="{{ url('season-edited/'.$serie_season->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

<div class="row">


    <div class="col-md-6 mb-3">
        <label for="">Season</label>
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $serie_season->name }}">
    </div>


    <div class="col-md-12 mb-3">
        <label for="">Story</label>
        @error('story')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <textarea name="story" rows="3" class="form-control @error('story') is-invalid @enderror">{{ $serie_season->story }}</textarea>
    </div>


    @if ($serie_season->poster)
    <img src="{{ asset('assets/uploads/series/seasons/'.$serie_season->poster) }}" alt="category image" style="width: 100px !important;" >

    @endif
    <br><br>
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
