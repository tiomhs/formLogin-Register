<?php

require "functions.php";

$conn = mysqli_connect("localhost","root","","webtio");

if ( isset($_POST["submit"])) {
    
    // tangkap dulu
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $hasil = mysqli_query($conn,$sql);
    
    if ( $hasil -> num_rows > 0 ) {
        
        $row = mysqli_fetch_assoc($hasil);
        
        if ($row["level"] == 1) {
            header("location: admin/index.php");
        }elseif ($row["level"] == 2) {
            header("Location: guru/index.php");
        }else {
            header("location: siswa/index.php");
        }
    }else {
        echo "<script>
                    alert('login gagal');
              </script>";
    }
}

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>

<h1>Login Page</h1>

<form action="" method="post">
        <ul>
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </li>
            <button type="submit" name="submit">Login!</button>
            <p>Don't have an Account?<a href="register.php">click here!!!</a></p>
        </ul>
</form>
    
</body>
</html>
