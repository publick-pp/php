<?php
include "service/database.php";

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM p2 WHERE username='$username' AND password='$password'";
    $result = $db->query($sql);
    if($result->num_rows > 0){
        header("Location:index.html");
    } else {
        $message = "Login gagal!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #fff;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container h1 {
            margin-bottom: 20px;
        }
        .container input {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .container button {
            padding: 10px 20px;
            border: none;
            background-color: #333;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }
        .container button:hover {
            background-color: #555;
        }
        .message {
            margin-bottom: 20px;
            color: red;
        }
    </style>
</head>
<body>
    <?php if (isset($message)) { echo "<p class='message'>$message</p>"; } ?>
    <div class="container">
        <h1>Login</h1>
        <form action="login.php" method="post">
            <input type="text" placeholder="Username" name="username" required/>
            <input type="password" placeholder="Password" name="password" required/>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>
</html>