<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <!-- Layout container -->
    <div class="layout-page">
      <!-- Content wrapper -->
      <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
          <!-- Message -->
          <?php if (!empty($message)) : ?>
            <div class="col-xxl-3">
              <!-- Alert -->
              <div class="alert alert-success alert-dismissible position-fixed" style="top: 20px; right: 20px;" role="alert">
                <!-- Content -->
                <div class="d-flex flex-column pe-0 pe-sm-10">
                  <h4 class="fw-bold">Pesan</h4>
                  <span><?php echo $message; ?></span>
                </div>
                <!-- Close button -->
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <!-- End Alert -->
            </div>
          <?php endif; ?>

          <!-- Breadcrumb -->
          <h6 class="mb-2">
            <?php foreach ($breadcrumbs as $breadcrumb) : ?>
              <span class="<?php echo $breadcrumb['class']; ?>">
                <?php echo ($breadcrumb['active'] == TRUE) ? '<a href="' . $breadcrumb['href'] . '" class="pe-3 text-muted">' : NULL; ?>
                <?php echo $breadcrumb['text']; ?>
                <?php echo ($breadcrumb['active'] == TRUE) ? '</a>' : NULL; ?>
            <?php endforeach; ?>
          </h6>

          <div class="row pt-2">
            <!-- Basic Layout -->
            <div class="col-xxl">
              <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h4 class="mb-0 fw-bold">Edit Produk</h4>
                  <small class="text-muted float-end">Edit Produk</small>
                </div>
                <div class="card-body">
                  <form class="form-horizontal" role="form" action="<?php echo $action; ?>" method="POST">
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="kategori_produk">Kategori Produk</label>
                      <div class="col-sm-10">
                        <select name="kategori_produk" class="form-select" data-control="select2" data-placeholder="Pilih Kategori Produk . . .">
                          <option value="">Pilih Kategori Produk</option>
                          <?php foreach ($list_kategori_produk as $kategori_produk) : ?>
                            <option value="<?= encrypt_url($kategori_produk->id_kategori_produk); ?>" <?= ($kategori_produk->id_kategori_produk == $selected_kategori_produk) ? 'selected' : ''; ?>>
                              <?= $kategori_produk->kategori_produk; ?>
                            </option>
                          <?php endforeach; ?>
                        </select>
                        <span style="color: red;"><?= form_error('kategori_produk'); ?></span>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="produk">Produk</label>
                      <div class="col-sm-10">
                        <input 
                          type="text" 
                          class="form-control" 
                          name="produk" 
                          placeholder="Produk . . ." 
                          autocomplete="off" 
                          value="<?php if (isset($produk)) echo $produk; ?>"
                        >
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="harga">Harga</label>
                      <div class="col-sm-10">
                        <input 
                          type="text" 
                          class="form-control" 
                          name="harga" 
                          placeholder="Masukkan Harga . . ." 
                          autocomplete="off" 
                          value="<?php if (isset($harga)) echo $harga; ?>"
                        >
                      </div>
                    </div>
                    <div class="row justify-content-end">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">
                          <i class='bx bx-save'></i>&nbsp; Simpan
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- / Content -->
      </div>
    </div>
  </div>
</div>
