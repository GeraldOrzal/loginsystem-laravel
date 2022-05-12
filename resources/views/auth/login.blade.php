@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 shadow-sm">
            <div class="row border">
                <div class="container col">
                    <div class="container-fluid fw-bold p-2" style="color:red;">
                        <img src="{{URL('images/logo.svg')}}"/>
                        {{__('PocketDevs ')}}
                    </div>
                    <div class="card-body">
                        <h1 class="fw-bold" style="color:red;">{{__('WELCOME!')}}</h1>
                        <h3 class="w-75">{{__('It’s not that we use technology, we live technology.')}}</h3>
                    </div>
                </div>
                <div class="card col border">
                    <div class="card-header fw-bold text-center pb-50">{{ __('LOGIN') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="row mb-3">    
                                <div class="md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{__('EMAIL')}}">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
    
                                <div class="md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{__('PASSWORD')}}">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                @if (Route::has('password.request'))
                                        <a class="btn btn-link text-start" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                @endif
                            </div>
    
                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary fw-bold" style="color:white;">
                                        {{ __('LOGIN') }}
                                    </button>
                                </div>
                            </div>
                            
                                
                            
                        </form>
                    </div>
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
