@extends('layouts.index')

@section('title', 'Home')

@push('css')
    @vite(['resources/scss/home.scss'])
@endpush

@section('content')
   <div class="content">
        <div class="content__name">Hi, I'm Lê Tuấn</div>
        <div class="content__introduce">I am a web developer</div>
        <div class="content__note">Read more about me or contact me</div>
   </div>
@endsection
