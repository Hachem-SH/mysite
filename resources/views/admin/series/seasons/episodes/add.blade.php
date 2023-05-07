@extends('.admin.layouts.admin')


@section('title')
 Add Episode
@endsection

@section('content')


<div class="card container">

    <div class="card-header">
        <h4>Add Episode</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('serie-episode-added') }}" method="POST" enctype="multipart/form-data">
            @csrf

<div class="row">
    @php
    $string = url();
    $string = request()->segment(6);

    @endphp
    <input type="hidden" name="season_id" value="{{ $string }}">

    <div class="col-md-6 mb-3">
        <label for="">Episode</label>
        @error('number')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <input type="text" class="form-control @error('number') is-invalid @enderror" name="number" value="{{ old('number') }}">
    </div>




    <div class="col-md-12 mb-3">
        <h5>Server Links</h5>
    </div>
    <div class="col-md-12 mb-3">
        <label for="">Mega</label>
    <input type="text" class="form-control " name="server_link_mega" value="{{ old('server_link_mega') }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">Drive</label>
    <input type="text" class="form-control" name="server_link_drive" value="{{ old('server_link_drive') }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">Ok</label>
    <input type="text" class="form-control " name="server_link_ok" value="{{ old('server_link_ok') }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">Mp4Upload</label>
    <input type="text" class="form-control " name="server_link_mp4upload" value="{{ old('server_link_mp4upload') }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">4Shared</label>
    <input type="text" class="form-control " name="server_link_4shared" value="{{ old('server_link_4shared') }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">Uptobox</label>
    <input type="text" class="form-control " name="server_link_uptobox" value="{{ old('server_link_uptobox') }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">VidShare</label>
    <input type="text" class="form-control" name="server_link_vidshare" value="{{ old('server_link_vidshare') }}">
    </div>
    <div class="col-md-12 mb-3">
       <h5>Download Links</h5>
    </div>
    <div class="col-md-12 mb-3">
        <label for="">Mega</label>
    <input type="text" class="form-control " name="down_link_mega" value="{{ old('down_link_mega') }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">Drive</label>
    <input type="text" class="form-control" name="down_link_drive" value="{{ old('down_link_drive') }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">Ok</label>
    <input type="text" class="form-control " name="down_link_ok" value="{{ old('down_link_ok') }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">Mp4Upload</label>
    <input type="text" class="form-control " name="down_link_mp4upload" value="{{ old('down_link_mp4upload') }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">4Shared</label>
    <input type="text" class="form-control " name="down_link_4shared" value="{{ old('down_link_4shared') }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">Uptobox</label>
    <input type="text" class="form-control " name="down_link_uptobox" value="{{ old('down_link_uptobox') }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">VidShare</label>
    <input type="text" class="form-control" name="down_link_vidshare" value="{{ old('down_link_vidshare') }}">
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
