<?php

$id_pengembalian = $_GET['id_pengembalian'];
$tgl_pengembalian = $_POST['tgl_pengembalian'];
$nama_pengembali = $_POST['nama_pengembali'];

include'../koneksi.php';
$sql = "UPDATE pengembalian SET tgl_pengembalian='$tgl_pengembalian', nama_pengembali='$nama_pengembali' WHERE id_pengembalian='$id_pengembalian'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=pengembalian");
}else{
    echo"<script>alert('Maaf Data Tidak Tersimpan'); window.location.assign('?url=pengembalian');</script>";
}

