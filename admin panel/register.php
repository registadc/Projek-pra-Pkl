<?php
    include '../components/koneksi.php';

    if (isset($_POST['submit'])){

        $id = unique_id();
        $name = $_POST['name'];
        $name = filter_var($name,filter_sanitize_String);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman register</title>
    <link rel="stylesheet" type="text/css" href="../css/admin_style.css">
    <link rel="stylesheet" href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    
    <div class="form-container">
        <form action="" method="post" enctype="multipart/form-data" class="register">
            <h3>register now</h3>
            <div class="flex">
                <div class="col">
                    <div class="input-field">
                        <p>nama anda <span>*</span></p>
                        <input type="text" name="nama" placeholder="masukan nama anda" maxlength="50"
                        required class="box">
                    </div>
                    <div class="input-field">
                        <p>email anda <span>*</span></p>
                        <input type="email" name="email" placeholder="masukan email anda" maxlength="50"
                        required class="box">
                    </div>
                </div>

                <div class="col">
                    <div class="input-field">
                        <p>password anda <span>*</span></p>
                        <input type="password" name="pass" placeholder="masukan password anda" maxlength="50"
                        required class="box">
                    </div>
                    <div class="input-field">
                        <p>konfirmasi password <span>*</span></p>
                        <input type="password" name="cpass" placeholder="konfirmasi password anda" maxlength="50"
                        required class="box">
                    </div>
                </div>

            </div>
            <div class="input-field">
                    <p>profil anda <span>*</span></p>
                    <input type="file" name="image" accept="image/*" required class="box">
            </div>
            <p class="link">sudah memiliki akun? <a href="login.php">login sekarang</a></p>
            <input type="submit" name="submit" value="registrasi sekarang" class="btn">
        </form>
    </div>



    <!-- sweetalert cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    
    <!-- custom js link -->
    <script src="../js/script.js"></script>

    <?php include '../components/alert.php';?>
</body>
</html>