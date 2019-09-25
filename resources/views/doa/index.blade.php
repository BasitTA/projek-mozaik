@extends('layout.main')

@section('title','DOA')

@section('container')
<div class="">
    <div class="row text-center justify-content-center mt-2">
        <div class="card col-sm-3 col-lg-2 mr-3 mb-3" style="width: 18rem;">
            <img class="card-img-top my-2" style="height:200px; weight:auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-TKTuuwCsERbprVcLEqyCgPBDXTLLCknw830U1rhlhzpG4C5x" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Doa Makan</h5>
                <p class="card-text">اَللّٰهُمَّ بَارِكْ لَنَا فِيْمَا رَزَقْتَنَا وَقِنَا عَذَابَ النَّارِ</p><!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tampilkanDoa1">
                Tampilkan Doa
                </button>

                <!-- Modal -->
                <div class="modal fade" id="tampilkanDoa1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Doa Sebelum Makan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="text-right">اَللّٰهُمَّ بَارِكْ لَنَا فِيْمَا رَزَقْتَنَا وَقِنَا عَذَابَ النَّارِ</p>
                                <p class="font-weight-bold">Alloohumma baarik lanaa fiimaa razaqtanaa waqinaa 'adzaa bannar</p>
                                <p>"Ya Allah, berkahilah kami dalam rezeki yang telah Engkau berikan kepada kami dan peliharalah kami dari siksa api neraka"</p>
                            </div>
                            <div class="modal-footer">
                                <p class="text-muted"><small>Source: DoaAnakSholeh.com</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card col-sm-3 col-lg-2 mr-3 mb-3" style="width: 18rem;">
            <img class="card-img-top my-2" style="height:200px; weight:auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_OeJXVgkqZnQIG1ef7OZ7cjehmTSXSsty9PAJ9q2P4Mf3WaKQoA" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Doa Ga Takut Setan</h5>
                <p class="card-text">...اللَّهُ لَا إِلَهَ إِلَّا هُوَ الْحَيُّ الْقَيُّومُ لَا تَأْخُذُهُ سِنَةٌ وَلَا نَوْمٌ لَهُ مَا فِي السَّمَاوَاتِ وَمَا فِي الْأَرْضِ مَنْ ذَا الَّذِي يَشْفَعُ عِنْدَهُ إِلَّا بِإِذْنِهِ يَعْلَمُ مَا بَيْنَ </p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tampilkanDoa2">
                Tampilkan Doa
                </button>

                <!-- Modal -->
                <div class="modal fade" id="tampilkanDoa2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Doa Ga Takut Setan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="text-right">اللَّهُ لَا إِلَهَ إِلَّا هُوَ الْحَيُّ الْقَيُّومُ لَا تَأْخُذُهُ سِنَةٌ وَلَا نَوْمٌ لَهُ مَا فِي السَّمَاوَاتِ وَمَا فِي الْأَرْضِ مَنْ ذَا الَّذِي يَشْفَعُ عِنْدَهُ إِلَّا بِإِذْنِهِ يَعْلَمُ مَا بَيْنَ أَيْدِيهِمْ وَمَا خَلْفَهُمْ وَلَا يُحِيطُونَ بِشَيْءٍ مِنْ عِلْمِهِ إِلَّا بِمَا شَاءَ وَسِعَ كُرْسِيُّهُ السَّمَاوَاتِ وَالْأَرْضَ وَلَا يَئُودُهُ حِفْظُهُمَا وَهُوَ الْعَلِيُّ الْعَظِيمُ</p>
                                <p class="font-weight-bold">Allahu laa ilaaha illa huwal haiyul qaiyyum, laa takhudzuhuu sinatuw walaa nauum, lahu maa fii samaawaati wamaa fil 'ardhi, man dzalladzi yasyfau indahuu illa biidznih, yaklamu maa baina aidiihim wa maa khalfahum, wa laa yukhiituuna bi syaiin min 'ilmihii illaa bimaasyaak, wasi'a kursiyyuhus samaawaati wal 'ardla, wa laa yauuduhuu hifdzuhumaa wa huwal 'aliyyul adziim.</p>
                                <p>"Allah, tidak ada ilah (yang berhak disembah) melainkan Dia, yang hidup kekal lagi terus menerus mengurus (makhluk-Nya). Dia tidak mengantuk dan tidak tidur. Kepunyaan-Nya apa yang di langit dan di bumi. Tiada yang dapat memberi syafa'at di sisi-Nya tanpa seizin-Nya. Dia mengetahui apa-apa yang di hadapan mereka dan di belakang mereka. Mereka tidak mengetahui apa-apa dari ilmu Allah melainkan apa yang dikehendaki-Nya. Kursi Allah meliputi langit dan bumi. Dia tidak merasa berat memelihara keduanya. Dan Dia Maha Tinggi lagi Maha besar."</p>
                            </div>
                            <div class="modal-footer">
                                <p class="text-muted"><small>Source: DoaAnakSholeh.com</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection