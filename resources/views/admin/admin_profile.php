<?php 
session_commit();
session_start();
include "../connection/db_conn.php";

if(isset($_SESSION['id'])) 
{
    $id = $_SESSION['id'];
    $result = mysqli_query($db, "SELECT * FROM users WHERE id='$id'");
        while ($row = mysqli_fetch_array($result)) 
            {
                $name = $row['name'];
                $username = $row['username']; 
                $password = $row['password'];  
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/image/ucs_logo.png" />
    <link rel="stylesheet" type="text/css" href="../assets/css/modal.css">
    <title>Admin Profile Page</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
   *{ 
    margin: 0;
    padding: 0;
    font-family: 'Open Sans', sans-serif;
   }
</style>
<body>
    <?php 
         include "extension/navigator_side.php";
    ?>
        <div class="section">
                <h2>Profile</h2>
                <h3>Home > Profile</h3>
            <div class="container">
                <?php 
                    echo "<p>Name: $name</p>
                            <p>Username: $username</p>" ?>
                <button class="btn button" id="myBtn">Change Password</button>

                <!-- The Modal -->
                <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2>Change Password</h2>
                    <?php 
                    echo "<p>Current Password: $password</p>"
                    ?>
                    <form action="changePassword.php" method="POST">
                            <div class="form-control">
                            <label for="password">New Password:</label>
                            <input type="password" name="password" placeholder="Input your New Password" required>
                        </div>
                        <div class="form-control">
                            <label for="confirmPassword">Confirm Password:</label>
                            <input type="password" name="confirmPassword" placeholder="Input your Confirm Password" required>
                        </div>
                        <button class="btn button" style="vertical-align:middle"><span>Change Password</span></button>
                        <button type="reset" class="btn button" style="vertical-align:middle"><span>Reset</span></button>
                    </form>
                </div>

                </div>
            </div>
        </div>
        <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
               <?php } ?>
               <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
               <?php } ?>
    </div>
<script src="../assets/js/modal.js">
</script>
</body>
</html>
<?php 
}
else{
     header("Location: ../login.php");
     exit();
}
 ?>