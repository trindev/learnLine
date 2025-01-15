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
                        <button id="closeLiffBtn" class="btn btn-danger btn-sm">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://static.line-scdn.net/liff/edge/2/sdk.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize LIFF
            liff.init({ liffId: "1656843660-Daknn5bv" })
                .then(() => {
                    console.log('LIFF initialized');

                    // Auto-close LIFF if redirected here
                    if (liff.isInClient()) {
                        liff.closeWindow();
                    }

                    // Add event listener for the Close button
                    document.getElementById('closeLiffBtn').addEventListener('click', function () {
                        if (liff.isInClient()) {
                            liff.closeWindow();
                        } else {
                            alert("This action is not supported outside the LINE app.");
                        }
                    });
                })
                .catch(err => {
                    console.error('LIFF initialization failed', err);
                });
        });
    </script>
@endsection
