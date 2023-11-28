<?php include '../template/header.php' ?>
<?php
include("konek.php");
$id_user = $_GET['id_user'];
$cek = mysqli_query($host,"select * from user where id_user=$id_user");
while ($user = mysqli_fetch_array($cek)){
    $username = $user['username'];
    $password = $user['password'];
    $role = $user['role'];
}
?>
<html>

<head>
    <title>Edit</title>
</head>

<body>
    <div class="container">

        
        <h2>Edit Data</h2>
    
        <form action="konek.php" method="post">
            <div>
                <input type="hidden" name="id_user" value="<?php echo $id_user?>">
            </div>
            <div>
                <label>Username</label>
                <input type="text"  class="form-select" name="username" value="<?php echo $username?>">
            </div>
            <div>
                <label>Password</label>
                <input type="text"  class="form-select" name="password" value="<?php echo $password?>">
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
                <input class="btn btn-warning" type="submit" value="Edit" name="edit">
            </div>
        </form>
    </div>
    <?php include '../template/footer.php' ?>
</body>

</html>