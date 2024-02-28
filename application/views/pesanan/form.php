<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <!-- Layout container -->
    <div class="layout-page">
      <!-- Content wrapper -->
      <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
          <?php
            if ($this->session->flashdata('message')) {
          ?>
          <div class="col-xxl-12">
            <!--begin::Alert-->
            <div class="alert alert-dismissible bg-light-success d-flex flex-column flex-sm-row w-100 p-5">
              <!--begin::Icon-->
              <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
              <span class="svg-icon svg-icon-2hx svg-icon-success me-4 mb-5 mb-sm-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"/>
                  <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"/>
                </svg>
              </span>
              <!--end::Svg Icon-->
              <!--end::Icon-->
              <!--begin::Content-->
              <div class="d-flex flex-column pe-0 pe-sm-10">
                <h4 class="fw-bold">Berhasil!</h4>
                <span><?php echo $this->session->flashdata('message'); ?></span>
              </div>
              <!--end::Content-->
              <!--begin::Close-->
              <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                <span class="svg-icon svg-icon-1 svg-icon-success">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"/>
                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"/>
                  </svg>
                </span>
                <!--end::Svg Icon-->
              </button>
              <!--end::Close-->
            </div>
            <!--end::Alert-->
          </div>
          <?php } ?>
          <!-- Breadcrumb -->
          <h6 class="mb-2">
            <?php foreach ($breadcrumbs as $breadcrumb) { ?>
              <span class="<?php echo $breadcrumb['class']; ?>"><?php echo ($breadcrumb['active'] == TRUE) ? '<a href="' . $breadcrumb['href'] . '" class="pe-3 text-muted">' : NULL; ?><?php echo $breadcrumb['text']; ?><?php echo ($breadcrumb['active'] == TRUE) ? '</a>' : NULL; ?>
            <?php } ?>
          </h6>
          <div class="row">
          <div class="col-lg-5">
              <!-- Daftar Pesanan -->
              <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h4 class="mb-0 fw-bold">Daftar Pesanan</h4>
                  <small class="text-muted float-end">Daftar Pesanan</small>
                </div>
                <div class="card-body">
                  <!-- Tabel untuk menampilkan daftar pesanan -->
                  <div class="row mb-3">
                      <div class="col-sm-12">
                            <label class="col-form-label" for="produk">Produk</label>
                            <select name="produk" class="form-select" data-placeholder="Pilih Produk . . .">
                                <option value="">Pilih Produk</option>
                                <?php foreach ($list_produk as $produk): ?>
                                    <option value="<?= encrypt_url($produk->id_produk); ?>" <?= ($produk->id_produk == $selected_produk) ? 'selected' : ''; ?>>
                                        <?= $produk->produk; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <span style="color: red;"><?= form_error('produk'); ?></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label class="col-form-label" for="quantity">Jumlah</label>
                            <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Masukkan Jumlah Pesanan . . ." autocomplete="off">
                            <span style="color: red;"><?= form_error('quantity'); ?></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label class="col-form-label" for="sell_price">Harga</label>
                            <input type="text" class="form-control" id="sell_price" name="sell_price" placeholder="Masukkan Harga . . ." autocomplete="off">
                            <span style="color: red;"><?= form_error('sell_price'); ?></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label class="col-form-label" for="sell_price_total">Total Harga</label>
                            <input type="text" class="form-control" name="sell_price_total" id="sell_price_total" placeholder="" value="" autocomplete="off">
                            <span style="color: red;"><?= form_error('sell_price_total'); ?></span>
                        </div>
                    </div>
                    <center>
                        <div class="row">
                            <div class="col-sm-12 ">
                                <!-- Tambah Produk Button -->
                                <button type="button" class="btn btn-primary" onclick="tambahProduk()">Tambah Produk</button>
                            </div>
                        </div>
                    </center>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <!-- Tambah Pesanan -->
              <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h4 class="mb-0 fw-bold">Tambah Pesanan</h4>
                  <small class="text-muted float-end">Tambah Pesanan</small>
                </div>
                <div class="card-body">
                  <!-- Form untuk menambahkan produk -->
                  <form class="form-horizontal" role="form" action="<?= $action; ?>" method="POST">
                    <div id="cardTambahPesanan"></div> <!-- Container untuk menampilkan produk yang ditambahkan -->

                    <!-- Tambah Produk Button -->
                    <!-- <button type="button" class="btn btn-primary" onclick="tambahProduk()">Tambah Produk</button> -->
                    <div class="row">
                        <div class="col-12 px-3">
                            <hr class="my-0">
                        </div>
                        <div class="col-sm-12 px-4 col-form-label d-flex justify-content-between">
                            <span>Total Harga</span>
                            <span id="totalHarga">0</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label class="col-form-label" for="name">Nama Pelanggan</label>
                            <select name="name" class="form-select" data-placeholder="Pilih Pelanggan . . .">
                                <option value="">Pilih Pelanggan</option>
                                <?php foreach ($list_pelanggan as $pelanggan): ?>
                                    <option value="<?= encrypt_url($pelanggan->id_pelanggan); ?>" <?= ($pelanggan->id_pelanggan == $selected_pelanggan) ? 'selected' : ''; ?>>
                                        <?= $pelanggan->name; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <span style="color: red;"><?= form_error('pelanggan'); ?></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label class="col-form-label" for="paid">Sudah Dibayar</label>
                            <input type="text" class="form-control" name="paid" placeholder="Masukkan Nominal . . ." autocomplete="off">
                            <span style="color: red;"><?= form_error('paid'); ?></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label class="col-form-label" for="status">Status</label>
                            <select name="status" id="status" class="form-select" data-placeholder="Pilih Status . . .">
                                <option value="">Pilih Status</option>
                                <option value="Paid">Paid</option>
                                <option value="Unpaid">Unpaid</option>
                                <option value="Term">Term</option>
                            </select>
                            <span style="color: red;"><?= form_error('status'); ?></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label class="col-form-label" for="note">Catatan</label>
                            <textarea type="text" class="form-control" name="note" placeholder="" autocomplete="off"></textarea>
                            <span style="color: red;"><?= form_error('note'); ?></span>
                        </div>
                    </div>
                    <center>
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">
                                    <i class='bx bx-save'></i>&nbsp Simpan
                                </button>
                            </div>
                        </div>
                    </center>
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

