<?php

require "config/core.php"; // panggil file config/core.php

$id_bidang = (int)$_GET['id_bidang'];

if (hapus_bidang($id_bidang) > 0) {
    //berhasil
    echo "<script>
    alert('Data Bidang Berhasil Dihapus')
    document.location.href = 'daftar-Bidang.php';
    </script>";
} else {
//gagal
echo "<script>
alert('Data Bidang Gagal Dihapus')
 document.location.href = 'daftar-Bidang.php';
 </script>";
 }