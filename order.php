<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>MEDICO</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700|Roboto:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link href="css/register.css" rel="stylesheet" />
</head>
  <!-- header section strats -->
  <header class="header_section">
    <div class="container">
      <div class="top_contact-container">
        <!-- <div class="tel_container">
          <a href="">
            <img src="images/telephone-symbol-button.png" alt=""> Call : +01 1234567890
          </a>
        </div> -->
        <div class="social-container">
          <a href="">
            <img src="images/fb.png" alt="" class="s-1">
          </a>
          <a href="">
            <img src="images/twitter.png" alt="" class="s-2">
          </a>
          <a href="">
            <img src="images/instagram.png" alt="" class="s-3">
          </a>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
        <a class="navbar-brand" href="index.html">
          <img src="images/logo.png" alt="">
          <span>
            MEDICO
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex  flex-column flex-lg-row align-items-center w-100 justify-content-between">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="order.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="order.php"> About </a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="medicine.html"> Medicine </a>
              </li>
              <li class="nav-item"> -->
                <a class="nav-link" href="order.php"> Online Buy </a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="news.html"> News </a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="order.php">Contact us</a>
              </li>
            </ul>
            <form class="form-inline " action="search.php" method="GET">
                <input type="search" name="search" placeholder="Search">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            <div class="login_btn-contanier ml-0 ml-lg-5">
              <a href="logout.php">
                <img src="images/user.png" alt="">
                <span>
                 Logout
                </span>
              </a>
            </div>
          </div>
        </div>

      </nav>
    </div>
  </header>





<section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="custom_heading-container ">
          <h2>
            Place Your Order!
          </h2>
        </div>
      </div>
    </div>
    <div class="container layout_padding2">
      <div class="row">
        <div class="col-md-5">
          <div class="form_contaier">
            <form action="order1.php" method="POST">
              <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" class="form-control" name="Name"id="Name">
              </div>
              <div class="form-group">
                <label for="PhoneNumber">Phone Number</label>
                <input type="text" class="form-control" name="PhoneNumber" id="PhoneNumber">
              </div>

              <div class="form-group">
                <label for="Batch_No">Batch_No </label>
                <input type="text" class="form-control" name="Batch_No" id="Batch_No">
              </div>
              <!-- <div class="form-group ">
                <label for="inputState">Select medicine</label>
                <select id="inputState" class="form-control">
                  <option selected>Medicine 1</option>
                  <option selected>Medicine 2</option>
                  <option selected>Medicine 3</option>
                  <option selected>Medicine 4</option>
                  <option selected>Medicine 5</option>
                  <option selected>Medicine 6</option>
                  <option selected>Medicine7</option>
                </select>
              </div> -->
              <div class="form-group">
                <label for="Medicine_Name">Medicine_Name</label>
                <input type="text" class="form-control" name="Medicine_Name" id="Medicine_Name">
              </div>
              <button type="submit" name="Send" id="Send" class="" value="Send">Proceed to Payment
              </button>
              <!-- <a href="thanku.html" ></a> -->
            </form>
          </div>
        </div>