<!-- JavaScript -->
<script>
    var products = []; // Array untuk menyimpan data produk

    function tambahProduk() {
        // Ambil nilai dari input fields
        var produkElement = document.querySelector('select[name="produk"]');
        var selectedOption = produkElement.options[produkElement.selectedIndex];
        var produk = selectedOption.text; // Mengambil teks dari opsi yang dipilih
        var harga = parseFloat(document.getElementById('sell_price').value.replace(/\./g, ""));
        var jumlah = parseFloat(document.getElementById('quantity').value);
        var totalHarga = parseFloat(document.getElementById('sell_price_total').value.replace(/\./g, ""));

        // Validasi input
        if (!produk || isNaN(harga) || isNaN(jumlah) || isNaN(totalHarga)) {
            alert('Mohon lengkapi semua input fields.');
            return;
        }

        // Buat objek untuk menyimpan data produk
        var newProduct = {
            produk: produk,
            harga: harga,
            jumlah: jumlah,
            totalHarga: totalHarga
        };

        // Tambahkan produk ke dalam array
        products.push(newProduct);

        // Tampilkan data produk di dalam card tambah pesanan
        tampilkanProduk(newProduct);

        // Hitung dan tampilkan total harga
        hitungTotalHarga();
    }


    function tampilkanProduk(product) {
        var cardTambahPesanan = document.getElementById('cardTambahPesanan');

        // Buat elemen untuk menampilkan data produk
        var div = document.createElement('div');
        div.classList.add('row', 'mb-1');

        // Tampilkan data produk
        div.innerHTML = `
            <div class="col-sm-12 px-4 col-form-label d-flex justify-content-between">
                <span>${product.produk}</span>
                <span>${product.totalHarga.toLocaleString('id')}</span>
            </div>
        `;

        // Tambahkan elemen ke dalam card tambah pesanan
        cardTambahPesanan.appendChild(div);
    }

    function hitungTotalHarga() {
        var total = 0;
        for (var i = 0; i < products.length; i++) {
            total += products[i].totalHarga;
        }
        document.getElementById('totalHarga').textContent = total.toLocaleString('id');
    }
</script>

<!-- Total Harga -->
<script>
    function calculateTotalPrice() {
        var quantity = parseFloat(document.getElementById('quantity').value);
        var sellPrice = parseFloat(document.getElementById('sell_price').value.replace(",", ""));

        if (!isNaN(quantity) && !isNaN(sellPrice)) {
            var totalPrice = quantity * sellPrice;
            document.getElementById('sell_price_total').value = totalPrice.toLocaleString('id');
        } else {
            document.getElementById('sell_price_total').value = '';
        }
    }

    document.getElementById('sell_price').addEventListener('input', calculateTotalPrice);
    document.getElementById('quantity').addEventListener('input', calculateTotalPrice);

    function activateTotalPriceInput() {
        document.getElementById('sell_price_total').disabled = false;
        return true; // Pastikan formulir dapat diserahkan
    }
</script>
