@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
    <main class="max-w-6xl mx-auto px-6 py-8">
        <h1 class="text-3xl font-bold mb-6">Admin Dashboard</h1>

        <!-- Card Dashboard -->
        <div class="bg-white shadow rounded-lg p-6">
            <h4 class="text-xl font-semibold mb-2">Welcome, {{ Auth::user()->name }}</h4>
            <p class="text-gray-600 mb-4">Total Users: <span class="font-bold">{{ \App\Models\User::count() }}</span></p>
            {{-- 
            <a href="{{ route('logout') }}"
                class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition">
                Logout --}}
            </a>
        </div>
    </main>
@endsection
