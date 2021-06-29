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
    <link rel="stylesheet" href="css/success.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/cfb015dace.js" crossorigin="anonymous"></script>
    <title>Tee Talk | Best Ecommerce Ever Made </title>
</head>

<body>
    <div id="title">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <div class="logo">
                    <a class="navbar-brand" href="home.pgp"><i class="fas fa-external-link-alt"></i> Tee Talk</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="settings.php"><i class="fas fa-cogs"></i>Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="text">
        <center>
            <p>Thank you for ordering from Tee Talk. The order shall be delivered to you shortly.</p>
        </center>
        <hr>
        <center>
            <p>Order some more electronics <a href="home.php">here</a> </p>
        </center>
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