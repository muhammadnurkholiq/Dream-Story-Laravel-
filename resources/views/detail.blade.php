@extends('layouts.main')

@section('content')
    <div class="content">
        <div class="container">
            {{-- detail flex  --}}
            <div class="detail-flex">
                {{-- thumbnail --}}
                <div class="thumbnail">
                    <img src="image/dilan.jpg" alt="">
                </div>
                {{-- ending thumbnail --}}

                {{-- detail --}}
                <div class="detail">
                    <h1>Dilan 1990</h1>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <h2>Chapter 1 | 25.000 views | 2 followers | Author Pidi Baiq</h2>
                    <h2 class="sinopsis">Sinopsis</h2>
                    <hr>
                    <h2>Dilan 1990 bercerita tentang pertemuan yang dialami oleh dua remaja yang masih sekolah di SMA. Film ini mengangkat sebuah kisah romansa remaja SMA di Bandung yang bernama Dilan dan Milea. Awalnya, Dilan dan Milea bertemu di salah satu SMA di Bandung pada tahun 1990. Saat itu Milea merupakan anak pindahan dari Jakarta. 
                    Ketika Milea pergi ke sekolah, ia bertemu dengan teman yang satu sekolahnya. Teman laki-laki itu suka meramal. Teman laki-laki itu mengatakan jika nanti Milea dengan dirinya akan ketemu di kantin sekolah.
                    Melia pun acuh dan tidak terlaku menggubrisnya. Justru Milea merasa terganggu karena selalu menghampirinya setiap hari. Ternyata laki-laki itu bernama Dilan.
                    Dilan mendekati Milea dengan cara yang unik dan berbeda dengan laki-laki lainnya. Bahkan beda dengan Beni, pacar Milea di Jakarta. Hal itu membuat Milea terus memikirkannya.</h2>
                    <div class="buttons">
                        <a href="/story" class="btn btn-first">Read First</a>
                        <a href="/story" class="btn btn-last">Read Last</a>
                    </div>
                </div>
                {{-- ending detail --}}
            </div>
            {{-- ending  detail flex  --}}

            {{-- chapter --}}
            <div class="chapter">
                <h1>Latest Chapter Release</h1>
                <hr class="hr2">
                {{-- chapter scroll  --}}
                <div class="chapter-scroll">
                    {{-- chapter data --}}
                    <a href="/story">
                        <div class="chapter-data">
                            <h2><strong>Chapter 1 : </strong>Dilan 1</h2>
                            <h2>09 Desember 2021</h2>
                        </div>
                    </a>
                    <hr>
                    <a href="/story">
                        <div class="chapter-data">
                            <h2><strong>Chapter 2 : </strong>Dilan 2</h2>
                            <h2>09 Desember 2021</h2>
                        </div>
                    </a>
                    <hr>
                    <a href="/story">
                        <div class="chapter-data">
                            <h2><strong>Chapter 1 : </strong>Dilan 1</h2>
                            <h2>09 Desember 2021</h2>
                        </div>
                    </a>
                    <hr>
                    <a href="/story">
                        <div class="chapter-data">
                            <h2><strong>Chapter 2 : </strong>Dilan 2</h2>
                            <h2>09 Desember 2021</h2>
                        </div>
                    </a>
                    <hr>
                    <a href="/story">
                        <div class="chapter-data">
                            <h2><strong>Chapter 1 : </strong>Dilan 1</h2>
                            <h2>09 Desember 2021</h2>
                        </div>
                    </a>
                    <hr>
                    <a href="/story">
                        <div class="chapter-data">
                            <h2><strong>Chapter 2 : </strong>Dilan 2</h2>
                            <h2>09 Desember 2021</h2>
                        </div>
                    </a>
                    <hr>
                    <a href="/story">
                        <div class="chapter-data">
                            <h2><strong>Chapter 1 : </strong>Dilan 1</h2>
                            <h2>09 Desember 2021</h2>
                        </div>
                    </a>
                    <hr>
                    <a href="/story">
                        <div class="chapter-data">
                            <h2><strong>Chapter 2 : </strong>Dilan 2</h2>
                            <h2>09 Desember 2021</h2>
                        </div>
                    </a>
                    <hr>
                    <a href="/story">
                        <div class="chapter-data">
                            <h2><strong>Chapter 1 : </strong>Dilan 1</h2>
                            <h2>09 Desember 2021</h2>
                        </div>
                    </a>
                    <hr>
                    <a href="/story">
                        <div class="chapter-data">
                            <h2><strong>Chapter 2 : </strong>Dilan 2</h2>
                            <h2>09 Desember 2021</h2>
                        </div>
                    </a>
                    <hr>
                    {{-- chapter data --}}
                </div>
                {{-- ending chapter scroll --}}
            </div>
            {{-- ending chapter --}}
        </div>
    </div>
@endsection