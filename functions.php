<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "jadwal_mapel");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;}

function tambahJadwalPelajaran($data) {
    global $conn;

    $id_jadwal = htmlspecialchars($data["id_jadwal"]);
    $id_guru = htmlspecialchars($data["id_guru"]);
    $kode_mapel = htmlspecialchars($data["kode_mapel"]);
    $id_ruang = htmlspecialchars($data["id_ruang"]);
    $no_induk = htmlspecialchars($data["no_induk"]);
    $hari = htmlspecialchars($data["hari"]);
    $sesi = htmlspecialchars($data["sesi"]);
    $waktu_mulai = htmlspecialchars($data["waktu_mulai"]);
    $waktu_selesai = htmlspecialchars($data["waktu_selesai"]);

    // tambahkan datanya ke database
    $query = "INSERT INTO jadwal_pelajaran
                VALUES
              ('$id_jadwal', '$id_guru', '$kode_mapel', '$id_ruang', '$no_induk', '$hari', '$sesi', '$waktu_mulai', '$waktu_selesai')
              ";
    query($query);

    return mysqli_affected_rows($conn);
}

function ubahJadwalPelajaran($data) {
    global $conn;

    $id_jadwal = htmlspecialchars($data["id_jadwal"]);
    $id_guru = htmlspecialchars($data["id_guru"]);
    $kode_mapel = htmlspecialchars($data["kode_mapel"]);
    $id_ruang = htmlspecialchars($data["id_ruang"]);
    $no_induk = htmlspecialchars($data["no_induk"]);
    $hari = htmlspecialchars($data["hari"]);
    $sesi = htmlspecialchars($data["sesi"]);
    $waktu_mulai = htmlspecialchars($data["waktu_mulai"]);
    $waktu_selesai = htmlspecialchars($data["waktu_selesai"]);

    // ubah datanya ke database
    $query = "UPDATE jadwal_pelajaran SET
                ID_GURU = '$id_guru',
                KODE_MAPEL = '$kode_mapel',
                IDRUANG = '$id_ruang',
                NO_INDUK = '$no_induk',
                HARIJADWAL = '$hari',
                SESIJADWAL = '$sesi',
                WAKTU_MULAI = '$waktu_mulai',
                WAKTU_SELESAI = '$waktu_selesai'
                WHERE IDJADWAL = '$id_jadwal'
              ";
    query($query);

    return mysqli_affected_rows($conn);
}

function hapusJadwalPelajaran($id) {
    global $conn;

    $query = "DELETE FROM jadwal_pelajaran WHERE IDJADWAL = '$id'";
    query($query);

    return mysqli_affected_rows($conn);
}

function tambahMataPelajaran($data) {
    global $conn;

    $KodeMapel = htmlspecialchars($data["KodeMapel"]);
    $id_NamaMapel = htmlspecialchars($data["id_NamaMapel"]);
    $BidangMapel = htmlspecialchars($data["BidangMapel"]);
    $id_JenisMapel = htmlspecialchars($data["id_JenisMapel"]);
    $TipeMapel = htmlspecialchars($data["TipeMapel"]);
    $JumlahPertemuan = htmlspecialchars($data["JumlahPertemuan"]);
    $DurasiMapel = htmlspecialchars($data["DurasiMapel"]);

    // tambahkan datanya ke database
    $query = "INSERT INTO mata_pelajaran
                VALUES
              ('$KodeMapel', '$id_NamaMapel', '$BidangMapel', '$id_JenisMapel', '$TipeMapel', '$JumlahPertemuan', '$DurasiMapel')
              ";
    query($query);

    return mysqli_affected_rows($conn);
}

function ubahMataPelajaran($data) {
    global $conn;

    $KodeMapel = htmlspecialchars($data["KodeMapel"]);
    $id_NamaMapel = htmlspecialchars($data["id_NamaMapel"]);
    $BidangMapel = htmlspecialchars($data["BidangMapel"]);
    $id_JenisMapel = htmlspecialchars($data["id_JenisMapel"]);
    $TipeMapel = htmlspecialchars($data["TipeMapel"]);
    $JumlahPertemuan = htmlspecialchars($data["JumlahPertemuan"]);
    $DurasiMapel = htmlspecialchars($data["DurasiMapel"]);

    // ubah datanya ke database
    $query = "UPDATE mata_pelajaran SET
                NAMA_MAPEL = '$id_NamaMapel',
                BIDANG_MAPEL = '$BidangMapel',
                JENIS_MAPEL = '$id_JenisMapel',
                TIPE_MAPEL = '$TipeMapel',
                JUMLAH_PERTEMUAN = '$JumlahPertemuan',
                DURASI_MAPEL = '$DurasiMapel',
                WHERE KODE_MAPEL = '$KodeMapel'
              ";
    query($query);

    return mysqli_affected_rows($conn);
}

function hapusMataPelajaran($KodeMapel) {
    global $conn;

    $query = "DELETE FROM mata_pelajaran WHERE KODE_MAPEL = '$KodeMapel'";
    query($query);

    return mysqli_affected_rows($conn);
}

