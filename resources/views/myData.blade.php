@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Latest Health Report -->
                @if($latestData)
                    <div class="card shadow-lg mb-4">
                        <div class="card-header bg-dark text-white">
                            <h4 class="mb-0 text-center">Health Report</h4>
                        </div>
                        <div class="card-body">
                            <div class="row text-center">
                                <div class="col-4">
                                    <img src="{{ asset('images/BodyIcon.png') }}" alt="Temperature" width="40">
                                    <h6>Temperature</h6>
                                    <p class="h5">{{ $latestData->temp }} °C</p>
                                </div>
                                <div class="col-4">
                                    <img src="{{ asset('images/heart-rate.png') }}" alt="Heart Rate" width="40">
                                    <h6>Heart Rate</h6>
                                    <p class="h5">{{ $latestData->heart_rate }} bpm</p>
                                </div>
                                <div class="col-4">
                                    <img src="{{ asset('images/SPO2Icon.png') }}" alt="SpO2" width="40">
                                    <h6>SpO2</h6>
                                    <p class="h5">{{ $latestData->spo2 }}%</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row text-center">
                                <div class="col-6">
                                    <img src="{{ asset('images/BloodPressureIcon.png') }}" alt="Blood Pressure" width="40">
                                    <h6>Blood Pressure</h6>
                                    <p class="h5">{{ $latestData->systolic }}/{{ $latestData->diastolic }} mmHg</p>
                                </div>
                                <div class="col-6">
                                    <img src="{{ asset('images/healthcare.png') }}" alt="Status" width="40">
                                    <h6>Status</h6>
                                    <p class="h5 text-{{ $latestData->status === 'Normal' ? 'success' : 'danger' }}">
                                        {{ $latestData->status }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="alert alert-warning text-center">
                        No health data found.
                    </div>
                @endif

                <!-- Health Reports History -->
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Health Reports History</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Temp (°C)</th>
                                    <th>Heart Rate (bpm)</th>
                                    <th>Blood Pressure</th>
                                    <th>SpO2 (%)</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($data as $item)
                                    <tr>
                                        <td>{{ $item->created_at->format('d/m/Y') }}</td>
                                        <td>{{ $item->temp }}</td>
                                        <td>{{ $item->heart_rate }}</td>
                                        <td>{{ $item->systolic }}/{{ $item->diastolic }}</td>
                                        <td>{{ $item->spo2 }}</td>
                                        <td class="text-{{ $item->status === 'Normal' ? 'success' : 'danger' }}">
                                            {{ $item->status }}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">No records found.</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
