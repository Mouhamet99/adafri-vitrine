<?php include('carousel.css.php'); ?>



<!--  OWL  Carousel Slider -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
<div class="page-content page-container" id="page-content">
    <div class="">
        <div class="row ">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="row">
                    <div class="card-body">
                        <div class="owl-carousel">
                            <div class="item">
                                <img src="<?= WEB_ROOT . 'assets/images/slider1.png' ?>" alt="image" />
                            </div>
                            <div class="item">
                                <img src="<?= WEB_ROOT . 'assets/images/slider2.png' ?>" alt="image" />
                            </div>
                            <div class="item">
                                <img src="<?= WEB_ROOT . 'assets/images/slider3.png' ?>" alt="image" />
                            </div>
                            <div class="item">
                                <img src="<?= WEB_ROOT . 'assets/images/slider4.png' ?>" alt="image" />
                            </div>

                            <div class="item">
                                <img src="<?= WEB_ROOT . 'assets/images/slider5.png' ?>" alt="image" />
                            </div>
                            <div class="item">
                                <img src="<?= WEB_ROOT . 'assets/images/slider6.png' ?>" alt="image" />
                            </div>
                            <div class="item">
                                <img src="<?= WEB_ROOT . 'assets/images/slider7.png' ?>" alt="image" />
                            </div>
                            <div class="item">
                                <img src="<?= WEB_ROOT . 'assets/images/slider8.png' ?>" alt="image" />
                            </div>
                            <div class="item">
                                <img src="<?= WEB_ROOT . 'assets/images/slider9.png' ?>" alt="image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {

        $(".owl-carousel").owlCarousel({

            loop: true,
            autoPlay: 1000,
            items: 3,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3],
            center: true,
            nav: true,
            responsiveClass: true,
            autoplayHoverPause: true,
            rewindNav : true,
    rewindSpeed: 0,



            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 5,
                    nav: true,
                    loop: false
                }
            }
        });
    });
</script>
<!-- End OWL Carousel Slider -->