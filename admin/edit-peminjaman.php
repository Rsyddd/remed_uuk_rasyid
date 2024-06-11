<?php
$id_peminjaman = $_GET['id_peminjaman'];
include'../koneksi.php';
$sql = "SELECT*FROM peminjaman WHERE id_peminjaman='$id_peminjaman'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>
<H5> Halaman Edit Data peminjaman.</H5>
<a href="?url=peminjaman" class="btn btn-primary"> KEMBALI </a>
<hr>
<form method ="post" action="?url=proses-edit-peminjaman&id_peminjaman=<?= $id_peminjaman ?>">
<div class ="form-group mb-2">
    <label>Tanggal peminjaman</label>
    <input value="<?=$data ['tgl_peminjaman']?>" type="date" name="tgl_peminjaman" maxlength="4" class="form-control" required>
</div>
<div class ="form-group mb-2">
    <label>nama peminjam</label>
    <input value="<?=$data ['nama_peminjam']?>" type="text" name="nama_peminjam" maxlength="50" class="form-control" required>
</div>
<div class ="form-group">
    <button type="submit" class="btn btn-success"> SIMPAN </button>
    <button type="reset" class="btn btn-warning"> KOSONGKAN </button>
</div>
</form>