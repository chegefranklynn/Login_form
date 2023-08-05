<?php 
include "db_conn.php";

if (isset($_POST["uname"]) && isset($_POST["password"])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }

    $uname = validate($_POST["uname"]);
    $pass = validate($_POST["password"]);

    if (empty($uname)) {
        header("location: index.php?error=Username required");
        exit();
    } elseif (empty($pass)) {
        header("location: index.php?error=Password required");
        exit();
    } else {
        
        $sql = "SELECT * FROM users WHERE username ='$uname' AND password= '$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            // Authentication successful
            session_start();
            $_SESSION['user'] = $uname; // Set the session variable
            header("location: index.php?success= Wozaaa, $uname!"); // Redirect with success message
            exit();
        } else {
            header("location: index.php?error=Invalid username or password");
            exit();
        }
    }
} else {
    header("location: index.php");
    exit();
}
?>
