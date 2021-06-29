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
    <link rel="stylesheet" href="css/confirm.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/cfb015dace.js" crossorigin="anonymous"></script>
    <title>Tee Talk | Best Ecommerce Ever Made </title>
</head>

<body>
<?php
  require '_nav2.php';
  ?>

   <div class="container confirm">
       <h2>Press Yes to Confirm your Order</h2>
       <span>
       <a href="success.php" class="btn btn-primary btn-lg" type="button">Yes <i class="fas fa-thumbs-up"></i></a>
       <a href="cart.php" class="btn btn-danger btn-lg" type="button">No <i class="fas fa-thumbs-down"></i></a>
       </span>
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
                <a href="profile.php" class="link">Profile</a>
                <a href="#" class="link">Logout</a>
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