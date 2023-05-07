@extends('layouts/app')

@section('title')
{{$movie->name}}
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
                <h1 class="details__title">{{$movie->name}}</h1>
            </div>
            <!-- end title -->

            <!-- content -->
            <div class="col-10">
                <div class="card card--details card--series">
                    <div class="row">
                        <!-- card cover -->
                        <div class="col-12 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                            <div class="card__cover">
                                <img src="assets/uploads/movies/{{$movie->poster}}"  alt="">
                            </div>
                        </div>
                        <!-- end card cover -->

                        <!-- card content -->
                        <div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-9">
                            <div class="card__content">
                                <div class="card__wrap">

                                    <span class="card__rate"><i class="icon ion-ios-star"></i>{{$movie->imdb}}</span>


                                    <ul class="card__list" style="display: flex;">
                                        @if ( $movie->fhd =='1')
                                        <li>FHD</li>
                                        @endif

                                        @if ( $movie->hd =='1')
                                        <li>HD</li>
                                        @endif

                                        @if ( $movie->dvd =='1')
                                        <li>DVD</li>
                                        @endif

                                        @if ( $movie->e =='1')
                                        <li>+18</li>
                                        @endif

                                        @if ( $movie->s =='1')
                                        <li>+16</li>
                                        @endif

                                        @if ( $movie->t =='1')
                                        <li>+13</li>
                                        @endif



                                    </ul>
                                    <a href="{{ url('movie/watch/'.$movie->slug) }}" class="header__sign-in" >
                                        <i class="icon ion-ios-log-in"></i>
                                        <span>مشاهدة و تحميل</span>
                                    </a>
                                </div>

                                <ul class="card__meta">
                                    <li><span>Genre:</span>

                                        @if ( $movie->action =='1')
                                        <a href="#">Action</a>

                                    @endif
                                    @if ( $movie->fantasy =='1')
                                    <a href="#">Fantasy</a>

                                    @endif
                                    @if ( $movie->comedy=='1' )
                                    <a href="#">Comedy</a>


                                    @endif
                                    @if ( $movie->romance =='1')
                                    <a href="#">Romance</a>


                                    @endif
                                    @if ( $movie->drama =='1')
                                    <a href="#">Drama</a>


                                    @endif
                                    @if ( $movie->mystery =='1')
                                    <a href="#">Mystery</a>


                                    @endif
                                    @if ( $movie->adventure =='1')
                                    <a href="#">Adventure</a>


                                    @endif






                                    <li><span>Release year:</span> {{$movie->release_year}}</li>
                                    <li><span>Running time:</span> {{$movie->running_time}} min</li>
                                    <li><span>Country:</span> <a href="#">{{$movie->country}}</a> </li>
                                </ul>



                                <div class="card__description card__description--details">
                                    {{$movie->story}}
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



<!-- home -->



<section class="home">
    <!-- home bg -->

    <div class="content__head">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- content title -->
                    <h2 class="content__title" >أفلام مشابهة</h2>
                    <!-- end content title -->
                </div>
            </div>
        </div>
    </div>
    <!-- end home bg -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="home__title"></h1>

                <button class="home__nav home__nav--prev" type="button">
                    <i class="icon ion-ios-arrow-round-back"></i>
                </button>
                <button class="home__nav home__nav--next" type="button">
                    <i class="icon ion-ios-arrow-round-forward"></i>
                </button>
            </div>

            <div class="col-12">
                <div class="owl-carousel home__carousel">



                    @foreach ($movies as $item )




                    <div class="item">
                    <div class="card card--big">
                        <div class="card__cover">
                            <img src="assets/uploads/movies/{{$item->poster}}" class="imgm"   alt="">
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




@endsection
@section('scripts')

