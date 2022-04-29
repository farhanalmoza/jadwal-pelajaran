<?php
$query = mysql_query("SELECT * FROM GURU_PENGAJAR WHERE ID_GURU='".$_GET['id']."'");
$row = mysql_fetch_array($query);
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      UBAH GURU PENGAJAR
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">UBAH GURU PENGAJAR</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="pages/mahasiswa/ubah_mahasiswa_proses.php">
              <div class="box-body">
                <input type="hidden" name="id" value="<?php echo $row['id_mahasiswa']; ?>">
                <div class="form-group">
                  <label>ID Guru</label>
                  <input type="text" name="ID_GURU" class="form-control" placeholder="ID_GURU" value="<?php echo $row['ID_GURU']; ?>" required>
                </div>
                <div class="form-group">
                  <label>Nama Guru</label>
                  <input type="text" name="NAMA_GURU" class="form-control" placeholder="NAMA_GURU" value="<?php echo $row['NAMA_GURU']; ?>" required>
                </div>
                <div class="form-group">
                  <label>Gelar Depan</label>
                  <input type="text" name="GELAR_DEPAN" class="form-control" placeholder="GELAR_DEPAN" value="<?php echo $row['GELAR_DEPAN']; ?>" required>
                </div>
                <div class="form-group">
                  <label>Gelar Belakang</label>
                  <input type="text" name="GELAR_BELAKANG" class="form-control" placeholder="GELAR_BELAKANG" value="<?php echo $row['GELAR_BELAKANG']; ?>" required>
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="form-control" name="JENIS_KELAMIN" value="<?php echo $row['JENIS_KELAMIN']; ?>" >
                    <option value="">- Jenis Kelamin -</option>
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                </div>
                <div class="form-group">
                    <label>Agama</label>
                    <input type="text" name="AGAMA" class="form-control" placeholder="AGAMA" value="<?php echo $row['AGAMA']; ?>" required>
                  </div>
                  <div class="form-group">
                  <label>Alamat Tinggal</label>
                  <input type="text" name="ALAMAT_TINGGAL" class="form-control" placeholder="ALAMAT_TINGGAL" value="<?php echo $row['ALAMAT_TINGGAL']; ?>" required>
                </div>
                <div class="form-group">
                  <label>Nomor HP</label>
                  <input type="text" name="NO_HP" class="form-control" placeholder="NO_HP" value="<?php echo $row['NO_HP']; ?>" required>
                </div>
                <div class="form-group">
                  <label>Nomor WA</label>
                  <input type="text" name="NO_WA" class="form-control" placeholder="NO_WA" value="<?php echo $row['NO_WA']; ?>" required>
                </div>
                <div class="form-group">
                  <label>ID Telegram</label>
                  <input type="text" name="ID_TELEGRAM" class="form-control" placeholder="ID_TELEGRAM" value="<?php echo $row['ID_TELEGRAM']; ?>" required>
                </div>
                <div class="form-group">
                  <label>ID Line</label>
                  <input type="text" name="ID_LINE" class="form-control" placeholder="ID_LINE" value="<?php echo $row['ID_LINE']; ?>" required>
                </div>
                <div class="form-group">
                  <label>ID Facebook</label>
                  <input type="text" name="ID_FACEBOOK" class="form-control" placeholder="ID_FACEBOOK" value="<?php echo $row['ID_FACEBOOK']; ?>" required>
                </div>
                <div class="form-group">
                  <label>ID Instagram</label>
                  <input type="text" name="ID_INSTAGRAM" class="form-control" placeholder="ID_INSTAGRAM" value="<?php echo $row['ID_INSTAGRAM']; ?>" required>
                </div>
                <div class="form-group">
                  <label>ID Twitter</label>
                  <input type="text" name="ID_TWITTER" class="form-control" placeholder="ID_TWITTER" value="<?php echo $row['ID_TWITTER']; ?>" required>
                </div>
                <div class="form-group">
                  <label>ID Youtube</label>
                  <input type="text" name="ID_YOUTUBE" class="form-control" placeholder="ID_YOUTUBE" value="<?php echo $row['ID_YOUTUBE']; ?>" required>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="EMAIL" class="form-control" placeholder="EMAIL" value="<?php echo $row['EMAIL']; ?>" required>
                </div>
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" name="TEMPAT_LAHIR" class="form-control" placeholder="TEMPAT_LAHIR" value="<?php echo $row['TEMPAT_LAHIR']; ?>" required>
                </div>
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="date" name="TANGGAL_LAHIR" class="form-control" placeholder="TANGGAL_LAHIR" value="<?php echo $row['TANGGAL_LAHIR']; ?>" required>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->
