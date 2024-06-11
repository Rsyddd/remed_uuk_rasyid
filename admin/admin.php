<?php
session_start();
if(empty($_SESSION['id_petugas'])){
    echo"<script>
    alert('Maaf Anda Belum Login');
    window.location.assign('../index2.php');
    </script>"; 
}
if($_SESSION['level'] != 'admin'){
    echo"<script>
    alert('Maaf Anda Bukan Sesi Admin');
    window.location.assign('../index2.php');
    </script>"; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Petugas - Aplikasi Perpustakaan</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    
    <h3>Aplikasi Perpustakaan</h3>
    <div class="alert alert-info">
        Anda Login Sebagai <b>PETUGAS</b> 
    </div>
    <a href="admin.php" class="btn btn-primary"> Administrator</a>
    <a href="admin.php?url=peminjaman" class="btn btn-primary"> peminjaman</a>
    <a href="admin.php?url=pengembalian" class="btn btn-primary"> pengembalian</a>
    <a href="admin.php?url=logout" class="btn btn-primary"> logout</a>

    <div class="card mt-2">
        <div class="card-body">
            <!-- ini isi web kita -->
            <?php
            $file = isset($_GET['url']) ? basename($_GET['url']) : '';
            if(empty($file)){
                echo "<h4>Selamat Datang Di Halaman petugas.</h4>";
            } else {
                $filepath = $file . '.php';
                if (file_exists($filepath)) {
                    include $filepath;
                } else {
                    echo "<h4>Halaman tidak ditemukan</h4>";
                }
            }
            ?>
        </div>
    </div>
</div>

<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
