<?php 
// session_commit();
// session_start();

// if(isset($_SESSION['id'])) 
// {
// include "../connection/db_conn.php";
// $tryid = $_SESSION['id'];
// $result6 = mysqli_query($db, "SELECT * FROM users WHERE id='$tryid'");
//     while ($row1 = mysqli_fetch_array($result6)) 
//         {
//               $username = $row1['username'];   
//         }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/image/ucs_logo.png" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Admin Dashboard</title>
</head>
<body>
    @extends('admin.extension.navigator_side')
    @section('navigator_side')
    @endsection
<div class="section">
    <p>{{ Session::token() }}</p>
</div>
</body>
</html>
<?php 
// }
// else{
//      header("Location: ../login.php");
//      exit();
// }
 ?>
