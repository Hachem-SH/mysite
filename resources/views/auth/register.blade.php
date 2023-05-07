@extends('layouts.app')

@section('content')

<div class="sign section--bg" data-bg="img/section/section.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sign__content">
                    <!-- registration form -->
                    <form method="POST" action="{{ route('register') }}" class="sign__form">
@csrf
                        <a href="index.html" class="sign__logo">
                            <img src="pictures/logo/logo.png" alt="">
                        </a>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <div class="sign__group">
                            <input id="name" type="text" class="sign__input @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <div class="sign__group">
                            <input id="email" type="email" class="sign__input @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                        </div>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <div class="sign__group">
                            <input id="password" type="password" class="sign__input @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
                        </div>

                                                    <div class="sign__group">
                            <input id="password-confirm" type="password"  class="sign__input" placeholder="Password" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="sign__group sign__group--checkbox">
                            <input id="remember" name="remember" type="checkbox" checked="checked">
                            <label for="remember">I agree to the <a href="#">Privacy Policy</a></label>
                        </div>

                        <button class="sign__btn" type="submit">Sign up</button>

                        <span class="sign__text">Already have an account? <a href="signin.html">Sign in!</a></span>
                    </form>
                    <!-- registration form -->
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
