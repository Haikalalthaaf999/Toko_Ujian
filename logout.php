<?php
// aktifkan session
session_start();

// menghapus semua lokasi terakhir
session_destroy();

// mengarahkan
header("Location:index.php");