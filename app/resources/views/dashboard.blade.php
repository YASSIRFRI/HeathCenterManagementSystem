{{-- resources/views/dashboard.blade.php --}}
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <!-- Main Dashboard Content -->
        <div class="col-md-12 ms-auto">
            <!-- Welcome Box -->
            @include('partials.welcome-box')

            <!-- Inventory Overview -->
            @include('partials.inventory-overview')

            <!-- Expiry Tracking -->
            @include('partials.expiry-tracking')

            <!-- Account Information and Help Section Row -->
<div class="row">
    <!-- Account Information Boxes -->
    <div class="col-lg-7 col-md-7 col-sm-12">
        @include('partials.account-info')
    </div>

    <!-- Help Section -->
    <div class="col-lg-5 col-md-5 col-sm-12">
        @include('partials.help-section')
    </div>
</div>
        </div>
    </div>
</div>
@endsection
