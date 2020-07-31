@extends('layouts.myapp')

@section('content')
    <div class="main">
            <!-- Sing in  Form -->
            <section class="sign-in">
                <div class="container">
                    <div class="signin-content">
                        <div class="signin-image">
                            <figure><a href="#"><img src="images/Hayche-logo_standard.png" alt="sing up image"></a></figure>
                            <!-- <a href="signup.html" class="signup-image-link">Create an account</a> -->
                        </div>

                        <div class="signin-form">
                            <h2 class="form-title">Log In</h2>
                            <form method="POST" action="{{ route('login') }}" class="register-form" id="login-form">
                                @csrf
                                <div class="form-group">
                                    <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" name="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus id="your_email" placeholder="Your Email"/>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert" style="color:red;">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required id="password" placeholder="Password"/>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert" style="color:red;">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} id="remember-me" class="agree-term" />
                                    <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                                </div>
                                <div class="form-group form-button">
                                    <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                                </div>
                                <p>
                                    Not a Member? <a href="{{ route('register') }}">Register</a>
                                </p>
                                 @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
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
