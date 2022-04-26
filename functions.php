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
    return $rows;
}

function tambahJadwalPelajaran($data) {
    global $conn;

    $id_jadwal = $data["id_jadwal"];
    $id_guru = $data["id_guru"];
    $kode_mapel = $data["kode_mapel"];
    $id_ruang = $data["id_ruang"];
    $no_induk = $data["no_induk"];
    $hari = $data["hari"];
    $sesi = $data["sesi"];
    $waktu_mulai = $data["waktu_mulai"];
    $waktu_selesai = $data["waktu_selesai"];

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

    $id_jadwal = $data["id_jadwal"];
    $id_guru = $data["id_guru"];
    $kode_mapel = $data["kode_mapel"];
    $id_ruang = $data["id_ruang"];
    $no_induk = $data["no_induk"];
    $hari = $data["hari"];
    $sesi = $data["sesi"];
    $waktu_mulai = $data["waktu_mulai"];
    $waktu_selesai = $data["waktu_selesai"];

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

?>