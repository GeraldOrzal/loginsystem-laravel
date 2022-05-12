@extends('layouts.app')

@section('content')
<div class="container shadow bg-white rounded ">
    <div class="row justify-content-center p-2">
        <div class="col-lg-6">
            <div class="mt-3 d-flex ">
                <div>
                    <img src="/image/icon.jpg" alt="" style="height: 40px" class="rounded-circle">
                </div>

                <div class="p-2">
                    <h5 class="text-danger fw-bold">PocketDevs ph</h5>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col">
                    <h1 class="text-danger">WELCOME!</h1>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <p class="lead">It's not the we use technology, <br> we live technology.</p>
                </div>
            </div>

        </div>

        <div class="col">
            <div class="card">
                <div class="mt-3 text-center"><h5 class="fw-bold">{{ __('LOGIN') }}</h5></div>

                <div class="card-body mt-5">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> -->

                            <div class="col mx-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <!-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> -->

                            <div class="col mx-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col mx-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                
                                
                                
                            </div>
                            
                            <div class="col-auto">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col mx-3">
                                <button type="submit" class="btn btn-danger">
                                    {{ __('Login') }}
                                </button>

                                <!-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif -->

                                                            <!-- Button trigger modal -->
                              

                               
                  
                            </div>
                        </div>
                    </form>
                </div>
             </div>
        </div>
    </div>
</div>
@endsection
