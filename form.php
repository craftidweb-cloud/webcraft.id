<?php

$order =
"WEB-".
date("Ymd").
"-".
rand(1000,9999);

?>

<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">

<title>
Form Pemesanan — Webcraft.id
</title>

<style>

body{

font-family:Arial;

background:#f5f7fa;

}

.box{

max-width:800px;

margin:50px auto;

background:white;

padding:40px;

border-radius:20px;

box-shadow:
0 10px 30px
rgba(0,0,0,.08);

}

input,
select,
textarea{

width:100%;

padding:14px;

margin-top:8px;

margin-bottom:20px;

border:1px solid #ddd;

border-radius:10px;

}

button{

width:100%;

padding:16px;

background:#1463ff;

color:white;

border:none;

border-radius:10px;

cursor:pointer;

}

.note{

background:#fff6dd;

padding:20px;

border-radius:12px;

margin-bottom:25px;

}

.order{

color:#1463ff;

font-size:22px;

font-weight:bold;

}

</style>

</head>

<body>

<div class="box">

<h1>

Form Pemesanan

</h1>

<p class="order">

No Order:
<?= $order ?>

</p>

<div class="note">

<b>Keamanan Transaksi:</b>

<ul>

<li>
Jangan transfer sebelum menerima invoice.
</li>

<li>
Pembayaran hanya ke rekening resmi.
</li>

<li>
Simpan bukti transaksi.
</li>

<li>
Pengerjaan dimulai setelah konfirmasi.
</li>

<li>
Harga final sesuai kesepakatan.
</li>

</ul>

</div>

<form
action="proses_order.php"
method="POST"
enctype="multipart/form-data">

<input
type="hidden"
name="order"
value="<?= $order ?>">

<label>

Nama Lengkap

</label>

<input
required
name="nama">

<label>

WhatsApp

</label>

<input
required
name="wa">

<label>

Nama Usaha

</label>

<input
name="usaha">

<label>

Pilih Paket

</label>

<select
name="paket">

<option>

Basic

</option>

<option>

Standard

</option>

<option>

Premium

</option>

<option>

Enterprise

</option>

</select>

<label>

Kebutuhan Website

</label>

<textarea
rows="5"
name="fitur">

</textarea>

<label>

Upload Bukti TF
(Opsional)

</label>

<input
type="file"
name="bukti">

<label>

<input
required
type="checkbox">

Saya memahami bahwa:
harga, timeline,
dan fitur mengikuti
kesepakatan invoice.

</label>

<br><br>

<button>

Kirim Pesanan

</button>

</form>

</div>

</body>

</html>