<?php

$id_peminjaman = $_GET['id_peminjaman'];
$tgl_peminjaman = $_POST['tgl_peminjaman'];
$nama_peminjam = $_POST['nama_peminjam'];

include'../koneksi.php';
$sql = "UPDATE peminjaman SET tgl_peminjaman='$tgl_peminjaman', nama_peminjam='$nama_peminjam' WHERE id_peminjaman='$id_peminjaman'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=peminjaman");
}else{
    echo"<script>alert('Maaf Data Tidak Tersimpan'); window.location.assign('?url=peminjaman');</script>";
}

