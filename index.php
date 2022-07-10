<?php
 include 'header.php';
 ?>

    <div class="main">
        <div class="main_content">
            <h2>Website which makes online shopping easier</h2>

            <span class="message">
                I have tried To create a user friendly and advanced e-commerce website
                which will help customers narrow down their broad ideas and enable them to
                finalize the products. another important aim of this website is to create a
                opportunity for small buisneses to penetrate the market with their products.
            </span><br>
            <div class="button">
                <a href="services.php">Shop Now</a>
            </div>
        </div>
    </div>

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
                    <a href="services.html">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="explore">
        <a href="services.html">Explore More</a>
    </div>

    <hr>

    <div class="keypoints">
        <h2>OUR KEY HEIGHLIGHTS</h2>
        <div class="key_container">
            <div class="key_content">
                <li>many product at one place with multiple options</li>
                <li>24/7 Customer Service</li>
                <li>User-Friendly website which can be handled through any device</li>
                <li>Advanced security features.</li>
                <li>Suggest Similar Products</li>
            </div>
            <div class="key_img">
                <img src="happyshoppng.jpg">
            </div>
        </div>
    </div>

    <hr>

    <br>
    <br>
    <br>

    <hr>

    <div class="feedback">
        <h2>YOUR FEEDBACK</h2>
        <div class="feed_form">
            <form name="form-googlesheet" method="post">
                <input type="text" name="name" placeholder="name"> <br>
                <input type="email" name="email id" placeholder="E-mail id"> <br>
                <input type="number" name="number" placeholder="ph no."> <br>
                <textarea name="review" cols="5" rows="5" placeholder="write your reviews"></textarea> <br>
                <button type="submit"> submit</button>
            </form>
        </div>
    </div>

    <footer>
        <div class="footerlogo">
            <a href="index.php"></a><img src="ecommercelogo.jpg"></a>
        </div>
        <div class="pages">
            <h3>pages</h3>
            <a href="aboutus.php">about us</a>|
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

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" i
        ntegrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
        crossorigin="anonymous"></script>

    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbxPYXEfbYZ51HCa4JNcMrnLfhvEmLXfm9q13YsQ-XPhhw0isNb4CaSlPaI5LclzP8kcgQ/exec'
        const form = document.forms['form-googlesheet']

        form.addEventListener('submit', e => {
            e.preventDefault()
            fetch(scriptURL, { method: 'POST', body: new FormData(form) })
                .then(response => alert("Thank you !! your review will help us"))
                .catch(error => console.error('Error!', error.message))
        })
    </script>
</body>

</html>