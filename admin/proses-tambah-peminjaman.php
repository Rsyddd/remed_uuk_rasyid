<?php

$tgl_peminjaman = $_POST['tgl_peminjaman'];
$nama_peminjam = $_POST['nama_peminjam'];

include'../koneksi.php';
$sql = "INSERT INTO peminjaman (tgl_peminjaman,nama_peminjam) VALUES('$tgl_peminjaman','$nama_peminjam')";
$query = mysqli_query($koneksi, $sql);
if($query){
    // header("Location:?url=peminjaman");
    echo"<script>alert('Data Tersimpan'); window.location.assign('?url=peminjaman');</script>";
}else{
    echo"<script>alert('Maaf Data Tidak Tersimpan'); window.location.assign('?url=peminjaman');</script>";
}

