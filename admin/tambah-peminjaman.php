<H5> Halaman Tambah Peminjaman</H5>
<a href="?url=peminjaman" class="btn btn-primary"> KEMBALI </a>
<hr>
<form method ="post" action="?url=proses-tambah-peminjaman">
<div class ="form-group mb-2">
    <label>Tanggal Peminjaman</label>
    <input type="date" name="tgl_peminjaman" maxlength="4" class="form-control" required>
</div>
<div class ="form-group mb-2">
    <label>nama peminjam</label>
    <input type="text" name="nama_peminjam" maxlength="50" class="form-control" required>
</div>
<div class ="form-group">
    <button type="submit" class="btn btn-success"> SIMPAN </button>
    <button type="reset" class="btn btn-warning"> KOSONGKAN </button>
</div>
</form>