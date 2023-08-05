<!DOCTYPE html>
<html>
<head>
    <!-- Your head content here -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login form</title>
</head>
<body>
    <form action="login.php" method="post">
        <h2> LOGIN </h2>
        <!-- Your login form fields here -->
        <input type="text" name="uname" placeholder="Username"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <button type="submit">Login</button>
    </form>

    <?php
    if (isset($_GET["error"])) {
        echo '<div class="error-message">' . $_GET["error"] . '</div>';
    } elseif (isset($_GET["success"])) {
        echo '<div class="success-message">' . $_GET["success"] . '</div>';
    }
    ?>
    <style>
        *{
   
    box-sizing: border-box;
    font-family: sans-serif;
}
body{
    background: #1d74bb;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
h2{
    text-align: center;
    margin-bottom: 40px;
}
form{
    width: 500px;
    border: 2px solid #ccc;
    padding: 30px;
    background: #fff;
    border-radius: 15px;
}
input{
    display: block;
    border: 2px solid #ccc;
    width: 95%;
    padding: 10px;
    margin: 10px auto;
    border-radius: 5px;
}
label{
    color: #888;
    font-size:18px;
    padding: 10px;

}
button{
    float: right;
    background: #555;
    padding: 10px 15px;
    color: #fff;
    border-radius:5px;
    margin-right: 10px;
    border: none;
}
.error{
    background: #f2dede;
    color: #a94442;
    padding: 10px;
    width: 95%;
    border-radius: 5px;
}
    </style>
</body>
</html>
