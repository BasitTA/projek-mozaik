@extends('layout.mainAdmin')

@section('title','DARE')

@section('container')
    <div class="">
        <br>
        <div class="text-center">
            <a href="/admin/newDare" class="btn btn-primary text-light">Input New Dare</a>
        </div><br>
        <div class="row text-center justify-content-center">
            <!-- <div class="card col-sm-3 col-lg-2 mr-3 mb-3" style="width: 18rem;">
                <img class="card-img-top my-2" style="height:200px; wight:auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTggxo63gYn_1NKTmgNcvIbzV6uljAJFRcayOg63Qfdxf8g3sfd" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Takut hantu</h5>
                    <p class="card-text">Ngapain takut sama hantu, orang hantu gabisa gigit</p>
                    <a href="" class="btn btn-primary">Klik di sini biar ga takut lagi :)</a>
                </div>
            </div>
            <div class="card col-sm-3 col-lg-2 mr-3 mb-3" style="width: 16rem;">
                <img class="card-img-top my-2" style="height:200px; wight:auto" src="https://image.freepik.com/free-vector/kids-having-fun-swimming-sea_3446-232.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Takut Berenang</h5>
                    <p class="card-text">Berenang itu menyenangkan kok, kamu bisa main sama temen kamu</p>
                    <a href="#" class="btn btn-primary">Klik di sini biar ga takut lagi :)</a>
                </div>
            </div> -->
            <!-- <div class="card col-sm-3 col-lg-2 mr-3 mb-3" style="width: 18rem;">
                <img class="card-img-top my-2" style="height:200px; wight:auto" src="https://i.ytimg.com/vi/tQ5R9szv_sM/maxresdefault.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Takut Dokter</h5>
                    <p class="card-text">Ngapain takut sama dokter, dokter baik loh suka ngasih permen</p>
                    <a href="#" class="btn btn-primary">Klik di sini biar ga takut lagi :)</a>
                </div>
            </div> -->

            @foreach($dares as $dare)
            <div class="card col-sm-3 col-lg-2 mr-3 mb-3" style="width: 18rem;">
                <img class="card-img-top my-2" style="height:200px; weight:auto" src="{{$dare->gambar}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$dare->judul}}</h5>
                    <p class="card-text">{{$dare->teks}}</p>
                    <a href="" class="btn btn-warning">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </div>
            </div>
            @endforeach
    </div>
@endsection