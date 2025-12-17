<?php
session_start();
if (!isset($_SESSION['level']) || $_SESSION['level'] != 1) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>User</title>
<style>
body {
    font-family: Arial;
    background: #edf2f7;
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
    background: #3182ce;
    padding: 10px 20px;
    border-radius: 5px;
}
</style>
</head>
<body>
<div class="box">
    <h1>Halaman User</h1>
    <p>Halo, <b><?php echo $_SESSION['username']; ?></b></p>
    <a href="logout.php">Logout</a>
</div>
</body>
</html>