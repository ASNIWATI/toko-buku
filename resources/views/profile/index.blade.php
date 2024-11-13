@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div style="margin-top: 60px;">
    <h2>Profile</h2>
    <div style="margin-top: 20px; background-color: #f4f4f9; padding: 20px; border-radius: 8px;">
        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <!-- Tambahkan detail profile lain di sini jika ada -->
    </div>

    <!-- Tombol Edit Profile -->
    <a href="{{ route('profile.edit') }}" style="display: inline-block; margin-top: 20px; padding: 10px 20px; background-color: #34495e; color: white; text-decoration: none; border-radius: 5px;">Edit Profile</a>
</div>
@endsection
