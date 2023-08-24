@extends('layout.main')

@section('landing_page')
    
    <!-- Hero area -->
    <section class="hero_area-section" id="hero-section">
      <div class="container-fluid pt-5 custom_hero-section">
        <div class="row">
          <div class="col-4 pt-5 custom_hero-text">
            <h5 class="text-uppercase fs-5 fw-semibold">Welcome</h5>
            <h1 class="text-uppercase fw-bold">Kelas Industri</h1>
            <h2 class="fs-3 mb-3">PT Indonesia Comnet Plus</h2>
            <p>
              Kelas Industri merupakan salah satu program dari PT Icon Plus SBU
              Regional Jawa Bagian Tengah yang ditujukan untuk sekolah vokasi
              dengan berbagai benefit yang akan didapat jika bergabung dengan
              program ini.
            </p>
            <a href="" class="btn rounded-3 shadow">Recent Project</a>
          </div>
          <div class="col-5 pt-2 offset-md-1 custom_hero-image">
            <img src="assets/images/hero.png" alt="" />
            <!--scroll top-->
            <span class="custom_scroll-top" href=""
              ><i class="bi bi-arrow-up-square-fill"></i
            ></span>
          </div>
          <div class="col-1 custom_social-media">
            <h2>FOLLOW US ON</h2>
            <div class="border"></div>
            <div class="social_media-button">
              <a href=""><i class="bi bi-whatsapp"></i></a>
              <a href="https://www.instagram.com/iconnet.jatengdiy/"
                ><i class="bi bi-instagram"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero area -->

    <!-- About Area -->
    <section class="about_area-section pt-5 pb-5 mb-5" id="about-section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-4">
            <img src="assets/images/about.png" alt="" />
          </div>
          <div class="col-5 offset-md-2 custom_about-text">
            <h5 class="text-uppercase fs-5 fw-semibold pt-5">About Us</h5>
            <h2 class="fs-2 mb-2 pt-2 fw-bolder">PT Indonesia Comnet Plus</h2>
            <p>
              Merupakan entitas Anak PT PLN (Persero) yang bergerak di bidang
              jasa penyedia jaringan telekomunikasi ketenagalistrikan serat
              optik sejak tahun 2001.
              <br />
              <br />
              PLN Icon Plus secara konsisten melakukan inovasi produk dan
              layanan dengan mengedepankan kualitas jaringan dan teknologi
              terkini sesuai dengan visi
              <span class="fw-bolder"
                >"Menjadi Penyedia Solusi Teknologi Informasi dan Komunikasi
                (TIK) Terkemuka di Indonesia Berbasis Jaringan Melalui
                Pemanfaatan Aset Strategis".</span
              >
            </p>
            <a href="" class="btn rounded-3 shadow">Read More</a>
          </div>
        </div>
      </div>
    </section>
    <!-- About Area -->

    <!-- services Area -->
    <section
      class="services_area-section mt-5 pt-5 pb-5 ps-5"
      id="services-section"
    >
      <div class="container mt-5">
        <h4 class="text-uppercase fs-5 fw-semibold text-center me-5">
          our services
        </h4>
        <h2 class="text-center fs-3 mb-2 pb-5 fw-bolder me-5">
          Layanan Kelas Industri
        </h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card h-100 card border-0 custom_card-section">
              <img
                src="assets/icons/connectivity.png"
                class="card-img-top"
                alt=""
              />
              <div class="card-body">
                <h5 class="card-title text-center fw-semibold">Connectivity</h5>
                <p class="card-text text-center">
                  Icon+ memberikan akses Internet, Setup Jaringan, dan
                  Fiberisasi 24/7 tanpa batas kuota dan flate rate.
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 card border-0 custom_card-section">
              <img
                src="assets/icons/branding_tools.png"
                class="card-img-top"
                alt=""
              />
              <div class="card-body">
                <h5 class="card-title text-center fw-semibold">
                  Branding & Tools
                </h5>
                <p class="card-text text-center">
                  Kami memberikan kelas industri untuk jurusan TJKT, TITL, DKV
                  dan RPL serta menyediakan peralatan dan perangkat pendukung.
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 card border-0 custom_card-section">
              <img
                src="assets/icons/tenaga_ahli.png"
                class="card-img-top"
                alt=""
              />
              <div class="card-body">
                <h5 class="card-title text-center fw-semibold">Tenaga Ahli</h5>
                <p class="card-text text-center">
                  Kami menyediakan Guru Tamu dan Tenaga Penguji untuk Uji
                  Kompetensi dan Pendamping LKS.
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 card border-0 custom_card-section">
              <img
                src="assets/icons/digital_solution.png"
                class="card-img-top"
                alt=""
              />
              <div class="card-body">
                <h5 class="card-title text-center fw-semibold">
                  Digital Solution
                </h5>
                <p class="card-text text-center">
                  Kami memberikan solusi bagi sekolah mitra untuk memudahkan
                  pelayanan sekolah (I-School).
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 card border-0 custom_card-section">
              <img
                src="assets/icons/renew_energy_solution.png"
                class="card-img-top"
                alt=""
              />
              <div class="card-body">
                <h5 class="card-title text-center fw-semibold">
                  Renewable Energy Solution
                </h5>
                <p class="card-text text-center">
                  Pemasangan sistem Photovoltaic Rooftop sebagai solusi untuk
                  mengurangi konsumsi listrik.
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 card border-0 custom_card-section">
              <img
                src="assets/icons/education_trip.png"
                class="card-img-top"
                alt=""
              />
              <div class="card-body">
                <h5 class="card-title text-center fw-semibold">
                  Education Trip
                </h5>
                <p class="card-text text-center">
                  Jadwal kunjungan pembelajaran untuk siswa/mahasiswa ke data
                  center untuk memperluas pengetahuan.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--  Area End -->

    <!-- Counter Animation Area -->
    <section class="custom_section-counter" id="count-section">
      <div class="container me-5 custom_counter">
        <div class="row">
          <div class="col-1">
            <span class="count" data-target="3">0</span>
            <span class="plus fs-3">+</span>
            <p>Years</p>
          </div>
          <div class="col-2">
            <p>
              Berpengalaman menyediakan layanan dibidang jaringan telekomunikasi
            </p>
          </div>
          <div class="col-1 offset-md-1">
            <span class="count" data-target="10">0</span>
            <span class="plus fs-3">+</span>
            <p>Project</p>
          </div>
          <div class="col-2">
            <p>
              Telah digunakan oleh lembaga sekolah sebagai sarana pembelajaran
            </p>
          </div>
          <div class="col-1 offset-md-1">
            <span class="count" data-target="50">0</span>
            <span class="plus fs-3">+</span>
            <p>Clients</p>
          </div>
          <div class="col-2">
            <p>
              Mempercayai kami sebagai penyedia kelas industri bagi sekolah
              mitra
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Counter Animation Area -->

    <!-- Why choose us -->
    <section class="wcu_area-section pb-5" id="wcu-section">
      <div class="container pb-5 pt-3">
        <div class="row">
          <div class="col-4 custom_wcu-text">
            <h5 class="fs-5 fw-semibold">WHY CHOOSE US</h5>
            <span>
              <h2 class="fs-3 fw-bolder">Manfaat Mengikuti</h2>
              <h1 class="text-uppercase fw-bolder">Kelas Industri</h1>
            </span>
            <p class="fw-medium">
              Sebagai perusahaan yang sudah menjalin kerja sama (MoU) dengan
              beberapa mitra sekolah vokasi, kami akan mendukung semua yang
              dibutuhkan mitra dalam pelaksanaan kelas industri.
            </p>
            <img src="assets/icons/check-list1.png" />
            <div class="text-wcu">
              <h2>Quality First</h2>
              <p>
                Memprioritaskan kualitas layanan juga material dan perangkat
                pendukung kelas industri.
              </p>
            </div>
            <img src="assets/icons/check-list2.png" />
            <div class="text-wcu">
              <h2>Fast Service</h2>
              <p>
                Tim pelaksana kelas industri merupakan tim yang cepat dan
                tanggap.
              </p>
            </div>
            <img src="assets/icons/check-list3.png" />
            <div class="text-wcu">
              <h2>Complete Equipment</h2>
              <p>
                Material dan perangkat pendukung yang lengkap kami sediakan
                untuk kebutuhan mitra.
              </p>
            </div>
            <a href="#" class="btn rounded-3 shadow">Acces Now</a>
          </div>
          <div class="col-6 pt-5 offset-md-2 custom_wcu-image">
            <img src="assets/images/pp.png" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- Why Choose Us End -->

    <!-- Galery Section -->
    <section class="custom_galery-section" id="galery-section">
      <div class="container custom_galery-container">
        <div class="row">
          <div class="section-title text-center mb-4">
            <h5 class="text-uppercase fs-5 fw-semibold">Galeri Dokumentasi</h5>
            <h1
              class="text-capitalize fw-semibold d-inline-block position-relative"
            >
              Pelaksanaan Kelas Industri
            </h1>
          </div>
        </div>

        <div class="row">
          <div class="mb-3 galery-button">
            <ul
              class="text-center list-unstyled text-uppercase fw-semibold"
              id="galery-btns"
            >
              <li class="rounded-pill active" data-target="DKV">DKV</li>
              <li class="rounded-pill" data-target="RPL">RPL</li>
              <li class="rounded-pill" data-target="TITL">TITL</li>
              <li class="rounded-pill" data-target="TJKT">TJKT</li>
            </ul>
          </div>
        </div>

        <div class="row d-flex flex-wrap">
          <div class="d-flex flex-wrap galeri-image">
            <div class="position-relative item" data-id="DKV">
              <div class="position-relative inner">
                <img src="assets/images/galeri/1.jpg" alt="" />
              </div>
            </div>

            <div class="position-relative item" data-id="DKV">
              <div class="position-relative inner">
                <img src="assets/images/galeri/2.jpg" alt="" />
              </div>
            </div>

            <div class="position-relative item" data-id="DKV">
              <div class="position-relative inner">
                <img src="assets/images/galeri/3.jpg" alt="" />
              </div>
            </div>

            <div class="position-relative item" data-id="DKV">
              <div class="position-relative inner">
                <img src="assets/images/galeri/4.jpg" alt="" />
              </div>
            </div>
            <!-- DKV END -->

            <div class="position-relative item" data-id="RPL">
              <div class="position-relative inner">
                <img src="assets/images/galeri/5.jpg" alt="" />
              </div>
            </div>
            <div class="position-relative item" data-id="RPL">
              <div class="position-relative inner">
                <img src="assets/images/galeri/6.jpg" alt="" />
              </div>
            </div>
            <div class="position-relative item" data-id="RPL">
              <div class="position-relative inner">
                <img src="assets/images/galeri/7.jpg" alt="" />
              </div>
            </div>
            <div class="position-relative item" data-id="RPL">
              <div class="position-relative inner">
                <img src="assets/images/galeri/8.jpg" alt="" />
              </div>
            </div>
            <!-- RPL END -->

            <div class="position-relative item" data-id="TITL">
              <div class="position-relative inner">
                <img src="assets/images/galeri/9.jpg" alt="" />
              </div>
            </div>
            <div class="position-relative item" data-id="TITL">
              <div class="position-relative inner">
                <img src="assets/images/galeri/10.jpg" alt="" />
              </div>
            </div>
            <div class="position-relative item" data-id="TITL">
              <div class="position-relative inner">
                <img src="assets/images/galeri/11.jpg" alt="" />
              </div>
            </div>
            <div class="position-relative item" data-id="TITL">
              <div class="position-relative inner">
                <img src="assets/images/galeri/12.jpg" alt="" />
              </div>
            </div>
            <!-- TITL END -->

            <div class="position-relative item" data-id="TJKT">
              <div class="position-relative inner">
                <img src="assets/images/galeri/13.jpg" alt="" />
              </div>
            </div>
            <div class="position-relative item" data-id="TJKT">
              <div class="position-relative inner">
                <img src="assets/images/galeri/14.jpg" alt="" />
              </div>
            </div>
            <div class="position-relative item" data-id="TJKT">
              <div class="position-relative inner">
                <img src="assets/images/galeri/15.jpg" alt="" />
              </div>
            </div>
            <div class="position-relative item" data-id="TJKT">
              <div class="position-relative inner">
                <img src="assets/images/galeri/16.jpg" alt="" />
              </div>
            </div>
          </div>
          <!-- TJKT END -->
        </div>
      </div>
    </section>
    <!-- Galery Section End -->

    <!-- custom news -->
    <section class="custom_news-section pt-5 pb-5" id="news-section">
      <div class="container mt-5">
        <h4 class="text-uppercase fs-5 fw-semibold text-center me-5">NEWS</h4>
        <h2 class="text-center fs-3 mb-2 pb-5 fw-bolder me-5">
          Berita Terbaru Kami
        </h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card h-100 custom_news-card">
              <img
                src="assets/images/news/News_1.jpeg.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">
                  Total Solution PLN Icon Plus Wujudkan Kawasan Industri yang
                  Smart, Integrated, and Sustainable
                </h5>
                <p>11 agustus 2023</p>
                <p class="card-text">
                  Direktur Bisnis Konektivitas PLN Icon Plus Sigit Witjaksono
                  melakukan anjangsana ke Kawasan . . .
                </p>
              </div>
              <span
                class="button-span mb-3 d-flex justify-content-center align-items-center"
              >
                <a class="btn btn-primary" href="#" role="button"
                  >Baca Selengkapnya</a
                >
              </span>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 custom_news-card">
              <img
                src="assets/images/news/News_2.jpeg.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">
                  PLN Icon Plus Ukir Prestasi di Panggung TJSL & CSR Award 2023
                </h5>
                <p>11 agustus 2023</p>
                <p class="card-text">
                  PLN Icon Plus kembali ukir prestasi di panggung anugerah
                  penghargaan. Lewat kontribusi, kepedulian, serta . . .
                </p>
              </div>
              <span
                class="button-span mb-3 d-flex justify-content-center align-items-center"
              >
                <a class="btn btn-primary" href="#" role="button"
                  >Baca Selengkapnya</a
                >
              </span>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 custom_news-card">
              <img
                src="assets/images/news/News_3.jpeg.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">
                  Sosialisasi SMAP PLN Icon Plus, Tanpa Suap Kita Hebat!
                </h5>
                <p>11 agustus 2023</p>
                <p class="card-text">
                  PLN Icon Plus melaksanakan kegiatan Sosialisasi Sistem
                  Manajemen Anti Penyuapan (SMAP) di lingkungan . . .
                </p>
              </div>
              <span
                class="button-span mb-3 d-flex justify-content-center align-items-center"
              >
                <a class="btn btn-primary text-center" href="#" role="button"
                  >Baca Selengkapnya</a
                >
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- custom news -->

    <!-- custom footer -->
    <footer
      class="text-white text-center text-lg-start"
      style="background-color: #00616f"
    >
      <!-- Grid container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row mt-4">
          <!--Grid column-->
          <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
            <img src="assets/images/logo_footer.png" alt="" width="120" />
            <div>
              <p class="text-bottom-img mt-4">“We Speak Beyond Community”</p>
              <h3 class="fw-semibold fs-3">LET’S GET CONNECTED</h3>
              <a
                class="text-decoration-none p-2"
                href="https://www.instagram.com/iconnet.jatengdiy/"
                target="_blank"
              >
                <img
                  class="mt-3"
                  src="assets/icons/ig_footer.png"
                  alt=""
                  style="width: 30px; height: 30px"
                />
              </a>
              <a class="text-decoration-none p-2" href="" target="_blank">
                <img
                  class="mt-3"
                  src="assets/icons/wa_footer.png"
                  alt=""
                  style="width: 30px; height: 30px"
                />
              </a>
              <a
                class="text-decoration-none p-2"
                href="https://plniconplus.co.id/"
                target="_blank"
              >
                <img
                  class="mt-3"
                  src="assets/icons/web_footer.png"
                  alt=""
                  style="width: 30px; height: 30px"
                />
              </a>
            </div>
          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
            <h4 class="fw-semibold fs-4 mb-4 pb-1">Hubungi Kami</h4>
            <p>
              <a
                class="text-decoration-none"
                style="color: #fff"
                href="https://goo.gl/maps/uRmhGVECLBnCadgH9"
                target="_blank"
              >
                <span class="me-3">
                  <i class="bi bi-geo-alt fs-4"></i>
                </span>
                Jl. Setia Budi No. 96, Srondol Kulon, Banyumanik, Semarang
              </a>
            </p>

            <p>
              <a
                href="mailto:sahrultech5@gmail.com"
                class="text-decoration-none"
                style="color: #fff"
                target="_blank"
              >
                <span class="me-3"><i class="bi bi-envelope fs-4"></i></span>
                plniconplus@gmail.com
              </a>
            </p>
            <p>
              <span class="me-3"><i class="bi bi-telephone fs-4"></i></span>
              (+62) 0000 0000 000
            </p>
          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h4 class="fw-semibold fs-4 mb-4 pb-3">Layanan Kami</h4>
            <p>Internet Service Provider</p>
            <p>Networking</p>
            <p>Digital Product</p>
            <p>IT Consultant</p>
            <p>Internship Partner</p>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Grid container -->
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        <i class="bi bi-c-circle"></i> 2023 Copyright -
        <a
          class="text-white text-decoration-none"
          href="https://plniconplus.co.id/"
          >PT Indonesia Comnets Plus
        </a>
        - All Rights Reserved
      </div>
      <!-- Copyright -->
    </footer>
    <!-- custom footer end -->
@endsection
