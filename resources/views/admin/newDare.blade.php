@extends('layout.mainAdmin')

@section('title','NEW DARE')

@section('container')
<div class="container">
    <form method="POST" action="/admin" class="mt-3">    
        <div class="form-group">
            <label for="exampleInputEmail1">URL Gambar</label>
            <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="URL gambar">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Ketakutan</label>
            <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama hal yang ditakuti anak">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Kalimat Motivasi</label>
            <input type="" class="form-control" id="exampleInputPassword1" placeholder="Kalimat agar anak tidak takut">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Deskripsi Ketakutan</label>
            <input type="" class="form-control" id="exampleInputPassword1" placeholder="Deskripsi spesifik dari ketakutan anak">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">URL Video</label>
            <input type="" class="form-control" id="exampleInputPassword1" placeholder="URL Video">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection