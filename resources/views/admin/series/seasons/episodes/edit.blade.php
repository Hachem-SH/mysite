@extends('.admin.layouts.admin')


@section('title')
  Edit Episode
@endsection

@section('content')


<div class="card container">

    <div class="card-header">
        <h4>Edit Episode</h4>
    </div>

    <div class="card-body">

        <form action="{{ url('serie-episodes-edited/'.$serie_episodes->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

<div class="row">

    <div class="col-md-6 mb-3">
        <label for="">Episode</label>
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="number" value="{{ $serie_episodes->number }}">
    </div>


    <div class="col-md-12 mb-3">
        <h5>Server Links</h5>
    </div>
    <div class="col-md-12 mb-3">
        <label for="">Mega</label>
    <input type="text" class="form-control " name="server_link_mega" value="{{ $serie_episodes->server_link_mega }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">Drive</label>
    <input type="text" class="form-control" name="server_link_drive" value="{{ $serie_episodes->server_link_drive }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">Ok</label>
    <input type="text" class="form-control " name="server_link_ok" value="{{ $serie_episodes->server_link_ok }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">Mp4Upload</label>
    <input type="text" class="form-control " name="server_link_mp4upload" value="{{ $serie_episodes->server_link_mp4upload }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">4Shared</label>
    <input type="text" class="form-control " name="server_link_4shared" value="{{ $serie_episodes->server_link_4shared }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">Uptobox</label>
    <input type="text" class="form-control " name="server_link_uptobox" value="{{ $serie_episodes->server_link_uptobox }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">VidShare</label>
    <input type="text" class="form-control" name="server_link_vidshare" value="{{ $serie_episodes->server_link_vidshare }}">
    </div>
    <div class="col-md-12 mb-3">
       <h5>Download Links</h5>
    </div>
    <div class="col-md-12 mb-3">
        <label for="">Mega</label>
    <input type="text" class="form-control " name="down_link_mega" value="{{ $serie_episodes->down_link_mega }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">Drive</label>
    <input type="text" class="form-control" name="down_link_drive" value="{{ $serie_episodes->down_link_drive }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">Ok</label>
    <input type="text" class="form-control " name="down_link_ok" value="{{ $serie_episodes->down_link_ok }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">Mp4Upload</label>
    <input type="text" class="form-control " name="down_link_mp4upload" value="{{ $serie_episodes->down_link_mp4upload }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">4Shared</label>
    <input type="text" class="form-control " name="down_link_4shared" value="{{ $serie_episodes->down_link_4shared }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">Uptobox</label>
    <input type="text" class="form-control " name="down_link_uptobox" value="{{ $serie_episodes->down_link_uptobox }}">
    </div>
    <div class="col-md-12 mb-3">
        <label for="">VidShare</label>
    <input type="text" class="form-control" name="down_link_vidshare" value="{{ $serie_episodes->down_link_vidshare }}">
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
