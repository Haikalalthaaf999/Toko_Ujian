<?php include '../template/header.php' ?>


<html>

<head>
    <title>Halaman Penjual</title>
</head>

<body>
    <div class="container">

        <h2>Halaman Pembeli</h2>
        <h5> Barang Ready loh</h5>
    </div>
    <center>
        
        <div class="container">
            <table class="table table-striped">
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Kuantitas Barang</th>
                    <th>Harga</th>
                    <th>Kondisi</th>
                </tr>
                
                <?php
                session_start();
                include("conk.php");
                $tabel = mysqli_query($host, "select * from barang");
                $i = 1;
                
                    
                if ($_SESSION['role'] == "") {
                    header("Location:../index.php?pesan=gagal");
                }
                while ($barang = mysqli_fetch_array($tabel)) {
                    echo "<tr>";
                    echo "<td>" . $i++ . "</td>";
                    echo "<td>" . $barang['nama_barang'] . "</td>";
                    echo "<td>" . $barang['kuantitas_barang'] . "</td>";
                    echo "<td>" . $barang['harga'] . "</td>";  
                    echo "<td>" . $barang['kondisi'] . "</td>";   
                    echo "</tr>";
                }
                ?>
            </table>
            <p>
        Halo <b><?php echo $_SESSION['username'];?></b>
      </p>
    </div>
        </div>
        <a href="../logout.php">Keluar Halaman</a>
    </center>
    <?php include '../template/footer.php' ?>
</body>

</html>