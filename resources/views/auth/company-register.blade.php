@extends('layouts.myapp')

@section('content')
    <div class="main">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Company Register</h2>
                        <form method="POST" class="register-form" id="register-form" action="{{ route('company-register-process') }}">
                            @csrf
                            {{--  @include('const.messages')  --}}
                                <div class="form-group">
                                    <label for="surname"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" class="{{ $errors->has('companyname') ? ' is-invalid' : '' }}" name="companyname" value="{{ old('companyname') }}" id="companyname" placeholder="Your Company Name" required/>
                                    @if ($errors->has('companyname'))
                                        <span class="invalid-feedback" role="alert" style="color:red;">
                                            <strong>{{ $errors->first('companyname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" id="email" placeholder="Your Email"/>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert" style="color:red;">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" required class="{{ $errors->has('password') ? ' is-invalid' : '' }}" id="pass" placeholder="Your Password"/>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert" style="color:red;">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password_confirmation" required id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><a href="#"><img src="{{ asset('images/Hayche-logo_standard.png') }}" alt="sign up image"></a></figure>
                        <a href="login.html" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
