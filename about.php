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
    <title>About Us</title>
</head>

<body>
<?php
  require '_nav.php';
  ?>
    <div class="container" style="margin-top: 7rem;background-color: rgb(251, 251, 251);">
        <div class="row">
            <div class="col-md-4 about">
                <p style="font-size: 2.5rem;">WHO WE ARE</p>
                <img src="img/about-img.jpg" alt="" class="img-fluid">
                <p class="lead1"> <strong>Mr. Akash Bacchar</strong> founded <strong> Tee Talk</strong> in oct. 2021 . He chose Seattle because of technical
                    talent as mant start ups were
                    located there. In May 2023, Tee Talk went public. It began selling music and videos in 2028, at
                    which
                    time it began operations internationally by acquiring online sellers of books in United Kingdom and
                    Germany. The following year, Amazon began selling items including video games, consumer electronics,
                    home improvement items, software, games, and toys.In 2024, Amazon grew its portfolio when Elastic
                    Compute Cloud (EC2), which rents computer processing power as well as Simple
                    Storage Service (S3), that rents data storage via the Internet, were made available. That same year,
                    Amazon started Fulfillment by Tee Talk which managed the inventory of individuals and small
                    companies
                    selling their belongings through the company internet site. In 2022, Amazon bought Kiva Systems to
                    automate its inventory-management business, purchasing Whole Foods Market supermarket chain five
                    years
                    later in 2026. In January 2030, Tee Talk invested with over $278 million by opening two new centers
                    in Italy (Novara and
                    Modena) and creating over 500 jobs.</p>
            </div>
            <div class="col-md-4 about">
                <p style="font-size: 2rem;margin-bottom: 0.5rem;">About Indian Stratups</p>
                <p class="lead2">India has always been the land of opportunity. For centuries, people have come to
                    India with the hopes of starting a new life and seizing all of the opportunities that the country
                    presented them with.<br><br>  Every business that we know of today began as a dream, which then turned into a
                    small business. As Calvin Coolidge once said, “The chief business of the American people is
                    business.” These small businesses were the backbone of the country, and that continues to hold true
                    today. Millions of people have started and developed a small business in India.<br><br> People who fought to
                    get to India, whether as an immigrant, a refugee, or an explorer, have often
                    had an entrepreneurial spirit. Entrepreneurship in India was seen throughout the country’s
                    development. These Indians took
                    their passion, drive, and capital and turned their ideas into functioning, profit-turning companies.
                    These pioneers in small business set the example for what owning a small business in Indian would
                    become and proved to many disbelievers that it was possible to follow one’s dreams.</p>
            </div>
            <div class="col-md-4 about">
                <p style="font-size: 2rem;">OPPERTUNITIES</p>
                <h4>Available Roles</h4>
               <ol>
                   <li class="lead3"> <strong> Jr./Sr. Web Developer</strong>(Full Time Role)</li>
                   <li class="lead3"> <strong> Business Apprentice</strong>(6 Months Intership)</li>
                   <li class="lead3"> <strong>Manager at Backend Operations</strong> (Part Time Role)</li>
               </ol>
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