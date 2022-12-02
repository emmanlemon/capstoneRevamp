<?php
session_commit();
session_start();
include "../connection/db_conn.php";
if (isset($_POST['password']) && isset($_POST['confirmPassword'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = $_SESSION['id'];
    $password = validate($_POST['password']);
    $confirmpassword = validate($_POST['confirmPassword']);

    if($password == $confirmpassword){
        $sql = "UPDATE users SET password='$password' WHERE id ='$id'";
        $result = mysqli_query($conn, $sql);
        header("Location: admin_profile.php?success=Change Password Successfully Updated");
    }else{
        header("Location: admin_profile.php?error=Please Correct Password");
    }
    // hashing the password
    // $pass = md5($pass);

    // $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    // $result = mysqli_query($conn, $sql);
    // $row = mysqli_fetch_assoc($result);
    
    // if ($row['username'] === $username && $row['password'] === $password) {
    //     $_SESSION['id'] = $row['id'];
    //     header("Location: admin/dashboard.php");
    // } else {
    //     header("Location: login.php?error=Incorect Username or Password");
    // }
}
    
    
?>