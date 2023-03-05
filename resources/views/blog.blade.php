@extends('layouts.index')

@section('title', 'Blog')

@push('css')
    @vite(['resources/scss/home.scss'])
@endpush

@section('content')
   <div class="content">
       <h1>Blog</h1>
   </div>
@endsection
