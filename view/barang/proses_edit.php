<?php

$id_barang=$_GET['id_barang'];
$id_jenis=$_POST['id_jenis'];
$stok=$_POST['stok'];
$harga=$_POST['harga'];
$nama_barang=$_POST['nama_barang'];

include '../../config/koneksi.php';

$query=mysqli_query($conn, "UPDATE barang SET id_jenis='$id_jenis' ,stok='$stok' ,harga='$harga' ,nama_barang='$nama_barang' WHERE id_barang='$id_barang'");

    if ($query) {
        echo "<script>alert('Data Berhasil Diedit')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }else {
        echo "<script>alert('Data Berhasil Gagal')</script>";
        echo "<script>window.location.href='index.php'</script>";
    } 