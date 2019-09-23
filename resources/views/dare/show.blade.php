@extends('layout.main')

@section('title','DARE LIST')

@section('container')
    <div class="">
        <h3 class="text-center mt-2 mb-2">{{$dare->judul}}</h3>
        <div class="jumbotron text-center justify-content-center">
            <h1 class="display-4">{{$dare->judul}}</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
    </div>
@endsection