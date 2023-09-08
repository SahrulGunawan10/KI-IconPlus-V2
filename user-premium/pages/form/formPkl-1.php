<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Pendaftaran PKL | Kelas Industri</title>
  <link rel="stylesheet" href="../../assets/css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="shortcut icon" href="../../assets/image/logo/logo_pln.png" />
</head>

<body>
  <!-- Header Section Start -->
  <header class="horizontal-menu">
    <!-- Navbar one -->
    <nav class="navbar navbar-expand-lg shadow-sm custom_nav-one">
      <div class="container-fluid">
        <!-- kiri -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-3">
          <li class="nav-item">
            <img class="img-fluid" src="../../assets/image/logo/logo_putih.png" alt="" width="100" />
          </li>
        </ul>

        <!-- kanan -->
        <ul class="navbar-nav navbar-nav-right mb-2 mb-lg-0 me-2">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <span class="nav-profile-name">Politeknik Negeri Jember </span>
              <img class="img-fluid" src="../../assets/image/logo/polije.png" alt="profile" />
              <span>
                <i class="bi bi-caret-down-fill"></i>
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown custom-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="bi bi-gear"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="bi bi-box-arrow-left"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Navbar Two -->
    <nav class="navbar navbar-expand-lg custom_nav-menu">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto mb-2 mb-lg-0 justify-content-end">
            <li class="nav-item mx-4">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item dropdown mx-4">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Informasi
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="pages/Informasi/job_vacancy.html">Lowongan Kerja</a>
                </li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li>
                  <a class="dropdown-item" href="pages/404/404_error.html">Typography</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown mx-4">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Program Magang
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="pages/internships/regular_intern.html">PKL</a>
                </li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li>
                  <a class="dropdown-item" href="pages/internships/paid_intern.html">Magang Berbayar</a>
                </li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li>
                  <a class="dropdown-item" href="pages/internships/teacher_intern.html
                    ">Guru Magang</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown mx-4">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Guru & Penguji
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="pages/Guru Tamu & Penguji UKK/guest_teacher.html">Guru Tamu</a>
                </li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li>
                  <a class="dropdown-item" href="pages/Guru Tamu & Penguji UKK/ukk_examiner.html">Penguji UKK</a>
                </li>
              </ul>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link" href="#">Kunjungan Industri</a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link" href="#">Layanan Penunjang</a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link" href="#">Sertifikat</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- Header Section Start -->

  <!-- main content section start -->
  <section class="form">
    <div class="container">
      <div class="title text-center mb-4">Data diri Peserta PKL</div>
      <div class="content">
        <form action="#">
          <div class="user-details">
            <!-- Column Kiri -->
            <div class="left-column">
              <div class="input-box">
                <span class="details">Nama Peserta</span>
                <input type="text" name="nama" id="nama" placeholder="Masukkan Nama" required autofocus />
              </div>

              <span class="details">Jenis Kelamin</span>
              <div class="select-box">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="jenis-kelamin" id="laki-laki" />
                  <label class="form-check-label" for="laki-laki">
                    Laki-Laki
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="jenis-kelamin" id="perempuan" />
                  <label class="form-check-label" for="perempuan">
                    Perempuan
                  </label>
                </div>
              </div>

              <div class="input-box">
                <span class="details">Jurusan</span>
                <select class="form-select form-select-lg mb-3" name="jurusan" id="jurusan" aria-label="Large select example" required>
                  <option selected disabled>Pilih Jurusan</option>
                  <option value="1">DKV</option>
                  <option value="2">RPL</option>
                  <option value="3">TITL</option>
                  <option value="4">TJKT</option>
                </select>
              </div>
            </div>

            <!-- Column Kanan -->
            <div class="right-column">
              <div class="input-box">
                <span class="details">NIS/NIM</span>
                <div class="custom-periode">
                  <input type="text" id="nis-nim" name="nis-nim" placeholder="Masukkan NIS/NIM" required minlength="6" maxlength="10" />
                  <span class="ms-2 me-2"></span>
                </div>
              </div>
              <button type="button" class="btn btn-danger me-3" style="width: 120px;" onclick="resetData()">Reset</button>
              <button type="button" class="btn btn-primary" style="width: 120px;" onclick="tampilData()">Add</button>
            </div>
          </div>

          <!-- Tabel -->
          <table class="table table-striped mt-5 text-center" id="tabelData">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">NIS/NIM</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Jurusan</th>
            </tr>
          </table>
          <!-- Tabel end -->

          <div class="button d-flex justify-content-end mt-5">
            <a href="formPkl-2.php" class="">NEXT</a>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- main content section end -->

  <!-- custom footer -->
  <footer class="text-white text-center text-lg-start pt-5" style="background-color: #00616f">
    <div class="container p-4">
      <div class="row mt-4">
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <img src="../../assets/image/logo/logo_footer.png" alt="" width="120" />
          <div>
            <p class="text-bottom-img mt-4">“We Speak Beyond Community”</p>
            <h3 class="fw-semibold fs-3">LET’S GET CONNECTED</h3>
            <a class="text-decoration-none p-2" href="https://www.instagram.com/iconnet.jatengdiy/" target="_blank">
              <img class="mt-3" src="../../assets/image/logo/ig_footer.png" alt="" style="width: 30px; height: 30px" />
            </a>
            <a class="text-decoration-none p-2" href="" target="_blank">
              <img class="mt-3" src="../../assets/image/logo/wa_footer.png" alt="" style="width: 30px; height: 30px" />
            </a>
            <a class="text-decoration-none p-2" href="https://plniconplus.co.id/" target="_blank">
              <img class="mt-3" src="../../assets/image/logo/web_footer.png" alt="" style="width: 30px; height: 30px" />
            </a>
          </div>
        </div>
        <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
          <h4 class="fw-semibold fs-4 mb-4 pb-1">Hubungi Kami</h4>
          <p>
            <a class="text-decoration-none" style="color: #fff" href="https://goo.gl/maps/uRmhGVECLBnCadgH9" target="_blank">
              <span class="me-3">
                <i class="bi bi-geo-alt fs-4"></i>
              </span>
              Jl. Setia Budi No. 96, Srondol Kulon, Banyumanik, Semarang
            </a>
          </p>

          <p>
            <a href="mailto:sahrultech5@gmail.com" class="text-decoration-none" style="color: #fff" target="_blank">
              <span class="me-3"><i class="bi bi-envelope fs-4"></i></span>
              plniconplus@gmail.com
            </a>
          </p>
          <p>
            <span class="me-3"><i class="bi bi-telephone fs-4"></i></span>
            (+62) 0000 0000 000
          </p>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h4 class="fw-semibold fs-4 mb-4 pb-3">Layanan Kami</h4>
          <p>Internet Service Provider</p>
          <p>Networking</p>
          <p>Digital Product</p>
          <p>IT Consultant</p>
          <p>Internship Partner</p>
        </div>
      </div>
    </div>
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      <i class="bi bi-c-circle"></i> 2023 Copyright -
      <a class="text-white text-decoration-none" href="https://plniconplus.co.id/">PT Indonesia Comnets Plus
      </a>
      - All Rights Reserved
    </div>
    <!-- Copyright -->
  </footer>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="../../assets/js/script.js"></script>
</body>

</html>