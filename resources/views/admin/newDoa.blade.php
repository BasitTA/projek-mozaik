@extends('layout.mainAdmin')

@section('title','NEW DOA')

@section('container')
<div class="container">
    <form method="POST" action="/admin" class="mt-3">    
        <div class="form-group">
            <label for="">Judul</label>
            <input type="" class="form-control" id="" placeholder="Judul Doa">
        </div>
        <div class="form-group">
            <label for="">Doa</label>
            <input type="" class="form-control" id="" placeholder="Doa (Tulisan Arab)">
        </div>
        <div class="form-group">
            <label for="">Latin</label>
            <input type="" class="form-control" id="" placeholder="Latin (Tulisan Latin)">
        </div>
        <div class="form-group">
            <label for="">Arti</label>
            <input type="" class="form-control" id="" placeholder="Arti Doa">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection