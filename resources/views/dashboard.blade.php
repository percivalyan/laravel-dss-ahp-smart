@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <div class="main-title">Admin Dashboard</div>
            <div class="card" style="padding: 20px; margin-top: 20px;">
                <h4>Welcome, {{ Auth::user()->name }}</h4>
                <p>Total Users: {{ \App\Models\User::count() }}</p>
                <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </main>
@endsection
