@extends('.admin.layouts.admin')


@section('title')
Episodes
@endsection

@section('content')

@php
$string = url();
$string = request()->segment(5);

@endphp
<div class="text-center">
    <a href="{{ url('dashboard/series/seasons/episodes/add/'.$string ) }}" class="btn btn-primary mx-5" >Add Episode</a>
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
        <h4>Episodes</h4>
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Episode</th>




                    <th>Poster</th>
                    <th>Actions</th>


                </tr>
            </thead>
            <tbody>

                @foreach ($serie_episodes as $item)
                    <tr>


                        <td> {{ $item->number }} </td>



                        <td><img src="assets/uploads/series/seasons/{{$item->season->poster}}" alt="image here" height="70" width="50"> </td>




                        <td><a href="{{ url('dashboard/series/seasons/episodes/edit/'.$item->id )}}" class="btn btn-primary">Edit</a></td>


                        <td><a href="{{ url('delete-serie-episode/'.$item->id )}}" class="btn btn-danger">Delete</a></td>
                    </tr>

                @endforeach

            </tbody>
        </table>
    </div>


</div>

@endsection
