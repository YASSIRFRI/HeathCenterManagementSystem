{{-- resources/views/dashboard.blade.php --}}
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <!-- Main Dashboard Content -->
        <div class="col-md-18 ms-auto">
            <!-- Welcome Box -->
            <div class="welcome-box mb-4 p-4 bg-white rounded shadow-sm">
                <h2>Welcome to MedCheck!</h2>
            </div>

            <!-- Dynamically include Account Information Boxes -->
            @include('partials.account-info')

            <!-- Dynamically include Help Section -->
            @include('partials.help-section')

            <!-- Additional content can be added here -->
        </div>
    </div>
</div>
@endsection
