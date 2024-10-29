<?php
// Array multidimensi untuk tabel harga barang
$tabelHarga = [
    ['Pepsodent', 30, 11980],
    ['Sunlight', 15, 12880],
    ['Rinso', 10, 16779],
    ['Dove', 20, 22688],
    ['Bima', 20, 20769],
    ['Downy', 15, 12880],
    ['Le Mineral', 25, 5650]
];

// Menampilkan tabel harga barang
echo "<h2>Tabel Harga Barang</h2>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Produk</th><th>Stok</th><th>Harga</th><th>Jumlah</th></tr>";
for ($i = 0; $i < count($tabelHarga); $i++) {
    $id = $i + 1;
    $produk = $tabelHarga[$i][0];
    $stok = $tabelHarga[$i][1];
    $harga = $tabelHarga[$i][2];
    $jumlah = $stok * $harga;
    echo "<tr><td>$id</td><td>$produk</td><td>$stok</td><td>$harga</td><td>$jumlah</td></tr>";
}
echo "</table>";

// Menghitung total pembelian
$totalPembelian = 0;
foreach ($tabelHarga as $baris) {
    $totalPembelian += $baris[1] * $baris[2];
}
echo "<p>Total Pembelian: Rp. " . number_format($totalPembelian, 0, ',', '.') . "</p>";

// Menghitung diskon
$diskon = 0; 
if ($totalPembelian >= 300000) {
    $diskon = 0.25; 
} elseif ($totalPembelian >= 200000) {
    $diskon = 0.20; 
}

// Menghitung total pembayaran
$totalPembayaran = $totalPembelian - ($totalPembelian * $diskon);
echo "<p>Diskon: " . ($diskon * 100) . "%</p>";
echo "<p>"
?>