<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title>
</head>
<body>
    <?php
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level']==""){
    	header("location:index.php?pesan=gagal");
    }

    ?>
    <h1>Halaman Admin</h1>

    <p>Halo <b><?php echo $_SESSION['Username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
    <a href="logout.php">LOGOUT</a>

    <br/>
    <br/>

    <a><a href="http://localhost/multi_user/index.php">Membuat Login Multi Level Dengan PHP</a>
</body>
</html>