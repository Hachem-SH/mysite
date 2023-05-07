@extends('.admin.layouts.admin')


@section('title')
Movies
@endsection

@section('content')


<div class="text-center">
    <a href="{{ url('dashboard/movies/add') }}" class="btn btn-primary mx-5" >Add Movie</a>
</div>


<br>
<br>
@if(session('status'))
<script>
    swal("", "{{ session('status') }}", "success");
</script>
@endif


<div class="card container">

    <div class="card-header">
        <h4>Articles</h4>
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>

                    <th>Name</th>
                    <th>IMDB Rate</th>
                    <th>Quality</th>
                    <th>Category</th>
                    <th>Poster</th>
                    <th>Actions</th>


                </tr>
            </thead>
            <tbody>

                @foreach ($movie as $item)
                    <tr>


                        <td>{{ $item->name }}</td>
                        <td>{{ $item->imdb }}</td>

                        <td>
                            @if ( $item->fhd =='1')
                            FHD

                            @endif
                            @if ( $item->hd =='1')
                            HD

                            @endif
                            @if ( $item->dvd=='1' )
                            DVD

                            @endif


                        </td>
                        <td>
                            @if ( $item->action =='1')
                            Action,

                            @endif
                            @if ( $item->fantasy =='1')
                            Fantasy,

                            @endif
                            @if ( $item->comedy=='1' )
                            Comedy,

                            @endif
                            @if ( $item->romance =='1')
                            Romance,

                            @endif
                            @if ( $item->drama =='1')
                            Drama,

                            @endif
                            @if ( $item->mystery =='1')
                            Mystery,

                            @endif
                            @if ( $item->adventure =='1')
                            Adventure,

                            @endif

                        </td>

                        <td><img src="assets/uploads/movies/{{$item->poster}}" alt="image here" height="70" width="50"> </td>

                        <td><a href="{{ url('dashboard/movies/edit/'.$item->id )}}" class="btn btn-primary">Edit</a></td>


                        <td><a href="{{ url('delete-movie/'.$item->id )}}" class="btn btn-danger">Delete</a></td>
                    </tr>

                @endforeach

            </tbody>
        </table>
    </div>


</div>

@endsection
