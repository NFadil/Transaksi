<!-- Pencarian -->
  <div class="container mt-4">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <input type="text" id="searchInput" class="form-control" placeholder="Cari produk elektronik...">
      </div>
    </div>
  </div>

  <!-- Daftar Produk -->
  <div class="container mt-4">
    <h2 class="text-center mb-4">Daftar Produk Elektronik</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4" id="productList">
    <?php foreach ($produk->result() as $row){?>
      <div class="col product-card">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title"> <?=$row->produk?></h5>
            <p class="card-text">Sisa <?=$row->stok?></p>
            <p class="card-text"><?=number_format($row->harga, 0, ',', '.')?></p>
            <a href="#" class="btn btn-primary checkout-btn" 
                data-produk="<?=$row->produk?>" 
                data-harga="<?=number_format($row->harga, 0, ',', '.')?>" 
                data-id="<?=$row->id?>" 
                data-stok="<?=$row->stok?>"
                data-bs-toggle="modal" 
                data-bs-target="#checkoutModal">Beli Produk</a>
          </div>
        </div>
      </div>
      <?php }?>
    </div>
    <div class="no-results" id="noResults">Produk tidak ditemukan.</div>
  </div>

<!-- Modal -->
<div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id="checkoutForm" action="<?= site_url('User_Content/Transaksi') ?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="checkoutModalLabel">Beli Produk</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p><strong>Produk:</strong> <span id="modalProduk"></span></p>
          <p><strong>Harga:</strong> <span id="modalHarga"></span></p>
          <p><strong>Stok tersedia:</strong> <span id="modalStok"></span></p>
          <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" min="1" required>
            <input type="hidden" id="produkId" name="produkId">
            <input type="hidden" id="stokProduk" name="stokProduk">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Checkout</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        </div>
      </div>
    </form>
  </div>
</div>

