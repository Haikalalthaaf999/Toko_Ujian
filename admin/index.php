<?php include '../template/header.php' ?>
<?php include '../config.php' ?>

<div class="container">
    <div class="row mb-5">
        <div class="col" >
            <h5 class="display-5" data-aos="zoom-in" data-aos-duration="1000" >Halaman Admin</h5>
            <a class="btn btn-primary" href="tambah.php">Tambah Data</a>
        </div>
        <div class="col"></div>
    </div>
</div>

<center>
    <div class="container" data-aos="flip-up">
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Password</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
            
            <?php
            
            session_start();
            
            
            if ($_SESSION['role'] == "") {
                header("Location:../index.php?pesan=gagal");
            }
    // apakah anda mempunyai role?
    $no = 1;
    $data = mysqli_query($host, "SELECT * FROM user");
    foreach ($data as $user) {
        echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>$user[nama_user]</td>";
                echo "<td>$user[password]</td>";
                echo "<td>$user[role]</td>";
                echo "<td>
                <a class='btn btn-primary' href='update.php?id_user=$user[id_user]' role='button'> Update </a>
                <a class='btn btn-danger' href='hapus.php?id_user=$user[id_user]' role='button'> Delete </a>
                </td>";
                echo "</tr>";
            }
            ?>
            
        </table>
        <p data-aos="zoom-out" data-aos-duration="1000" data-aos-delay="200">
        Halo <b><?php echo $_SESSION['nama_user'];?></b>
      </p>
    </div>
    </div>
    <a href="../logout.php">Keluar Halaman</a>
</center>
<?php include '../template/footer.php' ?>