@extends('layouts/app')

@section('title')
Home
@endsection

@section('content')

<!-- home -->
<section class="home">
    <!-- home bg -->
    <div class="owl-carousel home__bg">
        @foreach ($movie as $item )
        <div class="item home__cover" data-bg="assets/uploads/movies/{{$item->poster}}"></div>
        @endforeach

    </div>
    <!-- end home bg -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="home__title"><b>NEW ITEMS</b> OF THIS SEASON</h1>

                <button class="home__nav home__nav--prev" type="button">
                    <i class="icon ion-ios-arrow-round-back"></i>
                </button>
                <button class="home__nav home__nav--next" type="button">
                    <i class="icon ion-ios-arrow-round-forward"></i>
                </button>
            </div>

            <div class="col-12">
                <div class="owl-carousel home__carousel">



                    @foreach ($movie as $item )

                    <div class="item">
                    <div class="card card--big">
                        <div class="card__cover">
                            <img src="assets/uploads/movies/{{$item->poster}}" height="380px" width="270px" alt="">
                            <a href="{{url('movie/details/'.$item->slug)}}" class="card__play">
                                <i class="icon ion-ios-play"></i>
                            </a>
                        </div>
                        <div class="card__content">
                            <h3 class="card__title"><a href="">{{$item->name}}</a></h3>
                            <span class="card__category">
                            @if ( $item->action =='1')
                                <a href="#">Action</a>

                            @endif
                            @if ( $item->fantasy =='1')
                            <a href="#">Fantasy</a>

                            @endif
                            @if ( $item->comedy=='1' )
                            <a href="#">Comedy</a>


                            @endif
                            @if ( $item->romance =='1')
                            <a href="#">Romance</a>


                            @endif
                            @if ( $item->drama =='1')
                            <a href="#">Drama</a>


                            @endif
                            @if ( $item->mystery =='1')
                            <a href="#">Mystery</a>


                            @endif

                            @if ( $item->adventure =='1')
                            <a href="#">Adventure</a>


                            @endif

                            </span>
                            <span class="card__rate"><i class="icon ion-ios-star"></i>{{ $item->imdb }}</span>
                        </div>
                    </div>
                </div>
                    @endforeach





                </div>
            </div>
        </div>
    </div>
</section>


<!-- end home -->

<section class="content">
    <div class="content__head">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- content title -->
                    <h2 class="content__title">New items</h2>
                    <!-- end content title -->

                    <!-- content tabs nav -->
                    <ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">MOVIES</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-1" aria-selected="false">SERIES</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-2" aria-selected="false">ANIME</a>
                        </li>


                    </ul>
                    <!-- end content tabs nav -->

                    <!-- content mobile tabs nav -->
                    <div class="content__mobile-tabs" id="content__mobile-tabs">
                        <div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <input type="button" value="New items">
                            <span></span>
                        </div>

                        <div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">MOVIES</a></li>

                                <li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-2" aria-selected="false">SERIES</a></li>

                                <li class="nav-item"><a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-3" aria-selected="false">AMIME</a></li>


                            </ul>
                        </div>
                    </div>
                    <!-- end content mobile tabs nav -->
                </div>
            </div>
        </div>
    </div>
<style>
    body{

        background-color: #2B2B31;

    }
</style>
    <div class="container">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">


                <div class="row">
                    <!-- card -->
                    @foreach ($movie as $item )
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="card">
                            <div class="card__cover">
                                <img src="assets/uploads/movies/{{$item->poster}}" height="237px" width="160px" alt="">
                                <a href="{{url('movie/details/'.$item->slug)}}" class="card__play">
                                    <i class="icon ion-ios-play"></i>
                                </a>
                            </div>
                            <div class="card__content">
                                <h3 class="card__title"><a href="#">{{$item->name}}</a></h3>
                                <span class="card__category">
                                    @if ( $item->action =='1')
                                <a href="#">Action</a>

                            @endif
                            @if ( $item->fantasy =='1')
                            <a href="#">Fantasy</a>

                            @endif
                            @if ( $item->comedy=='1' )
                            <a href="#">Comedy</a>


                            @endif
                            @if ( $item->romance =='1')
                            <a href="#">Romance</a>


                            @endif
                            @if ( $item->drama =='1')
                            <a href="#">Drama</a>


                            @endif
                            @if ( $item->mystery =='1')
                            <a href="#">Mystery</a>


                            @endif

                            @if ( $item->adventure =='1')
                            <a href="#">Adventure</a>


                            @endif
                                </span>
                                <span class="card__rate"><i class="icon ion-ios-star"></i>{{ $item->imdb }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- end card -->







                </div>

            </div>

            <div class="tab-pane fade" id="tab-2" role="tabpane2" aria-labelledby="2-tab">
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
                                <h3 class="card__title"><a href="#">{{$item->serie->name}} Season {{$item->name}}</a></h3>
                                <span class="card__category">
                            @if ( $item->serie->action =='1')
                                <a href="#">Action</a>

                            @endif
                            @if ( $item->serie->fantasy =='1')
                            <a href="#">Fantasy</a>

                            @endif
                            @if ( $item->serie->comedy=='1' )
                            <a href="#">Comedy</a>


                            @endif
                            @if ( $item->serie->romance =='1')
                            <a href="#">Romance</a>


                            @endif
                            @if ( $item->serie->drama =='1')
                            <a href="#">Drama</a>


                            @endif
                            @if ( $item->serie->mystery =='1')
                            <a href="#">Mystery</a>


                            @endif
                            @if ( $item->serie->adventure =='1')
                            <a href="#">Adventure</a>


                            @endif
                                </span>
                                <span class="card__rate"><i class="icon ion-ios-star"></i>{{ $item->serie->imdb }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- end card -->
                </div>
            </div>

            <div class="tab-pane fade" id="tab-3" role="tabpane3" aria-labelledby="3-tab">
                <div class="row">
                    <!-- card -->
                    @foreach ($movie as $item )
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="card">
                            <div class="card__cover">
                                <img src="assets/uploads/movies/{{$item->poster}}" height="237px" width="160px" alt="">
                                <a href="{{url('movie/'.$item->slug)}}" class="card__play">
                                    <i class="icon ion-ios-play"></i>
                                </a>
                            </div>
                            <div class="card__content">
                                <h3 class="card__title"><a href="#">{{$item->name}}</a></h3>
                                <span class="card__category">
                                    @if ( $item->action =='1')
                                <a href="#">Action</a>

                            @endif
                            @if ( $item->fantasy =='1')
                            <a href="#">Fantasy</a>

                            @endif
                            @if ( $item->comedy=='1' )
                            <a href="#">Comedy</a>


                            @endif
                            @if ( $item->romance =='1')
                            <a href="#">Romance</a>


                            @endif
                            @if ( $item->drama =='1')
                            <a href="#">Drama</a>


                            @endif
                            @if ( $item->mystery =='1')
                            <a href="#">Mystery</a>


                            @endif
                            @if ( $item->adventure =='1')
                            <a href="#">Adventure</a>


                            @endif
                                </span>
                                <span class="card__rate"><i class="icon ion-ios-star"></i>{{ $item->imdb }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- end card -->
                </div>
            </div>
        </div>
        <!-- end content tabs -->
    </div>
</section>






@endsection






