@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card shadow-sm" style="width: 400px;">
            <div class="card-body text-center">
                <h3 class="card-title mb-4">{{ __('Login with Line') }}</h3>
                <a href="{{ url('auth/line') }}" class="btn btn-success btn-lg d-flex align-items-center justify-content-center" style="gap: 10px;">
                    <i class="fab fa-line" style="font-size: 24px;"></i>
                    <span>{{ __('Continue with Line') }}</span>
                </a>
            </div>
        </div>
    </div>
@endsection
