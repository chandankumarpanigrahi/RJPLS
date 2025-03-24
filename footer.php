    <!-- Footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>Berhampur, Odisha, 760001</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>+91 00000 00000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>info@jrpls.org</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="./assets/img/rjpls logo.png" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing
                                elit,Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">about</a></li>
                                <li><a href="#">services</a></li>
                                <li><a href="#">portfolio</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Expert Team</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Latest News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>© 2025 Research Journal of Pharmacy and Life Sciences. All rights reserved.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <div class="dev_info container-fluid">
        <div class="container developer_text text-center">Designed and Developed by <a class="ps-1" href="https://lluminity.com/" target="_blank">Web Lluminity Technologies</a></div>
    </div>
    <!-- JavaScript Libraries -->
    <!-- jQuery (must be first) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="./assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- UI Kit -->
    <script src="./assets/plugins/uikit/js/uikit.min.js"></script>
    <!-- Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Fancybox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.js"></script>
    <!-- Prefix Free -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <!-- Custom Script -->
    <script src="./assets/js/script.js"></script>
    <!-- Loader JS -->
    <script type="text/javascript">
        $(window).on("load", function () {
            // $(".loader").delay(1000).fadeOut(200); // By default
            $(".loader").delay(0).fadeOut(200);
        });
    </script>

    <script>
        // Function to redirect to a given link in a new tab
        function redirectToLink(url) {
            window.open(url, '_blank'); // Open the URL in a new tab
        }

    </script>

    <script>
        // Code for Responsive Hamburger
        $(document).ready(function () {
            // Toggle the main menu
            $("#nav-toggle").click(function () {
                $("#nav-menu").toggleClass("show");
                $(this).toggleClass("active");
            });

            // Toggle submenu on click for mobile
            $(".nav-link").click(function (e) {
                if ($(window).width() <= 1000) {
                    e.preventDefault();
                    var $submenu = $(this).next(".submenu");
                    $submenu.slideToggle();
                    $(".submenu").not($submenu).slideUp(); // Close other submenus
                }
            });

            // Handle active state for nav-items
            $(".nav-menu .nav-item").click(function () {
                // Remove active class from all nav-items
                $(".nav-item").removeClass("active");

                // Add active class to clicked nav-item
                $(this).addClass("active");

                // If a non-submenu item is clicked (like "Offers"), remove active_submenu from all submenu items
                if (!$(this).find(".submenu").length) {
                    $(".submenu li").removeClass("active_submenu");
                }
            });

            // Handle active_submenu state for submenu items
            $(".submenu li").click(function () {
                // Remove active_submenu from all submenu items across the entire menu
                $(".submenu li").removeClass("active_submenu");

                // Add active_submenu to the clicked li element
                $(this).addClass("active_submenu");
            });

            // Close menu when clicking outside
            $(document).click(function (e) {
                if ($(window).width() <= 1200) {
                    if (!$(e.target).closest("#nav-menu, #nav-toggle").length) {
                        $("#nav-menu").removeClass("show");
                        $("#nav-toggle").removeClass("active");
                    }
                }
            });
        });

    </script>

    <script>
        // Counts
        $(".counter").each(function () {
            var $this = $(this),
                countTo = $this.attr("data-countto");
            countDuration = parseInt($this.attr("data-duration"));
            $({ counter: $this.text() }).animate(
                {
                    counter: countTo
                },
                {
                    duration: countDuration,
                    easing: "linear",
                    step: function () {
                        $this.text(Math.floor(this.counter));
                    },
                    complete: function () {
                        $this.text(this.counter);
                    }
                }
            );
        });

    </script>
</body>

</html>