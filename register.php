<?php 
require 'functions.php';

if ( isset($_POST["submit"])) {
    
    if ( regis($_POST) > 0) {
        header("Location: index.php");
    }else{
        echo "<script>
                alert('Login gagal!!!');
              </script>";
    }
}

?>   


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>
<body>
    
    <h1>Register Page</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="level">Posisi : </label>
                <select name="level" id="level">
                    <option value="2">Guru</option>
                    <option value="3">Murid</option>
                </select>
            </li>
            <button type="submit" name="submit">Register!</button>
        </ul>
    </form>

</body>
</html>
