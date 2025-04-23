document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.getElementById("menu-toggle");
  const navMenu = document.getElementById("nav-menu");
  const menuIcon = document.getElementById("menu-icon");
  const dropdowns = document.querySelectorAll(".dropdown");

  if (menuToggle && navMenu && menuIcon) {
    // Hamburger toggle
    menuToggle.addEventListener("click", () => {
      navMenu.classList.toggle("active");
      menuIcon.classList.toggle("ri-close-line");
      menuIcon.classList.toggle("ri-menu-line");
    });

    // ESC key closes nav and dropdowns
    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape") {
        navMenu.classList.remove("active");
        menuIcon.classList.remove("ri-close-line");
        menuIcon.classList.add("ri-menu-line");
        dropdowns.forEach(d => d.classList.remove("active"));

        // Reset arrows
        document.querySelectorAll(".dropdown-arrow").forEach(arrow => {
          arrow.classList.remove("ri-arrow-up-s-line");
          arrow.classList.add("ri-arrow-down-s-line");
        });
      }
    });

    // Dropdown toggle on click
    dropdowns.forEach(dropdown => {
      const toggleWrapper =
        dropdown.querySelector(".nav-toggle-wrapper") ||
        dropdown.querySelector(".main_nav");

      if (toggleWrapper) {
        toggleWrapper.addEventListener("click", function (e) {
          e.preventDefault();
          e.stopPropagation();

          // Close other dropdowns and reset arrows
          dropdowns.forEach(d => {
            if (d !== dropdown) {
              d.classList.remove("active");
              const arrowIcon = d.querySelector(".dropdown-arrow");
              if (arrowIcon) {
                arrowIcon.classList.remove("ri-arrow-up-s-line");
                arrowIcon.classList.add("ri-arrow-down-s-line");
              }
            }
          });

          // Toggle current dropdown
          dropdown.classList.toggle("active");

          // Toggle arrow direction
          const arrowIcon = this.querySelector(".dropdown-arrow");
          if (arrowIcon) {
            const isOpen = dropdown.classList.contains("active");
            arrowIcon.classList.toggle("ri-arrow-down-s-line", !isOpen);
            arrowIcon.classList.toggle("ri-arrow-up-s-line", isOpen);
          }
        });
      }
    });

    // Outside click closes nav and dropdowns
    document.addEventListener("click", function (e) {
      if (!navMenu.contains(e.target) && !menuToggle.contains(e.target)) {
        navMenu.classList.remove("active");
        menuIcon.classList.remove("ri-close-line");
        menuIcon.classList.add("ri-menu-line");

        dropdowns.forEach(d => d.classList.remove("active"));

        document.querySelectorAll(".dropdown-arrow").forEach(arrow => {
          arrow.classList.remove("ri-arrow-up-s-line");
          arrow.classList.add("ri-arrow-down-s-line");
        });
      }
    });
  }

  // Scroll to Top button
  const scrollToTopBtn = document.getElementById("scrollToTop");
  if (scrollToTopBtn) {
    window.addEventListener("scroll", function () {
      scrollToTopBtn.classList.toggle("show", window.scrollY > 300);
    });

    scrollToTopBtn.addEventListener("click", function () {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }
});








// document.addEventListener("DOMContentLoaded", function () {
//   const menuToggle = document.getElementById("menu-toggle");
//   const navMenu = document.getElementById("nav-menu");
//   const menuIcon = document.getElementById("menu-icon");
//   const dropdowns = document.querySelectorAll(".dropdown");

//   if (menuToggle && navMenu && menuIcon) {
//     menuToggle.addEventListener("click", () => {
//       navMenu.classList.toggle("active");
//       menuIcon.classList.toggle("ri-close-line");
//       menuIcon.classList.toggle("ri-menu-line");
//     });

//     // Toggle dropdown on click anywhere in .nav-toggle-wrapper
//     dropdowns.forEach(dropdown => {
//       const toggleWrapper = dropdown.querySelector(".nav-toggle-wrapper");

//       if (toggleWrapper) {
//         toggleWrapper.addEventListener("click", function (e) {
//           e.preventDefault();
//           e.stopPropagation();

//           // Close other dropdowns
//           dropdowns.forEach(d => {
//             if (d !== dropdown) {
//               d.classList.remove("active");
//             }
//           });

//           // Toggle clicked dropdown
//           dropdown.classList.toggle("active");
//         });
//       }
//     });

//     // Close all on outside click
//     document.addEventListener("click", function (e) {
//       if (!navMenu.contains(e.target) && !menuToggle.contains(e.target)) {
//         navMenu.classList.remove("active");
//         menuIcon.classList.replace("ri-close-line", "ri-menu-line");
//         dropdowns.forEach(d => d.classList.remove("active"));
//       }
//     });
//   }

//   // Scroll to Top
//   const scrollToTopBtn = document.getElementById("scrollToTop");
//   if (scrollToTopBtn) {
//     window.addEventListener("scroll", function () {
//       scrollToTopBtn.classList.toggle("show", window.scrollY > 300);
//     });

//     scrollToTopBtn.addEventListener("click", function () {
//       window.scrollTo({ top: 0, behavior: "smooth" });
//     });
//   }
// });

//  ------------------------





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

// ---------------------------------------------------------------


// document.addEventListener("DOMContentLoaded", function () {
//   const navbarContainer = document.getElementById("navbar-container");

//   let navbarPath = "pages/navbar.html"; 

//   if (window.location.pathname.includes("/pages/")) {
//     navbarPath = "../pages/navbar.html";
//   }

//   // Fetch and insert the navbar dynamically
//   fetch(navbarPath)
//     .then(response => response.text())
//     .then(data => {
//       navbarContainer.innerHTML = data;

//       addNavbarEventListeners();
//     })
//     .catch(error => console.error("Error loading navbar:", error));

//   // Function to add event listeners for mobile navbar toggle
//   function addNavbarEventListeners() {
//     const menuToggle = document.getElementById("menu-toggle");
//     const navMenu = document.getElementById("nav-menu");
//     const menuIcon = document.getElementById("menu-icon");
//     const dropdowns = document.querySelectorAll(".dropdown");

//     if (!menuToggle || !navMenu || !menuIcon) return;

//     menuToggle.addEventListener("click", () => {
//       navMenu.classList.toggle("active");

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
