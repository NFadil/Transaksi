<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
<!-- Main Content -->
<div id="content">
    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>
    </nav>
    <!-- End of Topbar -->
        <!-- Content Row -->
        <div class="container-fluid">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold">Tambah Produk</h6>
                    </div>
                    <div class="card-body">
                    <?php echo $this->session->userdata("error"); ?>
                        <form class="user" method="post" action="<?=site_url('Dashboard_adm/insertProduk')?>" enctype="multipart/form-data">
                            <!-- Input produk -->
                            <div class="input-group mb-3">
                                <label for="produk">Produk</label>
                                <div class="col-sm-12">
                                <input type="text" class="form-control" name="produk" placeholder="Masukan Produk"  required>
                                </div>
                            </div>
                            <!-- Input Judul -->
                            <div class="input-group mb-3">
                                <label for="stok">Stok</label>
                                <div class="col-sm-12">
                                <input type="number" class="form-control" name="stok" placeholder="Masukan Stok"  required>
                                </div>
                            </div>
                            <!-- Input harga -->
                            <div class="input-group mb-3">
                                <label for="harga">Harga</label>
                                <div class="col-sm-12">
                                <input type="number" class="form-control" name="harga" placeholder="Masukan harga" required >
                                </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary btn-user btn-block">Tambahkan</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
            
        </div>
</div>
<!-- End of Main Content -->