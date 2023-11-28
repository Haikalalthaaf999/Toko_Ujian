<?php include 'template/header.php' ?>

<div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">WAFUNG</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Featured</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Creator</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row align-items-start">
        <div class="col-6">
            <img src="style/keren.jpg" class="img-fluid rounded" alt="..." >
        </div>
        <div class="col-1"></div>
        <div class="col-5" data-aos="fade-up-right">
            <h2>
                Haikal Store
                <br>
                <small class="text-body-secondary">
                    <h5>
                        Selamat Datang di warung oe 
                    </h5>
                </small>
            </h2>
            <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo"
                <script>
                alert('Username Dan Password tidak sesuai!');
                </script>
                ";
            }
        }
        ?>

            <form action="proses_login.php" method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-person"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="username">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-key"></i>
                    </span>
                    <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="password">
                </div>
                <div class="row">
                    <div class="col-2">
                        <a class="btn btn-primary" href="register.php" role="button">Register</a>
                    </div>
                    <div class="col-4">
                       <input class="btn btn-success" type="submit" value="Login">
                    </div>
                </div>
            </form>
        </div>
    </div>
     
    <center>

        <div class="mt-5">
            <h4>Gambar Random buat aos</h4>
        </div>
    </div>
</center>

<div class="container">

<div class="row my-5">
        <div class="col" data-aos="flip-right">
            <div class="card" style="width: 18rem;">
                <img src="style/strong.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3>Gambar 1</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="col" data-aos="flip-right" data-aos-delay="400">
            <div class="card" style="width: 18rem;">
                <img src="style/mantap.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3>Gambar 2</h3>
                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="col"data-aos="flip-right">
            <div class="card" style="width: 18rem;">
                <img src="style/au.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3>Gambar 3</h3>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
</div>

   
<?php include 'template/footer.php' ?>