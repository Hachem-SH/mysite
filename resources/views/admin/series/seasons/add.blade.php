@extends('.admin.layouts.admin')


@section('title')
 Add Season
@endsection

@section('content')


<div class="card container">

    <div class="card-header">
        <h4>Add Season</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('serie-season-added') }}" method="POST" enctype="multipart/form-data">
            @csrf

<div class="row">
    @php
    $string = url();
    $string = request()->segment(5);

    @endphp
    <input type="hidden" name="serie_id" value="{{ $string }}">
    <div class="col-md-6 mb-3">
        <label for="">Season</label>
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
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
