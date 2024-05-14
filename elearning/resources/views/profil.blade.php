@php
    $username = 'Firenze Higa Putra';
    $role = 'Admin';
@endphp

@if($role == 'Admin')
    <h3>Selamat Datang, {{ $username }}! Anda adalah seorang {{ $role }}</h3>
@else
    <h3>Selamat Datang, {{ $username }}! Anda adalah seorang User</h3>
@endif