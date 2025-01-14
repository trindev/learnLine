@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">{{ __('Smart Health Monitor') }}</h4>
                </div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <h5 class="text-primary">Welcome to Smart Health Monitor</h5>
                    <p class="text-muted">Track your health effortlessly with real-time insights.</p>
                    <p class="text-muted">Your data will be sent to your Line account.</p>
                </div>

                <div class="card-footer bg-light text-center">
                    <a href="#" class="btn btn-primary btn-sm">Learn More</a>
                    <a href="#" class="btn btn-secondary btn-sm">Contact Support</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
