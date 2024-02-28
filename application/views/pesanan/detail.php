<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <!-- Layout container -->
    <div class="layout-page">
      <!-- Content wrapper -->
      <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
          <h3 class="mb-4 fw-bold">Pesanan</h3>
          <div class="row">
            <!-- Hoverable Table rows -->
            <div class="card pb-3 px-5">
                <h5 class="card-header fw-bold px-1 pt-5 pb-3">Detail Pesanan</h5>
                <table class="table table-striped table-row-bordered table-rounded table-striped table-hover border gy-5 gs-7">
                    <tr>
                        <td class="fw-bold text-end" style="width: 340px; height: 55px !important;">Nama Pelanggan :</td>
                        <td ><?php echo $nama_pelanggan; ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-end" style="width: 340px; height: 55px !important;">Produk :</td>
                        <td><?php echo $produk; ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-end" style="width: 340px; height: 55px !important;">Jumlah Pesanan :</td>
                        <td><?php echo $quantity; ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-end" style="width: 340px; height: 55px !important;">Harga :</td>
                        <td><?php echo rupiah($sell_price); ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-end" style="width: 340px; height: 55px !important;">Total Harga :</td>
                        <td><?php echo rupiah($sell_price_total); ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-end" style="width: 340px; height: 55px !important;">Sudah Dibayar :</td>
                        <td><?php echo rupiah($paid); ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-end" style="width: 340px; height: 55px !important;">Belum Dibayar :</td>
                        <td><?php echo rupiah($unpaid); ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-end" style="width: 340px; height: 55px !important;">Status :</td>
                        <td><?php echo $status; ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-end" style="width: 340px; height: 55px !important;">Catatan :</td>
                        <td><?php echo $note; ?></td>
                    </tr>
                </table>
                <center class="py-4">
                    <a href="<?= site_url('Pesanan') ?>" class="btn btn-outline-danger">
                        <i class="bx bx-left-arrow-alt"></i>&nbsp Kembali
                    </a>
                </center>
            </div>
            <!--/ Hoverable Table rows -->
          </div>
        </div>
        <!-- / Content -->
      </div>
    </div>
  </div>
</div>