<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment | Mogador Hotels</title>
    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<!-- <link rel="stylesheet" href="../../css/home.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="icon" href="../../images/logo_rel.svg">
<!-- <link rel="stylesheet" href="../../css/meet.css"> -->
<!-- <link rel="stylesheet" href="../../css/bootstrap.min.css"> -->
<link rel="stylesheet" href="../../css/footer.css">
<!-- <link rel="stylesheet" href="../../css/book.css"> -->
<link rel="stylesheet" href="../../css/payment.css">
</head>
<body>
<div class="top-bar">
    <span><ion-icon name="call-outline"></ion-icon> +212 528 44 00 11</span>
    <ul>
        <li><a href="https://www.facebook.com/mogadorhr/"><ion-icon name="logo-facebook"></ion-icon></a></li>
        <li><a href="https://x.com/"><i class="fa-brands fa-x-twitter"></i></a></li>
        <li><a href="https://www.instagram.com/"><ion-icon name="logo-instagram"></ion-icon></a></li>
        <li><a href="https://whatsapp.com/dl/"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
        <li><a href="https://www.linkedin.com/company/mogador-h%C3%B4tels-&-resorts/"><ion-icon name="logo-linkedin"></ion-icon></a></li>
    </ul>
</div>
    <nav>
        
        <div class="logo">
            <a href="#"><img src="../../images/MOGADOR_LOGO.png" alt="logo"></a>
        </div>
        <div class="toggle">
            <a href="#"><ion-icon name="menu-outline"></ion-icon></a>
        </div>
        
        <ul class="menu">
            <li><a href="index.php">HOME</a></li>
            <li><a href="about_us.php">ABOUT US</a></li>
            <li><a href="discover.php">DISCOVER</a></li>
            <li><a href="book.php">BOOK</a></li>
            <li><a href="contact.php">CONTACT</a></li>
        </ul>
    </nav>
    <div id="container-website">
        <div class="second-container">
            <div class="outer-container">
                <header>
                    <div class="logo-m">
                        <a href="book.php"><strong>Mogador</strong>Pay</a>
                    </div>
                    <div class="time-left">
                        <time datetime="" id="time">03:00</time>
                        <span>time left!</span>
                    </div>
                </header>
                <section class="payment">
                <div class="left">
                    <form action="" method="post">
                        <div class="card-number">
                            <p>Card Number</p>
                            <span>Enter the 16-digit card number on the card</span>
                            <div class="card-number-box">
                                <input type="text" id="credit-card" name="card_number" autocomplete="off" placeholder="xxxx - xxxx - xxxx - xxxx">
                                <span class="cc-logo"></span>
                            </div>
                        </div>
                        <div class="card-holder">
                            <div class="text">
                                <p>Card Name Holder</p>
                                <span>Enter name card holder on the card</span>
                            </div>
                            <div class="input">
                                <input type="text" name="card_name" id="card-name" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="card-cvv">
                            <div class="text">
                                <p>CVV Number</p>
                                <span>Enter the 3 or 4 digits on the card</span>
                            </div>
                            <div class="input">
                                <input type="number" name="cvv_number" id="" data-maxlength="4" required oninput="this.value=this.value.slice(0,this.dataset.maxlength)">
                            </div>
                        </div>
                        <div class="card-expiration">
                            <div class="text">
                                <p>Expiry Date</p>
                                <span>Enter the expiration date of your card</span>
                            </div>
                            <div class="input">
                                <input type="number" name="exp_month" id="exp-month" placeholder="MM" data-maxlength="2" required oninput="this.value=this.value.slice(0,this.dataset.maxlength)">
                                <strong>/</strong>
                                <input type="number" name="exp_year" id="exp-year" placeholder="YYYY" data-maxlength="4" required oninput="this.value=this.value.slice(0,this.dataset.maxlength)">
                            </div>
                        </div>
                        <button name="pay">Pay Now</button>
                    </form>
                </div> 
            <div class="right">
                <div class="virtual-card">
                    <p class="cc-logo"></p>
                    <p class="name-holder">Ayoub Salihi</p>
                    <p class="chip">
                        <svg fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 viewBox="0 0 32 32" xml:space="preserve">
<path id="credit--card_1_" d="M29,26.36H3c-1.301,0-2.36-1.059-2.36-2.36V8c0-1.301,1.059-2.36,2.36-2.36h26
	c1.302,0,2.36,1.059,2.36,2.36v16C31.36,25.302,30.302,26.36,29,26.36z M1.36,13.36V24c0,0.904,0.736,1.64,1.64,1.64h26
	c0.904,0,1.64-0.735,1.64-1.64V13.36H1.36z M1.36,12.64h29.28v-2.28H1.36V12.64z M1.36,9.64h29.28V8c0-0.904-0.735-1.64-1.64-1.64H3
	C2.096,6.36,1.36,7.096,1.36,8V9.64z"/>
