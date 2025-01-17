@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh; background-color: #f8f9fa;">
        <div class="card shadow-sm p-4" style="width: 400px; border-radius: 15px;">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">{{ __('Welcome Back!') }}</h3>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">{{ __('Email Address') }}</label>
                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="form-label">{{ __('Password') }}</label>
                        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-primary btn-lg">{{ __('Login') }}</button>
                    </div>
                </form>
                <div class="text-center my-3">
                    <span>{{ __('or') }}</span>
                </div>
                <div class="d-grid">
                    <a href="{{ url('auth/line') }}" class="btn btn-success btn-lg d-flex align-items-center justify-content-center" style="gap: 10px;">
                        <i class="fab fa-line" style="font-size: 24px;"></i>
                        <span>{{ __('Continue with Line') }}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
