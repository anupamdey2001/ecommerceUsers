<?php
session_start();
$change=false;
$error=false;
include '_dbconnect.php';
  if(isset($_SESSION['Loggedin']) != true || $_SESSION['Loggedin'] != true){
    header("location: login.php");
    exit;
  }


if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $oldPassword = $_POST['op'];
    $newPassword = $_POST['np'];
    $reEnterNewPassword = $_POST['c_np'];
    $sql = "SELECT password FROM users WHERE password = '$oldPassword' AND email = '$email'";
    $result= mysqli_query($connect,$sql);
    $num = mysqli_fetch_array($result);
    if($num>0){
        if (password_verify($password, $hash)) {
         $con = mysqli_query($connect, "UPDATE users SET password = '$newPassword' WHERE email = '$email'");
         $change = true;
         $change = "Password change successfull!!" ;
        }
    }else{
        $error = "Password does not match";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/cfb015dace.js" crossorigin="anonymous"></script>
    <title>Settings</title>
</head>

<body>
    <?php
    require '_nav2.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="center-block" style="width:35%;margin: 10rem auto 11.2rem auto;">
                <h4>Change Password</h4>
                <?php
                if($change==true){
                    echo '<p class="text-danger">'. $change .'</p>';
                }
                if($error==true){
                    echo '<p class="text-danger">'. $error .'</p>';
                }
                ?>
                <form action="settings.php" method="POST">
                <div class="form-group">
                        <input type="email" name="email" id="email" placeholder="Email Id" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="op" id="oldPass" placeholder="Old Password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="np" id="Password" placeholder="New Password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="c_np" id="confirmPassword" placeholder="Re-type New Password" class="form-control" required>
                    </div>
                    <BUtton type="submit" class="btn btn-primary">Change</BUtton>
                </form>
            </div>
        </div>
    </div>

    <?php
    include '_footer.php' ;
    ?>



    <!-- Bootstrap JAVASCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
    </script>
    <script src="js/index.js"></script>
</body>

</html>