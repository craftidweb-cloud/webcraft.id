<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $wa = mysqli_real_escape_string($conn, $_POST['wa']);
    $layanan = mysqli_real_escape_string($conn, $_POST['layanan']);

    $ip = $_SERVER['REMOTE_ADDR'];
    $agent = $_SERVER['HTTP_USER_AGENT'];
    $tanggal = date('Y-m-d H:i:s');

    $sql = "INSERT INTO persetujuan_klien
    (nama, wa, layanan, ip_address, user_agent, tanggal_persetujuan)
    VALUES
    ('$nama','$wa','$layanan','$ip','$agent','$tanggal')";

    mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Persetujuan Klien - Webcraft ID</title>

<style>
body{
    font-family: Arial, sans-serif;
    background:#f5f7fb;
    margin:0;
    padding:20px;
}

.container{
    max-width:700px;
    margin:auto;
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 0 15px rgba(0,0,0,.1);
}

h1{
    color:#0d6efd;
}

input,select{
    width:100%;
    padding:12px;
    margin-top:5px;
    margin-bottom:15px;
    border:1px solid #ddd;
    border-radius:5px;
}

button{
    background:#0d6efd;
    color:white;
    border:none;
    padding:12px 20px;
    border-radius:5px;
    cursor:pointer;
}

button:hover{
    background:#0b5ed7;
}

.sukses{
    background:#d1e7dd;
    color:#0f5132;
    padding:10px;
    border-radius:5px;
    margin-bottom:15px;
}

.terms{
    background:#f8f9fa;
    padding:15px;
    border-radius:5px;
    height:200px;
    overflow:auto;
    border:1px solid #ddd;
}
</style>
</head>
<body>

<div class="container">

<h1>Persetujuan Proyek Webcraft ID</h1>

<?php if(isset($sukses)): ?>
<div class="sukses">
✅ Persetujuan berhasil disimpan.
</div>
<?php endif; ?>

<form method="POST">

<label>Nama Lengkap</label>
<input type="text" name="nama" required>

<label>Nomor WhatsApp</label>
<input type="text" name="wa" required>

<label>Jenis Layanan</label>
<select name="layanan" required>
    <option value="">-- Pilih Layanan --</option>
    <option>Landing Page</option>
    <option>Website Company Profile</option>
    <option>Toko Online</option>
    <option>Sistem Custom</option>
</select>

<div class="terms">
<h3>Syarat & Ketentuan Webcraft ID</h3>

<p>
1. Pembayaran hanya diterima melalui rekening resmi Webcraft ID.<br><br>

2. Metode pembayaran yang tersedia:<br>
- SeaBank<br>
- DANA<br>
- Krom Bank<br><br>

3. Klien wajib melakukan pembayaran ke rekening yang diinformasikan oleh Webcraft ID.<br><br>

4. Bukti transfer dapat dikirim sebagai konfirmasi, namun pembayaran dianggap sah hanya setelah dana berhasil masuk dan terverifikasi pada rekening tujuan.<br><br>

5. Screenshot transfer, bukti transfer, maupun nomor referensi transaksi tidak dapat dijadikan bukti bahwa pembayaran telah diterima apabila dana belum masuk ke rekening Webcraft ID.<br><br>

6. Pengerjaan proyek dimulai setelah pembayaran DP terverifikasi.<br><br>

7. Website, source code, hosting, domain, dan akses admin akan diserahkan setelah pelunasan terverifikasi.<br><br>

8. Webcraft ID tidak bertanggung jawab atas kesalahan transfer yang dilakukan oleh klien akibat salah memasukkan nomor rekening atau nomor tujuan pembayaran.
</p>
</p>
</div>

<br>

<label>
<input type="checkbox" required>
Saya telah membaca dan menyetujui seluruh syarat & ketentuan Webcraft ID.
</label>

<br><br>

<button type="submit">
Kirim Persetujuan
</button>

</form>

</div>
<label>Nama Pemilik Rekening Pengirim</label>
<input type="text" name="nama_pengirim" required>

<label>Bank / E-Wallet Pengirim</label>
<select name="bank_pengirim" required>
    <option value="">Pilih</option>
    <option>SeaBank</option>
    <option>DANA</option>
    <option>Krom Bank</option>
    <option>BCA</option>
    <option>BRI</option>
    <option>BNI</option>
    <option>Mandiri</option>
    <option>Lainnya</option>
</select>
</body>
</html>