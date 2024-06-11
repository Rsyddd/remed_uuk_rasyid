<?php

$id_pengembalian = $_GET['id_pengembalian'];

include'../koneksi.php';
$sql = "DELETE FROM pengembalian WHERE id_pengembalian='$id_pengembalian'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=pengembalian");
}else{
    echo"<script>alert('Maaf Data Tidak Terhapus'); window.location.assign('?url=pengembalian');</script>";
}

