<!-- Modal checkout -->
<div class="modal fade bd-example-modal-lg" id="pesan<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body pt-5 pb-5">
        <form role="form" method="post">
          <h2 class="mb-4">Buat Pesanan</h2>
          <!-- Detail Produk -->
          <div role="form" class="form-row">
            <div class="form-group col-md-6">
              <label for="barang">Nama Barang</label>
              <input type="text" class="form-control" name="barang" id="nama" value="<?php echo $data['nama']; ?>" readonly>
            </div>
            <div class="form-group col-md-6">
              <label for="size">Ukuran Barang</label>
              <select class="form-control" name="size" id="size" required>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
              </select>
            </div>
             <div class="form-group col-md-6">
              <label for="harga">Harga</label>
              <input type="text" class="form-control" name="harga" id="harga" value="<?php echo $data['harga']; ?>" readonly>
            </div>
             <div class="form-group col-md-6">
              <label for="jumlah">Jumlah</label>
              <input type="number" class="form-control" name="jumlah" id="jumlah" required>
            </div>
          </div>

          <!-- Detail Pembeli -->
          <label>Pesanan :</label>
          <div role="form" class="form-row">
            <div class="form-group col-md-6">
              <input type="text" class="form-control" name="pembeli" id="nama" placeholder="Nama Pembeli" required>
            </div>
            <div class="form-group col-md-6">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
            </div>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" name="alamat" id="subjek" placeholder="Alamat Pengiriman" required>
          </div>

          <div class="form-group">
            <textarea class="form-control" name="pesan" id="pesan" style="white-space: pre-line;" placeholder="Pesan untuk penjual..." row="1" required></textarea>
          </div>

          <!-- Metode Pembayaran -->
          <label>Metode Pembayaran:</label>
          <div class="form-row">
            <div class="form-group col-md-6">
              <select class="form-control" name="metode_pembayaran" required>
                <option value="Bank Transfer">Bank Transfer</option>
                <option value="OVO">OVO</option>
                <option value="DANA">DANA</option>
                <option value="COD">Cash on Delivery (COD)</option>
              </select>
            </div>
            <div class=" ">
              <input type="text" class="form-control" name="total" id="total" value="<?php echo $data['harga']; ?>" readonly>
            </div>
          </div>

          <button type="submit" name="kirim" class="btn btn-primary">Konfirmasi Pesanan</button>
          <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
if (isset($_POST['kirim'])) {
  $barang = $_POST['barang'];
  $size = $_POST['size'];
  $pembeli = $_POST['pembeli'];
  $email = $_POST['email'];
  $alamat = $_POST['alamat'];
  $pesan = $_POST['pesan'];
  $metode_pembayaran = $_POST['metode_pembayaran'];

  // Pesan konfirmasi
  $pesan_konfirmasi = "
        Nama Pembeli: $pembeli
        Email: $email
        Alamat: $alamat
        Ukuran: $size
        Metode Pembayaran: $metode_pembayaran
        Catatan untuk Penjual: $pesan
    ";

  // Tampilkan pesan konfirmasi menggunakan JavaScript
  echo "<script>
        alert('Pesanan Anda telah dikonfirmasi!\\n$pesan_konfirmasi');
        window.location.href = 'halaman-konfirmasi.php'; // Redirect ke halaman konfirmasi
    </script>";

  // Redireksi berdasarkan metode pembayaran yang dipilih
  if ($metode_pembayaran == 'COD') {
    echo "<script>window.location.href = 'konfirmasi-pesanan.php';</script>";
  } else {
    // Redirect ke halaman pembayaran atau link pembayaran sesuai metode pembayaran
    echo "<script>window.location.href = 'halaman-pembayaran.php?metode=$metode_pembayaran';</script>";
  }
}
?>
<?php
// Simulasi data produk
$data = [
  'id' => 1,
  'nama' => 'Sepatu Olahraga',
  'wa' => '081234567890'
];

// Logika untuk memproses form pengiriman
if (isset($_POST['kirim'])) {
  // Ambil data dari form
  $barang = $_POST['barang'];
  $size = $_POST['size'];
  $harga = $_POST['harga'];
  $pembeli = $_POST['pembeli'];
  $email = $_POST['email'];
  $alamat = $_POST['alamat'];
  $pesan = $_POST['pesan'];
  $metode_pembayaran = $_POST['metode_pembayaran'];

  // Pesan konfirmasi
  $pesan_konfirmasi = "
        Nama Pembeli: $pembeli
        Email: $email
        Alamat: $alamat
        Ukuran: $size
        Metode Pembayaran: $metode_pembayaran
        Catatan untuk Penjual: $pesan
    ";

  // Tampilkan pesan konfirmasi menggunakan JavaScript
  echo "<script>
        alert('Pesanan Anda telah dikonfirmasi!\\n$pesan_konfirmasi');
        window.location.href = '#'; // Tidak ada redirect ke halaman lain
    </script>";

  // Redirect berdasarkan metode pembayaran yang dipilih
  if ($metode_pembayaran == 'COD') {
    echo "<script>window.location.href = 'konfirmasi-pesanan.php';</script>";
  } else {
    // Redirect ke halaman pembayaran atau link pembayaran sesuai metode pembayaran
    echo "<script>window.location.href = 'halaman-pembayaran.php?metode=$metode_pembayaran';</script>";
  }
}
?>

<!-- Modal checkout -->
<div class="modal fade bd-example-modal-lg" id="pesan<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body pt-5 pb-5">
        <form role="form" method="post">
          <h2 class="mb-4">Buat Pesanan</h2>

          <!-- Detail Produk -->
          <div role="form" class="form-row">
            <div class="form-group col-md-6">
              <label for="barang">Nama Barang</label>
              <input type="text" class="form-control" name="barang" id="nama" value="<?php echo $data['nama']; ?>" readonly>
            </div>
            <div class="form-group col-md-6">
              <label for="size">Ukuran Barang</label>
              <select class="form-control" name="size" id="size" required>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="harga">Harga</label>
              <input type="text" class="form-control" name="harga" id="harga" value="<?php echo $data['harga']; ?>" readonly>
            </div>
          </div>

         
          <!-- Detail Pembeli -->
          <label>Pesanan :</label>
          <div role="form" class="form-row">
            <div class="form-group col-md-6">
              <input type="text" class="form-control" name="pembeli" id="nama" placeholder="Nama Pembeli" required>
            </div>
            <div class="form-group col-md-6">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
            </div>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" name="alamat" id="subjek" placeholder="Alamat Pengiriman" required>
          </div>

          <div class="form-group">
            <textarea class="form-control" name="pesan" id="pesan" style="white-space: pre-line;" placeholder="Pesan untuk penjual..." row="1" required></textarea>
          </div>

          <!-- Metode Pembayaran -->
          <label>Metode Pembayaran:</label>
          <div class="form-row">
            <div class="form-group col-md-6">
              <select class="form-control" name="metode_pembayaran" required>
                <option value="Bank Transfer">Bank Transfer</option>
                <option value="OVO">OVO</option>
                <option value="DANA">DANA</option>
                <option value="COD">Cash on Delivery (COD)</option>
              </select>
            </div>
          </div>

          <button type="submit" name="kirim" class="btn btn-primary">Konfirmasi Pesanan</button>
          <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>