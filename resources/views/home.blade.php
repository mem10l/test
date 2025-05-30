@extends('layouts.app')

@section('title', 'Home - My Laravel App')

@push('styles')
    <style>
        .welcome-section {
            padding: 60px 0;
            text-align: center;
        }
    </style>
@endpush

@section('content')
    <div class="welcome-section">
        <h1>Welcome to My Laravel App</h1>
        <p>This is the home page using our custom layout.</p>
        <a href="{{ route('about') }}" class="btn btn-primary">Learn More</a>
    </div>
@endsection

@push('scripts')
    <script>
        console.log('Home page loaded');
    </script>
@endpush