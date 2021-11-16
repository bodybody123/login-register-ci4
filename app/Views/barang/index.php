<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.0.2 -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <style>
      body {
        font-family: "Poppins", sans-serif;
        background-color: #f5f8fa;
      }
      .rounded-20 {
        border-radius: 20px;
      }
      .rounded-10 {
        border-radius: 10px;
      }
      .bg-primary {
        background-color: #3554d1;
      }
      .btn-primary {
        background-color: #3554d1;
      }
      .form-control:focus {
        border-color: #3554d1 !important;
        box-shadow: none;
        outline: none 0 !important;
      }
      .btn-primary:hover {
        background-color: #2f48a8;
      }
      .box {
        max-width: 600px;
        max-height: 400px;
      }
      .bg-logout {
        background-color: rgba(242, 61, 61, 0.251);
      }
      .text-logout {
        color: #f23d3d;
      }
      .btn-plus {
        background: #3554d140;
      }
    </style>
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <?php 
      $session = \Config\Services::session();
    ?>
  </head>
  <body>
    <nav
      class="
        navbar navbar-expand navbar-light
        bg-white
        justify-content-between
        px-3
        mb-5
        align-items-center
      "
    >
      <div class="nav navbar-nav">
        <h1 class="fw-bold fs-3">
          <a class="nav-item nav-link active" href="/dashboard">Dashboard Inventaris</a>
        </h1>
      </div>
      <div class="d-flex align-items-center">
      <?php if($session->get('isLogin')) : ?>
            <h1 class="fw-bold pe-3 fs-3"><?= $session->get('username'); ?></h1>
            <a class="btn bg-logout text-logout rounded-10" href="/logout" role="button">Logout</a>
        <?php else : ?>
          <a class="btn btn-primary" href="/login" role="button">login</a>
        <?php endif; ?>
      </div>
    </nav>
    <div class="container">
      
      <?php if(session()->getFlashdata('msg')) : ?>
        <div class="row">
          <div class="col">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <button type="button" class="btn-close" 
              data-bs-dismiss="alert" aria-label="Close"></button>
              <?= session()->getFlashdata('msg') ?>
            </div>   
          </div>
        </div>
      <?php endif; ?>

      <div class="row">
        <div class="col-sm-6 col-12">
          <div class="container bg-white rounded-20 p-5">
            <div class="row">
              <div class="col">
                <h1 class="fw-bold">Item Data</h1>
              </div>
              <div class="col">
                <a class="btn btn-plus float-end" href="/create">
                  <i class="fas fa-plus" style="color: #3554d1"></i>
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col">Item Name</div>
              <div class="col">Condition</div>
              <div class="col">Total</div>
              <div class="col">Action</div>
            </div>
            <?php foreach($barang as $b) : ?>
            <div class="row my-4 p-2 border-dark border-bottom">
              <div class="col"><?= $b['nama_barang'] ?></div>
              <div class="col"><?= $b['kondisi'] ?></div>
              <div class="col">
                <?= $b['jumlah_barang'] ?>
              </div>
              <div class="col">
                <button class="btn px-1">
                  <i class="fas fa-eye"></i>
                </button>
                <button class="btn px-1">
                  <i class="fas fa-pencil-alt"></i>
                </button>
                <form action="/delete/<?= $b['id_barang'] ?>" method="post" class="d-inline">
                  <input type="hidden" name="_method" value="DELETE">  
                  <button type="submit" class="btn px-1">
                    <i class="fas fa-trash"></i>
                  </button>
                </form>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="col-sm-6 col-12">
          <div class="container bg-white rounded-20 p-5">
            <div class="row">
              <div class="col">
                <h1 class="fw-bold">Borrowed Data</h1>
              </div>
              <div class="col">
                <button class="btn btn-plus float-end">
                  <i class="fas fa-plus" style="color: #3554d1"></i>
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col">Item Name</div>
              <div class="col">Condition</div>
              <div class="col">Total</div>
              <div class="col">Action</div>
            </div>
            <div class="row my-4 p-2 border-dark border-bottom">
              <div class="col">Laptop Giveaway</div>
              <div class="col">Good</div>
              <div class="col">12</div>
              <div class="col">
                <button class="btn px-1">
                  <i class="fas fa-eye"></i>
                </button>
                <button class="btn px-1">
                  <i class="fas fa-pencil-alt"></i>
                </button>
                <button class="btn px-1">
                  <i class="fas fa-trash"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="d-flex justify-content-center my-5">Made with ci4</footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
