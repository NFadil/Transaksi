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
                            <?php echo $this->session->userdata("success"); ?>
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID </th>
                                            <th>Kode Transaksi</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach ($transaksi->result() as $row) {
                                                echo "<tr>";
                                                echo "<td>" . $row->id . "</td>";
                                                echo "<td>" . $row->kode_transaksi . "</td>";
                                                echo "<td>" . $row->tanggal . "</td>";
                                                echo "<td>
                                                        <a href='produk/edit/" . $row->id . "' class='btn btn-sm btn-warning'>Edit</a>
                                                        <a href='produk/hapus/" . $row->id . "' class='btn btn-sm btn-danger' onclick='return confirm(\"Yakin ingin menghapus?\")'>Hapus</a>
                                                    </td>";
                                                echo "</tr>";
                                            }
                                        ?>
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