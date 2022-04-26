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

?>