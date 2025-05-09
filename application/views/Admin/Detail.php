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
                    <h6 class="m-0 font-weight-bold text">Data Transaksi</h6>
                </div>
                <div class="card-body">
                    <div class="box">
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID </th>
                                            <th>Kode Transaksi</th>
                                            <th>Nama Produk</th>
                                            <th>Quantity</th>
                                            <th>Total Harga</th>
                                            <th>Tanggal</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $laporan->id;?></td>
                                            <td><?php echo $laporan->kode_transaksi;?></td>
                                            <td><?php echo $laporan->produk;?></td>
                                            <td><?php echo $laporan->quantity;?></td>
                                            <td>Rp.<?php echo number_format($laporan->harga * $laporan->quantity);?></td>
                                            <td><?php echo $laporan->tanggal;?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- End of Main Content -->