@extends ('front.layout.master')

@section ('content')

<div style="padding-top: 90px; background: rgba(103, 176, 209, 0.8)"></div>
<main id="main" style="margin-top: 0px;">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Detail Berita</h2>
          <ol>
            <li><a href="{{url('/')}}">Beranda</a></li>
            <li><a href="{{url('/galeri')}}">Berita</a></li>
            <li>Detail Berita</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        @foreach($data as $i)
        <div class="row gy-4">
          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper-container">
              <h3>{{$i->judul_berita}}</h3>
              <p>
                <span>{{$i->created_at->format('H:i D, d-M-Y')}}</span> |
                <span>{{$namakategori}}</span> |
                <span>by </span>
              </p>
              <img src="{{asset('front/assets/img/berita/'.$i->foto_berita)}}" alt="">
              <div class="portfolio-info" style="white-space: pre-line;">
                {{$i->isi_berita}}
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Recent Post</h3>
              <ul>
                <li> <a href="">Judul Berita Lain</a></li>
                <li> <a href="">Judul Berita Lain</a></li>
              </ul>
              <br>
              <h3>Kategori</h3>
              <ul>
                <li> <a href="{{url('/front-berita/')}}">Sekolah</a></li>
                <li> <a href="{{url('/front-detail/')}}">Pesantren</a></li>
              </ul>
            </div>
          </div>

        </div>
        @endforeach
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  @endsection('content')
