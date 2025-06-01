<?php
    require_once("./config/db.php");
    $validationMsg = ["message" => "", "class" => ""];

    if(isset($_SESSION['login'])) {
        header('Location: ./index.php');
    }

    $old_email = "";
    $old_pass = "";

    if(isset($_POST['loginSubmit'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        if($email == "" || $pass == "") {
            $validationMsg["message"] = "هیچ مقداری نباید خالی باشد";
            $validationMsg["class"] = "danger";
            $old_email = $email;
            $old_pass = $pass;
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $validationMsg["message"] = "فرمت ایمیل وارد شده اشتباه است";
            $validationMsg["class"] = "danger";
            $old_email = $email;
            $old_pass = $pass;
        } else if (strlen($pass) < 8) {
            $validationMsg["message"] = "رمزعبور نباید کمتر از 8 کاراکتر باشد";
            $validationMsg["class"] = "danger";
            $old_email = $email;
            $old_pass = $pass;
        } else {
            $tryPass = sha1(md5($pass).'h&s!L2@C'.sha1($pass));
            $sql_query = "SELECT * FROM `users` WHERE `email` = '$email' AND `pass` = '$tryPass'";
            $query = mysqli_query($conn, $sql_query);
            $row = mysqli_fetch_assoc($query);

            if($row>=1) {
               $_SESSION['login'] = $row['userID'];
               $_SESSION['userEmail'] = $row['email'];
            } else {
                $validationMsg["message"] = "ایمیل یا رمزعبورتان اشتباه است";
                $validationMsg["class"] = "danger";
                $old_email = $email;
                $old_pass = $pass;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="fa">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>CapsulCast - ورود</title>

    <link rel="icon" type="image/x-icon" href="images/favicon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all-fontawesome.min.css">
    <link rel="stylesheet" href="css/feather.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body dir="rtl">

    <div class="preloader d-none">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>

    <?php include_once("./config/header.php") ?>

    <main class="main">

        <div class="site-breadcrumb" style="background: url(images/aboutus-01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">ورود</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="https://capsulcast.ir">خانه</a></li>
                    <li class="active">ورود</li>
                </ul>
            </div>
        </div>


        <div class="auth-area py-80">
            <div class="container">
                <div class="col-md-5 col-lg-4 mx-auto">
                    <?php
                    if(isset($_POST['loginSubmit'])) {
                        echo '<p class="alert alert-'.$validationMsg["class"].' p-2 mt-20">'.$validationMsg["message"].'</p>';
                        unset($_POST['loginSubmit']);
                    }
                    ?>
                    <div class="auth-wrap">
                        <div class="auth-header">
                            <img src="images/logo-dark.png" alt="">
                            <p>به حساب کپسول کست خود وارد شوید</p>
                        </div>
                        <div class="auth-form">
                            <form method="post">
                                <div class="form-group">
                                    <label>آدرس ایمیل</label>
                                    <input type="text" value="<?php echo $old_email; ?>" name="email" class="form-control" placeholder="ایمیل شما">
                                </div>
                                <div class="form-group">
                                    <label>رمز عبور</label>
                                    <input type="password" value="<?php echo $old_pass; ?>" name="pass" class="form-control" placeholder="رمز عبور شما">
                                </div>
                                <div class="auth-check">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="remember">
                                        <label class="form-check-label" for="remember">
                                            مرا بخاطر بسپار
                                        </label>
                                    </div>
                                    <a href="forgot-password.php">رمز عبور را فراموش کرده اید؟</a>
                                </div>
                                <div class="auth-btn">
                                    <button type="submit" name="loginSubmit" class="theme-btn"><span class="far fa-sign-in"></span> ورود</button>
                                </div>
                            </form>
                            <div class="auth-footer">
                                <div class="auth-social">
                                    <span class="auth-divider">یا</span>
                                </div>
                                <p class="mt-0">حساب ندارید؟ <a href="register.php">ثبت نام کنید.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <?php include_once("./config/footer.php") ?>


    <div class="scroll-top">
        <a href="#" class="scroll-top-icon"><i class="far fa-arrow-up"></i></a>
        <svg class="scroll-progress-circle" viewBox="0 0 100 100">
            <circle class="scroll-progress-bg" cx="50" cy="50" r="45"></circle>
            <circle class="scroll-progress-bar" cx="50" cy="50" r="45"></circle>
        </svg>
    </div>


    <script data-cfasync="false" src="js/email-decode.min.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/modernizr.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.appear.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/counter-up.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>