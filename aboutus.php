<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce | aboutus</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">

    <style>
        .nav .nav_top{
            width: fit-content;
        }
        .nav .nav_top .nav .nav_side{
            align-items: right;
            text-align: right;
        }
        .main_aim{
            padding-top: 200px;
            margin: 10px;
        }
        .main_aim .mainaim_content{
            padding: 10px;
        }
        @media screen and (max-width: 300px){
            .nav .nav_top{
                width: 100%;
            }
            .main_aim{
                width: 100%;
                padding-left: 30px;
                padding-right: 25px;
            }
            .main_aim .mainaim_content{
                width: 90%;
                padding-left: 10px;
            }
            .footer{
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <nav class="nav nav_top">
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

    <div class="main_aim">
        <h2>Main Aim</h2>
        <div class="mainaim_content">
            <li>To manage a online storefront which is far cheapest than an offline store. </li>
            <li>To create a shopping platform which which will be access able for 24 hours a day  </li>
            <li>To provide endless choice of brands and products for customers</li>
        </div>
    </div>   
    
    <br>
    <br>

    <footer class="footer">
        <div class="footerlogo">
            <a href="index.php"></a><img src="ecommercelogo.jpg"></a>
        </div>
        <br>
        <div class="pages">
            <h3>pages</h3>
            <a href="aboutus.php">about us</a>|
            <a href="">mycart</a>|
            <a href="">login</a>|
            <a href="">signup</a>
        </div>
        <div class="doc">
            <h3>documents</h3>
            <a href="">privacy policy</a>|
            <a href="">terms of use</a>|
            <a href="">refund policy</a>
        </div>
        <div class="socialmedia">
            <h3>follow us</h3>
            <a href="https://www.facebook.com/" target="_black"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>|
            <a href="https://www.linkedin.com/signup" target="_black"><i class="fa fa-linkedin" aria-hidden="true"></i></a>|
            <a href="https://www.instagram.com/" target="_black"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
        <div class="contact">
            <h3>contact us</h3>
            <a href="https://api.WhatsApp.com/send?phone=+918080170624" target="_black"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>|
            <a href="tel: +918080170624"><i class="fa fa-phone" aria-hidden="true"></i></a>
        </div>
        <hr>
        <p>copyright &copy; 2021 ecommerce all rights reserved</p>
    </footer>
     
    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbxPYXEfbYZ51HCa4JNcMrnLfhvEmLXfm9q13YsQ-XPhhw0isNb4CaSlPaI5LclzP8kcgQ/exec'
        const form = document.forms['form-googlesheet']
      
        form.addEventListener('submit', e => {
          e.preventDefault()
          fetch(scriptURL, { method: 'POST', body: new FormData(form)})
            .then(response => alert("Thank you !! your review will help us"))
            .catch(error => console.error('Error!', error.message))
        })
      </script>
    
</body>
</html>