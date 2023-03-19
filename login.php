<?php
include('config.php');
$rand = rand(9999, 1000);
if (isset($_REQUEST['login'])) {
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $captcha  = $_REQUEST['captcha'];
    $captcharandom = $_REQUEST['captcha-rand'];
    if ($captcha != $captcharandom) { ?>
        <script type="text/javascript">
            alert("Invalid captcha value");
        </script>
        <?php
    } else {
        $select_query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username ='$username'and password ='$password'");
        $result = mysqli_num_rows($select_query);
        if($result > 0) {
            header ("location:buy.php");
        } 
        else 
        { ?>
            <script type="text/javascript">
                alert("Invalid username or password");
            </script>
         <?php
        }
    }
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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

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
    <link href="css/login.css" rel="stylesheet" />

</head>


<style>
    .captcha {
        width: 90%;
        background: darkgray;
        text-align: center;
        font-size: 24px;
        font-weight: 700;
    }


    .btn-btn-success {
	border-color: #FFFFFF;
        background-color: #ff3333;
        padding: 14px 40px;
        
        } /* Red */
</style>

<body>

    <h1> LOGIN</h1>
    <div class="container" id="container">
        <!-- <div class="form-container sign-up-container">
		<form action="#">
			<h1>Create Account</h1> -->
        <!-- <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div> -->
        <!-- <span>or use your email for registration</span> -->
        <!-- <input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button>Sign Up</button>
		</form>
	</div> -->
        <div class="form-container sign-in-container">
            <form class=" " action="" method="POST">
                <h3>LOGIN</h3>
                <!-- <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div> -->
                <!-- <span>or use your account</span> -->
                <input type="username" placeholder="username" name="username" id="username" required="" />
                <input type="password" placeholder="password" name="password" id="password" required="" />
                <div class="D-flex" col-md6>
                    <input type="text" placeholder="Enter Captcha" name="captcha" id="captcha" required="" />
                    <input type="hidden" name="captcha-rand" value="<?php echo $rand; ?>">
                </div>
                <div class="D-flex" col-md6>
                    <label for="captcha_code">Captcha Code</label>
                    <div class="captcha"><?php echo $rand; ?></div>
                </div>
                <!-- <a href="#">Forgot your password?</a> -->
                <div class="form-group">
                    <input type="submit" id="login" name="login" value="LogIn" class="btn-btn-success" />
            
                </div>
                <!-- <button>Log_in</button> -->

                <!-- <a href="buy.php"></a> -->
                <!-- <a href="register.html"></a> -->
            </form>
        </div>
        <div class="overlay-container">          
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>Login</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello</h1>
                    <p>Register Here</p>
                    <a href="register.php">
                        <button class="ghost" id="signUp">Sign_up </button>
                    </a>
                </div>
                <!-- <a href="register.html"></a> -->
            </div>
        </div>
    </div>


</body>

</html>