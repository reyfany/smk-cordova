@extends ('front.layout.master')

@section ('content')

<div style="padding-top: 90px; background: rgba(103, 176, 209, 0.8)"></div>
<main id="main" style="margin-top: 0px;">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Teknik Pengelasan</h2>
          <ol>
            <li><a href="{{url('/')}}">Beranda</a></li>
            <li><a href="{{url('/#services')}}">Kejuruan</a></li>
            <li>Teknik Pengelasan</li>
          </ol>
        </div>

        <section id="portfolio-details" class="portfolio-details">
          <div class="container">
            <div class="row gy-4">
              <div class="col-lg-7">
                <div class="portfolio-info">
                  <h3>Teknik Pengelasan</h3>
                  <ul>
                    <li><strong>Kategori</strong></li>
                    <li><strong>Tanggal Upload</strong></li>
                  </ul>
                </div>
                <div class="portfolio-description">
                  <h2>Deskripsi Foto</h2>
                  <p style="white-space: pre-line;">
                  </p>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="portfolio-details-slider swiper-container">
                  <div class="swiper-wrapper align-items-center">
                    <img src="https://smkcordovabis.sch.id/wp-content/uploads/2020/11/WhatsApp-Image-2020-11-27-at-14.50.47-1-1024x576.jpeg" alt="Teknik-Pengelasan">
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>

            </div>
          </div>
        </section><!-- End Portfolio Details Section -->

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  @endsection('content')
