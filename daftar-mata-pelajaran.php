<?php
require 'functions.php';
$mapel = query("SELECT * FROM mata_pelajaran");

// hapus data
$id_hapus = $_GET["hapus"];

if (isset($id_hapus)) {
  if ( hapusMataPelajaran($id_hapus) > 0 ) {
    $status = 'Data berhasil dihapus';
    $message = 'Data mata pelajaran telah berhasil dihapus di dalam database';
    echo "<script>
            let selectedType = 'bg-success';
            let toastPlacementShow = 1;
            setTimeout(
              function() {document.location.href = 'daftar-mata-pelajaran.php';},
            5000);
          </script>";
  } else {
    $status = 'Data gagal dihapus';
    $message = mysqli_error($conn);
    echo "<script>
            let selectedType = 'bg-danger';
            let toastPlacementShow = 1;
            setTimeout(
              function() {document.location.href = 'daftar-mata-pelajaran.php';},
            5000);
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

    <title>Daftar Mata Pelajaran | Kelompok 2</title>

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
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Jadwal Pelajaran</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="http://localhost://jadwal-pelajaran/daftar-jadwal-pelajaran.php" class="menu-link">
                    <div data-i18n="Daftar jadwal pelajaran">Daftar</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="http://localhost://jadwal-pelajaran/tambah-jadwal-pelajaran.php" class="menu-link">
                    <div data-i18n="Tambah jadwal pelajaran">Tambah</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Mata Pelajaran -->
            <li class="menu-item active open">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Mata Pelajaran</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item active">
                  <a href="http://localhost/jadwal-pelajaran/daftar-mata-pelajaran.php" class="menu-link">
                    <div data-i18n="Daftar Mata pelajaran">Daftar</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="http://localhost/jadwal-pelajaran/tambah-mata-pelajaran.php" class="menu-link">
                    <div data-i18n="Tambah Mata pelajaran">Tambah</div>
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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Mata Pelajaran /</span> Daftar Mata Pelajaran</h4>

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

              <!-- Tabel mata pelajaran -->
              <div class="card">
                <h5 class="card-header">Daftar mata pelajaran</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>KODE_MAPEL</th>
                        <th>NAMA_MAPEL</th>
                        <th>BIDANG_MAPEL</th>
                        <th>JENIS_MAPEL</th>
                        <th>TIPE_MAPEL</th>
                        <th>JUMLAH_PERTEMUAN</th>
                        <th>DURASI_MAPEL</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php foreach($mapel as $mapel) : ?>
                      <tr>
                        <td><?= $mapel["KODE_MAPEL"] ?></td>
                        <td><?= $mapel["NAMA_MAPEL"] ?></td>
                        <td><?= $mapel["BIDANG_MAPEL"] ?></td>
                        <td><?= $mapel["JENIS_MAPEL"] ?></td>
                        <td><?= $mapel["TIPE_MAPEL"] ?></td>
                        <td><?= $mapel["JUMLAH_PERTEMUAN"] ?></td>
                        <td><?= $mapel["DURASI_MAPEL"] ?></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="./ubah-mata-pelajaran.php?id=<?= $mapel["KODE_MAPEL"] ?>"
                                ><i class="bx bx-edit-alt me-1"></i> Ubah</a
                              >
                              <a class="dropdown-item" href="?hapus=<?= $mapel["KODE_MAPEL"] ?>"
                                ><i class="bx bx-trash me-1"></i> Hapus</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Hoverable Table rows -->
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
