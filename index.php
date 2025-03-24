    <?php
   $currentPage = 'Home';
   include 'header.php';
?>
    <div class="container-fluid p-0 mb-5">
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1"
            uk-slideshow="autoplay: true; autoplay-interval: 5000">
            <div class="uk-slideshow-items slider_area">
                <div>
                    <img src="./assets/img/Banner/Banner_1.png" alt="" uk-cover>
                </div>
                <div>
                    <img src="./assets/img/Banner/Banner_1.png" alt="" uk-cover>
                </div>
                <div>
                    <img src="./assets/img/Banner/Banner_1.png" alt="" uk-cover>
                </div>
            </div>
            <a class="uk-position-center-left uk-position-small  slider_arrow" href uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small  slider_arrow" href uk-slidenav-next uk-slideshow-item="next"></a>
        </div>
    </div>
    <section class="container" id="book_on_mobile" style="display: none;">
        <div class="book_buttons mb-5">
            <button class="custom-btn btn-11"
                onclick="redirectToLink('https://docs.google.com/forms/d/e/1FAIpQLSeTlKYTOAVnd5RcPIOjvaD-NZG82VUqTKAWWyL7OklrjA16xQ/viewform')">BOOK
                SLOT<div class="dot"></div></button>
        </div>
    </section>
    <section class="container mt-3">
        <div class="left_card" id="about">
            <div class="card_details card_1">
                <div class="card_left">
                    <h2 class="event_heading mb-3">What We Do</h2>
                    <p class="event_data">The <strong>RJPLS</strong> (RESEARCH JOURNAL OF PHARMACY AND LIFE SCIENCES), an official publication in collaboration
                        with our publishing partner HOPE, provides scientists a valuable opportunity to publish their
                        work in a peer-reviewed journal that is released once every four months. Serving as a reputable
                        platform, the journal ensures rigorous evaluation of submitted content, maintaining high
                        academic standards. By facilitating regular publications, we aim to encourage scientific
                        discourse and the timely dissemination of research findings. This partnership emphasizes our
                        commitment to fostering a dynamic scholarly community and advancing knowledge across
                        pharmaceutical and life sciences. Authors can contribute to this esteemed journal, gaining
                        visibility for their work in a structured and timely publication schedule.
                    </p>
                </div>
            </div>
            <div class="bg_marker"></div>
        </div>
        <div class="right_card" id="why">
            <div class="card_details card_2">
                <div class="card_right">
                    <h2 class="event_heading mb-3">Our Mission</h2>
                    <p class="event_data">The RJPLS Journal is committed to sharing pioneering research in
                        pharmaceutical and life sciences, emphasizing its implications for plant, human, and veterinary
                        therapeutics. Our platform serves as a conduit for the dissemination of groundbreaking findings
                        that contribute to the advancement of these critical fields.</p>
                </div>
            </div>
            <div class="bg_marker"></div>
        </div>
    </section>

    <section class="container mt-5 listed_items mb-4">
        <div class="row">
            <div class="col-md-12 mb-3">
                <h2 class="event_heading text-center mb-3">Latest Events</h2>
                <div class="uk-position-relative uk-visible-toggle uk-light mb-4" tabindex="-1" uk-slider="autoplay: true">
                    <div class="uk-slider-container">
                        <div class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid all_event_cards">
                            <div>
                                <div class="uk-panel event_card">
                                    <img src="http://unsplash.it/1440/768/?random=1" alt="">
                                    <div class="event_details">
                                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quae nihil quo optio consectetur id repellendus eius, voluptates temporibus veritatis.</h3>
                                        <summary>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus ut id, ad molestiae consequuntur tempore praesentium, enim eveniet optio dolore illum, tempora aliquam maxime. Ex facilis facere accusamus corrupti commodi consequuntur aperiam quasi eum porro minus, quam animi rerum dolores nostrum, doloremque illum! Sit optio hic voluptas magnam ea nostrum!</summary>
                                        <div class="d-flex mb-3">
                                            <p><i class="fa-solid fa-calendar-days"></i><span>25/04/2025</span></p>
                                            <p class="ms-auto"><i class="fa-solid fa-location-dot"></i><span>Berhampur</span></p>
                                        </div>
                                        <a href="#">View Event Details</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-panel event_card">
                                    <img src="http://unsplash.it/1440/768/?random=2" alt="">
                                    <div class="event_details">
                                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quae nihil quo optio consectetur id repellendus eius, voluptates temporibus veritatis.</h3>
                                        <summary>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus ut id, ad molestiae consequuntur tempore praesentium, enim eveniet optio dolore illum, tempora aliquam maxime. Ex facilis facere accusamus corrupti commodi consequuntur aperiam quasi eum porro minus, quam animi rerum dolores nostrum, doloremque illum! Sit optio hic voluptas magnam ea nostrum!</summary>
                                        <div class="d-flex mb-3">
                                            <p><i class="fa-solid fa-calendar-days"></i><span>25/04/2025</span></p>
                                            <p class="ms-auto"><i class="fa-solid fa-location-dot"></i><span>Berhampur</span></p>
                                        </div>
                                        <a href="#">View Event Details</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-panel event_card">
                                    <img src="http://unsplash.it/1440/768/?random=3" alt="">
                                    <div class="event_details">
                                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quae nihil quo optio consectetur id repellendus eius, voluptates temporibus veritatis.</h3>
                                        <summary>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus ut id, ad molestiae consequuntur tempore praesentium, enim eveniet optio dolore illum, tempora aliquam maxime. Ex facilis facere accusamus corrupti commodi consequuntur aperiam quasi eum porro minus, quam animi rerum dolores nostrum, doloremque illum! Sit optio hic voluptas magnam ea nostrum!</summary>
                                        <div class="d-flex mb-3">
                                            <p><i class="fa-solid fa-calendar-days"></i><span>25/04/2025</span></p>
                                            <p class="ms-auto"><i class="fa-solid fa-location-dot"></i><span>Berhampur</span></p>
                                        </div>
                                        <a href="#">View Event Details</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-panel event_card">
                                    <img src="http://unsplash.it/1440/768/?random=4" alt="">
                                    <div class="event_details">
                                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quae nihil quo optio consectetur id repellendus eius, voluptates temporibus veritatis.</h3>
                                        <summary>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus ut id, ad molestiae consequuntur tempore praesentium, enim eveniet optio dolore illum, tempora aliquam maxime. Ex facilis facere accusamus corrupti commodi consequuntur aperiam quasi eum porro minus, quam animi rerum dolores nostrum, doloremque illum! Sit optio hic voluptas magnam ea nostrum!</summary>
                                        <div class="d-flex mb-3">
                                            <p><i class="fa-solid fa-calendar-days"></i><span>25/04/2025</span></p>
                                            <p class="ms-auto"><i class="fa-solid fa-location-dot"></i><span>Berhampur</span></p>
                                        </div>
                                        <a href="#">View Event Details</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-panel event_card">
                                    <img src="http://unsplash.it/1440/768/?random=5" alt="">
                                    <div class="event_details">
                                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quae nihil quo optio consectetur id repellendus eius, voluptates temporibus veritatis.</h3>
                                        <summary>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus ut id, ad molestiae consequuntur tempore praesentium, enim eveniet optio dolore illum, tempora aliquam maxime. Ex facilis facere accusamus corrupti commodi consequuntur aperiam quasi eum porro minus, quam animi rerum dolores nostrum, doloremque illum! Sit optio hic voluptas magnam ea nostrum!</summary>
                                        <div class="d-flex mb-3">
                                            <p><i class="fa-solid fa-calendar-days"></i><span>25/04/2025</span></p>
                                            <p class="ms-auto"><i class="fa-solid fa-location-dot"></i><span>Berhampur</span></p>
                                        </div>
                                        <a href="#">View Event Details</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-panel event_card">
                                    <img src="http://unsplash.it/1440/768/?random=6" alt="">
                                    <div class="event_details">
                                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quae nihil quo optio consectetur id repellendus eius, voluptates temporibus veritatis.</h3>
                                        <summary>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus ut id, ad molestiae consequuntur tempore praesentium, enim eveniet optio dolore illum, tempora aliquam maxime. Ex facilis facere accusamus corrupti commodi consequuntur aperiam quasi eum porro minus, quam animi rerum dolores nostrum, doloremque illum! Sit optio hic voluptas magnam ea nostrum!</summary>
                                        <div class="d-flex mb-3">
                                            <p><i class="fa-solid fa-calendar-days"></i><span>25/04/2025</span></p>
                                            <p class="ms-auto"><i class="fa-solid fa-location-dot"></i><span>Berhampur</span></p>
                                        </div>
                                        <a href="#">View Event Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="uk-position-center-left-out" href uk-slidenav-previous uk-slider-item="previous"><i class="fa-solid fa-angle-left slider_left"></i></a>
                        <a class="uk-position-center-right-out" href uk-slidenav-next uk-slider-item="next"><i class="fa-solid fa-angle-right slider_right"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col md-12">
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="view_all">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container mt-5 listed_items mb-4">
        <div class="row">
            <div class="col-md-12 mb-3">
                <h2 class="event_heading text-center mb-3">Latest Articles</h2>
                <!-- 6 Items Fixed -->
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="blog_card">
                            <img src="./assets/img/blogs/1.jpg" alt="">
                            <div class="blog_texts">
                                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, quasi. Neque,
                                    blanditiis quo amet magni corrupti magnam provident eum quidem?</h2>
                                <div class="d-flex">
                                    <h6 class="date">15-01-2024</h6>
                                    <a href="#" class="ms-auto read_more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="blog_card">
                            <img src="./assets/img/blogs/1.jpg" alt="">
                            <div class="blog_texts">
                                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, quasi. Neque,
                                    blanditiis quo amet magni corrupti magnam provident eum quidem?</h2>
                                <div class="d-flex">
                                    <h6 class="date">15-01-2024</h6>
                                    <a href="#" class="ms-auto read_more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="blog_card">
                            <img src="./assets/img/blogs/1.jpg" alt="">
                            <div class="blog_texts">
                                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, quasi. Neque,
                                    blanditiis quo amet magni corrupti magnam provident eum quidem?</h2>
                                <div class="d-flex">
                                    <h6 class="date">15-01-2024</h6>
                                    <a href="#" class="ms-auto read_more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="blog_card">
                            <img src="./assets/img/blogs/1.jpg" alt="">
                            <div class="blog_texts">
                                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, quasi. Neque,
                                    blanditiis quo amet magni corrupti magnam provident eum quidem?</h2>
                                <div class="d-flex">
                                    <h6 class="date">15-01-2024</h6>
                                    <a href="#" class="ms-auto read_more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="blog_card">
                            <img src="./assets/img/blogs/1.jpg" alt="">
                            <div class="blog_texts">
                                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, quasi. Neque,
                                    blanditiis quo amet magni corrupti magnam provident eum quidem?</h2>
                                <div class="d-flex">
                                    <h6 class="date">15-01-2024</h6>
                                    <a href="#" class="ms-auto read_more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="blog_card">
                            <img src="./assets/img/blogs/1.jpg" alt="">
                            <div class="blog_texts">
                                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, quasi. Neque,
                                    blanditiis quo amet magni corrupti magnam provident eum quidem?</h2>
                                <div class="d-flex">
                                    <h6 class="date">15-01-2024</h6>
                                    <a href="#" class="ms-auto read_more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col md-12">
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="view_all">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="all_counts">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="counter_card card_1">
                        <i class="fa-solid fa-envelopes-bulk"></i>
                        <h1 class="counter" data-countto="10" data-duration="2000">0</h1>
                        <p>Posts</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter_card card_2">
                        <i class="fa-solid fa-users"></i>
                        <h1 class="counter" data-countto="25" data-duration="2000">0</h1>
                        <p>Community</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter_card card_3">
                        <i class="fa-solid fa-calendar-days"></i>
                        <h1 class="counter" data-countto="6" data-duration="2000">0</h1>
                        <p>Events</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter_card card_4">
                        <i class="fa-solid fa-briefcase"></i>
                        <h1 class="counter" data-countto="4" data-duration="2000">0</h1>
                        <p>Service</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container gallery my-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="event_heading text-center mb-4">Gallery</h2>
                <div class="gallery_container">
                    <div class="item">
                        <a href="http://unsplash.it/1440/768/?random=1" data-fancybox="gallery">
                            <img src="http://unsplash.it/1440/768/?random=1">
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://unsplash.it/1440/768/?random=2" data-fancybox="gallery">
                            <img src="http://unsplash.it/1440/768/?random=2">
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://unsplash.it/1440/768/?random=3" data-fancybox="gallery">
                            <img src="http://unsplash.it/1440/768/?random=3">
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://unsplash.it/1440/768/?random=4" data-fancybox="gallery">
                            <img src="http://unsplash.it/1440/768/?random=4">
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://unsplash.it/1440/768/?random=5" data-fancybox="gallery">
                            <img src="http://unsplash.it/1440/768/?random=5">
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://unsplash.it/1440/768/?random=6" data-fancybox="gallery">
                            <img src="http://unsplash.it/1440/768/?random=6">
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="container my-3">
        <div class="row">
            <div class="col-md-12 mb-3">
                <h2 class="event_heading text-center mb-3">We Associate With</h2>
                <div class="all_logos">
                    <img src="./assets/img/Logo/logo_1.png" alt="">
                    <img src="./assets/img/Logo/logo_2.png" alt="">
                    <img src="./assets/img/Logo/logo_3.png" alt="">
                    <img src="./assets/img/Logo/logo_4.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>