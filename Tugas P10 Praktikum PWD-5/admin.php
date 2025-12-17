<?php
session_start();
if (!isset($_SESSION['level']) || $_SESSION['level'] != 0) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
<style>
    body {
        font-family: Arial;
        background: #f4f6f8;
    }
    .box {
        width: 400px;
        margin: 100px auto;
        background: white;
        padding: 30px;
        border-radius: 10px;
        text-align: center;
    }
    a {
        text-decoration: none;
        color: white;
        background: #e53e3e;
        padding: 10px 20px;
        border-radius: 5px;
    }
    </style>
    </head>
    <body>
<div class="box">
    <h1>Halaman Admin</h1>
    <p>Selamat datang, <b><?php echo $_SESSION['username']; ?></b></p>
    <a href="logout.php">Logout</a>
</div>
</body>
</html>