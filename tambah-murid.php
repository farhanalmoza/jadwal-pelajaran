<?php
require 'functions.php';

$guru = query("SELECT * FROM guru_pengajar");
$mapel = query("SELECT * FROM mata_pelajaran");
$ruang = query("SELECT * FROM ruang_kelas");
$murid = query("SELECT * FROM murid");

// cek submit
if ( isset($_POST["submit"]) ) {
  // cek data berhasil ditambahkan
  if (tambahMurid($_POST) > 0) {
    $status = 'Data berhasil ditambahkan';
    $message = 'Data Murid telah berhasil ditambahkan ke dalam database';
    echo "<script>
            let selectedType = 'bg-success';
            let toastPlacementShow = 1;
          </script>";
  } else {
    $status = 'Data gagal ditambahkan';
    $message = mysqli_error($conn);
    echo "<script>
            let selectedType = 'bg-danger';
            let toastPlacementShow = 1;
          </script>";
  }
}
?>

<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Tambah Murid| Kelompok 2</title>

    <meta name="description" content="" />

    <!-- Favicon -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="#" class="app-brand-link">
              <span class="app-brand-text demo menu-text fw-bolder ms-2">Kelompok 2</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Guru Pengajar -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Guru Pengajar</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Daftar jadwal pelajaran">Daftar</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Tambah jadwal pelajaran">Tambah</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Jadwal Pelajaran -->
            <li class="menu-item active open">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Jadwal Pelajaran</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="http://localhost:/jadwal-pelajaran/daftar-jadwal-pelajaran.php" class="menu-link">
                    <div data-i18n="Daftar jadwal pelajaran">Daftar</div>
                  </a>
                </li>
                <li class="menu-item active">
                  <a href="http://localhost:/jadwal-pelajaran/tambah-jadwal-pelajaran.php" class="menu-link">
                    <div data-i18n="Tambah jadwal pelajaran">Tambah</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Mata Pelajaran -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Mata Pelajaran</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="http://localhost:/jadwal-pelajaran/daftar-mata-pelajaran.php" class="menu-link">
                    <div data-i18n="Daftar jadwal pelajaran">Daftar</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="http://localhost:/jadwal-pelajaran/tambah-mata-pelajaran.php" class="menu-link">
                    <div data-i18n="Tambah jadwal pelajaran">Tambah</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Murid -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Murid</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="http://localhost:/jadwal-pelajaran/daftar-murid.php" class="menu-link">
                    <div data-i18n="Daftar Murid">Daftar</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="http://localhost:/jadwal-pelajaran/tambah-murid.php" class="menu-link">
                    <div data-i18n="Tambah Murid">Tambah</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Ruang Kelas -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Ruang Kelas</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Daftar jadwal pelajaran">Daftar</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Tambah jadwal pelajaran">Tambah</div>
                  </a>
                </li>
              </ul>
            </li>

          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Murid /</span> Tambah Daftar Murid</h4>

              <!-- Toast with Placements -->
              <div
                class="bs-toast toast toast-placement-ex m-2"
                role="alert"
                aria-live="assertive"
                aria-atomic="true"
                data-delay="2000"
              >
                <div class="toast-header">
                  <i class="bx bx-bell me-2"></i>
                  <div class="me-auto fw-semibold"><?= $status; ?></div>
                  <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body"><?= $message; ?></div>
              </div>
              <!-- Toast with Placements -->

              <!-- Form Tambah Murid -->
              <div class="col-xxl">
                <div class="card mb-4">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Form Tambah Murid</h5>
                  </div>
                  <div class="card-body">
                    <form method="post" action="">
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="no-induk">NO INDUK</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" list="daftar-murid" id="no-induk" name="no_induk" placeholder="No induk murid.." required />
                          <datalist id="daftar-murid">
                            <?php foreach( $murid as $m ) : ?>
                            <option value="<?= $m["NO_INDUK"]; ?>"></option>
                            <?php endforeach; ?>
                          </datalist>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="nama-murid" class="col-sm-2 col-form-label">NAMA MURID</label>
                        <div class="col-sm-10">
                          <input class="form-control" id="id-murid" name="nama_murid" placeholder="Nama Murid..." required />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="jen-kel" class="col-sm-2 col-form-label">JENIS KELAMIN</label>
                        <div class="col-sm-10">
                          <input class="form-control" id="id-jeniskelamin" name="jen_kel" placeholder="Jenis Kelamin..." required />
                          <option value="">- Jenis Kelamin -</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                      </div>
                      </div>
                      <div class="row mb-3">
                        <label for="agama-murid" class="col-sm-2 col-form-label">AGAMA MURID</label>
                        <div class="col-sm-10">
                          <input class="form-control" id="id-agama" name="agama_murid" placeholder="Beragama..." required />
                      </div>
                      </div>
                      <div class="row mb-3">
                      <label for="alamat-murid" class="col-sm-2 col-form-label">ALAMAT RUMAH</label>
                        <div class="col-sm-10">
                          <input class="form-control" id="id-alamat" name="alamat_rumah" placeholder="Alamat Rumah..." required />                        
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="tempat-lahir" class="col-sm-2 col-form-label">TEMPAT LAHIR</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="id-tempat" name="tempat_lahir" placeholder="Tempat Lahir..." required />                        
                      </div>
                      </div>
                      <div class="row mb-3">
                        <label for="tgl-lahir" class="col-sm-2 col-form-label">TANGGAL LAHIR</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="id-tgl" name="tanggal_lahir" placeholder="tanggal lahir..." required> />
                      </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="email-murid">EMAIL MURID</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="id-email" name="email_murid" required />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="no-hp">NO HP</label>
                        <div class="col-sm-10">
                          <input class="form-control" id="id-hp" name="no_hp" required />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="no-wa">NO WA</label>
                        <div class="col-sm-10">
                          <input class="form-control" id="id-wa" name="no_wa" required />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="id_telegram">ID TELEGRAM</label>
                        <div class="col-sm-10">
                          <input class="form-control" id="id_telegram" name="id_telegram" required />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="id_line">ID LINE</label>
                        <div class="col-sm-10">
                          <input class="form-control" id="id_line" name="id_line" required />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="id_facebook">ID FACEBOOK</label>
                        <div class="col-sm-10">
                          <input class="form-control" id="id_facebook" name="id_facebook" required />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="id_instagram">ID INSTAGRAM</label>
                        <div class="col-sm-10">
                          <input class="form-control" id="id_instagram" name="id_instagram" required />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="id_twitter">ID TWITTER</label>
                        <div class="col-sm-10">
                          <input class="form-control" id="id_twitter" name="id_twitter" required />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="id_youtube">ID YOUTUBE</label>
                        <div class="col-sm-10">
                          <input class="form-control" id="id_youtube" name="id_youtube" required />
                        </div>
                      </div>
                      <div class="row justify-content-end">
                        <div class="col-sm-10">
                          <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                </div>
                <div>
                  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                  <a
                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="footer-link me-4"
                    >Support</a
                  >
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="assets/js/ui-toasts.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
