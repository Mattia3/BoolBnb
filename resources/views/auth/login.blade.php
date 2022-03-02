@extends('layouts.guest')
@section('page_title', 'Login')

@section('content')
<div class="background-login">


  <div class="section container-login">
    <div class="container">
      <div class="row full-height justify-content-center">
        <div class="col-12 text-center align-self-center py-5">
          <div class="section pb-5 pt-5 pt-sm-2 text-center">
            <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
            <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
            <label for="reg-log"></label>
            <div class="card-3d-wrap mx-auto" style="margin-top: 20px; height: 500px">
              <div class="card-3d-wrapper">
                <div class="card-front">
                  <div class="center-wrap">
                    <div class="section text-center">
                      <h4 class="mb-4 pb-3 text-white">Log In</h4>
                      <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group text-start">
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Your Email">
                          @error('email')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                          <i class="input-icon uil uil-at"></i>
                        </div>

                        <div class="form-group mt-2 text-start">
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                          @error('password')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                          <i class="input-icon uil uil-lock-alt"></i>
                        </div>
                        {{-- <a href="#" class="btn mt-4">submit</a>
                            <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p> --}}

                        <div class="form-group row mb-0 mt-4">
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">
                              {{ __('Login') }}
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <div class="card-back">
                  <div class="center-wrap">
                    <div class="section text-center">
                      <h4 class="mb-4 pb-3">Sign Up</h4>
                      <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group text-start">
                          <input id="name" type="text" class="form-control w-100 text-start @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                          <i class="input-icon uil uil-user"></i>

                          @error('name')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>

                        <div class="form-group mt-2 text-start">
                          <input id="last_name" type="text" class="form-control w-100 text-start @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus placeholder="Last Name">
                          <i class="input-icon uil uil-user"></i>

                          @error('last_name')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>

                        <div class="form-group mt-2 text-start">
                          <input id="date_birth" type="date" class="form-control w-100 text-start @error('last_name') is-invalid @enderror" name="date_birth" required autofocus>
                          <i class="input-icon uil uil-user"></i>

                          @error('date_birth')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>

                        <div class="form-group mt-2 text-start">
                          <input id="img_profile" type="file" class="form-control w-100 text-start" name="img_profile" value="" required autofocus>
                          <i class="input-icon uil uil-user"></i>

                          @error('img_profile')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>

                        <div class="form-group mt-2 text-start">
                          <input id="email" type="email" class="form-control text-start @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your Email">

                          <i class="input-icon uil uil-at"></i>

                          @error('email')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>

                        <div class="form-group mt-2">
                          <input id="password" type="password" class="form-control text-start @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Choose a password">

                          <i class="input-icon uil uil-lock-alt"></i>

                          @error('password')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>

                        <div class="form-group mt-2">
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
                        </div>

                        <div class="form-group row mb-0 mt-4">
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">
                              {{ __('Register') }}
                            </button>
                          </div>
                        </div>
                      </form>

                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
    @endsection