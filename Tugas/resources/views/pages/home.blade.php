@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <h1>Selamat datang, {{$name}}</h1>
    <div class="container">
        <header class="blog-header py-3">
          <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
              <a class="text-muted" href="#">Subscribe</a>
            </div>
            <div class="col-4 text-center">
              <a class="blog-header-logo text-dark" href="#">Large</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
              <a class="text-muted" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
              </a>
              <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
            </div>
          </div>
        </header>

        <div class="nav-scroller py-1 mb-2">
          <nav class="nav d-flex justify-content-between">
            <a class="p-2 text-muted" href="#">World</a>
            <a class="p-2 text-muted" href="#">U.S.</a>
            <a class="p-2 text-muted" href="#">Technology</a>
            <a class="p-2 text-muted" href="#">Design</a>
            <a class="p-2 text-muted" href="#">Culture</a>
            <a class="p-2 text-muted" href="#">Business</a>
            <a class="p-2 text-muted" href="#">Politics</a>
            <a class="p-2 text-muted" href="#">Opinion</a>
            <a class="p-2 text-muted" href="#">Science</a>
            <a class="p-2 text-muted" href="#">Health</a>
            <a class="p-2 text-muted" href="#">Style</a>
            <a class="p-2 text-muted" href="#">Travel</a>
          </nav>
        </div>

        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
          <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">Attack On Titan Perdaya Fans dengan Akhir Bahagia Berujung Bencana di Chapter 138</h1>
            <p class="lead my-3">Attack on Titan Chapter 138 Makin Buat Fans Penasaran.</p>
            <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
          </div>
        </div>

      <main role="main" class="container">
        <div class="row">
          <div class="col-md-8 blog-main">

            <div class="blog-post">
              <h2 class="blog-post-title">Rekor! Manga Jujutsu Kaisen Volume 15 Bakal Dicetak 1,5 Juta Eksemplar </h2>
              <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

              <p>Manga Jujutsu Kaisen karya Gege Akutami kembali menuai prestasi di industri manga Jepang. Volume ke-15 yang segera terbit rencananya bakal dicetak sebanyak 1,5 juta eksemplar. <br>

                Ini adalah pertama kalinya manga dicetak lebih dari 1 juta eksemplar untuk satu volume. Penerbit Shueisha melaporkan Jujutsu Kaisen volume 15 yang dicetak termasuk salinan digital. <br>

                Secara keseluruhan, manga Jujutsu Kaisen laku terjual sebanyak 36 juta eksemplar yang beredar di Jepang. <br>
                "Tiga minggu lalu pada 9 Februari, data yang masuk ke dalam Shueisha telah beredar 30 juta kopi," tulis keterangan Shueisha seperti dilansir dari Anime News Network, Rabu (3/3/2021). <br>

                Sejak 5 bulan terakhir, penjualan jumlah manga yang beredar meningkat lebih dari 420 % sejak pemutaran versi anime pada Oktober 2020. <br>

                Sirkulasi manganya pun meningkat sekitar 16 juta eksemplar dalam waktu kurang dari dua bulan. Dari data yang dilaporkan Shueisha, awal Oktober 2020 manga Jujutsu Kaisen baru terjual 8,5 juta eksemplar. <br>

                Angkanya pun bertambah menjadi 10 juta eksemplar pada 29 Oktober 2020. Pada 13 Januari 2021, manga Jujutsu Kaisen terjual sebanyak 20 juta eksemplar. <br>
</p>
<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal" style="margin-bottom: 30px;">Klik gan</button>
<x-modal id="modal">
    @slot('header')
        Lanjut ?
    @endslot
    Apakah akan lanjut ke page berikutnya ?
    @slot('footer1')
        Lanjut
    @endslot
    @slot('footer2')
        Jangan
    @endslot
</x-modal>
@stop

@section('js')
    <script></script>
@stop

