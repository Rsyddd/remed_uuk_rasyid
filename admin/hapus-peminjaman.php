<?php

$id_peminjaman = $_GET['id_peminjaman'];

include'../koneksi.php';
$sql = "DELETE FROM peminjaman WHERE id_peminjaman='$id_peminjaman'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=peminjaman");
}else{
    echo"<script>alert('Maaf Data Tidak Terhapus'); window.location.assign('?url=peminjaman');</script>";
}

