<?php
  session_start();
  if(isset($_SESSION['Loggedin']) != true || $_SESSION['Loggedin'] != true){
    header("location: login.php");
    exit;
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
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/cfb015dace.js" crossorigin="anonymous"></script>
  <title>Welcome - <?php echo $_SESSION['email'] ?></title>
</head>

<body>
  <?php require '_nav2.php'; ?>

  <div class="container">
    <div class="inner-div">
      <div class="banner-img">
        <img src="img/Banner.png" alt="" class="img-fluid">
      </div>
    </div>
  </div>
  </div>
  <div class="container sale">
    <h1 class="h1 text-center">Biggest Sale Ever!!!!!</h1>
    <h2 class="h2 text-center">Upto 80% off</h2>
  </div>
  <div class="container-fluid">
    <div class="row row_style text-center">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">#1</h5>
            <img src="img/1.jpeg" alt="" height="150px" width="150px">
            <p class="card-text">Best featured phones with minimun price.</p>
            <p class="card-text">24999-29999 INR</p>
            <button class="card-link btn btn-primary btn-block">Shop Now!</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">#2</h5>
            <img src="img/2.png" alt="" height="150px" width="150px">
            <p class="card-text">Best featured phones with minimun price.</p>
            <p class="card-text">4999-9999 INR</p>
            <button class="card-link btn btn-primary btn-block">Shop Now!</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">#3</h5>
            <img src="img/3.jpg" alt="" height="150px" width="150px">
            <p class="card-text">Best featured phones with minimun price.</p>
            <p class="card-text">7999-12999 INR</p>
            <button class="card-link btn btn-primary btn-block">Shop Now!</button>
          </div>
        </div>
      </div>
    </div>
    <div class="row row_style text-center">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">#4</h5>
            <img src="img/4.jpg" alt="" height="150px" width="150px">
            <p class="card-text">Best featured phones with minimun price.</p>
            <p class="card-text">29999-34999 INR</p>
            <button class="card-link btn btn-primary btn-block">Shop Now!</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">#5</h5>
            <img src="img/5.jpg" alt="" height="150px" width="150px">
            <p class="card-text">Best featured phones with minimun price.</p>
            <p class="card-text">Starts from 49999 INR</p>
            <button class="card-link btn btn-primary btn-block">Shop Now!</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">#6</h5>
            <img src="img/6.jpg" alt="" height="150px" width="150px">
            <p class="card-text">Best featured phones with minimun price.</p>
            <p class="card-text">1499-2499 INR</p>
            <button class="card-link btn btn-primary btn-block">Shop Now!</button>
          </div>
        </div>
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