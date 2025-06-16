<!-- Modal checkout -->
<div class="modal fade bd-example-modal-lg" id="pesan<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body pt-5 pb-5">
        <form role="form" method="post" action="proses.php" class="container">
          <h2 class="mb-4">Buat Pesanan</h2>

          <!-- Detail Produk -->
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="barang">Nama Barang</label>
              <input type="text" class="form-control" name="barang" id="barang" value="<?php echo $data['nama']; ?>" readonly>
            </div>
            <div class="form-group col-md-6">
              <label for="size">Ukuran Barang</label>
              <select class="form-control" name="size" id="size" required>
                <option value="" disabled selected>Pilih Ukuran</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="harga">Harga Satuan</label>
              <input type="text" class="form-control" name="harga" id="harga" value="<?php echo $data['harga']; ?>" readonly>
            </div>
            <div class="form-group col-md-6">
              <label for="jumlah">Jumlah</label>
              <input type="number" class="form-control" name="jumlah" id="jumlah" min="1" required>
            </div>
          </div>

          <!-- Detail Pembeli -->
          <label>Pesanan :</label>
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" class="form-control" name="pembeli" id="pembeli" placeholder="Nama Pembeli" required>
            </div>
            <div class="form-group col-md-6">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
            </div>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat Pengiriman" required>
          </div>

          <div class="form-group">
            <textarea class="form-control" name="pesan" id="pesan" placeholder="Pesan untuk penjual..." rows="2" required></textarea>
          </div>

          <!-- Metode Pembayaran -->
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="metode_pembayaran">Metode Pembayaran :</label>
              <select class="form-control" name="metode_pembayaran" id="metode_pembayaran" required>
                <option value="" disabled selected>Pilih Metode</option>
                <option value="COD">Cash on Delivery (COD)</option>
                <option value="OVO">OVO</option>
                <option value="DANA">DANA</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="total">Total Harga :</label>
              <input type="text" class="form-control" name="total" id="total" value="" readonly>
            </div>
          </div>
          <input type="hidden" name="gambar" value="<?php echo $data['gambar']; ?>">
          <button type="submit" name="kirim" class="btn btn-primary">Konfirmasi Pesanan</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </form>
        <script>
          const hargaInput = document.getElementById('harga');
          const jumlahInput = document.getElementById('jumlah');
          const totalInput = document.getElementById('total');

          jumlahInput.addEventListener('input', function() {
            const harga = parseInt(hargaInput.value) || 0;
            const jumlah = parseInt(jumlahInput.value) || 0;
            const total = harga * jumlah;
            totalInput.value = total;
          });
        </script>
      </div>
    </div>
  </div>
</div>

<?php
include './db/koneksi.php';

if (!$koneksi) {
  die("Koneksi ke database gagal: " . mysqli_connect_error());
}

if (isset($_POST['kirim'])) {

  // Ambil data dari form
  $barang = $_POST['barang'];
  $size = $_POST['size'];
  $jumlah = $_POST['jumlah'];
  $harga = $_POST['harga'];
  $pembeli = $_POST['pembeli'];
  $email = $_POST['email'];
  $alamat = $_POST['alamat'];
  $pesan = $_POST['pesan'];
  $metode_pembayaran = $_POST['metode_pembayaran'];
  $foto = $_POST['gambar'];
  $total_harga = $harga * $jumlah;

  // Query
  $query = "INSERT INTO notifikasi 
    (nama_pembeli, alamat, produk, jumlah, total_harga, foto, jenis_pembayaran, ukuran, harga, pesan, email) 
    VALUES 
    ('$pembeli', '$alamat', '$barang', '$jumlah', '$total_harga', '$foto', '$metode_pembayaran', '$size', '$harga', '$pesan', '$email')";

  if (mysqli_query($koneksi, $query)) {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
<script>
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Berhasil menyimpan pesanan!',
        showConfirmButton: false,
        timer: 1500
    });

    setTimeout(function() {
        window.location.href = '/Frontend-layanan-web/';
    }, 1600);
</script>";
  }
}
?>