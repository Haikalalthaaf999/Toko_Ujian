<?php
// Connect To Database
$host = mysqli_connect("localhost", "root", null, "toko_afung");

if (isset($_POST['tambah'])) {
    // Variabel
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Perintah ke dalam tabel
    $tambah = mysqli_query($host, "insert into user values(
    null,
    '$username',
    '$password',
    '$role'
    )");

    // Notifikasi
    if ($tambah) {
    ?>
        <script>
            alert("Data Berhasil Di Tambahkan");
            window.location.href = "index.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Data Tidak Berhasil Di Tambahkan");
            window.location.href = "tambah.php";
        </script>
    <?php
    }
}

else if(isset($_POST['edit'])){
    $id_user = $_POST['id_user'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $edit = mysqli_query($host,"update user set username='$username', password='$password', role='$role' where id_user='$id_user'");

    if($edit){
    ?>
    <script>
        alert("Data Berhasil Di Edit");
        window.location.href = "index.php";
    </script>
    <?php
    }else{
    ?>
    <script>
        alert("Data tidak Berhasil Di Edit");
        window.location.href = "update.php";
    </script>
    <?php
    }
}

?>