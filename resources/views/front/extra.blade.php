@extends ('front.layout.master')

@section ('content')

<!-- ======= Portfolio Section ======= -->
<div style="padding-top: 90px; background: rgba(103, 176, 209, 0.8)"></div>
<section class="portfolio">
    <div class="container">
        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
            <h2>Ekstrakurikuler</h2>
            <p>
                Kegiatan-kegiatan Ekstrakulikuler
            </p>
        </div>

        <div class="row" data-aos="fade-in">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">Semua</li>
                    <li data-filter=".kategori1">Paskibraka</li>
                    <li data-filter=".kategori2">Hadrah</li>
                    <li data-filter=".kategori3">Paduan Suar</li>
                    <li data-filter=".kategori4">Seni Musik</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">
            @foreach($data as $i)
            <div class="col-lg-4 col-md-6 portfolio-item {{'kategori'.$i->id_kategori}}">
                <div class="portfolio-wrap">
                    <img src="{{asset('front/assets/img/extra/'.$i->image)}}" class="img-fluid" alt="" />
                    <div class="portfolio-links">
                        <a href="{{asset('front/assets/img/extra/'.$i->image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$i->nama_foto}}"><i class="bx bx-plus"></i></a>
                        <a href="{{route('front-extra.show',$i->id)}}" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Portfolio Section -->
@endsection('content')
