<?php
session_start();
if(isset($_POST['regisSubmit'])){
    $_SESSION['regisSubmit'] = $_POST['regisSubmit'];
    $_SESSION['regisUsername'] = $_POST['regisUsername'];
    $_SESSION['regisPassword'] = $_POST['regisPassword'];
    $_SESSION['konfirPassword'] = $_POST['konfirPassword'];
}
var_dump($_SESSION);
var_dump($_GET);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 4</title>
</head>

<body>
    <h1>Pertemuan 4</h1>

    <form action="index.php" method="get">
        <label for="username">Username</label><br><br>
        <input type="text" name="username" id="username"><br><br>

        <label for="password">Password</label><br><br>
        <input type="password" name="password" id="password"><br><br>
        <input type="submit" name="submit" value="submit"><br><br>

    </form>
    <?php
    if (isset($_GET['submit']) && isset($_SESSION['regisSubmit'])) {
        if ($_GET['username'] == $_SESSION['regisUsername']) {
            if ($_GET['password'] == $_SESSION['regisPassword']) {
                echo "<h1>Login Berhasil</h1>";
            } else {
                echo "<h1>Login Gagal</h1>";
            }
        }
    }
    ?>
    <p>Belum Punya Akun? <a href="register.php">Register</a></p>

</body>

</html>