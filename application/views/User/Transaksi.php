<!-- Resi Pembelian -->
<div class="container mt-5">
  <div class="card shadow-lg rounded-4">
    <div class="card-header bg-primary text-white text-center rounded-top-4">
      <h4 class="mb-0">Resi Pembelian</h4>
    </div>
    <div class="card-body">
      <!-- Info Transaksi -->
      <div class="mb-3">
        <p><strong>No Transaksi:</strong> <?php echo $laporan->kode_transaksi;?></p>
        <p><strong>Tanggal:</strong><?php echo $laporan->tanggal;?></p>
      </div>

      <!-- Tabel Produk -->
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead class="table-secondary">
            <tr>
              <th>ID</th>
              <th>Produk</th>
              <th>Quantity</th>
              <th>Harga</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $laporan->id;?></td>
              <td><?php echo $laporan->produk;?></td>
              <td><?php echo $laporan->quantity;?></td>
              <td><?php echo number_format($laporan->harga);?></td>
              <td><?php echo number_format($laporan->harga * $laporan->quantity);?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="text-end mt-4">
        <h5><strong>Total Pembayaran:</strong> Rp<?php echo number_format($laporan->harga * $laporan->quantity);?></h5>
      </div>
    </div>

    <div class="card-footer text-center">
      <small class="text-muted">Terima kasih telah berbelanja bersama kami!</small>
    </div>
  </div
