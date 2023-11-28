<?php
include("konek.php");

// ambil id dari form
$id_user = $_GET['id_user'];

// perintah untuk delete dimana id db sama dengan id form
$delete = mysqli_query($host,"delete from user where id_user=$id_user");


?>
<script>
    alert("Data Berhasil di Hapus");
    window.location.href="index.php";
</script>