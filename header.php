<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css"
        integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">


    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">

    <style>
        @media screen and (max-width: 420px) {
            body {
                width: 100%;
            }

            .nav .nav_top{
                width: 100%;
            }

            .main {
                width: 100%;
                height: fit-content;
            }

            .main .main_content{
                background-image: url('back.jpeg');
                background-position: center;
                background-repeat: no-repeat;
            }

            .products .product_container {
                display: grid;
                width: 90%;
                padding-right: 40px;
                height: fit-content;
            }

            .products .product_container .items {
                width: 100%;
            }

            .keypoints .key_container {
                width: auto;
                padding-right: 20px;
            }

            .keypoints .key_container .key_content {
                width: 450px;
                height: auto;
            }

            .keypoints .key_container .key_content li {
                line-height: 20px;
                padding-bottom: 3px;
            }

            .keypoints .key_container .key_img img {
                width: 360px;
                height: auto;
            }

            .feedback {
                width: 393px;
            }

            .feedback .feed_form {
                padding: 10px;
                margin: 10px;
            }

            .feedback .feed_form form input{
                width: auto;
            }
            footer {
                width: 100%;
                height: auto;
            }
        }
        @media (min-width: 421px) and (max-width:1280px){
            .nav .nav_top{
                width: 100%;
            }
            .body{
                width:max-content;
                padding-left: 20%;
            }
            .main{
                width: 100%;
                background-size: cover;
            }
        }
    </style>
</head>

<body>
        <div class="logo">
            <a href="index.php"><img src="ecommercelogo.jpg"></a>
        </div>
        <div class="nav nav_side">
            <a href="aboutus.php">About Us</a>
            <a href="services.php">Services</a>
            <a href="contact.php">Contact</a>
            <a href="login.php">Log In</a>
        </div>
    </nav>