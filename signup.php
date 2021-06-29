<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_dbconnect.php';
    $email = $_POST["email"];
    $name = $_POST["name"];
    $password = $_POST["password"];
    $contact = $_POST["contact"];
    $city = $_POST["city"];
    $address = $_POST["address"];
    $confirmPassword = $_POST["cPassword"];
    // $exist=false;
    $existsql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($connect, $existsql);
    $numExistRow = mysqli_num_rows($result);
    if ($numExistRow > 0) {
        // $exist = true;
        $showError = "your email Already exist!!";
    } else {
        // $exist = false;
        if ($password == $confirmPassword) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`name`, `email`, `password`, `contact`, `city`, `address`, `dt`)
         VALUES ('$name', '$email', '$hash', '$contact', '$city', '$address', current_timestamp());";
            $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
            if ($result) {
                $showAlert = true;
            }
        } else {
            $showError = "Password do not match!!";
        }
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
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/signup.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/cfb015dace.js" crossorigin="anonymous"></script>
    <title>Sign Up</title>
</head>

<body>
    <?php
    require '_nav.php';
    ?>
    <div class="container" style="margin-top: 7.7rem;">
        <div class="row justify-content-around">
            <div class="col-4">
                <img src="img/yess.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-4">
                <h4>SIGN UP</h4>
                <?php
                if ($showAlert) {
                    echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Your account is now created and You can Login
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
                }
                if ($showError) {
                    echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> ' . $showError . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
                }
                ?>
                <form action="signup.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="name" id="name" placeholder="Name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="cPassword" id="cPassword" placeholder="Confirm Password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="number" name="contact" id="contact" placeholder="Contact" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="city" id="city" placeholder="City" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" id="address" placeholder="Address" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <div class="row">
            <div class="col-md-4 text-center">
                <h4>Imformation</h4>
                <a href="about.php" class="link">About us</a>
                <a href="contact.php" class="link">Contact us</a>
            </div>
            <div class="col-md-4 text-center">
                <h4>My Account</h4>
                <a href="#" class="link" onclick="openForm()">Login</a>
                <a href="signup.php" class="link">Signup</a>
            </div>
            <div class="col-md-4 text-center">
                <h4>Contact Me</h4>
                <p>+91-9123938387</p>
            </div>

        </div>
    </footer>



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