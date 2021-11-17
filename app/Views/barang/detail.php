<!doctype html>
<html lang="en">
  <head>
    <title>Detail</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><?= $detail['nama_barang'] ?></h4>
            <p class="card-text">
                <?= $detail['spesifikasi'] ?>
            </p>
            <ul class="list-group">
                <li class="list-group-item">lokasi: <?= $detail['lokasi'] ?></li>
                <li class="list-group-item">kondisi: <?= $detail['kondisi'] ?></li>
                <li class="list-group-item">jumlah barang: <?= $detail['jumlah_barang'] ?></li>
                <li class="list-group-item">sumberdana: <?= $detail['sumber_dana'] ?></li>
            </ul>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>