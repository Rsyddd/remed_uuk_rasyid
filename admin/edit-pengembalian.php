<?php
$id_pengembalian = $_GET['id_pengembalian'];
include'../koneksi.php';
$sql = "SELECT*FROM pengembalian WHERE id_pengembalian='$id_pengembalian'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>
<H5> Halaman Edit Data pengembalian.</H5>
<a href="?url=pengembalian" class="btn btn-primary"> KEMBALI </a>
<hr>
<form method ="post" action="?url=proses-edit-pengembalian&id_pengembalian=<?= $id_pengembalian ?>">
<div class ="form-group mb-2">
    <label>Tanggal pengembalian</label>
    <input value="<?=$data ['tgl_pengembalian']?>" type="date" name="tgl_pengembalian" maxlength="4" class="form-control" required>
</div>
<div class ="form-group mb-2">
    <label>nama pengembali</label>
    <input value="<?=$data ['nama_pengembali']?>" type="text" name="nama_pengembali" maxlength="50" class="form-control" required>
</div>
<div class ="form-group">
    <button type="submit" class="btn btn-success"> SIMPAN </button>
    <button type="reset" class="btn btn-warning"> KOSONGKAN </button>
</div>
</form>