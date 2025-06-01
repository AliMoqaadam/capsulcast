<?php
    require_once("./config/db.php");
    $validationMsg = ["message" => "", "class" => ""];

    if(isset($_SESSION['login'])) {
        header('Location: ./index.php');
    }

    $old_fullName = "";
    $old_email = "";
    $old_pass = "";
    $old_rePass = "";

    if(isset($_POST['regSubmit'])) {
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $rePass = $_POST['rePass'];

        if($fullName == "" || $email == "" || $pass == "" || $rePass == "") {
            $validationMsg["message"] = "هیچ مقداری نباید خالی باشد";
            $validationMsg["class"] = "danger";
            $old_fullName = $fullName;
            $old_email = $email;
            $old_pass = $pass;
            $old_rePass = $rePass;
        } elseif (!preg_match('/^[\x{0600}-\x{06FF}\s]+$/u', $fullName) && !empty($fullName)) { // شرط جدید: بررسی حروف فارسی
            $validationMsg["message"] = "نام و نام خانوادگی باید فقط شامل حروف فارسی و فاصله باشد.";
            $validationMsg["class"] = "danger";
            $old_fullName = $fullName;
            $old_email = $email;
            $old_pass = $pass;
            $old_rePass = $rePass;
        } else if (strlen($pass) < 8 || strlen($rePass) < 8) {
            $validationMsg["message"] = "رمزعبور و تکرار آن نباید کمتر از 8 کاراکتر باشد";
            $validationMsg["class"] = "danger";
            $old_fullName = $fullName;
            $old_email = $email;
            $old_pass = $pass;
            $old_rePass = $rePass;
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $validationMsg["message"] = "فرمت ایمیل وارد شده اشتباه است";
            $validationMsg["class"] = "danger";
            $old_fullName = $fullName;
            $old_email = $email;
            $old_pass = $pass;
            $old_rePass = $rePass;
        } else if ($pass != $rePass) {
            $validationMsg["message"] = "رمزعبور با تکرار آن همسان نیست";
            $validationMsg["class"] = "danger";
            $old_fullName = $fullName;
            $old_email = $email;
            $old_pass = $pass;
            $old_rePass = $rePass;
        } else {
            $pass = sha1(md5($pass).'h&s!L2@C'.sha1($pass));
            $query = "INSERT INTO `users`(`fullName`, `email`, `pass`) VALUES ('$fullName','$email','$pass')";
            mysqli_query($conn, $query);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>CapsulCast - ثبت نام</title>

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
                <h2 class="breadcrumb-title">ثبت نام</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="https://capsulcast.ir">خانه</a></li>
                    <li class="active">ثبت نام</li>
                </ul>
            </div>
        </div>


        <div class="auth-area py-80">
            <div class="container">
                <div class="col-md-5 col-lg-4 mx-auto">
                <?php
                    if(isset($_POST['regSubmit'])) {
                        echo '<p class="alert alert-'.$validationMsg["class"].' p-2 mt-20">'.$validationMsg["message"].'</p>';
                        unset($_POST['regSubmit']);
                    }
                ?>
                    <div class="auth-wrap">
                        <div class="auth-header">
                            <img src="images/logo-dark.png" alt="">
                            <p>حساب کپسول کست خود را ایجاد کنید</p>
                        </div>
                        <div class="auth-form">
                            <form method="post">
                                <div class="form-group">
                                    <label>نام و نام خانوادگی</label>
                                    <input type="text" name="fullName" value="<?php echo $old_fullName; ?>" class="form-control" placeholder="فقط حروف فارسی و حداقل 3 کاراکتر">
                                </div>
                                <div class="form-group">
                                    <label>آدرس ایمیل</label>
                                    <input type="email" name="email" value="<?php echo $old_email; ?>" class="form-control" placeholder="آدرس ایمیل شما">
                                </div>
                                <div class="form-group">
                                    <label>رمز عبور</label>
                                    <input type="password" name="pass" value="<?php echo $old_pass; ?>" class="form-control" placeholder="حداقل 8 کاراکتر">
                                </div>
                                <div class="form-group">
                                    <label>تکرار رمز عبور</label>
                                    <input type="password" name="rePass" value="<?php echo $old_rePass; ?>" class="form-control" placeholder="تکرار رمز عبورتان را وارد کنید">
                                </div>
                                <div class="auth-check">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="agree">
                                        <label class="form-check-label" for="agree">
                                            من با <a href="terms.php">شرایط خدمات</a> موافقم
                                        </label>
                                    </div>
                                </div>
                                <div class="auth-btn">
                                    <button type="submit" name="regSubmit" class="theme-btn"><span class="far fa-paper-plane"></span>ثبت نام</button>
                                </div>
                            </form>
                            <div class="auth-footer">
                                <div class="auth-social">
                                    <span class="auth-divider">یا</span>
                                </div>
                                <p class="mt-0">از قبل حساب کاربری دارید؟ <a href="login.php">ورود شوید.</a></p>
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