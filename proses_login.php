<?php
// tiket session
session_start();

// konek tu databes
include 'config.php';

// ambil data dari form
$user = $_POST['nama_user'];
$pass = $_POST['password'];

// perintah untuk menyocokan data dari form dengan database
$login = mysqli_query($host, "SELECT * FROM user WHERE nama_user='$user' AND password='$pass'");

// menyeleksi menghitung data yang ditemukan
$cek = mysqli_num_rows($login);

// Figilter 
if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);

    // jika role admin
    if ($data['role'] == "admin") {
        // tiket untuk masuk ke halaman admin
        $_SESSION['nama_user'] = $user;
        $_SESSION['role'] = "admin";
        // mengarahkan
        header("Location:admin/index.php");
    }

    // // jika role penjual
    // elseif ($data['role'] == "penjual"){
    //     // tiket untuk masuk ke halaman penjual
    //     $_SESSION['nama_user'] = $user;
    //     $_SESSION['role'] = "penjual";
    //     // mengarahkan
    //     header("Location:penjual/index.php");
    // }
    elseif ($data['role'] == "user"){
        // tiket untuk masuk ke halaman user
        $_SESSION['nama_user'] = $user;
        $_SESSION['role'] = "user";
        // mengarahkan
        header("Location:user/index.php");
    }


    // jika tidak terdapat rolenya!
    else{
        header("Location:index.php?pesan=gagal");
    }

}else{
    // jika tidak ada data yang terdeteksi
    header("Location:index.php?pesan=gagal");
}