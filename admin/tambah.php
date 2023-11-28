<?php include '../template/header.php' ?>

<html>

<head>
    <title>Tambah Data</title>
</head>

<body>
    <div class="container">
        <a class="btn btn-warning" href="index.php">Back To Home</a>
        <h2>Tambah Data</h2>
        <form action="konek.php" method="post">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text"  class="form-control" name="username" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="number"  class="form-control" name="password" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Role</label>
                <select class="form-select" name="role" required>
                    <option selected>....</option>
                    <option value="admin">Admin</option>
                    <option value="penjual">Penjual</option>
                    <option value="pembeli">Pembeli</option>
                </select>
            </div>
            <div>
                <!-- trigger -->
                <input  class="btn btn-success"  type="submit" value="tambah" name="tambah">
            </div>
        </form>

    </div>
    <?php include '../template/footer.php' ?>
</body>

</html>