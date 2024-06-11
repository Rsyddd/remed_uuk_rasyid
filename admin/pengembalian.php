<h5>Halaman Data PENGEMBALIAN.</h5>
<a href="?url=tambah-pengembalian" class="btn btn-primary"> Tambah Data pengembalian </a>
<hr>
<table class =" table table-striped table-bordered">
    <tr class = "fw-bold">
        <td>No</td> 
        <td>Tanggal pengembalian</td> 
        <td>Nama pengembali</td> 
        <td>Edit</td> 
        <td>Hapus</td> 
    </tr>
    <?php
    include'../koneksi.php';
    $no = 1;
    $sql = "SELECT*FROM pengembalian ORDER BY id_pengembalian DESC";
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data){ ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['tgl_pengembalian'] ?></td>
            <td><?= $data['nama_pengembali'] ?></td>
            <td>
                <a href="?url=edit-pengembalian&id_pengembalian=<?= $data['id_pengembalian'] ?>"class='btn btn-warning'>EDIT</a>
            </td>
            <td>
                <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data')"
                 href="?url=hapus-pengembalian&id_pengembalian=<?= $data['id_pengembalian'] ?>"class='btn btn-danger'>HAPUS</a>
            </td>
        </tr>
    <?php } ?>
</table>