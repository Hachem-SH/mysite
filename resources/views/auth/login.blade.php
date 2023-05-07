@extends('layouts.app')

@section('content')

<div class="sign section--bg" data-bg="img/section/section.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sign__content">
                    <!-- authorization form -->
                    <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data" class="sign__form">
                        @csrf
                        <a href="index.html" class="sign__logo">
                            <img src="pictures/logo/logo.png" alt="">
                        </a>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                        <div class="sign__group">
                            <input id="email" type="email" class="sign__input @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>



                        </div>

                        <div class="sign__group">
                            <input id="password" type="password" class="sign__input @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="sign__group sign__group--checkbox">
                            <input id="remember" type="checkbox" name="remember" checked>
                            <label for="remember">Remember Me</label>
                        </div>

                        <button class="sign__btn" type="submit">Sign in</button>

                        <span class="sign__text">Don't have an account? <a href="{{ route('register') }}">Sign up!</a></span>

                        <span class="sign__text"><a href="#">Forgot password?</a></span>
                    </form>
                    <!-- end authorization form -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
