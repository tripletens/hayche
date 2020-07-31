@extends('layouts.myapp')

@section('content')
    <div class="main">
            <!-- Sing in  Form -->
            <section class="sign-in">
                <div class="container">
                    <div class="signin-content">
                        <div class="signin-image">
                            <figure><a href="#"><img src="{{  }}}}{  }}}} }}asset('images/Hayche-logo_standard.png')}}" alt="sing up image"></a></figure>
                            <!-- <a href="signup.html" class="signup-image-link">Create an account</a> -->
                        </div>

                        <div class="signin-form">
                            <h2 class="form-title">{{ __('Reset Password') }}</h2>
                            <form method="POST" action="{{ route('password.email') }}" class="register-form" id="login-form">
                                @csrf
                                <div class="form-group">
                                    <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" name="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus id="your_email" placeholder="Your Email"/>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" style="color:red;" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>


                                <div class="form-group form-button">
                                    <input type="submit" name="signin" id="signin" class="form-submit" value="Send Password Reset Link"/>
                                </div>
                                 @if (Route::has('register'))
                                    <a class="btn btn-link" href="{{ route('register') }}">
                                        {{ __('Not a Member? Register Here') }}
                                    </a>
                                @endif
                            </form>
                            <!-- <div class="social-login">
                                <span class="social-label">Or login with</span>
                                <ul class="socials">
                                    <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection
