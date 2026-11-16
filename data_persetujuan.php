<?php
include 'config.php';

$data = mysqli_query($conn, "SELECT * FROM persetujuan_klien ORDER BY id DESC");
?>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>WA</th>
    <th>Layanan</th>
    <th>IP</th>
    <th>Tanggal</th>
</tr>

<?php while($row = mysqli_fetch_assoc($data)): ?>
<tr>
    <td><?= $row['id']; ?></td>
    <td><?= htmlspecialchars($row['nama']); ?></td>
    <td><?= htmlspecialchars($row['wa']); ?></td>
    <td><?= htmlspecialchars($row['layanan']); ?></td>
    <td><?= htmlspecialchars($row['ip_address']); ?></td>
    <td><?= $row['tanggal_persetujuan']; ?></td>
</tr>
<?php endwhile; ?>

</table>