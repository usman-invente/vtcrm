@extends('layouts.app')
@section('content')
    <!-- login-area -->
    <section class="login-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-lg-7">
                    <div class="login-left row">
                        <div class="introduction">
                            <div class="heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                                <h1>Welcome to DealersGear CRM</h1>
                                <p>The Platform Built By Dealers For Dealers</p>
                            </div>
                            <div class="heading-img wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                <img class="img-fluid" src="{{asset('public/assets/img/PC.png')}}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-right row">
                        <div class="login-form">
                            <!-- logo -->
                            <div class="logo-login wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                                <a href="index.html"><img class="img-fulid" src="{{asset('public/assets/img/logo.svg')}}" alt="logo"></a>
                            </div>
                            <!-- logo -->
                            <div class="login-title wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                <h2>Log Into Your Account</h2>
                            </div>
                            <form  method="POST" action="{{ route('login') }}"  class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
                                @csrf
                                <label>
                                    <p class="label-txt">{{ __('E-Mail Address') }}</p>
                                    <img class="img-fluid log-icon" src="assets/img/Account.svg" alt="">
                                    <input type="email"  name="email"  class="input @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </label>
                                <label>
                                    <p class="label-txt">Password</p>
                                    <img class="img-fluid log-icon" src="assets/img/lock.svg" alt="">
                                    <input type="password" id="password"  class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                   @enderror
                                    <img class="img-fluid show-eye" src="assets/img/Eye.svg" alt="">
                                    <img class="img-fluid hide-eye" src="assets/img/eyeclose.svg" alt="">
                                </label>
                                <div class="form-group form-check">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheckBox1">
                                        <label class="custom-control-label" for="customCheckBox1">Remember Me</label>
                                        <a class="forgot" href="{{ route('password.request') }}">Forgot Password?</a>
                                    </div>
                                </div>

                                <button type="submit" class="login-btn">Log In</button>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login-area -->



@endsection
