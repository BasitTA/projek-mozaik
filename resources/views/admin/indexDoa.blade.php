@extends('layout.mainAdmin')

@section('title','DOA')

@section('container')
<div class="container">
    <br>
    <div class="text-center">
        <a href="/admin/newDare" class="btn btn-primary text-light">Input New Doa</a>
    </div><br>
    <table class="table mt-1">
    <thead class="thead-dark">
        <tr>
        <th scope="col">No</th>
        <th scope="col">Judul</th>
        <th scope="col">Doa</th>
        <th scope="col">Latin</th>
        <th scope="col">Arti</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Doa Sebelum Makan</td>
        <td>اَللّٰهُمَّ بَارِكْ لَنَا فِيْمَا رَزَقْتَنَا وَقِنَا عَذَابَ النَّارِ</td>
        <td>Alloohumma baarik lanaa fiimaa razaqtanaa waqinaa 'adzaa bannar</td>
        <td>Ya Allah, berkahilah kami dalam rezeki yang telah Engkau berikan kepada kami dan peliharalah kami dari siksa api neraka</td>
        <td>
            <a href="" class="btn btn-warning btn-sm mb-1 mr-1">Edit</a>
            <a href="" class="btn btn-danger btn-sm">Delete</a>
        </td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Doa Sebelum Makan</td>
        <td>اَللّٰهُمَّ بَارِكْ لَنَا فِيْمَا رَزَقْتَنَا وَقِنَا عَذَابَ النَّارِ</td>
        <td>Alloohumma baarik lanaa fiimaa razaqtanaa waqinaa 'adzaa bannar</td>
        <td>Ya Allah, berkahilah kami dalam rezeki yang telah Engkau berikan kepada kami dan peliharalah kami dari siksa api neraka</td>
        <td>
            <a href="" class="btn btn-warning btn-sm mb-1 mr-1">Edit</a>
            <a href="" class="btn btn-danger btn-sm">Delete</a>
        </td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td>Doa Sebelum Makan</td>
        <td>اَللّٰهُمَّ بَارِكْ لَنَا فِيْمَا رَزَقْتَنَا وَقِنَا عَذَابَ النَّارِ</td>
        <td>Alloohumma baarik lanaa fiimaa razaqtanaa waqinaa 'adzaa bannar</td>
        <td>Ya Allah, berkahilah kami dalam rezeki yang telah Engkau berikan kepada kami dan peliharalah kami dari siksa api neraka</td>
        <td>
            <a href="" class="btn btn-warning btn-sm mb-1 mr-1">Edit</a>
            <a href="" class="btn btn-danger btn-sm">Delete</a>
        </td>
        </tr>
    </tbody>
    </table>
</div>
@endsection