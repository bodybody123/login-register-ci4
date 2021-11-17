<?= $this->extend('layout/page_layout'); ?>

<?php 
  $session = \Config\Services::session();
?>

<?= $this->section('content') ?>
    <nav
      class="
        navbar navbar-expand navbar-light
        bg-white
        justify-content-between
        px-3
        mb-5
        align-items-center
        shadow-lg
        sticky-top
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
        <div class="col col-12">
          <div class="container shadow-sm bg-white rounded-20 p-5">
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
                <a href="/dashboard/<?= $b['id_barang'] ?>/detail" class="btn px-1">
                  <i class="fas fa-eye"></i>
                </a>
                <a href="/dashboard/<?= $b['id_barang'] ?>/edit" class="btn px-1">
                  <i class="fas fa-pencil-alt"></i>
                </a>
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
      </div>
    </div>
<?= $this->endSection(); ?>