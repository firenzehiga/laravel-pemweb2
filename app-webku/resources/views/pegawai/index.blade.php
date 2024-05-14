<x-layout>
    <x-slot name="card_title">Dashboard Pegawai</x-slot>
    <h3>Selamat Datang Pegawai {{ $username ?? ''}} !</h3>
    <p>Nama : {{ $name }}</p>
    <p>Umur : {{ $umur }}</p>
</x-layout>