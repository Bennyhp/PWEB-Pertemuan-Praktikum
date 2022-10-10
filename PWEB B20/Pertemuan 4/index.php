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
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username">

        <label for="password">Password</label><br>
        <input type="password" name="password" id="password">
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
    if(isset($_GET['submit']) && isset($_GET['regisSubmit'])){
        if($_GET['username'] == $_GET['regisUsername'])){
            if($_GET['password'] == $_GET['regisPassword']){
                echo "<h1>Login Berhasil</h1>"
            }
        }
    }
?>
    <p>Belum Punya Akun? <a href="register.php">Register</a></p>

</body>
</html>