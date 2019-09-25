@extends('layout.main')

@section('title','DARE LIST')

@section('container')
    <div class="container">
        <h3 class="text-center mt-2 mb-2">{{$dare->judul}}</h3>
        <div class="jumbotron text-center">
            <div class="text-left" style="margin-top:-30px">
                <a href="/dare" class="text-primary"><< Kembali</a><br>
            </div>
            <img src="{{$dare->gambar}}" class="mt-3" style="height:200px; weight:auto" alt="">
            <p class="lead mt-3">Kamu aman di sini. Hantu itu hidup di dunia lain kok, enggak mungkin muncul di kamarmu atau toilet</p>
            <hr class="my-4">
            <p>Yuk pencet tombol di bawah ini biar kamu ga takut lagi :D</p>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#putarVideo">
                Tonton Video
            </button>

            <!-- Modal -->
            <div class="modal fade" id="putarVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Dare Video</h5>
                    </div>
                    <div class="modal-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HNJNqyM2_eY" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <p class="text-muted"><small>Source: Youtube.com</small></p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <script>jQuery(".modal-backdrop, #myModal .close, #myModal .btn").live("click", function() {
        jQuery("#myModal iframe").attr("src", jQuery("#myModal iframe").attr("src"));
});
    </script>
@endsection
