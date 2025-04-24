document.addEventListener("DOMContentLoaded", function () {
  // Navbar Toggle Logic
  const menuToggle = document.getElementById("menu-toggle");
  const navMenu = document.getElementById("nav-menu");
  const menuIcon = document.getElementById("menu-icon");
  const dropdowns = document.querySelectorAll(".dropdown");

  if (menuToggle && navMenu && menuIcon) {
    menuToggle.addEventListener("click", () => {
      navMenu.classList.toggle("active");

      // Change icon to close or menu
      if (navMenu.classList.contains("active")) {
        menuIcon.classList.replace("ri-menu-line", "ri-close-line");
      } else {
        menuIcon.classList.replace("ri-close-line", "ri-menu-line");
      }
    });

    // Toggle dropdowns on click (for mobile)
    dropdowns.forEach(dropdown => {
      dropdown.addEventListener("click", function (e) {
        e.stopPropagation();
        this.classList.toggle("active");
      });
    });

    // Close menu when clicking outside
    document.addEventListener("click", function (e) {
      if (!navMenu.contains(e.target) && !menuToggle.contains(e.target)) {
        navMenu.classList.remove("active");
        menuIcon.classList.replace("ri-close-line", "ri-menu-line"); // Reset to hamburger icon
        dropdowns.forEach(dropdown => dropdown.classList.remove("active"));
      }
    });
  }

  // Scroll to Top Button Logic
  const scrollToTopBtn = document.getElementById("scrollToTop");

  if (scrollToTopBtn) {
    // Show or hide the button based on scroll position
    window.addEventListener("scroll", function () {
      if (window.scrollY > 300) {
        scrollToTopBtn.classList.add("show");
      } else {
        scrollToTopBtn.classList.remove("show");
      }
    });

    // Smooth scroll to top when button is clicked
    scrollToTopBtn.addEventListener("click", function () {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }

    // Typewriter Effect for Contextual Message for 'Index' and all 'About' NYC pages
    const typewriter = document.getElementById("typewriter-text");
    if (typewriter && typewriter.dataset.message) {
      const message = typewriter.dataset.message;
      let index = 0;

      function typeNextChar() {
        if (index < message.length) {
          typewriter.textContent += message.charAt(index);
          index++;
          setTimeout(typeNextChar, 80);
        }
      }

      typeNextChar();
    }

  
});



// document.addEventListener("DOMContentLoaded", function () {
//   // Navbar Toggle Logic
//   const menuToggle = document.getElementById("menu-toggle");
//   const navMenu = document.getElementById("nav-menu");
//   const menuIcon = document.getElementById("menu-icon");
//   const dropdowns = document.querySelectorAll(".dropdown");

//   if (menuToggle && navMenu && menuIcon) {
//     menuToggle.addEventListener("click", () => {
//       navMenu.classList.toggle("active");

//       // Change icon to close or menu
//       if (navMenu.classList.contains("active")) {
//         menuIcon.classList.replace("ri-menu-line", "ri-close-line");
//       } else {
//         menuIcon.classList.replace("ri-close-line", "ri-menu-line");
//       }
//     });

//     // Toggle dropdowns on click (for mobile)
//     dropdowns.forEach(dropdown => {
//       dropdown.addEventListener("click", function (e) {
//         e.stopPropagation();
//         this.classList.toggle("active");
//       });
//     });

//     // Close menu when clicking outside
//     document.addEventListener("click", function (e) {
//       if (!navMenu.contains(e.target) && !menuToggle.contains(e.target)) {
//         navMenu.classList.remove("active");
//         menuIcon.classList.replace("ri-close-line", "ri-menu-line"); // Reset to hamburger icon
//         dropdowns.forEach(dropdown => dropdown.classList.remove("active"));
//       }
//     });
//   }

//   // Scroll to Top Button Logic
//   const scrollToTopBtn = document.getElementById("scrollToTop");

//   if (scrollToTopBtn) {
//     // Show or hide the button based on scroll position
//     window.addEventListener("scroll", function () {
//       if (window.scrollY > 300) {
//         scrollToTopBtn.classList.add("show");
//       } else {
//         scrollToTopBtn.classList.remove("show");
//       }
//     });

//     // Smooth scroll to top when button is clicked
//     scrollToTopBtn.addEventListener("click", function () {
//       window.scrollTo({ top: 0, behavior: "smooth" });
//     });
//   }
// });


// ------------------------------------