<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <!-- Layout container -->
    <div class="layout-page">
      <!-- Content wrapper -->
      <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
          <h3 class="mb-4 fw-bold">Pelanggan</h3>
          <div class="row">
            <!-- Hoverable Table rows -->
            <div class="card pb-3 px-5">
                <h5 class="card-header fw-bold px-1 pt-5 pb-3">Detail Pelanggan</h5>
                <table class="table table-striped table-row-bordered table-rounded table-striped table-hover border gy-5 gs-7">
                    <tr>
                        <td class="fw-bold text-end" style="width: 340px; height: 55px !important;">Nama Pelanggan :</td>
                        <td ><?php echo $name; ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-end" style="width: 340px; height: 55px !important;">Alamat :</td>
                        <td><?php echo $address; ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-end" style="width: 340px; height: 55px !important;">No HP :</td>
                        <td><?php echo $phone; ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-end" style="width: 340px; height: 55px !important;">Tanggal Terakhir Pemesanan :</td>
                        <td><?php echo $last_date_order; ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-end" style="width: 340px; height: 55px !important;">Status :</td>
                        <td><?php echo $last_status_order; ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-end" style="width: 340px; height: 55px !important;">Total Pesanan :</td>
                        <td><?php echo $total_order_revenue; ?></td>
                    </tr>
                </table>
                <center class="py-4">
                    <a href="<?= site_url('Pelanggan') ?>" class="btn btn-outline-danger">
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