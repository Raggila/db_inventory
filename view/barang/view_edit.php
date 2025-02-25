<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Xhit Market</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../barang/index.php">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../jenis/index.php">Jenis</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</head>
<body>
    <div class="container" class="input-group mb-3">
    <h1>Edit Data Barang</h1>
    <?php
        include '../../config/koneksi.php';
        $id_barang=$_GET['id_barang'];
        $query = mysqli_query($conn, "SELECT * FROM barang WHERE id_barang='$id_barang'");
        $result = mysqli_fetch_array($query)
        ?>
    <br>
    <form action="proses_edit.php?id_barang=<?php echo $result['id_barang']?>" method="post">
        <label for="">Id Barang</label>
        <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="id_barang" value="<?php echo $result['id_barang']?>">
        <br>
        <label for="">Id jenis</label>
        <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="id_jenis" value="<?php echo $result['id_jenis']?>">
        <br>
        <label for="">Stok</label>
        <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="stok" value="<?php echo $result['stok']?>">
        <br>
        <label for="">Harga</label>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="harga" value="<?php echo $result['harga']?>">
        <br>        
        <label for="">Nama Barang</label>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nama_barang" value="<?php echo $result['nama_barang']?>">
        <br>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>
</body>
</html>