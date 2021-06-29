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
    <link rel="stylesheet" href="css/cart.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/cfb015dace.js" crossorigin="anonymous"></script>
    <title>Tee Talk | Best Ecommerce Ever Made </title>
</head>

<body>
<?php
  require '_nav2.php';
  ?>

    <table class="table table-striped" style="margin-top: 8rem;width: 30rem;margin-left: auto;margin-right: auto;">
        <thead>
            <tr>
                <th scope="col">Item Number</th>
                <th scope="col">Price</th>
            </tr>
            <tr>
                <td scope="col"></td>
                <td scope="col"></td>
            </tr>
            <tr>
                <td scope="col"></td>
                <td scope="col"></td>
            </tr>
        </thead>
    </table>
    <div>
        <center><a href="success.php" class="btn btn-primary" style="margin-top: 1rem;margin-bottom: 17.3rem;">Order</a></center>
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