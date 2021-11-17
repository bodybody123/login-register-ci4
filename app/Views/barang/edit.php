<!doctype html>
<html lang="en">
  <head>
    <title>Edit</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .rounded-20 {
            border-radius: 20px;
        }
        .rounded-10 {
            border-radius: 10px;
        }
    </style>
  </head>
  <body>
      <a href="/dashboard" class="link-primary">back</a>
      <div class="container w-50 mx-auto shadow rounded-20">

          <form action="/update" method="post">
                <input type="hidden" name="id_barang" value="<?= $barang['id_barang'] ?>" />

              <div class="mb-3">
                  <label for="nama_barang" class="form-label fw-bold">nama barang</label>
                  <input type="text"
                  class="form-control" name="nama_barang" id="nama_barang" aria-describedby="helpId" placeholder="Ex: Camera" value="<?= $barang['nama_barang'] ?>">
                </div>
                <div class="mb-3">
                    <label for="spesifikasi" class="form-label fw-bold">spesifikasi</label>
                    <input type="text"
                    class="form-control" name="spesifikasi" id="spesifikasi" aria-describedby="helpId" placeholder="Ex: Camera Canon" value="<?= $barang['spesifikasi'] ?>">
                </div>
                <div class="mb-3">
                    <label for="lokasi" class="form-label fw-bold">lokasi</label>
                    <input type="text"
                    class="form-control" name="lokasi" id="lokasi" aria-describedby="helpId" placeholder="Ex: RPL01" value="<?= $barang['lokasi'] ?>">
                </div>
                <div class="mb-3">
                    <label for="kondisi" class="form-label fw-bold">kondisi</label>
                    <input type="text"
                    class="form-control" name="kondisi" id="kondisi" aria-describedby="helpId" placeholder="Ex: Baik" value="<?= $barang['kondisi'] ?>">
                </div>
                <div class="mb-3">
                    <label for="jml_brg" class="form-label fw-bold">jumlah barang</label>
                    <input type="number"
                    class="form-control" name="jumlah_barang" id="jml_brg" aria-describedby="helpId" value="<?= $barang['jumlah_barang'] ?>">
                </div>
                <div class="mb-3">
                    <label for="sumber_dana" class="form-label fw-bold">jumlah barang</label>
                    <input type="text"
                    class="form-control" name="sumber_dana" id="jml_brg" aria-describedby="helpId" placeholder="Ex: Duit Korupsi" value="<?= $barang['sumber_dana'] ?>">
                </div>
                <button type="submit" class="btn btn-primary w-100">Add</button>
            </form>
        </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>