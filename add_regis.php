<?php
include 'config.php';

// ambil nilai dari form into variabel
$user = $_POST['nama_user'];
$pass = $_POST['password'];
$role = $_POST['role'];

// Eliminasi Role
// jika rolenya itu admin = insert into user
// jika rolenya user = insert into user + insert into detail_user
// jika rolenya penjual = insert into user + insert into detail_penjual

// untuk admin
if ($role == "admin") {
    $insert = mysqli_query($host, "insert into user values(
        null,'$user','$pass','$role'
    )");
    if ($insert) {
        echo "
        <script>
        alert('Data Admin Berhasil Di Tambah');
        window.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Tidak Berhasil Di Tambah');
        window.location.href = 'register.php';
        </script>
        ";
    }

    
} else if ($role == "user") {
    $insert_user = mysqli_query($host, "insert into user values(
        null,'$user','$pass','$role'
    )");

    // cek id terakhir di user 
    if ($insert_user) {
        $last = mysqli_insert_id($host);
    }
    // cek id terakhir di user 

   

    if ($insert_user) {
        echo "
        <script>
        alert('Data user Berhasil Di Tambah');
        window.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Tidak Berhasil Di Tambah');
        window.location.href = 'register.php';
        </script>
        ";
    }
} else {
    echo "
    <script>
    alert('Data Tidak Berhasil Di Tambah');
    window.location.href = 'register.php';
    </script>
    ";
}