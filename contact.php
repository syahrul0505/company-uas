<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">

    <?php
        include 'layouts/head.php'; 
    ?>
</head>

<body>

<div class="page-wrapper">
    
    <?php
        include 'layouts/navbar.php'; 
    ?>
    <!-- End Main Header -->
    
    <!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer lazy-image" data-bg="url('assets/images/background/image-11.jpg')"></div>
        <div class="bottom-rotten-curve alternate"></div>

        <div class="auto-container">
            <h1>Product Showcase</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.php">Home</a></li>
            </ul>
        </div>

    </section>
    <!--End Banner Section -->

    <section class="section mb-5 mt-3">
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31732.497228123324!2d106.9768362681256!3d-6.189296913228304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698b6dd652f66d%3A0x688806bfbfbdb67f!2sKOPI%20Q%20BEKASI!5e0!3m2!1sid!2sid!4v1681736601549!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
    </section>

    <!-- Contact Section Two -->
    <section class="contact-section-two" style="margin-top: 180px;">
        <div class="auto-container">
            <div class="contact-info-area">
                <div class="contact-info">
                    <div class="row">
                        <div class="info-column col-lg-4">
                            <div class="icon-box">
                                <div class="icon"><span class="flaticon-email-6"></span></div>
                                <h3>Email Address</h3>
                                <ul>
                                    <li><a href="mailto:info@webmail.com">syahrulalif1234@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-column col-lg-4">
                            <div class="icon-box">
                                <div class="icon"><span class="flaticon-call-1"></span></div>
                                <h3>Phone Number</h3>
                                <ul>
                                    <li><a href="tel:+8976765654654">+62 896 2960 0054</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-column col-lg-4">
                            <div class="icon-box">
                                <div class="icon"><span class="flaticon-location"></span></div>
                                <h3>Location Address</h3>
                                <ul>
                                    <li>Ruko Sentra Aneka Niaga, Jl. Raya Pejuang No.A12, RT.006/RW.007, Pejuang, Kecamatan Medan Satria, Kota Bks, Jawa Barat 17181</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-form-area">
                <div class="sec-title text-center">
                    <div class="sub-title">Write Here</div>
                    <h2>Get In Touch</h2>
                </div>
                <!-- Contact Form-->
                <div class="contact-form">
                    <form method="post" action="http://azim.commonsupport.com/Finandox/sendemail.php" id="contact-form">
                        <div class="row clearfix">                                    
                            <div class="col-md-6 form-group">
                                <label for="name">Enter your name</label>
                                <input type="text" name="username" id="name" placeholder="Enter name here......" required="">
                                <i class="fas fa-user"></i>
                            </div>
                            
                            <div class="col-md-6 form-group">
                                <label for="email">Enter your email</label>
                                <input type="email" name="email" id="email" placeholder="Enter email here......" required="">
                                <i class="fas fa-envelope"></i>
                            </div>
    
                            <div class="col-md-12 form-group">
                                <label for="message">Enter your message</label>
                                <textarea name="message" id="message" placeholder="Enter message here......"></textarea>
                                <i class="fas fa-edit"></i>
                            </div>
    
                            <div class="col-md-12 form-group">
                                <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Get In Touch</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

	<?php 
        include 'layouts/footer.php';
    ?>
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fal fa-arrow-circle-up"></span></div>

    <?php 
        include 'layouts/foot.php';
    ?>

</body>

<!-- Mirrored from azim.commonsupport.com/Finandox/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Jan 2023 15:11:34 GMT -->
</html>