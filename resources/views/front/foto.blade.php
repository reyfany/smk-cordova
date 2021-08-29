@extends ('front.layout.master')

@section ('content')

<div style="padding-top: 90px; background: rgba(103, 176, 209, 0.8)"></div>
<main id="main" style="margin-top: 0px;">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Detail Foto</h2>
          <ol>
            <li><a href="{{url('/')}}">Beranda</a></li>
            <li><a href="{{url('/galeri')}}">Detail Galeri</a></li>
            <li>Detail Foto</li>
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
              <div class="swiper-wrapper align-items-center">
                <img src="{{asset('front/assets/img/galeri/'.$i->image)}}" alt="">

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Informasi Foto</h3>
              <ul>
                <li><strong>Kategori</strong> : {{$namakategori}}</li>
                <li><strong>Tanggal Upload</strong> : {{$i->updated_at}}</li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Deskripsi Foto</h2>
              <p style="white-space: pre-line;">
                {{$i->deskripsi}}
              </p>
            </div>
          </div>

        </div>
        @endforeach
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  @endsection('content')
