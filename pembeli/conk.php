<?php
// Connect To Database
$host = mysqli_connect("localhost", "root", null, "toko_afung");

if (isset($_POST['tambah'])) {
    // Variabel
    $name = $_POST['nama_barang'];
    $kuantitas = $_POST['kuantitas_barang'];
    $harga = $_POST['harga'];
    $kondisi = $_POST['kondisi'];

    // Perintah ke dalam tabel
    $tambah = mysqli_query($host, "insert into barang values(
    null,
    '$name',
    '$kuantitas',
    '$harga',
    '$kondisi'
    )");
}
    ?>