<rect id="_Transparent_Rectangle" style="fill:none;" width="32" height="32"/>
</svg>
                    </p>
                    <p class="highlight">
                        <span class="last-digit" id="card-number">
                            .... .... .... 4567
                        </span>
                        <span class="expiry">
                            <span class="exp-month">11</span> /
                            <span class="exp-year">25</span>
                        </span>
                    </p>
                </div>
                <div class="receipt">
                    <ul>
                        <li>
                            <span>Booking Number</span>
                            <span>19382984</span>
                        </li>
                        <li>
                            <span>Room</span>
                            <span>Single/Couple</span>
                        </li>
                        <li>
                            <span>Discount (10%)</span>
                            <span>$50.00</span>
                        </li>
                    </ul>
                    <div class="total">
                        <p class="price"><strong>1.255</strong>USD</p>
                        <p>Total you have to pay</p>
                    </div>
                </div>
            </div>
                </section>
        </div>
    </div>
    <footer>
    <div class="footer-container">
      <div class="footer-content">
        <div class="footer-items" id="mogador-logo">
            <img src="../../images/MOGADOR_LOGO.png" alt="" class="logo-mogador">
            <p>You are welcomed by the best Moroccan Hotels & Resorts</p>
            <div class="social-media-mogador">
            <a href="https://www.facebook.com/mogadorhr/"><i class="fab fa-facebook"></i></a>
                <a href="https://x.com/"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                <a href="https://whatsapp.com/dl/"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.linkedin.com/company/mogador-h%C3%B4tels-&-resorts/"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
        <div class="footer-items" id="mogador-location">
            <h3>Our destinations</h3>
            <div class="links">
                <a href="discover.php">Agadir</a>
                <a href="discover.php">Casablanca</a>
                <a href="discover.php">Tangier</a>
                <a href="discover.php">Marrakech</a>
                <a href="discover.php">Essaouira</a>
            </div>
        </div>
        <div class="footer-items" id="see-more">
            <h3>See More</h3>
            <div class="links">
                <a href="index.php">HOME</a>
                <a href="about_us.php">ABOUT US</a>
                <a href="discover.php">DISCOVER</a>
                <a href="contact.php">CONTACT</a>
                <a href="book.php">BOOK</a>
            </div>
        </div>
        <div class="footer-items" id="contact-details">
            <h3>Contact details</h3>
            <div class="details-of-contact">
                <i class="fa fa-location"></i>
                <p>Hassan II street <br>Marrakech, Morocco</p>
            </div>
            <div class="details-of-contact">
                <i class="fa fa-phone"></i>
                <p>+212 528 44 00 11</p>
            </div>
        </div>
      </div>
      <div class="footer-content">
        <form action="" id="form" class="form">
        <input type="email" name="mail_news" id="email_footer" placeholder="Write your email here">
        <button type="submit" name="send_mail"><i class="fa fa-paper-plane"></i></button>
    </form>
      </div>    
    </div>
</footer>
<div class="copyright">&copy; | All rights reserved by Mogador Hotels & Resorts</div>
</body>
</html>
<script src="../../js/jquery-3.7.1.min.js"></script>
<script src="../../js/jquery-ui.js"></script>
<script src="../../js/jquery-ui.min.js"></script>
<script src="../../js/jquery.min.js"></script>
<script src="../../js/menu.js"></script>
<!-- <script src="../../js/contacter.js"></script> -->
<script src="../../js/footerr.js"></script>
<!--<script src="../../js/booking.js"></script> -->
<script src="../../js/payment.js"></script>

<?php
require "connect_mogador.php";
require "mogador_payment.php";

if (isset($_POST["pay"])) {
    $card_number = $_POST["card_number"];
    $card_name = $_POST["card_name"];
    $cvv_number = $_POST["cvv_number"];
    $month_exp = $_POST["exp_month"];
    $year_exp = $_POST["exp_year"];
    $request = "insert into card_informations(card_number,card_name,cvv_number,month_expiry,year_expiry) values('$card_number','$card_name','$cvv_number','$month_exp','$year_exp')";
    $connection->query($request);
}

if (isset($_POST["send_mail"])) {
    $mail = $_POST["mail_news"];
    $request2 = "insert into emails_newsletters(mail) values('$mail')";
    $connection->query($request2);
}
?>