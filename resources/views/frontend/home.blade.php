@extends('frontend.layouts.master')
@section('title', 'Shahtk Home')

@section('content')

    <!--====== Start Banner Section ======-->
    <section class="hero-banner-v2 position-relative z-1" id="home">
        <div class="shape shape-one">
            <span>
                <img src="{{ asset('assets/frontend/assets/images/hero/hero-two-shape-1.png') }}" alt="">
            </span>
        </div>
        <div class="shape shape-two">
            <span>
                <img src="{{ asset('assets/frontend/assets/images/hero/hero-two-shape-2.png') }}" alt="">
            </span>
        </div>
        <div class="shape shape-three">
            <span>
                <img src="{{ asset('assets/frontend/assets/images/hero/hero-two-shape-3.png') }}" alt="">
            </span></div>
        <div class="shape shape-four">
            <span>
                <img src="{{ asset('assets/frontend/assets/images/hero/dot-pattern.png') }}" alt="">
            </span>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <span class="sub-title wow fadeInUp"><i class="fas fa-arrow-right"></i>Welcome to
                        </span>
                        <h1 class="wow fadeInUp" data-wow-delay=".5s">Intro Text Here</h1>
                        <p class="wow fadeInDown" data-wow-delay="1s">Sit amet consectetur adipiscing elit sed do
                            eiusmod tem
                            porincididunt ut labore dolore magna aliqua.</p>
                        <a href="about.html" class="main-btn arrow-btn wow fadeInUp" data-wow-delay=".7s">Discover
                            More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-img wow fadeInRight" data-wow-delay=".9s">
                        <img src="{{ asset('assets/frontend/assets/images/hero/hero-three-img-1-1.png') }}" alt="LOGO">
                        <div class="hero-shape hero-shape-one animate-float-x">
                            <span>
                                <img src="{{ asset('assets/frontend/assets/images/hero/shape-1.png') }}" alt="LOGO">
                            </span>
                        </div>
                        <div class="hero-shape hero-shape-two animate-float-y">
                            <span>
                                <img src="{{ asset('assets/frontend/assets/images/hero/shape-2.png') }}" alt="LOGO">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Banner Section ======-->

    <!--====== Start Service Section ======-->
    <section class="service-area service-area-v1" id="services">
        <div class="container-1350">
            <div class="service-wrapper pt-75 pb-40">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center mb-55 wow fadeInUp">
                            <h2>Creative Design Solutions</h2>
                            <p>Professional Design Agency to provide solutions</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="service-item service-style-two mb-40 wow fadeInUp" data-wow-delay=".15s">
                            <div class="icon">
                                <i class="flaticon-strategy"></i>
                            </div>
                            <div class="text">
                                <h3 class="title"><a href="javascript:void(0)">Strategy</a></h3>
                                <ul class="list-style-two">
                                    <li>Product Management</li>
                                    <li>MVP Definition</li>
                                    <li>Product Strategy</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="service-item service-style-two mb-40 wow fadeInUp" data-wow-delay=".20s">
                            <div class="icon">
                                <i class="flaticon-design"></i>
                            </div>
                            <div class="text">
                                <h3 class="title"><a href="javascript:void(0)">Product Design</a></h3>
                                <ul class="list-style-two">
                                    <li>Product Management</li>
                                    <li>MVP Definition</li>
                                    <li>Product Strategy</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="service-item service-style-two mb-40 wow fadeInUp" data-wow-delay=".25s">
                            <div class="icon">
                                <i class="flaticon-source-code"></i>
                            </div>
                            <div class="text">
                                <h3 class="title"><a href="javascript:void(0)">Development</a></h3>
                                <ul class="list-style-two">
                                    <li>Product Management</li>
                                    <li>MVP Definition</li>
                                    <li>Product Strategy</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Service Section ======-->

    <!--====== Start About Section ======-->
    <section class="about-area about-area-v2 pt-130" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="img-holder mb-50 wow fadeInLeft">
                        <div class="shape shape-one animate-float-y"><span>
                                <img src="{{asset('assets/frontend/assets/images/shape/shape-5.png')}}" alt="">
                            </span>
                        </div>
                        <img src="{{ asset('assets/frontend/assets/images/about/about-3.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="text-wrapper mb-50 wow fadeInRight">
                        <div class="section-title mb-25">
                            <h2>Intro Title</h2>
                            <p class="blue-dark">Professional Design Agency provide solutions</p>
                        </div>
                        <p>On the other hand denounce with righteous indigna see
                            tion and dislike men who are beguiled and demoralizedes
                            by the charms of pleasure of the moment, so blinded
                            desire that they cannot foresee.</p>
                        <ul class="list-style-one mb-40">
                            <li>Digital Creative Agency</li>
                            <li>Professional Problem Solutions</li>
                            <li>Web Design & Development</li>
                        </ul>
                        <a href="#about" class="main-btn bordered-btn btn-blue">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End About Section ======-->

    <!--====== Start Contact Section ======-->
    <section class="contact-area contact-area-v2 pt-80 pb-125" id="contact">
        <div class="container-1350">
            <div class="contact-wrapper pt-70 pb-40">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-wrapper mb-40 wow fadeInLeft">
                            <h2>Contact Us</h2>
                            <p>On the other hand denounce righteous indigna
                                tion and dislike men who are beguiled and demra
                                charms of pleasure of the moment</p>
                            <div class="information-style-two d-flex mb-20">
                                <div class="icon">
                                    <i class="far fa-envelope-open"></i>
                                </div>
                                <div class="info">
                                    <h5 class="blue-dark">Email Us</h5>
                                    <h4><a href="mailto:support@gmail.com">support@gmail.com</a></h4>
                                </div>
                            </div>
                            <div class="information-style-two d-flex mb-20">
                                <div class="icon">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="info">
                                    <h5 class="blue-dark">Phone Us</h5>
                                    <h4><a href="tel:+000000">000000000</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form mb-40 wow fadeInRight">
                            <h2>Get Consultation
                                Say Hello!</h2>
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Full Name"
                                                   name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <input type="email" class="form_control" placeholder="Email Address"
                                                   name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <select class="wide">
                                                <option value="1">Customer Support</option>
                                                <option value="2">Customer 2</option>
                                                <option value="3">Subject</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Phone Number"
                                                   name="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <button class="main-btn arrow-btn">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Contact Section ======-->

    <!--====== Start Counter Section ======-->
    <section class="counter-area counter-area-v2 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center mb-55 wow fadeInUp">
                        <h2>Why People’s Like Us</h2>
                        <p>Professional Design Agency to provide solutions</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="counter-item mb-40 wow fadeInUp" data-wow-delay=".2s">
                        <div class="icon">
                            <i class="flaticon-start-up"></i>
                        </div>
                        <div class="text">
                            <h2 class="number"><span>256</span>+</h2>
                            <p>Project Complate</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="counter-item mb-40 item-active wow fadeInUp" data-wow-delay=".3s">
                        <div class="icon">
                            <i class="flaticon-creativity"></i>
                        </div>
                        <div class="text">
                            <h2 class="number"><span>783</span>+</h2>
                            <p>Project Complate</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="counter-item mb-40 wow fadeInUp" data-wow-delay=".4s">
                        <div class="icon">
                            <i class="flaticon-medal"></i>
                        </div>
                        <div class="text">
                            <h2 class="number"><span>97</span>+</h2>
                            <p>Awards Winning</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="counter-item mb-40 wow fadeInUp" data-wow-delay=".5s">
                        <div class="icon">
                            <i class="flaticon-technical-support"></i>
                        </div>
                        <div class="text">
                            <h2 class="number"><span>35</span>+</h2>
                            <p>Years Of Experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Counter Section ======-->


    <!--====== Start Video Section ======-->
    <section class="intro-area intro-area-v1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="play-content bg_cover text-center wow fadeInUp"
                         style="background-image: url({{ asset('assets/frontend/assets/images/video/img-1.jpg') }});">
                        <a href="https://www.youtube.com/watch?v=AT6oSIDbGkw" class="video-popup">
                            <i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Video Section ======-->

    <!--====== Start Partners Section ======-->
    <section class="partners-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-55 fadeInDown">
                        <h2>We’ve 1534+ Global Partners</h2>
                        <p>Professional Design Agency to provide solutions</p>
                    </div>
                </div>
            </div>
            <div class="partners-wrapper wow fadeInUp">
                <div class="partner-item">
                    <div class="img-holder">
                        <a href="#"><img src="{{ asset('assets/frontend/assets/images/partners/img-1.png') }}"
                                         alt="LOGO"></a>
                    </div>
                </div>
                <div class="partner-item">
                    <div class="img-holder">
                        <a href="#"><img src="{{ asset('assets/frontend/assets/images/partners/img-2.png') }}"
                                         alt="LOGO"></a>
                    </div>
                </div>
                <div class="partner-item">
                    <div class="img-holder">
                        <a href="#">
                            <img src="{{ asset('assets/frontend/assets/images/partners/img-3.png') }}" alt="LOGO">
                        </a>
                    </div>
                </div>
                <div class="partner-item">
                    <div class="img-holder">
                        <a href="#">
                            <img src="{{ asset('assets/frontend/assets/images/partners/img-4.png') }}" alt="LOGO">
                        </a>
                    </div>
                </div>
                <div class="partner-item">
                    <div class="img-holder">
                        <a href="#">
                            <img src="{{ asset('assets/frontend/assets/images/partners/img-5.png') }}" alt="LOGO">
                        </a>
                    </div>
                </div>
                <div class="partner-item">
                    <div class="img-holder">
                        <a href="#"><img src="{{ asset('assets/frontend/assets/images/partners/img-6.png') }}"
                                         alt="LOGO"></a>
                    </div>
                </div>
                <div class="partner-item">
                    <div class="img-holder">
                        <a href="#"><img src="{{ asset('assets/frontend/assets/images/partners/img-7.png') }}"
                                         alt="LOGO"></a>
                    </div>
                </div>
                <div class="partner-item">
                    <div class="img-holder">
                        <a href="#"><img src="{{ asset('assets/frontend/assets/images/partners/img-8.png') }}"
                                         alt="LOGO"></a>
                    </div>
                </div>
                <div class="partner-item">
                    <div class="img-holder">
                        <a href="#"><img src="{{ asset('assets/frontend/assets/images/partners/img-9.png') }}"
                                         alt="LOGO"></a>
                    </div>
                </div>
                <div class="partner-item">
                    <div class="img-holder">
                        <a href="#"><img src="{{ asset('assets/frontend/assets/images/partners/img-10.png') }}"
                                         alt="LOGO"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Partners Section ======-->

    <!--====== Start Testimonial Section ======-->
    <section class="testimonial-area testimonial-area-v2 pb-135 pt-130" id="testimonial">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="img-holder mb-55 wow fadeInLeft">
                        <img src="{{ asset('assets/frontend/assets/images/testimonial/img-2.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="text-wrapper wow fadeInRight">
                        <div class="testimonial-slider-two mb-55">
                            <div class="testimonial-item">
                                <div class="testimonial-content">
                                    <div class="quote-rating d-flex justify-content-between align-items-center">
                                        <div class="quote">
                                            <i class="flaticon-quotation"></i>
                                        </div>
                                        <ul class="ratings">
                                            <li><span>Best Quality</span></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <h3>Sit amet consecte adipiscing
                                        elit sed do eiusmod temporinc
                                        idunt labore et dolore magnas aliqua. Quis ipsum susendise
                                        sltrices gravida. Risus commo
                                        verra maece lacusvel. </h3>
                                    <div class="author-title">
                                        <h4>Dustin A. McPherson</h4>
                                        <p class="position">Senior Manager</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="testimonial-content">
                                    <div class="quote-rating d-flex justify-content-between align-items-center">
                                        <div class="quote">
                                            <i class="flaticon-quotation"></i>
                                        </div>
                                        <ul class="ratings">
                                            <li><span>Best Quality</span></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <h3>Sit amet consecte adipiscing
                                        elit sed do eiusmod temporinc
                                        idunt labore et dolore magnas aliqua. Quis ipsum susendise
                                        sltrices gravida. Risus commo
                                        verra maece lacusvel. </h3>
                                    <div class="author-title">
                                        <h4>Dustin A. McPherson</h4>
                                        <p class="position">Senior Manager</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="testimonial-content">
                                    <div class="quote-rating d-flex justify-content-between align-items-center">
                                        <div class="quote">
                                            <i class="flaticon-quotation"></i>
                                        </div>
                                        <ul class="ratings">
                                            <li><span>Best Quality</span></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <h3>Sit amet consecte adipiscing
                                        elit sed do eiusmod temporinc
                                        idunt labore et dolore magnas aliqua. Quis ipsum susendise
                                        sltrices gravida. Risus commo
                                        verra maece lacusvel. </h3>
                                    <div class="author-title">
                                        <h4>Dustin A. McPherson</h4>
                                        <p class="position">Senior Manager</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="testimonial-content">
                                    <div class="quote-rating d-flex justify-content-between align-items-center">
                                        <div class="quote">
                                            <i class="flaticon-quotation"></i>
                                        </div>
                                        <ul class="ratings">
                                            <li><span>Best Quality</span></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <h3>Sit amet consecte adipiscing
                                        elit sed do eiusmod temporinc
                                        idunt labore et dolore magnas aliqua. Quis ipsum susendise
                                        sltrices gravida. Risus commo
                                        verra maece lacusvel. </h3>
                                    <div class="author-title">
                                        <h4>Dustin A. McPherson</h4>
                                        <p class="position">Senior Manager</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-two-dots text-center"></div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Testimonial Section ======-->

    <!--====== Start Pricing Section ======-->
    <section class="pricing-area pricing-area-v1" id="pricing">
        <div class="container-1350">
            <div class="pricing-wrapper pt-75 pb-70">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center mb-55">
                            <h2>Pricing Package</h2>
                            <p>Professional Design Agency to provide solutions</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="pricing-item pricing-item-one mb-40 wow fadeInUp">
                            <div class="pricing-head text-center">
                                <span class="plan">Basic Plan</span>
                                <h2 class="price"><span class="currency">$</span>16.95</h2>
                            </div>
                            <div class="pricing-body">
                                <p>Sit amet consectetur adiising seddo eiusmod teme</p>
                                <ul class="pricing-list">
                                    <li class="check">Web Design</li>
                                    <li class="check">Web Development</li>
                                    <li class="check">SEO Optimizations</li>
                                </ul>
                                <a href="#contact" class="main-btn arrow-btn">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="pricing-item pricing-item-one mb-40 wow fadeInUp">
                            <div class="ribbon">Popular</div>
                            <div class="pricing-head text-center">
                                <span class="plan">Standard Plan</span>
                                <h2 class="price"><span class="currency">$</span>46.95</h2>
                            </div>
                            <div class="pricing-body">
                                <p>Sit amet consectetur adiising seddo eiusmod teme</p>
                                <ul class="pricing-list">
                                    <li class="check">Web Design</li>
                                    <li class="check">Web Development</li>
                                    <li class="check">SEO Optimizations</li>
                                    <li class="check">Online Support</li>
                                    <li class="check">Domain & Hosting</li>
                                </ul>
                                <a href="#contact" class="main-btn arrow-btn">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="pricing-item pricing-item-one mb-40 wow fadeInUp">
                            <div class="pricing-head text-center">
                                <span class="plan">Silver Plan</span>
                                <h2 class="price"><span class="currency">$</span>96.95</h2>
                            </div>
                            <div class="pricing-body">
                                <p>Sit amet consectetur adiising seddo eiusmod teme</p>
                                <ul class="pricing-list">
                                    <li class="check">Web Design</li>
                                    <li class="check">Web Development</li>
                                    <li class="check">SEO Optimizations</li>
                                </ul>
                                <a href="#contact" class="main-btn arrow-btn">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Pricing Section ======-->

    <!--====== Start CTA Section ======-->
    <section class="cta-area cta-area-v2 mt-4 position-relative z-2 wow fadeInDown">
        <div class="container">
            <div class="cta-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="text-wrapper">
                            <div class="section-title section-title-white">
                                <h2>Need Any Projects?</h2>
                                <p>Professional Design Agency to provide solutions</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="button-box float-lg-right">
                            <a href="#contact" class="main-btn bordered-btn btn-white arrow-btn">
                                Let’s Work Together
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End CTA Section ======-->

@endsection
