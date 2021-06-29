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
    <link rel="stylesheet" href="css/contact.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/cfb015dace.js" crossorigin="anonymous"></script>
    <title>Contact Us</title>
</head>

<body>
<?php
  require '_nav.php';
  ?>
    <div class="container contact">
        <div class="row text-left">
            <div class="col-md-9">
                <h3>LIVE SUPPORT</h3>
                <h5>24 hours|7 days a week|365 days a year Live Technical Support.</h5>
                <p>Tee Talk is ranked as the #1 route customers would like to take to connect with businesses. With more
                    than 50 billion messages delivered every day, it’s the most popular method to get to loved ones,
                    friends, and these days, your company. Live Support helps make online messaging an easy task to be
                    able to enable you to connect, convert, and
                    maintain bonds with every customer that comes to you - regardless of the browser or device.</p>
            </div>
            <div class="col-md-3">
                <img src="img/contact.png" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row text-left" style="margin-top: 3rem;">
            <div class="col-md-7">
                <h3>CONTACT US</h3>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control"
                            placeholder="Enter Your Email Id">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="form-control"
                            placeholder="Enter Your Massage..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-5">
                <h3>COMPANY IMFORMATION :</h3>
                <p>500 Lorem ipsum dolor site</p>
                <p>22-56-2-9 sit Amit, Lorem <br> India</p>
                <p>Phone: (00) 222 666 444</p>
                <p>Fax: (000) 000 00 00 0</p>
                <p>Email Id: txn21@gmail.com</p>
                <p>Follow on: <a href="https://www.facebook.com/anupam.dey.142687/">Facebook</a> <a
                        href="https://twitter.com/AnupamD29688766">Twitter</a> </p>
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