@extends ('front.layout.master')

@section ('content')

<!-- ======= Portfolio Section ======= -->
<div style="padding-top: 90px; background: rgba(103, 176, 209, 0.8)"></div>
<section id="team" class="team">
        <div class="container">
            <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                <h2>Berita</h2>
                <p>
                    Berita - berita tentang SMK Cordova
                </p>
            </div>

            <div class="row" data-aos="fade-in">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="team-flters">
                        <li data-filter="*" class="filter-active">Semua</li>
                        <li data-filter=".berita1">Sekolah</li>
                        <li data-filter=".berita2">Pesantren</li>
                    </ul>
                </div>
            </div>
            <div class="row team-container">
                @foreach($data as $b)
                <div class="col-lg-4 col-md-6 team-item {{'berita'.$b->id_kategori_berita}}">
                    <div class="member" data-aos="fade-up">
                        <div class="pic"><img src="{{asset('front/assets/img/berita/'.$b->foto_berita)}}" class="img-fluid" alt="" /></div>
                        <div class="member-info">
                            <h4>{{$b->judul_berita}}</h4>
                            <span>{{ \Illuminate\Support\Str::limit($b->isi_berita, 250, $end='...')}}</span>
                            <div class="social">
                                <a href="{{route('front-berita.show',$b->id)}}" class="about-btn" style="font-size: 13px;">Berita Selengkapnya<i class="bx bx-chevron-right"></i></a>
                            </div>
                            <span class="pt-3">{{$b->created_at->format('D, d-M-Y')}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>
<!-- End Portfolio Section -->
@endsection('content')
