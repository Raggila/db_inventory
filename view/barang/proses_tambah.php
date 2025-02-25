<?php

$id_barang = $_POST['id_barang'];
$id_jenis = $_POST['id_jenis'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$nama_barang = $_POST['nama_barang'];

include '../../config/koneksi.php';
$query = mysqli_query($conn,"INSERT INTO barang VALUES('$id_barang','$id_jenis','$stok','$harga','$nama_barang')");

echo
"<script>
alert('input data berhasil');
</script>
<script>
window.location.href = 'index.php';
</script>
";