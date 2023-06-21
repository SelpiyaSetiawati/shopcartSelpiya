@extends('admin')
@section('konten')
<style>
    body{
        background-color: rgb(235, 235, 235);
    }
</style>
<div class="text-center py-5 mt-5">
    <h2>Hallo,Selamat Datang {{ Auth::user()->name }}</h2>
</div>

@endsection