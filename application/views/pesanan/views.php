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
            <div class="card pb-3 px-4">
              <div class="table-responsive">
                <table id="kt-tabel" class="table table-hover">
                <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header fw-bold px-1 pt-3 pb-3">List Data Pesanan</h5>
                <div class="text-nowrap d-flex justify-content-between pb-3 pt-4 gap-3">
                    <div class="">
                      <input type="date" id="tanggalFilter" class="form-control">
                    </div>
                    <div class="">
                    <a href="#" onclick="exportToExcel('kt-tabel', 'data')">
                        <button class="btn btn-outline-primary justify-content-center" tabindex="0" aria-controls="DataTables_Table_0" type="button">
                            <i class="bx bx-export me-sm-1 pb-1"></i>
                            <span class="d-none d-sm-inline-block">Export</span>
                        </button>
                    </a>
                    </div>
                </div>
                </div>
                  <thead>
                    <tr>
                      <th class="text-center">ID Pesanan</th>
                      <th class="text-center">TGL Pesanan</th>
                      <th class="text-center">Nama Pelanggan</th>
                      <th class="text-center">Produk</th>
                      <th class="text-center">Jumlah</th>
                      <th class="text-center">Sudah Dibayar</th>
                      <th class="text-center">Belum Dibayar</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    <?php
                    $tPaid = 0;
										$tQuantity = 0;
										$tUnpaid = 0;
                    $no = 1;
                    foreach ($listPesanan->result() as $pesanan) {
                      $tPaid += $pesanan->paid;
											$tQuantity += $pesanan->quantity;
											$tUnpaid += $pesanan->unpaid;
                        ?>
                    <tr>
                        <td class="text-center"><?= $no; ?></td>
                        <td class="text-center"><?= $pesanan->order_date; ?></td>
                        <td class="text-center"><?= $pesanan->nama_pelanggan; ?></td>
                        <td class="text-center"><?= $pesanan->produk; ?></td>
                        <td class="text-center"><?= $pesanan->quantity; ?></td>
                        <td class="text-center"><?= rupiah($pesanan->paid); ?></td>
                        <td class="text-center"><?= rupiah($pesanan->unpaid); ?></td>
                        <td class="text-center">
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?= site_url('Pesanan/getDetailPesanan/' . $pesanan->pesanan_id); ?>"
                                    ><i class="bx bxs-user-detail me-1"></i> Detail</a
                                >
                                <a class="dropdown-item" href="<?= site_url('Pesanan/update/' . $pesanan->pesanan_id); ?>"
                                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                >
                                <a class="dropdown-item" href="<?= site_url('Pesanan/delete/' . $pesanan->pesanan_id); ?>"
                                    ><i class="bx bx-trash-alt me-1"></i> Hapus</a
                                >
                            </div>
                        </div>
                        </td>
                    </tr>
                    <?php
                        $no++;
                    }
                    ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th class="text-center" colspan="3"><b>Total</b></th>
                      <th></th>
                      <th class="text-center">
                        <?= $tQuantity ?>
                      </th>
                      <th class="text-center">
                        <?= rupiah($tPaid) ?>
                      </th>
                      <th class="text-center">
                        <?= rupiah($tUnpaid) ?>
                      </th>
                      <!-- <th class="text-center"></th>
                      <th class="text-center"></th> -->
                    </tr>
                  </tfoot>
                </table>

              </div>
                <center class="py-4">
                    <a href="<?= site_url('Pesanan/add'); ?>">
                        <button class="btn btn-outline-primary justify-content-center" tabindex="0" aria-controls="DataTables_Table_0" type="button">
                            <i class="bx bx-plus-circle me-sm-1"></i>
                            <span class="d-none d-sm-inline-block">Tambah Pesanan</span>
                        </button>
                    </a>
                </center>
              </div>
            </div>
            <!--/ Hoverable Table rows -->
          </div>
        </div>
        <!-- / Content -->
      </div>
    </div>
  </div>
</div>

<!-- Download Table -->
<script>
function exportToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';

    // Create download link element
    downloadLink = document.createElement("a");

    document.body.appendChild(downloadLink);

    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

        // Setting the file name
        downloadLink.download = filename;

        //triggering the function
        downloadLink.click();
    }
}
</script>