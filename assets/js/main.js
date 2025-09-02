(function () {
  "use strict";

  // ======= a function to update logo
  function updateLogo() {
    const defaultLogo = document.querySelector(".header-logo");
    const ud_header = document.querySelector(".ud-header");

    if (defaultLogo && ud_header) {
        const isDarkMode = document.documentElement.classList.contains("dark");
        const isSticky = ud_header.classList.contains("sticky");

        if (isDarkMode) {
            if (isSticky) {
                defaultLogo.src = devdinosLogos.sticky_dark;
            } else {
                defaultLogo.src = devdinosLogos.default_dark;
            }
        } else { // Light mode
            if (isSticky) {
                defaultLogo.src = devdinosLogos.sticky;
            } else {
                defaultLogo.src = devdinosLogos.default;
            }
        }
    }
  }


  // ======= Sticky
  window.onscroll = function () {
    const ud_header = document.querySelector(".ud-header");
    const sticky = ud_header.offsetTop;

    if (ud_header) {
      if (window.pageYOffset > sticky) {
        ud_header.classList.add("sticky");
      } else {
        ud_header.classList.remove("sticky");
      }
    }

    updateLogo();

    // show or hide the back-top-top button
    const backToTop = document.querySelector(".back-to-top");
    if (
      document.body.scrollTop > 50 ||
      document.documentElement.scrollTop > 50
    ) {
      backToTop.style.display = "flex";
    } else {
      backToTop.style.display = "none";
    }
  };

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

  document.querySelector(".back-to-top").onclick = () => {
    scrollTo(document.documentElement);
  };

  // ====== theme switcher
  const themeSwitcher = document.getElementById("themeSwitcher");

  // themeSwitcher.addEventListener("click", () => {
  //   themeSwitcher.classList.toggle("active");
  // });

  // Theme Vars
  const userTheme = localStorage.getItem("theme");
  const systemTheme = window.matchMedia("(prefers-color-scheme: dark)").matches;

  // Initial Theme Check
  const themeCheck = () => {
    if (userTheme === "dark" || (!userTheme && systemTheme)) {
      document.documentElement.classList.add("dark");
      return;
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
  if(themeSwitcher) {
    themeSwitcher.addEventListener("click", () => {
      themeSwitch();
    });
  }

  // invoke theme check on initial load
  themeCheck();

  // initial logo update
  updateLogo();
  
// ====== testimonial carousel
  new Swiper(".testimonial-carousel", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });


})();