@extends('frontend.layouts.app')

@section('main-content')
        <div id="loading">
        <div class="loader"></div>
        </div>
        
        <!-- start home banner area -->
        <div id="home" class="home-banner-area home-style-three">
            <div class="container-fluid p-0">
                <div class="banner-slider-three owl-carousel">
                    <div class="slider-item item-one">
                        <div class="container">
                            <div class="banner-content">
                                <span class="sub-title">Amazing Places</span>
                                <h1>
                                    Make Your Trip Fun & Noted
                                </h1>
                                <p>
                                    Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.
                                </p>
                                <a href="destination-details.html" class="btn-primary">Destinations</a>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item item-two">
                        <div class="container">
                            <div class="banner-content">
                                <span class="sub-title">Amazing Places</span>
                                <h1>
                                    Make Your Trip Fun & Noted
                                </h1>
                                <p>
                                    Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.
                                </p>
                                <a href="destination-details.html" class="btn-primary">Destinations</a>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item item-three">
                        <div class="container">
                            <div class="banner-content">
                                <span class="sub-title">Amazing Places</span>
                                <h1>
                                    Make Your Trip Fun & Noted
                                </h1>
                                <p>
                                    Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.
                                </p>
                                <a href="destination-details.html" class="btn-primary">Destinations</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search-form">
                    <form id="searchForm">
                        <div class="row align-items-center">
                            <div class="col-lg-11">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="select-box">
                                            <i class='bx bx-map-alt'></i>
                                            <select class="form-control">
                                                <option data-display='Destination'>Nothing</option>
                                                <option value="1">North America</option>
                                                <option value="2">Spain Madrid</option>
                                                <option value="3">Japan Tokyo</option>
                                                <option value="4">Europe City</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="select-box">
                                            <i class='bx bx-calendar'></i>
                                            <input type="text" class="date-select form-control" placeholder="Depart Date" required="required"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="select-box">
                                            <i class='bx bx-package'></i>
                                            <select class="form-control">
                                                <option data-display='Travel Type'>Travel Type</option>
                                                <option value="1">City Tour</option>
                                                <option value="2">Family Tours</option>
                                                <option value="3">Seasonal Tours</option>
                                                <option value="4">Outdoor Activities</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="select-box">
                                            <i class='bx bx-time'></i>
                                            <select class="form-control">
                                                <option data-display='Tour Duration'>Nothing</option>
                                                <option value="1">5 Days</option>
                                                <option value="2">12 Days</option>
                                                <option value="3">21 Days</option>
                                                <option value="4">30 Days</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <button type="button" class="btn-search">
                                    <i class='bx bx-search-alt'></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end home banner area -->

        <!-- start features section -->
        <section class="features-section pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="item-single mb-30">
                            <i class='bx bx-calendar'></i>
                            <h3><a href="#">Reservation</a></h3>
                            <p>As compared with earlier times where a reservation personnel has to update its inventory every time.</p>
                            <div class="cta-btn">
                                <a href="#" class="btn-primary">Read More</a>
                            </div>  
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item-single mb-30">
                            <i class='bx bxs-plane-take-off' ></i>
                            <h3><a href="#">Tour Pack</a></h3>
                            <p>You can dream, create, design, and build the most wonder ful place in the world. But it requires people.</p>
                            <div class="cta-btn">
                                <a href="#" class="btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 m-auto">
                        <div class="item-single mb-30">
                            <i class='bx bx-money'></i>
                            <h3><a href="#">Payment</a></h3>
                            <p>As compared with earlier times where a reservation personnel has to update its inventory every time.</p>
                            <div class="cta-btn">
                                <a href="#" class="btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end features section -->

        <!-- start destination section -->
        <section id="destination" class="destination-section pt-100 pb-70 bg-light">
            <div class="container">
                <div class="section-title">
                    <h2>Destinations</h2>
                    <p>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
                </div>
                <div class="row">
                    <div class="col-md-8 m-auto">
                        <div class="filter-group">
                            <!-- Control List -->
                            <ul id="control" class="list-control">
                                <li class="active" data-filter="all">All</li>
                                <li data-filter="1">Budget-Friendly</li>
                                <li data-filter="2">Royal</li>
                                <li data-filter="3">Recommended</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row filtr-container">
                    <div class="col-lg-4 col-md-6 filtr-item" data-category="1" data-sort="value">
                        <div class="item-single mb-30">
                            <div class="image">
                                <img src="frontend/assets/img/destination1.jpg" alt="Demo Image">
                            </div>
                            <div class="content">
                                <span class="location"><i class='bx bx-map' ></i>Hvar, Croatia</span>
                                <h3>
                                    <a href="destination-details.html">Piazza Castello</a>
                                </h3>
                                <div class="review">
                                    <i class='bx bx-smile'></i>
                                    <span>8.5</span>
                                    <span>Superb</span>
                                </div>
                                <p>
                                   A wonderful little cottage right on the seashore - perfect for exploring.
                                </p>
                                <hr>
                                <ul class="list">
                                    <li><i class='bx bx-time'></i>3 Days</li>
                                    <li><i class='bx bx-group'></i>160+</li>
                                    <li>$500</li>
                                </ul>
                            </div>
                            <div class="spacer"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 filtr-item" data-category="2, 1" data-sort="value">
                        <div class="item-single mb-30">
                            <div class="image">
                                <img src="frontend/assets/img/destination2.jpg" alt="Demo Image">
                            </div>
                            <div class="content">
                                <span class="location"><i class='bx bx-map' ></i>Santorini, Oia ,Greece</span>
                                <h3>
                                    <a href="destination-details.html">Santorini, Oia ,Greece</a>
                                </h3>
                                <div class="review">
                                    <i class='bx bx-smile'></i>
                                    <span>9</span>
                                    <span>Superb</span>
                                </div>
                                <p>
                                   A wonderful little cottage right on the seashore - perfect for exploring.
                                </p>
                                <hr>
                                <ul class="list">
                                    <li><i class='bx bx-time'></i>7 Days</li>
                                    <li><i class='bx bx-group'></i>65+</li>
                                    <li>$2000</li>
                                </ul>
                            </div>
                            <div class="spacer"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 filtr-item" data-category="2" data-sort="value">
                        <div class="item-single mb-30">
                            <div class="image">
                                <img src="frontend/assets/img/destination3.jpg" alt="Demo Image">
                            </div>
                            <div class="content">
                                <span class="location"><i class='bx bx-map' ></i>Rialto Bridge, Italy</span>
                                <h3>
                                    <a href="destination-details.html">Rialto Bridge</a>
                                </h3>
                                <div class="review">
                                    <i class='bx bx-smile'></i>
                                    <span>7.5</span>
                                    <span>Superb</span>
                                </div>
                                <p>
                                   A wonderful little cottage right on the seashore - perfect for exploring.
                                </p>
                                <hr>
                                <ul class="list">
                                    <li><i class='bx bx-time'></i>5 Days</li>
                                    <li><i class='bx bx-group'></i>96+</li>
                                    <li>$2100</li>
                                </ul>
                            </div>
                            <div class="spacer"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 filtr-item" data-category="2, 3" data-sort="value">
                        <div class="item-single mb-30">
                            <div class="image">
                                <img src="frontend/assets/img/destination4.jpg" alt="Demo Image">
                            </div>
                            <div class="content">
                                <span class="location"><i class='bx bx-map' ></i>Santorini, Oia ,Greece</span>
                                <h3>
                                    <a href="destination-details.html">Santorini, Oia ,Greece</a>
                                </h3>
                                <div class="review">
                                    <i class='bx bx-smile'></i>
                                    <span>9</span>
                                    <span>Superb</span>
                                </div>
                                <p>
                                   A wonderful little cottage right on the seashore - perfect for exploring.
                                </p>
                                <hr>
                                <ul class="list">
                                    <li><i class='bx bx-time'></i>7 Days</li>
                                    <li><i class='bx bx-group'></i>65+</li>
                                    <li>$2000</li>
                                </ul>
                            </div>
                            <div class="spacer"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 filtr-item" data-category="1, 3" data-sort="value">
                        <div class="item-single mb-30">
                            <div class="image">
                                <img src="frontend/assets/img/destination5.jpg" alt="Demo Image">
                            </div>
                            <div class="content">
                                <span class="location"><i class='bx bx-map' ></i>Oia, Greece</span>
                                <h3>
                                    <a href="destination-details.html">Greek Cottage, Greece</a>
                                </h3>
                                <div class="review">
                                    <i class='bx bx-smile'></i>
                                    <span>8.5</span>
                                    <span>Superb</span>
                                </div>
                                <p>
                                   A wonderful little cottage right on the seashore - perfect for exploring.
                                </p>
                                <hr>
                                <ul class="list">
                                    <li><i class='bx bx-time'></i>3 Days</li>
                                    <li><i class='bx bx-group'></i>160+</li>
                                    <li>$1500</li>
                                </ul>
                            </div>
                            <div class="spacer"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 filtr-item" data-category="3, 1" data-sort="value">
                        <div class="item-single mb-30">
                            <div class="image">
                                <img src="frontend/assets/img/destination6.jpg" alt="Demo Image">
                            </div>
                            <div class="content">
                                <span class="location"><i class='bx bx-map' ></i>Venice, Italy</span>
                                <h3>
                                    <a href="destination-details.html">Metropolitan City</a>
                                </h3>
                                <div class="review">
                                    <i class='bx bx-smile'></i>
                                    <span>8.5</span>
                                    <span>Superb</span>
                                </div>
                                <p>
                                   A wonderful little cottage right on the seashore - perfect for exploring.
                                </p>
                                <hr>
                                <ul class="list">
                                    <li><i class='bx bx-time'></i>3 Days</li>
                                    <li><i class='bx bx-group'></i>160+</li>
                                    <li>$1500</li>
                                </ul>
                            </div>
                            <div class="spacer"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end destination section -->

        <!-- start about section -->
        <section id="about" class="about-section about-style-three ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-10 m-auto">
                        <div class="about-content">
                            <div class="row">
                                <div class="col-12">
                                    <h2>
                                        About Us
                                    </h2>
                                    <h6>
                                        Top Tour Operators and Travel Agency. We offering in total 793 tours and holidays through-out the world. Combined we have received 1532 customer reviews.
                                    </h6>
                                    <p>
                                        Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.Travel has helped us to understand the meaning of life and it has helped us.    
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-10 m-auto">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="content-list">
                                            <i class='bx bx-check-shield'></i>
                                            <h6>Safety Travel System</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="content-list">
                                            <i class='bx bx-donate-heart'></i>
                                            <h6>Budget-Friendly Tour</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="content-list">
                                            <i class='bx bx-support'></i>
                                            <h6>24/7 Customer Support</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="content-list">
                                            <i class='bx bx-time'></i>
                                            <h6>Expert Trip Planning</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="content-list">
                                            <i class='bx bx-station'></i>
                                            <h6>Fast Communication</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="content-list">
                                            <i class='bx bx-like'></i>
                                            <h6>Right Solution & Guide</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-btn">
                                <a href="contact.html" class="btn-primary">Contact Us</a>
                                <a href="about-us.html" class="btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape shape-1"><img src="frontend/assets/img/shape1.png" alt="Background Shape"></div>
            <div class="shape shape-2"><img src="frontend/assets/img/shape2.png" alt="Background Shape"></div>
            <div class="shape shape-3"><img src="frontend/assets/img/shape3.png" alt="Background Shape"></div>
            <div class="shape shape-4"><img src="frontend/assets/img/shape4.png" alt="Background Shape"></div>
        </section>
        <!-- end about section -->

        <!-- start offers section -->
        <section id="offers" class="offers-section pt-100 pb-70 bg-light">
            <div class="container">
                <div class="section-title">
                    <h2>Special Offers & Discount</h2>
                    <p>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="item-single mb-30">
                            <div class="image">
                                <img src="frontend/assets/img/offer1.jpg" alt="Demo Image">
                            </div>
                            <div class="content">
                                <div class="review">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <span>39 Review</span>
                                </div>
                                <div class="title">
                                    <h3>
                                        <a href="tours.html">Asia Tour</a>
                                    </h3>
                                    <span>$2000</span>
                                </div>
                                <ul class="list">
                                    <li><i class='bx bx-time'></i>7 Days</li>
                                    <li><i class='bx bx-group'></i>60+</li>
                                    <li>$1500</li>
                                </ul>
                            </div>
                            <div class="discount">
                                <span>Discount</span>
                                <span>30%</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item-single mb-30">
                            <div class="image">
                                <img src="frontend/assets/img/offer2.jpg" alt="Demo Image">
                            </div>
                            <div class="content">
                                <div class="review">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <span>19 Review</span>
                                </div>
                                <div class="title">
                                    <h3>
                                        <a href="tours.html">Russia Tour of Couple</a>
                                    </h3>
                                    <span>$1600</span>
                                </div>
                                <ul class="list">
                                    <li><i class='bx bx-time'></i>5 Days</li>
                                    <li><i class='bx bx-group'></i>130+</li>
                                    <li>$1200</li>
                                </ul>
                            </div>
                            <div class="discount">
                                <span>Discount</span>
                                <span>29%</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 m-auto">
                        <div class="item-single mb-30">
                            <div class="image">
                                <img src="frontend/assets/img/offer3.jpg" alt="Demo Image">
                            </div>
                            <div class="content">
                                <div class="review">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <span>35 Review</span>
                                </div>
                                <div class="title">
                                    <h3>
                                        <a href="tours.html">Campfire In Australia</a>
                                    </h3>
                                    <span>$2600</span>
                                </div>
                                <ul class="list">
                                    <li><i class='bx bx-time'></i>3 Days</li>
                                    <li><i class='bx bx-group'></i>91+</li>
                                    <li>$2200</li>
                                </ul>
                            </div>
                            <div class="discount">
                                <span>Discount</span>
                                <span>16%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end offers section -->

        <!-- start testimonial-section -->
        <section id="testimonial" class="testimonial-section ptb-100">
            <div class="container">
                <div class="section-title">
                    <h2>What're Our Clients Say</h2>
                    <p>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
                </div>
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <div class="testimonial-slider owl-carousel">
                            <div class="slider-item">
                                <div class="client-img">
                                    <img src="frontend/assets/img/client1.jpg" alt="client-1" />
                                </div>
                                <div class="content">
                                    <div class="client-info">
                                        <h3>Jordan Alin</h3>
                                        <span>Bloger & Youtuber</span>
                                    </div>
                                    <div class="quote">
                                        <i class='bx bxs-quote-left'></i>
                                    </div>
                                    <p>
                                        The Personal Travel Agents Academy is a 12-month training programme allowing anyone with no previous travel experience to start their own travel business. This is an advanced course to help build knowledge in travel and develop sales skills.
                                    </p>
                                    <div class="review">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="client-img">
                                    <img src="frontend/assets/img/client2.jpg" alt="client-1" />
                                </div>
                                <div class="content">
                                    <div class="client-info mb-30">
                                        <h3>David Milan</h3>
                                        <span>Photographer</span>
                                    </div>
                                    <div class="quote">
                                        <i class='bx bxs-quote-left'></i>
                                    </div>
                                    <p>
                                        The Personal Travel Agents Academy is a 12-month training programme allowing anyone with no previous travel experience to start their own travel business. This is an advanced course to help build knowledge in travel and develop sales skills.
                                    </p>
                                    <div class="review mt-15">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="client-img">
                                    <img src="frontend/assets/img/client3.jpg" alt="client-1" />
                                </div>
                                <div class="content">
                                    <div class="client-info mb-30">
                                        <h3>Thomas Alva</h3>
                                        <span>Journalist</span>
                                    </div>
                                    <div class="quote">
                                        <i class='bx bxs-quote-left'></i>
                                    </div>
                                    <p>
                                        The Personal Travel Agents Academy is a 12-month training programme allowing anyone with no previous travel experience to start their own travel business. This is an advanced course to help build knowledge in travel and develop sales skills.
                                    </p>
                                    <div class="review mt-15">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="client-img">
                                    <img src="frontend/assets/img/client4.jpg" alt="client-1" />
                                </div>
                                <div class="content">
                                    <div class="client-info mb-30">
                                        <h3>Emma Watson</h3>
                                        <span>Actress & Model</span>
                                    </div>
                                    <div class="quote">
                                        <i class='bx bxs-quote-left'></i>
                                    </div>
                                    <p>
                                        The Personal Travel Agents Academy is a 12-month training programme allowing anyone with no previous travel experience to start their own travel business. This is an advanced course to help build knowledge in travel and develop sales skills.
                                    </p>
                                    <div class="review mt-15">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="client-img">
                                    <img src="frontend/assets/img/client5.jpg" alt="client-1" />
                                </div>
                                <div class="content">
                                    <div class="client-info mb-30">
                                        <h3>Jordan Alin</h3>
                                        <span>Bloger & Youtuber</span>
                                    </div>
                                    <div class="quote">
                                        <i class='bx bxs-quote-left'></i>
                                    </div>
                                    <p>
                                        The Personal Travel Agents Academy is a 12-month training programme allowing anyone with no previous travel experience to start their own travel business. This is an advanced course to help build knowledge in travel and develop sales skills.
                                    </p>
                                    <div class="review mt-15">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='clients-img'>
                    <img class="image image-1" src="frontend/assets/img/client1.jpg" alt="Demo Image">
                    <img class="image image-2" src="frontend/assets/img/client2.jpg" alt="Demo Image">
                    <img class="image image-3" src="frontend/assets/img/client3.jpg" alt="Demo Image">
                    <img class="image image-4" src="frontend/assets/img/client4.jpg" alt="Demo Image">
                    <img class="image image-5" src="frontend/assets/img/client5.jpg" alt="Demo Image">
                </div>
            </div>
            <div class="shape">
                <img src="frontend/assets/img/shape1.png" alt="Background Shape">
            </div>
        </section>
        <!-- end testimonial section -->

        <!-- start video section -->
        <div id="video" class="video-section video-style-two">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="video-content">
                            <a href="https://www.youtube.com/watch?v=QSwvg9Rv2EI" class="youtube-popup video-btn">
                                <i class='bx bx-right-arrow'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end video section -->

        <!-- start tours section -->
        <section id="tours" class="tours-section pt-100 pb-70 bg-light">
            <div class="container">
                <div class="section-title">
                    <h2>Recent Tours</h2>
                    <p>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
                </div>
                <div class="row no-wrap">
                    <div class="col-auto">
                        <div class="item-single mb-30">
                            <div class="image">
                                <img src="frontend/assets/img/tour/tour1.jpg" alt="Demo Image"/>
                            </div>
                            <div class="content">
                                <span class="location"><i class='bx bx-map' ></i>Oia, Greece</span>
                                <h3>
                                    <a href="tours.html">Greek Cottage Greece</a>
                                </h3>
                                <div class="review mb-15">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <span>25 Review</span>
                                </div>
                                <p>
                                    A wonderful little cottage right on the seashore - perfect for exploring with the little boat which is included in the price. Located opposite Nidri sleeping.
                                </p>
                                <hr>
                                <ul class="list">
                                    <li><i class='bx bx-time'></i>3 Days</li>
                                    <li><i class='bx bx-group'></i>160+</li>
                                    <li>$1500</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-12">
                        <div class="tours-slider owl-carousel mb-30">
                            <div class="slider-item">
                                <div class="image">
                                    <img src="frontend/assets/img/tour/tour2.jpg" alt="Demo Image"/>
                                </div>
                                <div class="content">
                                    <div class="review">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <span>39 Review</span>
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="tours.html">Piazza Castello</a>
                                        </h3>
                                    </div>
                                    <ul class="list">
                                        <li><i class='bx bx-time'></i>7 Days</li>
                                        <li><i class='bx bx-group'></i>60+</li>
                                        <li>$2100</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="image">
                                    <img src="frontend/assets/img/tour/tour3.jpg" alt="Demo Image"/>
                                </div>
                                <div class="content">
                                    <div class="review">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <span>69 Review</span>
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="tours.html">Santorini, Greece</a>
                                        </h3>
                                    </div>
                                    <ul class="list">
                                        <li><i class='bx bx-time'></i>5 Days</li>
                                        <li><i class='bx bx-group'></i>60+</li>
                                        <li>$1500</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="image">
                                    <img src="frontend/assets/img/tour/tour4.jpg" alt="Demo Image"/>
                                </div>
                                <div class="content">
                                    <div class="review">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <span>39 Review</span>
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="tours.html">Metropolitan City</a>
                                        </h3>
                                    </div>
                                    <ul class="list">
                                        <li><i class='bx bx-time'></i>7 Days</li>
                                        <li><i class='bx bx-group'></i>60+</li>
                                        <li>$2300</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="image">
                                    <img src="frontend/assets/img/tour/tour5.jpg" alt="Demo Image"/>
                                </div>
                                <div class="content">
                                    <div class="review">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <span>51 Review</span>
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="tours.html">Great Natural Park</a>
                                        </h3>
                                    </div>
                                    <ul class="list">
                                        <li><i class='bx bx-time'></i>3 Days</li>
                                        <li><i class='bx bx-group'></i>60+</li>
                                        <li>$1200</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end tour section -->

        <!-- start blog section -->
        <section id="blog" class="blog-section pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <h2>Latest News & Blog</h2>
                    <p>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="item-single item-big mb-30">
                            <div class="image">
                                <img src="frontend/assets/img/blog/blog-lg1.jpg" alt="Demo Image"/>
                            </div>
                            <div class="content">
                                <ul class="info-list">
                                    <li><i class='bx bx-calendar'></i> October 5, 2020</li>
                                    <li><i class='bx bx-tag' ></i>Tour, Tourism, Travel</li>
                                </ul>
                                <h3>
                                    <a href="blog-details.html">The real voyage does not consist in seeking new landscapes, but in having new eyes.</a>
                                </h3>
                                <p>
                                    I have personally participated in many of the programs mentioned on this site. One of the programs is Save Our I have personally in many of the programs mentioned on this site.
                                </p>
                                <ul class="list">
                                    <li>
                                        <div class="author">
                                            <img src="frontend/assets/img/blog/author1.jpg" alt="Demo Image">
                                            <span>By - Envy Jeqlin</span>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="blog.html" class="btn-primary">Read More</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="item-single mb-30">
                                    <div class="image">
                                        <img src="frontend/assets/img/blog/blog1.jpg" alt="Demo Image"/>
                                    </div>
                                    <div class="content">
                                        <ul class="info-list">
                                            <li><i class='bx bx-calendar'></i> Oct 10, 2020</li>
                                            <li><i class='bx bx-tag' ></i>Tour</li>
                                        </ul>
                                        <h3>
                                            <a href="blog-details.html">Take only memories, leave only footprints.</a>
                                        </h3>
                                        <ul class="list">
                                            <li>
                                                <div class="author">
                                                    <img src="frontend/assets/img/blog/author2.jpg" alt="Demo Image">
                                                    <span>By - David Stiffen</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="item-single mb-30">
                                    <div class="image">
                                        <img src="frontend/assets/img/blog/blog2.jpg" alt="Demo Image"/>
                                    </div>
                                    <div class="content">
                                        <ul class="info-list">
                                            <li><i class='bx bx-calendar'></i> Nov 10, 2020</li>
                                            <li><i class='bx bx-tag' ></i>Travel</li>
                                        </ul>
                                        <h3>
                                            <a href="blog-details.html">Life is either a daring adventure.</a>
                                        </h3>
                                        <ul class="list">
                                            <li>
                                                <div class="author">
                                                    <img src="frontend/assets/img/blog/author3.jpg" alt="Demo Image">
                                                    <span>By - David Milan</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="item-single mb-30">
                                    <div class="image">
                                        <img src="frontend/assets/img/blog/blog3.jpg" alt="Demo Image"/>
                                    </div>
                                    <div class="content">
                                        <ul class="info-list">
                                            <li><i class='bx bx-calendar'></i> Oct 5, 2020</li>
                                            <li><i class='bx bx-tag' ></i>Travel</li>
                                        </ul>
                                        <h3>
                                            <a href="blog-details.html">Not all those who wander are lost.</a>
                                        </h3>
                                        <ul class="list">
                                            <li>
                                                <div class="author">
                                                    <img src="frontend/assets/img/blog/author4.jpg" alt="Demo Image">
                                                    <span>By - Christina</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="item-single mb-30">
                                    <div class="image">
                                        <img src="frontend/assets/img/blog/blog4.jpg" alt="Demo Image"/>
                                    </div>
                                    <div class="content">
                                        <ul class="info-list">
                                            <li><i class='bx bx-calendar'></i> Nov 9, 2020</li>
                                            <li><i class='bx bx-tag' ></i>Tour</li>
                                        </ul>
                                        <h3>
                                            <a href="blog-details.html">Mountains is always right destination.</a>
                                        </h3>
                                        <ul class="list">
                                            <li>
                                                <div class="author">
                                                    <img src="frontend/assets/img/blog/author5.jpg" alt="Demo Image">
                                                    <span>By - Emma Watson</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end blog section -->
@endsection