
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="brand_logo">
                        <img src="./assets/img/rjpls logo outlined.png" alt="Logo">
                    </div>
                    <div class="rjpls_social">
                        <p class="text-light pe-3 m-0">Contact Us:</p>
                        <a href="https://www.linkedin.com/company/rjpls/" target="_blank"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a href="mailto:icapls2024@gmail.com" target="_blank"><i class="fa-solid fa-envelope"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-4 text-center">
                    <h4 class="fw-bold mb-3">Quick Links</h4>
                    <div class="d-flex flex-column gap-2 mx-5">
                        <a class="btn btn-dark pdf_btn" href="./assets/img/downloads/Brochure.pdf" target="_blank"><i
                                class="fa-regular fa-file-pdf pe-2"></i>Event Brochure</a>
                        <a class="btn btn-dark whatsapp_btn" href="https://chat.whatsapp.com/Ka469EUPAZm16v5NIrPWRH"
                            target="_blank"><i class="fa-brands fa-whatsapp pe-2"></i>Whatsapp Community</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4 text-center">
                    <h4 class="fw-bold mb-3">Quick References</h4>
                    <div class="all_abbrs">
                        <a href="https://ipapharma.org/" target="_blank">IPA</a>
                        <a href="https://www.ipga.in/" target="_blank">IPGA</a>
                        <a href="https://www.pci.nic.in/" target="_blank">PCI</a>
                        <a href="https://rjpls.com/" target="_blank">RJPLS</a>
                        <a href="https://en.wikipedia.org/wiki/Cardiopulmonary_resuscitation" target="_blank">CPR</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="dev_info container-fluid">
        <div class="container developer_text text-center">Designed and Developed by <a class="ps-2"
                href="https://mrchamp.netlify.app/" target="_blank">Chandan Kumar Panigrahi</a> <a
                href="https://www.linkedin.com/in/mrchampofficial/" target="_blank" class="ps-2"><i
                    class="fa-brands fa-linkedin"></i></a> <a href="https://www.instagram.com/mrchampofficial/"
                target="_blank" class="ps-1"><i class="fa-brands fa-instagram"></i></a></div>
    </div>
    <div class="copyright_info container-fluid">
        <p class="container text-center">© 2024 Research Journal of Pharmacy and Life Sciences. All rights reserved.</p>
    </div>

    <script src="./assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="./assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./assets/plugins/uikit/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
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
</body>

</html>