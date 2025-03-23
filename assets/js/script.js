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
  