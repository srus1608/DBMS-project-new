<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM tb_user WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

// mysqli_stmt_close($stmt);


// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
}


// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO tb_user (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

        // Set these parameters
        $param_username = $username;
        $param_password =$password;

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: login.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}

?>


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

   
<body>
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-5">
         <div class="card">
           <h2 class="card-title text-center"> <a href="http://opensnippets.com">SIGN UP</a></h2>
            <div class="card-body py-md-4">
             <form _lpchecked="1" class="" action="" method="POST">
                <!-- <div class="form-group">
                   <input type="text" class="form-control" id="name" placeholder="Name">
              </div> -->
              <div class="form-group">
                   <input type="text" class="form-control" name="username" id="username" placeholder="username" required="">
                                  </div>
                                  
                                
         <div class="form-group">
           <input type="password" class="form-control" name="password" id="password" placeholder="password" required="">
         </div>
         <div class="form-group">
            <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="confirm_ password" required="">
         </div>
         <div class="d-flex flex-row align-items-center justify-content-between">
            <!-- <a href="login.php"> -->
            <button class="btn btn-primary">Sign_up</button>
            <!-- </a> -->
                </div>
             </form>
           </div>
        </div>
      </div>
      </div>
      </div>
</body>
</html>