<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include 'layouts/head.php'; 
    ?>
</head>

<body>
    <?php
        include 'layouts/navbar.php'; 
    ?>

    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer lazy-image" data-bg="url('assets/images/background/image-11.jpg')"></div>
        <div class="bottom-rotten-curve alternate"></div>

        <div class="auto-container">
            <h1>About Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>

    </section>

    <!-- About Section Two -->
    <section class="about-section-two">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="image-wrapper">
                        <div class="image-one">
                            <img class="lazy-image owl-lazy"
                                src="assets/images/resource/image-spacer-for-validation.png"
                                data-src="assets/images/resource/image-10.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content-box">
                        <div class="sec-title">
                            <div class="sub-title">About Us</div>
                            <h2>We Work With <br>You To Address</h2>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur.</div>
                        </div>
                        <div class="author-info">
                            <div class="wrapper-box">
                                <h2>Rosalina D. William</h2>
                                <div class="designation">Founder</div>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod..</div>
                            </div>
                            <div class="signature"><img src="assets/images/resource/signature.png" alt=""></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Sponsors Section -->
    <section class="sponsors-section">
        <div class="auto-container">
            <!--Sponsors Carousel-->
            <div class="theme_carousel owl-theme owl-carousel"
                data-options='{"loop": true, "margin": 40, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "3" } , "992":{ "items" : "4" }, "1200":{ "items" : "5" }}}'>
                <div class="slide-item">
                    <figure><a href="#"><img src="assets/images/resource/janji_jiwa.png" alt=""></a>
                    </figure>
                </div>
                <div class="slide-item">
                    <figure><a href="#"><img src="assets/images/resource/kopi_kenangan.png" alt=""></a>
                    </figure>
                </div>
                <div class="slide-item">
                    <figure><a href="#"><img src="assets/images/resource/kulo.png" alt=""></a>
                    </figure>
                </div>
                <div class="slide-item">
                    <figure><a href="#"><img src="assets/images/resource/dailybox.png" alt=""></a>
                    </figure>
                </div>
                <div class="slide-item">
                    <figure><a href="#"><img src="assets/images/resource/kopi_kenangan.png" alt=""></a>
                    </figure>
                </div>
                <div class="slide-item">
                    <figure><a href="#"><img src="assets/images/resource/client-1.png" alt=""></a>
                    </figure>
                </div>
                <div class="slide-item">
                    <figure><a href="#"><img src="assets/images/resource/client-2.png" alt=""></a>
                    </figure>
                </div>
                <div class="slide-item">
                    <figure><a href="#"><img src="assets/images/resource/client-3.png" alt=""></a>
                    </figure>
                </div>
                <div class="slide-item">
                    <figure><a href="#"><img src="assets/images/resource/client-4.png" alt=""></a>
                    </figure>
                </div>
                <div class="slide-item">
                    <figure><a href="#"><img src="assets/images/resource/client-5.png" alt=""></a>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <?php 
        include 'layouts/footer.php';
    ?>

    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fal fa-arrow-circle-up"></span></div>

    <?php include 'layouts/foot.php'; ?>



</body>

</html>