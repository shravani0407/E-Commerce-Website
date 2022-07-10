
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce | contact</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">

    <style>
        @media screen and (max-width: 420px) {
            nav{
                width: 100%;
            }
            .products{
                padding-top: 200px;
            }
            .products .product_container {
                display: grid;
                width: 100%;
                height: auto;
            }
            .products .product_container .items{
                width: 80%;
            }
            footer{
                width: 100%;
            }
        }
        @media (min-width: 421px) and (max-width: 920px){
            .products{
                padding-top: 15%;
            }
            .products .product_container{
                display: flex;
                width: 100%;
            }
            .products .product_container .items{
                width: 80%;
                height: auto;
            }
            footer{
                width: 100%;
            }
        }
        @media (min-width: 920px) and (max-width: 1285px){
            nav{
                width: 95%;
            }
            .products{
                padding: 10px;
                margin: 5px;
            }
            .products .product_container{
                display: flex;
                width: 90%;
                padding: 10px;
            }
            .products .product_container .items{
                width: 400px;
            }
            footer{
                width: 90%;
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


    <div class="products">
        <h2>OUR PRODUCTS</h2>

        <div class="product_container">
            <div class="items">
                <div class="item_img">
                    <img src="LCD.png">
                </div>
                <div class="containt">
                    <h3>LCD</h3>
                    <p>Vu Premium 139 cm (55 inch) Ultra HD (4K) LED Smart Android TV (55PM)#JustHere</p>
                    <a href="services.php">Shop Now</a>
                </div>
            </div>

            <div class="items">
                <div class="item_img">
                    <img src="washingmachine.png">
                </div>
                <div class="containt">
                    <h3>Washing Machine</h3>
                    <p>LG 6.5 kg with Smart Diagnosis and Smart Inverter Fully Automatic Top Load Silver (T65SKSF4Z)</p>
                    <a href="services.php">Shop Now</a>
                </div>
            </div>

            <div class="items">
                <div class="item_img">
                    <img src="AC.png">
                </div>
                <div class="containt">
                    <h3>Air Conditionar</h3>
                    <p>Whirlpool 4 in 1 Convertible Cooling 1.5 Ton 5 Star Split Inverter AC - White (1.5T MAGICOOL
                        CONVERT PRO 5S INV (N)-O/I, Copper Condenser)</p>
                    <a href="services.php">Shop Now</a>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footerlogo">
            <a href="index.php"></a><img src="ecommercelogo.jpg"></a>
        </div>
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
            <a href="https://www.facebook.com/" target="_black"><i class="fa fa-facebook-square"
                    aria-hidden="true"></i></a>|
            <a href="https://www.linkedin.com/signup" target="_black"><i class="fa fa-linkedin"
                    aria-hidden="true"></i></a>|
            <a href="https://www.instagram.com/" target="_black"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
        <div class="contact">
            <h3>contact us</h3>
            <a href="https://api.WhatsApp.com/send?phone=+918080170624" target="_black"><i class="fa fa-whatsapp"
                    aria-hidden="true"></i></a>|
            <a href="tel: +918080170624"><i class="fa fa-phone" aria-hidden="true"></i></a>
        </div>
        <hr>
        <p>copyright &copy; 2021 ecommerce all rights reserved</p>
    </footer>


</body>

</html>