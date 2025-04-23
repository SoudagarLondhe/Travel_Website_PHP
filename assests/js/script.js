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
});




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
