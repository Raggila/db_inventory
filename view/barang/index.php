<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
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
    <div class="container">
        <h1>Xhit Market</h1>
        <a class="btn btn-primary" href="view_tambah.php" role="button">Penambahan Barang</a>
        <br></br>
        <table class="table table-dark table-striped-columns">
  <thead>
    <tr>
      <th scope="col">Id Barang</th>
      <th scope="col">Id jenis</th>
      <th scope="col">Stok</th>
      <th scope="col">Harga</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
        <?php
            include '../../config/koneksi.php';
            $query = mysqli_query($conn,"SELECT * FROM barang");
            $no=1;
            if(mysqli_num_rows($query)){
                while($result=mysqli_fetch_assoc($query)){
                    ?>
                        <tr>
                            <td><?php echo $result['id_barang'];?></td>
                            <td><?php echo $result['id_jenis'];?></td>
                            <td><?php echo $result['stok'];?></td>
                            <td><?php echo $result['harga'];?></td>
                            <td><?php echo $result['nama_barang'];?></td>
                            <td>
                            <a class="btn btn-info" href="view_edit.php?id_barang=<?php echo $result['id_barang']?>"><i class="fa-solid fa-pen-nib"></i>Edit</a>
                            <a class="btn btn-warning" href="proses_delete.php?id_barang=<?php echo $result['id_barang']?>" onclick="return confirm('kamu yakin?')">Delete</a>
                            </td>
                        </tr>
                    <?php
                    $no++;
                }
            }else{
                echo "Data kosong";
            }
        ?>
  </tbody>
</table>
    </div>
</body>
</html>