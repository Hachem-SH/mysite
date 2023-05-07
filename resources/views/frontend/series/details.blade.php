@extends('layouts/app')

@section('title')
{{$serie->name}}
@endsection

@section('content')

<style>
    body{
        background-color: #2B2B31;
    }
</style>
<!-- details -->
<section class="section details">
    <!-- details background -->
    <div class="details__bg" data-bg="img/home/home__bg.jpg"></div>
    <!-- end details background -->

    <!-- details content -->
    <div class="container">
        <div class="row">
            <!-- title -->
            <div class="col-12">
                <h1 class="details__title">{{$serie->name}}</h1>
            </div>
            <!-- end title -->

            <!-- content -->
            <div class="col-10">
                <div class="card card--details card--series">
                    <div class="row">
                        <!-- card cover -->
                        <div class="col-12 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                            <div class="card__cover">
                                <img src="assets/uploads/series/{{$serie->poster}}"  alt="">
                            </div>
                        </div>
                        <!-- end card cover -->

                        <!-- card content -->
                        <div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-9">
                            <div class="card__content">
                                <div class="card__wrap">

                                    <span class="card__rate"><i class="icon ion-ios-star"></i>{{$serie->imdb}}</span>


                                    <ul class="card__list" style="display: flex;">
                                        @if ( $serie->fhd =='1')
                                        <li>FHD</li>
                                        @endif

                                        @if ( $serie->hd =='1')
                                        <li>HD</li>
                                        @endif

                                        @if ( $serie->dvd =='1')
                                        <li>DVD</li>
                                        @endif

                                        @if ( $serie->e =='1')
                                        <li>+18</li>
                                        @endif

                                        @if ( $serie->s =='1')
                                        <li>+16</li>
                                        @endif

                                        @if ( $serie->t =='1')
                                        <li>+13</li>
                                        @endif



                                    </ul>

                                </div>

                                <ul class="card__meta">
                                    <li><span>Genre:</span>

                                        @if ( $serie->action =='1')
                                        <a href="#">Action</a>

                                    @endif
                                    @if ( $serie->fantasy =='1')
                                    <a href="#">Fantasy</a>

                                    @endif
                                    @if ( $serie->comedy=='1' )
                                    <a href="#">Comedy</a>


                                    @endif
                                    @if ( $serie->romance =='1')
                                    <a href="#">Romance</a>


                                    @endif
                                    @if ( $serie->drama =='1')
                                    <a href="#">Drama</a>


                                    @endif
                                    @if ( $serie->mystery =='1')
                                    <a href="#">Mystery</a>


                                    @endif
                                    @if ( $serie->adventure =='1')
                                    <a href="#">Adventure</a>


                                    @endif






                                    <li><span>Release year:</span> {{$serie->release_year}}</li>

                                    <li><span>Country:</span> <a href="#">{{$serie->country}}</a> </li>
                                </ul>



                                <div class="card__description card__description--details">
                                    {{$serie->story}}
                                </div>
                            </div>
                        </div>
                        <!-- end card content -->
                    </div>
                </div>
            </div>
            <!-- end content -->






                </div>
            </div>
        </div>
    </div>
    <!-- end details content -->
</section>

<!-- end details -->
<div class="container">

<div class="row">
    <!-- card -->
    @foreach ($serie_seasons as $item )
    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
        <div class="card">
            <div class="card__cover">
                <img src="assets/uploads/series/seasons/{{$item->poster}}" height="237px" width="160px" alt="">
                <a href="{{url('serie/details/'.$item->serie->slug.'/season/'.$item->name)}}" class="card__play">
                    <i class="icon ion-ios-play"></i>
                </a>
            </div>
            <div class="card__content">
                <h3 class="card__title"><a href="#">Season {{$item->name}}</a></h3>


            </div>
        </div>
    </div>
    @endforeach
    <!-- end card -->
</div>

</div>





@endsection
@section('scripts')