function tambahMurid($data) {
    global $conn;

    $no_induk = htmlspecialchars($data["no_induk"]);
    $nama_murid = htmlspecialchars($data["nama_murid"]);
    $jen_kel = htmlspecialchars($data["jen_kel"]);
    $agama_murid = htmlspecialchars($data["agama_murid"]);
    $alamat_rumah = htmlspecialchars($data["alamat_rumah"]);
    $tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
    $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
    $email_murid = htmlspecialchars($data["email_murid"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $no_wa = htmlspecialchars($data["no_wa"]);
    $id_telegram = htmlspecialchars($data["id_telegram"]);
    $id_line = htmlspecialchars($data["id_line"]);
    $id_facebook = htmlspecialchars($data["id_facebook"]);
    $id_instagram = htmlspecialchars($data["id_instagram"]);
    $id_twitter = htmlspecialchars($data["id_twitter"]);
    $id_youtube = htmlspecialchars($data["id_youtube"]);

    // tambahkan datanya ke database
    $query = "INSERT INTO mata_pelajaran
                VALUES
              ('$no_induk', '$nama_murid', '$jen_kel', '$agama_murid', '$alamat_rumah', '$tempat_lahir', '$tanggal_lahir', '$email_murid', '$no_hp',
              '$no_wa', '$id_telegram','$id_line','$id_facebook','$id_instagram', '$id_twitter', '$id_youtube',)
              ";
    query($query);

    return mysqli_affected_rows($conn);
}

function ubahMurid($data) {
    global $conn;

    $no_induk = htmlspecialchars($data["no_induk"]);
    $nama_murid = htmlspecialchars($data["nama_murid"]);
    $jen_kel = htmlspecialchars($data["jen_kel"]);
    $agama_murid = htmlspecialchars($data["agama_murid"]);
    $alamat_rumah = htmlspecialchars($data["alamat_rumah"]);
    $tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
    $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
    $email_murid = htmlspecialchars($data["email_murid"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $no_wa = htmlspecialchars($data["no_wa"]);
    $id_telegram = htmlspecialchars($data["id_telegram"]);
    $id_line = htmlspecialchars($data["id_line"]);
    $id_facebook = htmlspecialchars($data["id_facebook"]);
    $id_instagram = htmlspecialchars($data["id_instagram"]);
    $id_twitter = htmlspecialchars($data["id_twitter"]);
    $id_youtube = htmlspecialchars($data["id_youtube"]);
    
    // ubah datanya ke database
    $query = "UPDATE murid SET
            NAMA_MURID = '$nama_murid',           
            JEN_KEL  = '$jen_kel',            
            AGAMA_MURID = '$agama_murid',          
            ALAMAT_RUMAH = '$alamat_rumah',          
            TEMPATLAHIR = '$tempat_lahir',         
            TGL_LAHIR = '$tanggal_lahir',           
            EMAIL_MURID = '$email_murid',        
            NOHP = '$no_hp',               
            NOWA = '$no_wa',                
            IDTELEGRAM = '$id_telegram',      
            IDLINE = '$id_line',        
            IDFACEBOOK  = '$id_facebook',         
            IDINSTAGRAM = '$id_instagram',         
            IDTWITTER  ='$id_twitter',           
            IDYOUTUBE = '$id_youtube',
            WHERE NO_INDUK  = '$no_induk', 
          ";             
    query($query);

    return mysqli_affected_rows($conn);
}

function hapusMurid($no_induk) {
    global $conn;

    $query = "DELETE FROM murid WHERE NO_INDUK = '$no_induk'";
    query($query);

    return mysqli_affected_rows($conn);
}

function tambahRuangKelas($data) {
    global $conn;

    $IDRUANG = htmlspecialchars($data["IDRUANG"]);
    $NAMA_RUANG = htmlspecialchars($data["NAMA_RUANG"]);
    $TIPE_RUANG = htmlspecialchars($data["TIPE_RUANG"]);
    $UKURAN_RUANG = htmlspecialchars($data["UKURAN_RUANG"]);
    $KAPASITAS_RUANG = htmlspecialchars($data["KAPASITAS_RUANG"]);
    $JUMLAH_MEJA = htmlspecialchars($data["JUMLAH_MEJA"]);
    $JUMLAH_KURIS = htmlspecialchars($data["JUMLAH_KURIS"]);
    $KETERANGAN_RUANG = htmlspecialchars($data["KETERANGAN_RUANG"]);
    $KELENGKAPAN_ALAT = htmlspecialchars($data["KELENGKAPAN_ALAT"]);
    $RENOVASI_TERAKHIR = htmlspecialchars($data["RENOVASI_TERAKHIR"]);
    // tambahkan datanya ke database
    $query = "INSERT INTO ruang_kelas
                VALUES
              ('$IDRUANG', '$NAMA_RUANG', '$TIPE_RUANG', '$KAPASITAS_RUANG', '$JUMLAH_MEJA', '$JUMLAH_KURIS', '$KETERANGAN_RUANG', '$KELENGKAPAN_ALAT', '$RENOVASI_TERAKHIR')
              ";
    query($query);

    return mysqli_affected_rows($conn);
}
?>