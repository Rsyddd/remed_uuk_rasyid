<?php

$tgl_pengembalian = $_POST['tgl_pengembalian'];
$nama_pengembali = $_POST['nama_pengembali'];

include'../koneksi.php';
$sql = "INSERT INTO pengembalian (tgl_pengembalian,nama_pengembali) VALUES('$tgl_pengembalian','$nama_pengembali')";
$query = mysqli_query($koneksi, $sql);
if($query){
    // header("Location:?url=pengembalian");
    echo"<script>alert('Data Tersimpan'); window.location.assign('?url=pengembalian');</script>";
}else{
    echo"<script>alert('Maaf Data Tidak Tersimpan'); window.location.assign('?url=pengembalian');</script>";
}

