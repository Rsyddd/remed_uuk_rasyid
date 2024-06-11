<h5>Halaman Data PEMINJAMAN.</h5>
<a href="?url=tambah-peminjaman" class="btn btn-primary"> Tambah Data Peminjaman </a>
<hr>
<table class =" table table-striped table-bordered">
    <tr class = "fw-bold">
        <td>No</td> 
        <td>Tanggal Peminjaman</td> 
        <td>Nama Peminjam</td> 
        <td>Edit</td> 
        <td>Hapus</td> 
    </tr>
    <?php
    include'../koneksi.php';
    $no = 1;
    $sql = "SELECT*FROM peminjaman ORDER BY id_peminjaman DESC";
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data){ ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['tgl_peminjaman'] ?></td>
            <td><?= $data['nama_peminjam'] ?></td>
            <td>
                <a href="?url=edit-peminjaman&id_peminjaman=<?= $data['id_peminjaman'] ?>"class='btn btn-warning'>EDIT</a>
            </td>
            <td>
                <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data')"
                 href="?url=hapus-peminjaman&id_peminjaman=<?= $data['id_peminjaman'] ?>"class='btn btn-danger'>HAPUS</a>
            </td>
        </tr>
    <?php } ?>
</table>