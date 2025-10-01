(function () {
  "use strict";

  // ======= a function to update logo
function updateLogo() {
    const defaultLogo = document.querySelector(".header-logo");
    const ud_header = document.querySelector(".ud-header");

    // Check if logos are defined
    if (typeof devdinosLogos === 'undefined') {
        console.error("devdinosLogos is not defined");
        return;
    }
    if (defaultLogo && ud_header) {
        const isDarkMode = document.documentElement.classList.contains("dark");
        const isSticky = ud_header.classList.contains("is-sticky");

        let newSrc;
        if (isDarkMode) {
            newSrc = isSticky ? devdinosLogos.sticky_dark : devdinosLogos.default_dark;
        } else {
            newSrc = isSticky ? devdinosLogos.sticky : devdinosLogos.default;
        }

        // Add error handling for image loading
        defaultLogo.onerror = () => {
            console.error(`Failed to load logo: ${newSrc}`);
            // Optionally, set a fallback logo here
            // defaultLogo.src = 'path/to/fallback-logo.png';
        };
        defaultLogo.src = newSrc;
    }
}

  // ====== theme switcher
  const themeSwitcher = document.getElementById("themeSwitcher");
  if (themeSwitcher) {
      // Theme Vars
      const userTheme = localStorage.getItem("theme");
      const systemTheme = window.matchMedia("(prefers-color-scheme: dark)").matches;

      // Initial Theme Check
      const themeCheck = () => {
        if (userTheme === "dark" || (!userTheme && systemTheme)) {
          document.documentElement.classList.add("dark");
        }
      };

      // Manual Theme Switch
      const themeSwitch = () => {
        if (document.documentElement.classList.contains("dark")) {
          document.documentElement.classList.remove("dark");
          localStorage.setItem("theme", "light");
        } else {
          document.documentElement.classList.add("dark");
          localStorage.setItem("theme", "dark");
        }
        updateLogo();
      };

      // call theme switch on clicking buttons
      themeSwitcher.addEventListener("click", () => {
          themeSwitch();
      });

      // invoke theme check on initial load
      themeCheck();
  }
  
  // initial logo update
  updateLogo();

  // ==== for menu scroll
  const pageLink = document.querySelectorAll(".ud-menu-scroll");
  pageLink.forEach((elem) => {
    elem.addEventListener("click", (e) => {
      e.preventDefault();
      const targetId = elem.getAttribute("href");
      const targetElement = document.querySelector(targetId);
      if(targetElement) {
          targetElement.scrollIntoView({
            behavior: "smooth",
            offsetTop: 1 - 60,
          });
      }
    });
  });

  // active menu on scroll

  window.addEventListener('scroll', function() {
    const header = document.querySelector('.ud-header');
    if (window.scrollY > 0) {
        header.classList.add('sticky', 'bg-white');
        header.classList.remove('absolute', 'bg-transparent');
    } else {
        header.classList.remove('sticky', 'bg-white');
        header.classList.add('absolute', 'bg-transparent');
    }
});



  // ====== scroll top js
  function scrollTo(element, to = 0, duration = 500) {
    const start = element.scrollTop;
    const change = to - start;
    const increment = 20;
    let currentTime = 0;

    const animateScroll = () => {
      currentTime += increment;
      const val = Math.easeInOutQuad(currentTime, start, change, duration);
      element.scrollTop = val;
      if (currentTime < duration) {
        setTimeout(animateScroll, increment);
      }
    };

    animateScroll();
  }

  Math.easeInOutQuad = function (t, b, c, d) {
    t /= d / 2;
    if (t < 1) return (c / 2) * t * t + b;
    t--;
    return (-c / 2) * (t * (t - 2) - 1) + b;
  };

  // Back to top
  const backToTopButton = document.querySelector(".back-to-top");
  if (backToTopButton) {
    backToTopButton.onclick = () => {
      scrollTo(document.documentElement);
    };
  }

  // ======= Sticky And Other OnScroll Events
  window.onscroll = function () {
    // Sticky header
    const ud_header = document.querySelector(".ud-header");
    if (ud_header) {
        const sticky = ud_header.offsetTop;
        if (window.pageYOffset > sticky) {
            ud_header.classList.add("is-sticky");
        } else {
            ud_header.classList.remove("is-sticky");
        }
    }

    // Update logo
    updateLogo();

    // show or hide the back-top-top button
    const backToTop = document.querySelector(".back-to-top");
    if (backToTop) {
      if (
        document.body.scrollTop > 50 ||
        document.documentElement.scrollTop > 50
      ) {
        backToTop.style.display = "flex";
      } else {
        backToTop.style.display = "none";
      }
    }
    
    // active menu on scroll
    // onScrollMenu();
  };

  // ====== testimonial carousel
  const testimonialCarousel = document.querySelector(".testimonial-carousel");
  if (testimonialCarousel) {
      new Swiper(testimonialCarousel, {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoHeight: true, // To fix the height issue
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          1280: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
        },
      });
  }

  // ====== WOW active
  if (typeof WOW !== 'undefined') {
    new WOW().init();
  }

})();

