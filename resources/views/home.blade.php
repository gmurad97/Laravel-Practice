@extends('layouts.main')
@section('main.layout')

    <x-navbar />

    <!-- HOME START-->
    <section class="home-slider" id="home">
        <div id="carouselExampleControls" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active" style="background-image:url('images/home/home-bg-3.jpg');">
                    <div class="home-center">
                        <div class="home-desc-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="text-center">
                                            <h5 class="home-small-title text-uppercase text-muted mb-4">Awesome
                                                Design</h5>
                                            <h2 class="home-title mb-4">We love make things amazing and simple
                                            </h2>
                                            <p class="home-desc text-muted mx-auto">Maecenas class semper class
                                                semper sollicitudin lectus lorem iaculis imperdiet aliquam
                                                vehicula tempor auctor curabitur pede aenean ornare.</p>
                                            <div class="text-center pt-4">
                                                <a href="index-5.html#" class="btn btn-custom me-2">Contact Us</a>
                                                <a href="index-5.html#" class="btn btn-custom-white">Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" style="background-image:url('images/home/home-bg-2.jpg');">
                    <div class="home-center">
                        <div class="home-desc-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="text-center">
                                            <h5 class="home-small-title text-uppercase text-muted mb-4">Awesome
                                                Design</h5>
                                            <h2 class="home-title mb-4">We love make things amazing and simple
                                            </h2>
                                            <p class="home-desc text-muted mx-auto">Maecenas class semper class
                                                semper sollicitudin lectus lorem iaculis imperdiet aliquam
                                                vehicula tempor auctor curabitur pede aenean ornare.</p>
                                            <div class="text-center pt-4">
                                                <a href="index-5.html#" class="btn btn-custom me-2">Contact Us</a>
                                                <a href="index-5.html#" class="btn btn-custom-white">Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" style="background-image:url('images/home/home-bg.jpg');">
                    <div class="home-center">
                        <div class="home-desc-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="text-center">
                                            <h5 class="home-small-title text-uppercase text-muted mb-4">Awesome
                                                Design</h5>
                                            <h2 class="home-title mb-4">We love make things amazing and simple
                                            </h2>
                                            <p class="home-desc text-muted mx-auto">Maecenas class semper class
                                                semper sollicitudin lectus lorem iaculis imperdiet aliquam
                                                vehicula tempor auctor curabitur pede aenean ornare.</p>
                                            <div class="text-center pt-4">
                                                <a href="index-5.html#" class="btn btn-custom me-2">Contact Us</a>
                                                <a href="index-5.html#" class="btn btn-custom-white">Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="index-5.html#carouselExampleControls" role="button"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="index-5.html#carouselExampleControls" role="button"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- HOME END-->

    <!-- WELCOME START -->
    <section class="section" id="service">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center">
                        <h4 class="title-heading">Our solution for your business</h4>
                        <p class="title-desc text-muted mt-3">We craft digital, graphic and dimensional thinking, to
                            create category leading brand experiences that have meaning and add a value.</p>
                    </div>
                </div>
            </div>

            <div class="row pt-5">
                <div class="col-lg-4">
                    <div class="features-box mt-4">
                        <div class="d-flex">
                            <div class="features-icon text-center flex-shrink-0">
                                <i class="uil uil-water"></i>
                            </div>
                            <div class="flex-grow-1 ms-4">
                                <h5 class="mt-0 f-19">Natural Flow</h5>
                                <p class="text-muted">
                                    Holuptate velit esse moleiae quam nihil consequatur voluptas nulla every pariatur?"
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="features-box mt-4">
                        <div class="d-flex">
                            <div class="features-icon text-center flex-shrink-0">
                                <i class="uil uil-dropbox"></i>
                            </div>
                            <div class="flex-grow-1 ms-4">
                                <h5 class="mt-0 f-19">Awesome Design</h5>
                                <p class="text-muted">
                                    Vestibulum mollis nibh interdum aculis proin auctor vulputate facilisis Etiam
                                    convallis posuere.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="features-box mt-4">
                        <div class="d-flex">
                            <div class="features-icon text-center flex-shrink-0">
                                <i class="uil uil-focus-target"></i>
                            </div>
                            <div class="flex-grow-1 ms-4">
                                <h5 class="mt-0 f-19">Easy to customize</h5>
                                <p class="text-muted">
                                    Proin quis elit vitae nisi interdum ullamcorper sit amet eget diam sed non ornare
                                    libero.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-3">
                <div class="col-lg-4">
                    <div class="features-box mt-4">
                        <div class="d-flex">
                            <div class="features-icon text-center flex-shrink-0">
                                <i class="uil uil-fire"></i>
                            </div>
                            <div class="flex-grow-1 ms-4">
                                <h5 class="mt-0 f-19">Hot Looks</h5>
                                <p class="text-muted">
                                    Consec tetureu suscipit metorbi dictum nec risus venenatis dictum duty vulputate.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="features-box mt-4">
                        <div class="d-flex">
                            <div class="features-icon text-center flex-shrink-0">
                                <i class="uil uil-game-structure"></i>
                            </div>
                            <div class="flex-grow-1 ms-4">
                                <h5 class="mt-0 f-19">Unrivaled Quality</h5>
                                <p class="text-muted">
                                    Maenas sagittis placerat scele risque tempor Aliquam placerat neque scelerisque
                                    consectetur.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="features-box mt-4">
                        <div class="d-flex">
                            <div class="features-icon text-center flex-shrink-0">
                                <i class="uil uil-flower"></i>
                            </div>
                            <div class="flex-grow-1 ms-4">
                                <h5 class="mt-0 f-19">Clean Design</h5>
                                <p class="text-muted">
                                    Aliquam dicadtunc senulla congue posuere bibendum erat sit amet tortor finibus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- WELCOME END -->


    <!-- PORTFOLIO START-->
    <section class="section bg-white pb-0" id="portfolio">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center">
                        <h4 class="title-heading text-uppercase">Our Portfolio</h4>
                        <p class="title-desc text-muted mt-3">Huge collection of elements, rich customization options,
                            flexible layouts, stunning pages and instant results!</p>
                    </div>
                </div>
            </div>

            <!-- portfolio menu -->
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="text-center">
                        <ul class="col container-filter categories-filter list-unstyled mb-0" id="filter">
                            <li><a class="categories active" data-filter="*">All</a></li>
                            <li><a class="categories" data-filter=".profile">Profile</a></li>
                            <li><a class="categories" data-filter=".business">Business</a></li>
                            <li><a class="categories" data-filter=".finance">Finance</a></li>
                            <li><a class="categories" data-filter=".marketing">Marketing</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End portfolio  -->
        </div>

        <!-- Gallary -->
        <div class="container-fluid">
            <div class="row container-grid row-cols-lg-4 row-cols-1 mt-5 g-0 projects-wrapper">
                <div class="col img-max-width">
                    <div class="item-box">
                        <a class="cbox-gallary1 mfp-image" href="images/portfolio/work-1.jpg" title="Project Name">
                            <img class="item-container img-fluid profile business" src="images/portfolio/work-1.jpg"
                                alt="1" />
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="text-dark">Centerd Gallary</h5>
                                    <p class="text-muted">client: Kay Garland</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col img-max-width business finance">
                    <div class="item-box">
                        <a class="cbox-gallary1 mfp-image" href="images/portfolio/work-8.jpg" title="Project Name">
                            <img class="item-container img-fluid mfp-fade" src="images/portfolio/work-8.jpg"
                                alt="2" />
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="text-dark">Sidebar Stack</h5>
                                    <p class="text-muted">client: Kay Garland</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col img-max-width profile business">
                    <div class="item-box">
                        <a class="cbox-gallary1 mfp-image" href="images/portfolio/work-3.jpg" title="Project Name">
                            <img class="item-container img-fluid" src="images/portfolio/work-3.jpg" alt="3" />
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="text-dark">Grid – Overlay </h5>
                                    <p class="text-muted">client: Kay Garland</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col img-max-width marketing">
                    <div class="item-box">
                        <a class="cbox-gallary1 mfp-image" href="images/portfolio/work-2.jpg" title="Project Name">
                            <img class="item-container img-fluid" src="images/portfolio/work-2.jpg" alt="4" />
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="text-dark">Distinctive</h5>
                                    <p class="text-muted">client: Kay Garland</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col img-max-width finance marketing">
                    <div class="item-box">
                        <a class="cbox-gallary1 mfp-image" href="images/portfolio/work-6.jpg" title="Project Name">
                            <img class="item-container img-fluid" src="images/portfolio/work-6.jpg" alt="5" />
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="text-dark">Sustainable</h5>
                                    <p class="text-muted">client: Kay Garland</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col img-max-width profile marketing">
                    <div class="item-box">
                        <a class="cbox-gallary1 mfp-image" href="images/portfolio/work-5.jpg" title="Project Name">
                            <img class="item-container img-fluid" src="images/portfolio/work-5.jpg" alt="6" />
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="text-dark">Popup Hover</h5>
                                    <p class="text-muted">client: Kay Garland</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col img-max-width business">
                    <div class="item-box">
                        <a class="cbox-gallary1 mfp-image" href="images/portfolio/work-7.jpg" title="Project Name">
                            <img class="item-container img-fluid" src="images/portfolio/work-7.jpg" alt="7" />
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="text-dark">Vendor</h5>
                                    <p class="text-muted">client: Kay Garland</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col img-max-width marketing">
                    <div class="item-box">
                        <a class="cbox-gallary1 mfp-image" href="images/portfolio/work-4.jpg" title="Project Name">
                            <img class="item-container img-fluid" src="images/portfolio/work-4.jpg" alt="8" />
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="text-dark">Slider Cover</h5>
                                    <p class="text-muted">client: Kay Garland</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PORTFOLIO END-->

    <!-- CLIENT START -->
    <section class="section" id="client">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class=" text-center">
                        <h4 class="title-heading text-uppercase">Testimonial</h4>
                        <p class="title-desc text-muted mt-3">We craft digital, graphic and dimensional thinking, to
                            create category leading brand experiences that have meaning and add a value.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-lg-8">
                    <div id="owl-demo" class="owl-carousel">

                        <div class="testi-box">
                            <div class="text-center mt-4">
                                <div class="testi-content">
                                    <p class="user-review text-center mb-0">" Their separate existence is a myth. For
                                        science music sport etc Europe uses the same vocabulary. The languages only
                                        differ in their grammar, their pronunciation and their most common words.
                                        Everyone realizes why a new common language "</p>
                                </div>
                                <div class="mt-4">
                                    <img src="images/client/111.jpg" alt=""
                                        class="img-fluid rounded-circle testi-user mx-auto d-block">
                                </div>
                                <div class="img-post text-center">
                                    <p class="testi-patients text-muted mb-1 mt-3">Founder</p>
                                    <h5 class="testi-client-name">Willimore Wilson</h5>
                                </div>
                            </div>
                        </div>

                        <div class="testi-box">
                            <div class="text-center mt-4">
                                <div class="testi-content">
                                    <p class="user-review text-center mb-0">" It is a long established fact that a
                                        reader will be distracted by the readable content of a page when looking at its
                                        layout. The point of using Lorem Ipsum is that it has a normal of letters, as
                                        opposed to using making it look like readable English."</p>
                                </div>
                                <div class="mt-4">
                                    <img src="images/client/122.jpg" alt=""
                                        class="img-fluid rounded-circle testi-user mx-auto d-block">
                                </div>
                                <div class="img-post text-center">
                                    <p class="testi-patients text-muted mb-1 mt-3">Ceo</p>
                                    <h5 class="testi-client-name">Charley Brown</h5>
                                </div>
                            </div>
                        </div>

                        <div class="testi-box">
                            <div class="text-center mt-4">
                                <div class="testi-content">
                                    <p class="user-review text-center mb-0">" Looking for an event WordPress theme?
                                        Look no further—we’ve got pre-built websites for over 20 different types of
                                        events: birthday party, wedding, course launch, marketing event, conference,
                                        seasonal event."</p>
                                </div>
                                <div class="mt-4">
                                    <img src="images/client/133.jpg" alt=""
                                        class="img-fluid rounded-circle testi-user mx-auto d-block">
                                </div>
                                <div class="img-post text-center">
                                    <p class="testi-patients text-muted mb-1 mt-3">Manager</p>
                                    <h5 class="testi-client-name">Norden Sophie</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CLIENT END -->



    <!--  PLANS START  -->
    <section class="section bg-light" id="price">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center">
                        <h4 class="title-heading text-uppercase">Our Pricing</h4>
                        <p class="title-desc text-muted mt-3">Tools are beyond the one-click install, async tech merges
                            with ultimate flexibility experiences that have meaning and add a value.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-4">
                    <div class="price mt-4 p-5">
                        <div class="item text-center">
                            <div class="type pb-3">
                                <h4>Regular</h4>
                            </div>
                            <div class="value">
                                <h3>10.<span>99$</span></h3>
                                <span class="per text-muted">Per Month</span>
                            </div>
                            <div class="feature">
                                <ul class="list-unstyled text-muted">
                                    <li>Bandwidth: 1GB</li>
                                    <li>Onlinespace: 500MB</li>
                                    <li>Support: No</li>
                                    <li>Domain: 1</li>
                                    <li>50 Projects per month</li>
                                    <li>-</li>
                                </ul>
                            </div>
                            <div>
                                <a href="index-5.html#" class="btn btn-custom">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="price bg-white mt-4 p-5">
                        <div class="item text-center">
                            <div class="type pb-3">
                                <h4>Startup</h4>
                            </div>
                            <div class="value">
                                <h3>30.<span>99$</span></h3>
                                <span class="per">Per Month</span>
                            </div>
                            <div class="feature">
                                <ul class="list-unstyled">
                                    <li>Bandwidth: 2GB</li>
                                    <li>Onlinespace: 1GB</li>
                                    <li>Support: No</li>
                                    <li>Domain: 3</li>
                                    <li>200 Projects per month</li>
                                    <li>Hidden Fees: No</li>
                                </ul>
                            </div>
                            <div>
                                <a href="index-5.html#" class="btn btn-custom">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="price mt-4 p-5">
                        <div class="item text-center">
                            <div class="type pb-3">
                                <h4>Business</h4>
                            </div>
                            <div class="value">
                                <h3>80.<span>99$</span></h3>
                                <span class="per text-muted">Per Month</span>
                            </div>
                            <div class="feature">
                                <ul class="list-unstyled text-muted">
                                    <li>Bandwidth: 4GB</li>
                                    <li>Onlinespace: 2GB</li>
                                    <li>Support: No</li>
                                    <li>Domain: Unlimited</li>
                                    <li>Unlimited Projects per month</li>
                                    <li>Hidden Fees: No</li>
                                </ul>
                            </div>
                            <div>
                                <a href="index-5.html#" class="btn btn-custom">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PLANS END -->

    <!-- TEAM START -->
    <section class="section" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="about-title mx-auto text-center">
                        <h2 class="fw-normal">A Digital web studio creating stunning & Engaging online Experiences
                        </h2>
                        <p class="text-muted pt-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                            parturient montes, nascetur ridiculus mus. Donec quam felis.</p>
                    </div>
                </div>
            </div>
            <!-- FUN-FACTS -->
            <div class="row justify-content-center mt-5" id="counter">
                <div class="col-lg-3">
                    <div class="text-muted text-center">
                        <h3 class="counter-value fw-normal">128+</h3>
                        <p>Projects</p>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="text-muted text-center about-border-left">
                        <h3 class="counter-value fw-normal">89</h3>
                        <p>Clients</p>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="text-muted text-center about-border-left">
                        <h3 class="counter-value fw-normal">15842</h3>
                        <p>Members</p>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="text-muted text-center about-border-left">
                        <h3 class="counter-value fw-normal">125</h3>
                        <p>Employee</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-3">
                    <div class="mt-3">
                        <img src="images/team/1.jpg" alt=""
                            class="img-fluid team-member mx-auto d-block rounded-circle img-thumbnail">
                        <div class="text-center mt-3">
                            <p class="fw-medium mb-0">Wade G. Wilhite</p>
                            <p class="text-muted mb-0">CEO/Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="mt-3">
                        <img src="images/team/2.jpg" alt=""
                            class="img-fluid team-member mx-auto d-block rounded-circle img-thumbnail">
                        <div class="text-center mt-3">
                            <p class="fw-medium mb-0">William S. Blay</p>
                            <p class="text-muted mb-0">CTO/Co-Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="mt-3">
                        <img src="images/team/3.jpg" alt=""
                            class="img-fluid team-member mx-auto d-block rounded-circle img-thumbnail">
                        <div class="text-center mt-3">
                            <p class="fw-medium mb-0">Matthew B. Morales</p>
                            <p class="text-muted mb-0">Web Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="mt-3">
                        <img src="images/team/4.jpg" alt=""
                            class="img-fluid team-member mx-auto d-block rounded-circle img-thumbnail">
                        <div class="text-center mt-3">
                            <p class="fw-medium mb-0">Luke L. Johnston</p>
                            <p class="text-muted mb-0">Web Developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TEAM END -->

    <!-- START CTA -->
    <section class="section bg-cta">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h3 class="text-center">Ready to start your next
                        web project now?</h3>
                    <p class="cta-desc text-center mt-3">When a good idea comes, you know, part of my job is to move it
                        around, just see what people think, get people talking about it.</p>
                    <div class="text-center mt-4">
                        <a href="index-5.html#" class="btn btn-custom">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CTA -->

    <!-- BLOG START -->
    <section class="section bg-light" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center">
                        <h4 class="title-heading text-uppercase">Latest News</h4>
                        <p class="title-desc text-muted mt-3">Huge collection of elements, rich customization options,
                            flexible layouts, stunning pages and instant results.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-4">
                    <div class="blog-menu mt-4">
                        <img src="images/blog/1.jpg" class="img-fluid" alt="">
                        <div>
                            <h4><a href="index-5.html" class="blog-title">Want to know how Deep Learning works?</a>
                            </h4>
                            <p class="mt-2 text-muted">fugiat! Quia, provident vitae! Magni tempora perferendis eum non
                                provident.</p>
                            <div class="mt-3">
                                <a href="index-5.html" class="read-btn">Read More <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-menu mt-4">
                        <img src="images/blog/2.jpg" class="img-fluid" alt="">
                        <div>
                            <h4><a href="index-5.html" class="blog-title">How to become a skilled Developer</a></h4>
                            <p class="mt-2 text-muted">Praesent sapien massa, convallis a pellentesque nec, egestas non
                                nisi.</p>
                            <div class="mt-3">
                                <a href="index-5.html" class="read-btn">Read More <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-menu mt-4">
                        <img src="images/blog/3.jpg" class="img-fluid" alt="">
                        <div>
                            <h4><a href="index-5.html" class="blog-title">The best front hacking cheatsheets</a></h4>
                            <p class="mt-2 text-muted">Proin eget tortor risus. Pellentesque in ipsum id orci porta
                                dapibus.</p>
                            <div class="mt-3">
                                <a href="index-5.html" class="read-btn">Read More <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BLOG END -->

    <!-- CONTACT START -->
    <section class="section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="contact-head text-center">
                        <h4 class="title-heading text-uppercase">Contact us</h4>
                        <p class="title-desc text-muted mt-3">Find the perfect business template for any type of
                            business size. Browse be websites created for small businesses, such as online service
                            providers.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-4 vertical-content">
                <div class="col-lg-12">
                    <div class="row mt-5">
                        <div class="col-lg-4">
                            <div class="contact-info">
                                <div class="mt-3">

                                    <h6 class="text-muted">Email Address</h6>
                                    <p>Example@abc.com</p>
                                </div>

                                <div class="mt-4">
                                    <h6 class="text-muted">Phone number</h6>
                                    <p>+1-903-929-5705 , +1-631-705-0194</p>
                                </div>

                                <div class="mt-4">
                                    <h6 class="text-muted">Office Address</h6>
                                    <p>3961 Melville Street <br />
                                        Bruceton, TN 38317</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="custom-form">
                                <form method="post" onsubmit="return validateForm()" class="contact-form"
                                    name="myForm" id="myForm">
                                    <span id="error-msg"></span>
                                    <div class="row g-3">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input name="name" id="name" type="text" class="form-control"
                                                    placeholder="Your name...">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input name="email" id="email" type="email" class="form-control"
                                                    placeholder="Your email...">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input name="text" id="sub" type="text" class="form-control"
                                                    placeholder="Your subject...">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <input type="submit" id="submit" name="send"
                                                class="submitBnt btn btn-custom" value="Send Message">
                                            <div id="simple-msg"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT END -->

    <!-- FOOTER START -->
    <section class="footer bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-menu">
                        <h3 class="mb-4 text-uppercase text-white"><i class="mdi mdi-chart-donut-variant"></i> Larix
                        </h3>
                        <p>The Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium eaque quae ab
                            illo inventore veritatis et.</p>
                        <div class="text-white">
                            <a href="index-5.html#facebook"><i class="mdi mdi-facebook facebook footer_mdi"></i></a>
                            <a href="index-5.html#twitter"><i class="mdi mdi-twitter twitter footer_mdi"></i></a>
                            <a href="index-5.html#google"><i class="mdi mdi-google google footer_mdi"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="footer-menu">
                        <h5 class="mb-4 text-uppercase">About</h5>
                        <ul class="text-muted list-unstyled">
                            <li><a href="index-5.html#">About Us</a></li>
                            <li><a href="index-5.html#">Press</a></li>
                            <li><a href="index-5.html#">Job Opening</a></li>
                            <li><a href="index-5.html#">Term</a></li>
                            <li><a href="index-5.html#">Privacy</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="footer-menu">
                        <h5 class="mb-4 text-uppercase">Help Center</h5>
                        <ul class="text-muted list-unstyled">
                            <li><a href="index-5.html#">Accounting</a></li>
                            <li><a href="index-5.html#">Billing</a></li>
                            <li><a href="index-5.html#">General Question</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="footer-menu">
                        <h5 class="mb-4 text-uppercase">Contact us</h5>
                        <p>The Nam eget dui Etiam rhoncus. Maecenas eget sem quam semper libero.</p>
                        <span class="footer-support">Support@abc.com</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mt-5">
                        <p class="mb-0">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Larix.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FOOTER END -->
@endsection
