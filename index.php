<?php
if (isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);
    if (!$con) {
        die("connection error " . mysqli_connect_error());
    }
    //echo "SUCCSESFUL";
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mail = $_POST['email'];
    $msg = $_POST['msg'];
    $sql = "INSERT INTO `lrtech-db`.`contact-us` (`fname`, `lname`, `email`, `msg`)
    VALUES ( '$fname', '$lname', '$mail', '$msg')";
    //echo $sql;
    if ($con->query($sql) == true) {
        // echo "connection succee";
    } else {
        // echo "error: $con->error ";
    }
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,700;1,400&family=Merriweather:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/hero.css">
    <link rel="stylesheet" href="./css/about.css">
    <link rel="stylesheet" href="./css/services.css">
    <link rel="stylesheet" href="./css/quotation.css">
    <link rel="stylesheet" href="./css/Our-Team.css">
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/contact1.css">
    <link rel="stylesheet" href="./css/compInfo.css">
    <link rel="stylesheet" href="./css/footer.css">
    <title>LR-Tech-Solutions</title>
</head>

<body>
    <!-- [header section] -->
    <section class="header">
        <div class="inner-wrapper">
            <div class="comp-info">
                <ul>
                    <li> <img src="./assets/Mail.png" alt="">
                        <a class="link" href="#">info@lrtechsolutions.com</a>
                    </li>

                    <span class="vertical-line">|</span>

                    <li><img src="./assets/Phone.png" alt="">
                        <a class="link" href="#">+91 93xxxxxxxx</a>
                    </li>
                </ul>
            </div>
            <div class="action-icons">
                <span class="icon person">

                    <img src="./assets/Facebook F.png" alt="">
                </span>
                <span class="vertical-line">|</span>
                <span class="icon search">
                    <img src="./assets/Instagram.png" alt="">
                </span>
                <span class="vertical-line">|</span>
                <span class="icon search">
                    <img src="./assets/LinkedIn 2.png" alt="">
                </span>

            </div>
        </div>
    </section>
    <!-- [hero section] -->
    <section class="hero-banner">
        <div class="inner-wrapper">
            <div class="nav-div">
                <nav class="navbar">
                <div class="logo"> <a  href="./index.php"> <img src="./assets/Logo Final.png" alt=""></a></div>
                    <div class="nav-items">
                        <ul>
                            <li><a class="link" href="./index.php">Home</a></li>
                            <li><a class="link" href="./about.html">About Us</a></li>
                            <li><a class="link" href="./services.html">Services</a></li>
                            <li><a class="link" href="./achievements.html">Achievements </a></li>
                            <li><a class="link" href="#">Hire Us</a></li>
                            <li><a class="link" href="./contact.php">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="banner-section">
                <div class="banner-contant">
                    <h1>Delivering
                        <span> tech solutions</span> <br> that enables you to
                        <span>work smarter</span>
                    </h1>
                    <div><button class="learn-more">Learn More</button></div>
                </div>
            </div>
        </div>
    </section>
    <!-- [about section] -->
    <section class="about">
        <div class="inner-wrapper">
            <div class="about-contant">
                <div class="about-left">
                    <img src="./assets/web-development-banner.png" alt="">
                </div>
                <div class="about-right">
                    <h3 class="heading">Empowered to help <br>
                        business and technology thrive!</h3>
                    <p class="paragraph">LR Tech Solutions is a global pioneer in IT industry that helps
                        enterprises scale and reimagine their businesses through smart
                        technical solutions.
                        <br>
                        We specializes in providing the most efficient services with a
                        blend of talent, technology, and relentless commitment to
                        customer success.
                    </p>
                </div>
            </div>
        </div>
    </section>
        <!-- [services section] -->
    <section class="services">
        <div class="inner-wrapper">
            <div class="services-contant">
                <div>
                    <h1 class="services-heading">SERVICES</h1>
                    <hr>
                </div>
                <p class="p">Inspired by the world, cultivating innovation for the digital era!</p>
                <div class="services-carts">
                    <div class="services-CartList">
                        <div class="left">
                            <img src="./assets/Internet.png" alt="">
                        </div>
                        <div class="right">
                            <h3 class="cart-headnig">Website Development</h3>
                            <p class="cart-paragraph">Static and Interactive websites
                                using latest technology.</p>
                        </div>
                    </div>
                    <div class="services-CartList">
                        <div class="left">
                            <img src="./assets/Android.png" alt="">
                        </div>
                        <div class="right">
                            <h3 class="cart-headnig">Mobile App Development</h3>
                            <p class="cart-paragraph">Native and Hybrid Apps for iOS
                                and Android.</p>
                        </div>
                    </div>
                    <div class="services-CartList">
                        <div class="left">
                            <img src="./assets/Laptop.png" alt="">
                        </div>
                        <div class="right">
                            <h3 class="cart-headnig">UI/UX Designing</h3>
                            <p class="cart-paragraph">Responsive and user centered
                                web design for best experience.</p>
                        </div>
                    </div>
                    <div class="services-CartList">
                        <div class="left">
                            <img src="./assets/Compose.png" alt="">
                        </div>
                        <div class="right">
                            <h3 class="cart-headnig">Content Writing</h3>
                            <p class="cart-paragraph">Engaging content for blogs,
                                articles, websites, emails, etc.</p>
                        </div>
                    </div>
                    <div class="services-CartList">
                        <div class="left">
                            <img src="./assets/Knowledge Sharing.png" alt="">
                        </div>
                        <div class="right">
                            <h3 class="cart-headnig">Consultancy</h3>
                            <p class="cart-paragraph">Reliable consultancy services
                                for online education.</p>
                        </div>
                    </div>
                    <div class="services-CartList">
                        <div class="left">
                            <img src="./assets/Graduation Cap.png" alt="">
                        </div>
                        <div class="right">
                            <h3 class="cart-headnig">Internships</h3>
                            <p class="cart-paragraph">Authentic internship
                                programmes for MBA students.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- [quotation section] -->
    <section class="quotation">
        <div class="inner-wrapper">
            <h1>Need a customized quotation?</h1>
            <button class="learn-more">Get it now!</button>
        </div>
    </section>
     <!-- [achivement section] -->
    <section class="Our-Team">
        <div class="inner-wrapper">
            <div class="Our-Team-contant">
                <div>
                    <h1 class="Our-Team-heading">ACHIEVEMENTS
                    </h1>
                    <hr>
                </div>
                <div class="team-membars">
                    <div class="member-name">
                        <h1>50+</h1>
                        <p>Satisfied</p>

                    </div>
                    <div class="member-name">
                        <h1>200+</h1>
                        <p>Successful Projects</p>


                    </div>
                    <div class="member-name">
                        <h1>4+</h1>
                        <p>Years in Industry</p>


                    </div>
                </div>
            </div>
        </div>
    </section>
       <!-- [contact section] -->
    <section class="contact-us">
        <div class="inner-wrapper">
            <div class="contact-us-contant">
                <div class="contact-us-heading">
                    <h1 class="heading">CONTACT US</h1>
                    <hr>
                </div>
                <div class="contact-details">
                    <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7225.230526760204!2d73.16995382404045!3d25.11488183573802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3942942c5b31bd93%3A0xadd89c17d3c07841!2sBisalpur%2C%20Rajasthan%20306126%2C%20India!5e0!3m2!1sen!2sus!4v1635004429199!5m2!1sen!2sus" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
                    <div class="form-field">
                        <h1>Have a question? Feel free to ask!</h1>
                        <form>
                            <div>
                                <input type="text" class="name name1" name="fname" placeholder="First Name" required>
                                <input type="text" class="name" name="lname" placeholder="Last Name" required>
                                <input type="text" class="e-mail" name="email" placeholder="Subject" required>
                                <textarea cols="30" rows="10" name="msg" placeholder="Message.." class="message" required></textarea>
                            </div>
                            <div class="button">
                                <button type="submit">Send</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="compInfo">
        <div class="inner-wrapper">
            <div class="compInfo-div">
                <div class="info-section">
                    <ul>
                        <li><img src="./assets/Marker.png" alt="">
                            <h6>ADDRESS</h6>
                        </li>
                    </ul>
                    <P class="comp-paragraph">2972 Westheimer Rd. Santa Ana, <br>
                        Illinois 85486 </P>
                </div>
                <hr>
                <div class="info-section">
                    <ul>
                        <li><img src="./assets/Phone (1).png" alt="">
                            <h6>PHONE NO.</h6>
                        </li>
                    </ul>
                    <P class="comp-paragraph">(603) 555-0123</P>
                </div>
                <hr>
                <div class="info-section">
                    <ul>
                        <li><img src="./assets/Mail (1).png" alt="">
                            <h6>E-MAIL</h6>
                        </li>
                    </ul>
                    <P class="comp-paragraph">
                        nevaeh.simmons@example.com
                    </P>
                </div>
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="inner-wrapper">
            <div class="footer-contant">
                <div class="Flogo">
                    <img src="./assets/Logo Final.png" alt="">
                </div>
                <div class="Fmenu">
                    <ul class="MenuList">
                        <li>Home</li>
                        <li>About Us</li>
                        <li>Services</li>
                        <li>Hire Us</li>
                    </ul>
                </div>
                <div class="Cname">
                    <h3 class="LRsol">LR TECH SOLUTIONS</h3>
                    <h5>Made with trust</h5>
                </div>
            </div>
            <div class="copyright">
                <span>Copyright © 2021, LR Tech Solutions</span>
            </div>
        </div>
    </section>
</body>

</html>