@extends('layouts.master')
@section('content')
<main class="fix">
    <!-- breadcrumb-area -->
    <section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb__content">
                        <h2 class="title">Reviews</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Reviews</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__shape">
            <img src="assets/img/images/breadcrumb_shape01.png" alt="Apexa" />
            <img src="assets/img/images/breadcrumb_shape02.png" alt="Apexa" class="rightToLeft" />
            <img src="assets/img/images/breadcrumb_shape03.png" alt="Apexa" />
            <img src="assets/img/images/breadcrumb_shape04.png" alt="Apexa" />
            <img src="assets/img/images/breadcrumb_shape05.png" alt="Apexa" class="alltuchtopdown" />
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- testimonial-area -->
    <section class="testimonial__area-two">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title white-title text-center mb-50">
                        <span class="sub-title">Clients Testimonial</span>
                        <h2 class="title">What Our Loving Clients Saying</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center gutter-24">
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial__item-two">
                        <div class="testimonial__avatar">
                            <img src="assets/img/images/testi_avatar01.png" alt="Apexa" />
                        </div>
                        <div class="testimonial__info-two">
                            <h2 class="title">John Gripsonery</h2>
                            <span>CEO,JAKS Shans</span>
                        </div>
                        <div class="testimonial__rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Songerty successfully cope with tasks of varying complexity provide area guarantees and regularly.</p>
                        <div class="icon">
                            <img src="assets/img/icon/quote.svg" alt="Apexa" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial__item-two">
                        <div class="testimonial__avatar">
                            <img src="assets/img/images/testi_avatar02.png" alt="Apexa" />
                        </div>
                        <div class="testimonial__info-two">
                            <h2 class="title">Kristin Watson</h2>
                            <span>CEO,JAKS Shans</span>
                        </div>
                        <div class="testimonial__rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Songerty successfully cope with tasks of varying complexity provide area guarantees and regularly.</p>
                        <div class="icon">
                            <img src="assets/img/icon/quote.svg" alt="Apexa" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial__item-two">
                        <div class="testimonial__avatar">
                            <img src="assets/img/images/testi_avatar03.png" alt="Apexa" />
                        </div>
                        <div class="testimonial__info-two">
                            <h2 class="title">Wade Warren</h2>
                            <span>CEO,JAKS Shans</span>
                        </div>
                        <div class="testimonial__rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Songerty successfully cope with tasks of varying complexity provide area guarantees and regularly.</p>
                        <div class="icon">
                            <img src="assets/img/icon/quote.svg" alt="Apexa" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial__shape-two">
            <img src="assets/img/images/h2_testimonial_shape.png" alt="Apexa" data-aos="fade-up" data-aos-delay="400" />
        </div>
    </section>
    <!-- testimonial-area-end -->
    <!-- pricing-area -->
    <section class="pricing__area pricing__bg" data-background="assets/img/bg/pricing_bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section-title text-center mb-30">
                        <span class="sub-title">Flexible Pricing Plan</span>
                        <h2 class="title">We’ve Offered The Best Pricing For You</h2>
                    </div>
                </div>
            </div>
            <div class="pricing__item-wrap">
                <div class="pricing__tab">
                    <span class="pricing__tab-btn monthly_tab_title">Monthly</span>
                    <span class="pricing__tab-switcher"></span>
                    <span class="pricing__tab-btn annual_tab_title">Yearly</span>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="pricing__box">
                            <div class="pricing__head">
                                <h5 class="title">Basic Plan</h5>
                            </div>
                            <div class="pricing__price">
                                <h2 class="price monthly_price"><strong>$</strong> 15.00 <span>/ Month</span></h2>
                                <h2 class="price annual_price"><strong>$</strong> 149.00 <span>/ Month</span></h2>
                            </div>
                            <div class="pricing__list">
                                <ul class="list-wrap">
                                    <li>
                                        <img src="assets/img/icon/check_icon.svg" alt="Apexa" />
                                        5000 User Activities
                                    </li>
                                    <li>
                                        <img src="assets/img/icon/check_icon.svg" alt="Apexa" />
                                        Unlimited Access
                                    </li>
                                    <li>
                                        <img src="assets/img/icon/check_icon.svg" alt="Apexa" />
                                        No Hidden Charge
                                    </li>
                                    <li>
                                        <img src="assets/img/icon/check_icon.svg" alt="Apexa" />
                                        03 Time Updates
                                    </li>
                                    <li>
                                        <img src="assets/img/icon/check_icon.svg" alt="Apexa" />
                                        Figma Source File
                                    </li>
                                </ul>
                            </div>
                            <div class="pricing__btn">
                                <a href="javascript:void(0)" class="btn">Get this plan Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="pricing__box">
                            <div class="pricing__head">
                                <h5 class="title">Standard Plan</h5>
                            </div>
                            <div class="pricing__price">
                                <h2 class="price monthly_price"><strong>$</strong> 29.00 <span>/ Month</span></h2>
                                <h2 class="price annual_price"><strong>$</strong> 229.00 <span>/ Month</span></h2>
                            </div>
                            <div class="pricing__list">
                                <ul class="list-wrap">
                                    <li>
                                        <img src="assets/img/icon/check_icon.svg" alt="Apexa" />
                                        5000 User Activities
                                    </li>
                                    <li>
                                        <img src="assets/img/icon/check_icon.svg" alt="Apexa" />
                                        Unlimited Access
                                    </li>
                                    <li>
                                        <img src="assets/img/icon/check_icon.svg" alt="Apexa" />
                                        No Hidden Charge
                                    </li>
                                    <li>
                                        <img src="assets/img/icon/check_icon.svg" alt="Apexa" />
                                        03 Time Updates
                                    </li>
                                    <li>
                                        <img src="assets/img/icon/check_icon.svg" alt="Apexa" />
                                        Figma Source File
                                    </li>
                                </ul>
                            </div>
                            <div class="pricing__btn">
                                <a href="javascript:void(0)" class="btn">Get this plan Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="pricing__box">
                            <div class="pricing__head">
                                <h5 class="title">Corporate Plan</h5>
                            </div>
                            <div class="pricing__price">
                                <h2 class="price monthly_price"><strong>$</strong> 89.00 <span>/ Month</span></h2>
                                <h2 class="price annual_price"><strong>$</strong> 889.00 <span>/ Month</span></h2>
                            </div>
                            <div class="pricing__list">
                                <ul class="list-wrap">
                                    <li>
                                        <img src="assets/img/icon/check_icon.svg" alt="Apexa" />
                                        5000 User Activities
                                    </li>
                                    <li>
                                        <img src="assets/img/icon/check_icon.svg" alt="Apexa" />
                                        Unlimited Access
                                    </li>
                                    <li>
                                        <img src="assets/img/icon/check_icon.svg" alt="Apexa" />
                                        No Hidden Charge
                                    </li>
                                    <li>
                                        <img src="assets/img/icon/check_icon.svg" alt="Apexa" />
                                        03 Time Updates
                                    </li>
                                    <li>
                                        <img src="assets/img/icon/check_icon.svg" alt="Apexa" />
                                        Figma Source File
                                    </li>
                                </ul>
                            </div>
                            <div class="pricing__btn">
                                <a href="javascript:void(0)" class="btn">Get this plan Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pricing__shape-wrap">
            <img src="assets/img/images/pricing_shape01.png" alt="Apexa" data-aos="fade-right" data-aos-delay="400" />
            <img src="assets/img/images/pricing_shape02.png" alt="Apexa" data-aos="fade-left" data-aos-delay="400" />
        </div>
    </section>
    <!-- pricing-area-end -->
</main>

@endsection