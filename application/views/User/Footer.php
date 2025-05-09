
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('asset/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('asset/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('asset/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url('asset/') ?>vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
  $(document).ready(function () {
    $('#searchInput').on('keyup', function () {
      const value = $(this).val().toLowerCase();
      let visible = false;

      $('.product-card').each(function () {
        const title = $(this).find('.card-title').text().toLowerCase();
        if (title.includes(value)) {
          $(this).show();
          visible = true;
        } else {
          $(this).hide();
        }
      });

      $('#noResults').toggleClass('d-none', visible);
    });
  });
</script>
<script>
  document.querySelectorAll('.checkout-btn').forEach(button => {
    button.addEventListener('click', function () {
      
      document.getElementById('modalProduk').textContent = this.dataset.produk;
      document.getElementById('modalHarga').textContent = this.dataset.harga;
      document.getElementById('modalStok').textContent = this.dataset.stok;
      document.getElementById('produkId').value = this.dataset.id;
      document.getElementById('stokProduk').value = this.dataset.stok;
      
     
      const stok = this.dataset.stok;
      const jumlahInput = document.getElementById('jumlah');
      jumlahInput.value = 1;
      jumlahInput.max = stok; 
    });
  });
</script>

</body>
</html>