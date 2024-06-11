<H5> Halaman Tambah pengembalian</H5>
<a href="?url=pengembalian" class="btn btn-primary"> KEMBALI </a>
<hr>
<form method ="post" action="?url=proses-tambah-pengembalian">
<div class ="form-group mb-2">
    <label>Tanggal pengembalian</label>
    <input type="date" name="tgl_pengembalian" maxlength="4" class="form-control" required>
</div>
<div class ="form-group mb-2">
    <label>nama pengembali</label>
    <input type="text" name="nama_pengembali" maxlength="50" class="form-control" required>
</div>
<div class ="form-group">
    <button type="submit" class="btn btn-success"> SIMPAN </button>
    <button type="reset" class="btn btn-warning"> KOSONGKAN </button>
</div>
</form>