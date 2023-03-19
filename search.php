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
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php"> About </a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="medicine.html"> Medicine </a>
              </li>
              <li class="nav-item"> -->
                <a class="nav-link" href="buy.php"> Online Buy </a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="news.html"> News </a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact us</a>
              </li>
            </ul>
            <form class="form-inline ">
              <input type="search" placeholder="Search">
              <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
            </form>
            <div class="login_btn-contanier ml-0 ml-lg-5">
              <a href="login.php">
                <img src="images/user.png" alt="">
                <span>
                  Login
                </span>
              </a>
            </div>
          </div>
        </div>

      </nav>
    </div>
  </header>

   





<div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Batch_No</th>
                                    <th>Product_Name</th>
                                    <th>Manufacture_date</th>
                                    <th>Expiry_date</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","medico");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM tb_medicine WHERE CONCAT(Batch_No,Product_Name,Manufacture_date,Expiry_date,Price) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['Batch_No']; ?></td>
                                                    <td><?= $items['Product_Name']; ?></td>
                                                    <td><?= $items['Manufacture_date']; ?></td>
                                                    <td><?= $items['Expiry_date']; ?></td>
                                                    <td><?= $items['Price']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>