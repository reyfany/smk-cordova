@extends ('front.layout.master')

@section ('content')

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container" data-aos="fade-up">
        <h1>SMK Cordova</h1>
        <h2>Banyuwangi Islamic School<br />Mabadi'ul Ihsan Boarding School Foundation</h2>
        <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
</section>
<!-- End Hero -->

<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                <h2>Tentang Kami</h2>
            </div>
            <div class="row no-gutters" style="margin-top:10px;">
                <div class="content col-xl-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="content">
                        <img src="https://smkcordovabis.sch.id/wp-content/uploads/2020/11/IMG-20201022-WA0001-e1606697480924.jpg" alt="" class="img-thumbnail mb-5" style="width: 600px; height: 470px;">
                        <!-- <h3>Sejarah Singkat</h3>
                        <p>SMK Cordova adalah Sekolah Menengah Kejuruan yang berada dibawah naungan Ma'had Mabadi’ul Ihsan. SMK Cordova memiliki dua jurusan yaitu Jurusan Teknik Pengelasan dan Usaha Perjalanan Wisata.
SMK Cordova beralamatkan di Jln. KH. Achmad Mussayidi No. 2 Karangdoro – Tegalsari.
SMK Cordova Sekolah berbasis Pesantren (Boarding Islamic School</p> -->
                        <a href="{{url('/tentang')}}" class="about-btn">Tentang Kami<i class="bx bx-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-6 d-flex align-items-stretch">
                    <div class="icon-boxes justify-content-center">
                        <div class="row">
                            <div class="col-md-12 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <!-- <h4>Visi</h4>
                                <p>Mandiri, Inovatif, Handal dan Berakhlak Mulia (MIHA)</p> -->
                                <h3><b>Sejarah Singkat</b></h3>
                                <br>
                            <p>SMK Cordova adalah Sekolah Menengah Kejuruan yang berada dibawah naungan Ma'had Mabadi’ul Ihsan. SMK Cordova memiliki dua jurusan yaitu 
                            Jurusan Teknik Pengelasan dan Usaha Perjalanan Wisata.SMK Cordova beralamatkan di Jln. KH. Achmad Mussayidi No. 2 Karangdoro – 
                            Tegalsari.SMK Cordova Sekolah berbasis Pesantren (Boarding Islamic School</p>
                            </div>
                            <div class="col-md-12 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <h4 class="text-center">Visi</h4>
                                <p>Mandiri, Inovatif, Handal dan Berakhlak Mulia (MIHA)</p>
                                <h4 class="text-center">Misi</h4>
                                <p>
                                    <ul>
                                    <li>Menanamkan Pendidikan Yang Berkarakter berlandaskan iman dan taqwa.</li>
                                    <li>Melaksanakan 8 Standart Nasional Pendidikan.</li>
                                    <li>Membentuk sikap kemandirian dan jiwa entrepreneurship yang dinamis melalui program Entreprenuership Labolatory.</li>
                                    <li>Menumbuhkan nilai-nilai karakter yang berorientasi pada kreativitas dan inovasi.</li>
                                    <li>Membentuk SDM unggul yang mampu menciptakan peluang kerja dan bersaing di dunia Kerja.</li>
                                    <li>Meningkatkan hubungan dan kerjasama dengan stakeholder dan Dunia Kerja/Industri.</li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End .content-->
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                <h2>Kejuruan</h2>
                <p>
                    SMK Cordova berada dibawah naungan Ma'had Mabadi'ul Ihsan, Karangdoro-Tegalsari. </p>
                    <br> Memiliki 2 kejuruan, Teknik Pengelasan dan Usaha Perjalanan Wisata.  <br> 

            </div>
            <style>
                @import url(@import url(https://fonts.googleapis.com/css?family=Lato:400,300);
                @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css);
                .description {
                     text-align: justify;
                    }
                #read {
                line-height:1em;
                letter-spacing:0.06em;
                font-family: 'Lato', sans-serif;
                font-weight:normal;
                font-size:16px;
                text-decoration:none;
                color:#fff;
                background:#231f20;
                display:inline-block;
                padding:15px 12px 15px 15px;
                transition:background 200ms;
                border-radius:10px;
                }
                #read:hover {
                background: #0dcaf0;
                }
                #read:after {
                font-family: 'FontAwesome', sans-serif;
                font-weight:300;
                content: "\f105";
                margin-left:20px;
                color:#fff;
                font-size:18px;
                vertical-align:middle;
                transition:color 200ms;
                }
                #read:hover:after {
                color: #fff;
}
    </style>
            <div class="row">
                <div class="col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                    <!-- <a href="{{url('/teknik-pengelasan')}}"> -->
                        <div div class="icon-box" data-aos="fade-up" >
                            <img src="{{asset('images/pengelasan.jpeg')}}" alt="Teknik-Pengelasan" class="img-thumbnail mb-4">
                            <h4 class="title text-center text-justify">Teknik Pengelasan</h4>
                            <p class="description">Jurusan teknik pengelasan mempelajari pekerjaan pengelasan pada bahan besi atau baja, hampir seluruh logam dalam 
                                proses produksinya harus dilakukan pengelasan.Kemajuan Teknologi pengelasan akhir-akhir ini sangatlah membantu dalam pekerjaan 
                                pembuatan konstruksi baik yang sederhana maupun konstruksi yang mempunyai tingkat kesulitan dan persyaratan tinggi. Pengelasan 
                                merupakan bidang yang sangat dibutuhkan oleh Dunia Industri utamanya untuk industri perkapalan dan rekayasa umum serta bidang-bidang 
                                lain yang berhubungan dengan penyambungan konstruksi dimana pengelasan merupakan faktor utamanya. Peluang kerja dalam teknik las itu 
                                banyak sekali, apabila memang kita berbakat  dalam skill mengelas dan tidak mempunyai modal untuk membuka bengkel las sendiri, kita 
                                bisa juga untuk melamar pekerjaan pada perusahaan – perusahaan besar yang membutuhkan para pekerja yang sudah ahli dalam teknik 
                                pengelasan, salah satu perusahaan yang sangat membutuhkan banyak teknik las adalah PT. KAI, dimana perusahaan ini bergerak di bidang 
                                pembuatan gerbong kereta. Perusahaan tersebut sangatlah besar untuk membutuhkan seseorang yang ahli dalam skill teknik pengelasan.
                            </p>
                            <a href="{{url('/teknik-pengelasan')}}" id="read">Selengkapnya</a>
                        </div>
                </div>

                <div class="col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                    <!-- <a href="{{url('/usaha-perjalanan-wisata')}}"> -->
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <img src="{{asset('images/wisata.jpg')}}" alt="Perjalanan Wisata" class="img-thumbnail mb-4" style="width: 600px; height: 280px;">
                            <h4 class="title text-center">Usaha Perjalanan Wisata</h4>
                            <p class="description text-align-justify">Pariwisata di Indonesia sedang mengalami perkembangan yang cukup pesat dan menjadikan bidang ini
                                sebagai salah satu bidang yang sangat menjanjikan di masa depan. Ilmu Pariwisata berhubungan erat dengan sejarah, geografi, budaya, 
                                ekonomi, dan sebagainya. Bidang ilmu ini mempelajari sumber daya pariwisata, pembangunan kawasan pariwisata, juga manajemen
                                perhotelan. Bekal pengetahuan tersebut sangat berguna ketika kita bekerja di industri pariwisata seperti agen perjalanan maupun 
                                perhotelan.Prospek Jurusan Usaha perjalanan Wisata :Lulusan Pariwisata memiliki prospek yang cerah seiring dengan semakin 
                                berkembangnya industri pariwisata. Jadi tidak perlu khawatir ya soal pekerjaan. Kamu berkesempatan untuk mengunjungi berbagai 
                                destinasi wisata yang ada di dunia. Kapan lagi kan kerja sambil jalan-jalan? Terjun ke dunia pariwisata akan membuatmu semakin 
                                kaya dengan pengalaman. Bekerja di industri pariwisata memungkinkanmu bertemu orang-orang dari berbagai wilayah, dengan begitu akan
                                semakin luas wawasanmu. Lulusan Pariwisata juga dibutuhkan di instansi pemerintah seperti Kementerian Pariwisata. Selain itu, 
                                kawasan wisata milik pemerintah dalam pengelolaannya juga memerlukan Sarjana Pariwisata.
                            </p>
                            <a href="{{url('/usaha-perjalanan-wisata')}}" id="read">Selengkapnya</a>
                        </div>
                    <!-- </a> -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box text-center">
                    <span data-purecounter-start="0" data-purecounter-end="21" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Tenaga Pendidik</strong></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box text-center">
                    <span data-purecounter-start="0" data-purecounter-end="101" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Siswa</strong></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box text-center">
                    <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Ekstrakulikuler</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Portfolio Section ======= -->
    <section id="extra" class="portfolio">
        <div class="container">
            <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                <h2>Ekstrakurikuler</h2>
                <p>
                    Kegiatan Ekstrakurikuler SMK Cordova
                </p>
            </div>

            <div class="row" data-aos="fade-in">
                <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">Semua</li>
                    <li data-filter=".kategori1">Paskibraka</li>
                    <li data-filter=".kategori2">Hadrah</li>
                    <li data-filter=".kategori3">Paduan Suara</li>
                    <li data-filter=".kategori4">Seni Musik</li>
                </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up">
                    @foreach($extra as $i=>$row)
                <div class="col-lg-4 col-md-6 portfolio-item {{'kategori'.$row->id_kategori}}">
                    <div class="portfolio-wrap">
                        <img src="{{asset('front/assets/img/extra/'.$row->image)}}" class="img-fluid" alt="" />
                        <div class="portfolio-links">
                            <a href="{{asset('front/assets/img/extra/'.$row->image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$row->nama_foto}}"><i class="bx bx-plus"></i></a>
                            <a href="{{route('front-extra.show',$row->id)}}" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
            <div>
                <a href="{{('/front-extra')}}" class="galeri-btn" data-aos="fade-up">Lihat foto lainnya<i class="bx bx-chevron-right"></i></a>
            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                <h2>Galeri</h2>
                <p>
                    Foto - foto kegiatan SMK Cordova
                </p>
            </div>

            <div class="row" data-aos="fade-in">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">Semua</li>
                        <li data-filter=".kategori1">Pelajaran</li>
                        <li data-filter=".kategori2">Rutinitas</li>
                        <li data-filter=".kategori3">Ekstrakulikuler</li>
                        <li data-filter=".kategori4">lain-lain</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up">
                    @foreach($galeri as $i=>$row)
                <div class="col-lg-4 col-md-6 portfolio-item {{'kategori'.$row->id_kategori}}">
                    <div class="portfolio-wrap">
                        <img src="{{asset('front/assets/img/galeri/'.$row->image)}}" class="img-fluid" alt="" />
                        <div class="portfolio-links">
                            <a href="{{asset('front/assets/img/galeri/'.$row->image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$row->nama_foto}}"><i class="bx bx-plus"></i></a>
                            <a href="{{route('front-galeri.show',$row->id)}}" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
            <div>
                <a href="{{('/front-galeri')}}" class="galeri-btn" data-aos="fade-up">Lihat foto lainnya<i class="bx bx-chevron-right"></i></a>
            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container">
            <div class="section-title" data-aos="fade-in" data-aos-delay="100">
            <h2>Kata-kata Guru</h2>
            <p>
                Dari generasi ke generasi kami memiliki guru yang sangat ...
            </p>
            </div>

            <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                <div class="testimonial-item">
                    <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    “Mudahkanlah orang lain, maka kau akan dipermudah. Bahagiakan orang lain, maka kau akan bahagia”
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="{{asset('front/assets/img/testimonials/DSC_0111.JPG')}}" class="testimonial-img" alt="" />
                    <h3>KH. Masykur Wardi</h3>
                    <h4>Pengasuh Yayasan Pondok Pesantren Mabadi'ul Ihsan</h4>
                </div>
                </div>
                <!-- End Kata-kata guru -->

                <div class="swiper-slide">
                <div class="testimonial-item">
                    <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    “Barang siapa yang memandang rendah terhadap orang lain maka saat itulah kita jatuh pada titik terendah dalam pandangan Allah”
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="{{asset('front/assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="" />
                    <h3>KH. Masykur Wardi</h3>
                    <h4>Pengasuh Ma'had Mabadi'ul Ihsan</h4>
                </div>
                </div>
                <!-- End Kata-kata guru -->

                <div class="swiper-slide">
                <div class="testimonial-item">
                    <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    “Santri harus menjadi benteng terakhir bagi ideologi dan nasionalisme NKRI. Untuk itu, mari bersama-sama kita kuatkan kembali semangat kebangsaan, nasionalisme, ukhuwah islamiyah, ukhuwah wathoniah, dan ukhuwah basariyah”
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="{{asset('front/assets/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="" />
                    <h3>KH. Abdullah Azwar Anas</h3>
                    <h4>Pembina Yayasan Ponpes Mabadi'ul Ihsan</h4>
                </div>
                </div>
                <!-- End Kata-kata guru item -->

                <div class="swiper-slide">
                <div class="testimonial-item">
                    <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    “Tidak akan bisa faham suatu ilmu, jika orang tersebut tidak menyukai ilmu”
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="{{asset('front/assets/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="" />
                    <h3>H. Moh. Badrodin Zuhri, M.Pd.I</h3>
                    <h4>Kepala SMK Cordova</h4>
                </div>
                </div>
                <!-- End Kata-kata guru item -->

                <div class="swiper-slide">
                <div class="testimonial-item">
                    <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    “Amaliah’e santri yaiku sholat jama’ah, wiridan, nderes Al-Qur'an”
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="{{asset('front/assets/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="" />
                    <h3>- Alm. K.H Achmad Mussayidi Munaqib-</h3>
                    <h4>Pendiri Yayasan Ponpes Mabadi'ul Ihsan</h4>
                </div>
                </div>
                <!-- End Kata-kata guru item -->
            </div>
            <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- End Kata-kata guru Section -->

    <!-- ======= Team Section ======= -->
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
                @foreach($berita as $b)
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
            <div>
                <a href="{{('/front-berita')}}" class="berita-btn" data-aos="fade-up">Lihat berita lainnya<i class="bx bx-chevron-right"></i></a>
            </div>

        </div>
    </section>
    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Kontak</h2>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Alamat Kami</h3>
                        <p>Jl KH Ach Musayyidi, Karangdoro, Tegalsari, <br> Kabupaten Banyuwangi, Jawa Timur 68485</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Kami</h3>
                        <p>smkcordova@gmail.com <br>smkcordova@gmail.sch.id</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Kontak Kami</h3>
                        <p>081654917186 <br>085336180725</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <iframe
                    class="mb-4 mb-lg-0"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.9086136240294!2d114.10184741433338!3d-8.410636087218961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd401607adae9db%3A0xa43fc09dd7408dc!2sSMK%20CORDOVA!5e0!3m2!1sid!2sid!4v1628424402189!5m2!1sid!2sid"
                    frameborder="0"
                    style="border: 0; width: 100%; height: 384px"
                    allowfullscreen
                    ></iframe>
                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <h3 style="text-align: center; font-size: 20px;color: #777777;font-weight: 700; margin: 15px;">Kritik dan Saran</h3>
                        <div class="row">
                            <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required />
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required />
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required />
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="3" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->
</main>
<!-- End #main -->


@endsection ('content')
