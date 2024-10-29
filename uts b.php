<?php
$harga = array(
    "Pepsodent" => 11.980,
    "Sunlight" => 12.880,
    "Bunga" => 16.779,
    "Dove" => 22.688,
    "Bira" => 20.769,
    "Downy" => 12.880,
    "Le Mineral" => 5.650
);
$stok = array(
    "Pepsodent" => 30,
    "Sunlight" => 15,
    "Bunga" => 10,
    "Dove" => 20,
    "Bira" => 20,
    "Downy" => 15,
    "Le Mineral" => 25
);
$total = 0;
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Produk</th><th>Stok</th><th>Harga</th><th>Total</th></tr>";
$i = 1;
foreach ($harga as $produk => $harga_produk) {
    $total_produk = $harga_produk * $stok[$produk];
    $total += $total_produk;
    echo "<tr><td>$i</td><td>$produk</td><td>$stok[$produk]</td><td>$harga_produk</td><td>$total_produk</td></tr>";
    $i++;
}
echo "<tr><td colspan='4'>Total</td><td>$total</td></tr>";
echo "</table>";
?>