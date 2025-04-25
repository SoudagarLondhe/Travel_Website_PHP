// comment form validation
function validateCommentForm(form,event) {
  event.preventDefault();
  const name = form.name.value.trim();
  const email = form.email.value.trim();
  const rating = form.rating.value;
  const visitCount = form.visit_count.value;
  const comment = form.comment.value.trim();

  // Clear previous error messages
  document.querySelectorAll('.error-message').forEach(el => el.remove());

  // Validate each field
  let isValid = true;

  if (!name) {
      showError(form.name, "Name is required");
      isValid = false;
  }

  if (!email) {
      showError(form.email, "Email is required");
      isValid = false;
  } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
      showError(form.email, "Please enter a valid email");
      isValid = false;
  }

  if (!rating) {
      showError(form.rating, "Please select a rating");
      isValid = false;
  }

  if (!visitCount) {
      showError(form.visit_count, "Please select visit count");
      isValid = false;
  }

  if (!comment) {
      showError(form.comment, "Comment is required");
      isValid = false;
  }

  if (isValid) {
    form.submit();  // Manually submit if validation passes
  }

  return false;
}

function showError(input, message) {
  const errorElement = document.createElement('div');
  errorElement.className = 'error-message';
  errorElement.style.color = 'red';
  errorElement.style.fontSize = '0.8rem';
  errorElement.textContent = message;
  input.insertAdjacentElement('afterend', errorElement);
  input.style.borderColor = 'red';
}


document.addEventListener("DOMContentLoaded", function () {
  // Navbar Toggle Logic
  const menuToggle = document.getElementById("menu-toggle");
  const navMenu = document.getElementById("nav-menu");
  const menuIcon = document.getElementById("menu-icon");
  const dropdowns = document.querySelectorAll(".dropdown");

  if (menuToggle && navMenu && menuIcon) {
    menuToggle.addEventListener("click", () => {
      navMenu.classList.toggle("active");
      if (navMenu.classList.contains("active")) {
        menuIcon.classList.replace("ri-menu-line", "ri-close-line");
      } else {
        menuIcon.classList.replace("ri-close-line", "ri-menu-line");
      }
    });

    dropdowns.forEach(dropdown => {
      dropdown.addEventListener("click", function (e) {
        e.stopPropagation();
        this.classList.toggle("active");
      });
    });

    document.addEventListener("click", function (e) {
      if (!navMenu.contains(e.target) && !menuToggle.contains(e.target)) {
        navMenu.classList.remove("active");
        menuIcon.classList.replace("ri-close-line", "ri-menu-line");
        dropdowns.forEach(dropdown => dropdown.classList.remove("active"));
      }
    });
  }

  // Scroll to Top Button Logic
  const scrollToTopBtn = document.getElementById("scrollToTop");
  if (scrollToTopBtn) {
    window.addEventListener("scroll", function () {
      scrollToTopBtn.classList.toggle("show", window.scrollY > 300);
    });

    scrollToTopBtn.addEventListener("click", function () {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }

  // Typewriter Effect for contextual message
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

  // DHTML Component: Fade-in gallery images on scroll
  const galleryImages = document.querySelectorAll(".gallery-grid img");
  function fadeInOnScroll() {
    galleryImages.forEach((img, index) => {
      const rect = img.getBoundingClientRect();
      const delay = index * 500;
      if (rect.top < window.innerHeight - 100) {
        setTimeout(() => {
          img.classList.add("fade-in-visible");
        }, delay);
      }
    });
  }

  window.addEventListener("scroll", fadeInOnScroll);
  window.addEventListener("load", fadeInOnScroll);

  // Carousel Controls
  const galleryTrack = document.getElementById("gallery-track");
  const gallerySlider = document.getElementById("gallery-slider");
  const carouselImages = galleryTrack ? galleryTrack.querySelectorAll("img") : [];
  const nextBtn = document.getElementById("gallery-next");
  const prevBtn = document.getElementById("gallery-prev");

  let currentStartIndex = 0;
  const imageWidth = 250;
  const gap = 5;
  const itemWidth = imageWidth + gap;

  function updateGallery() {
    if (!gallerySlider || !carouselImages.length) return;
    const galleryWidth = gallerySlider.offsetWidth;
    const visibleCount = Math.floor(galleryWidth / itemWidth);
    const offset = currentStartIndex * itemWidth;
    galleryTrack.style.transform = `translateX(-${offset}px)`;

    prevBtn.disabled = currentStartIndex <= 0;
    nextBtn.disabled = currentStartIndex >= carouselImages.length - visibleCount;
  }

  function handleNext() {
    const visibleCount = Math.floor(gallerySlider.offsetWidth / itemWidth);
    const maxStartIndex = carouselImages.length - visibleCount;
    if (currentStartIndex < maxStartIndex) {
      currentStartIndex++;
      updateGallery();
    }
  }

  function handlePrev() {
    if (currentStartIndex > 0) {
      currentStartIndex--;
      updateGallery();
    }
  }

  if (nextBtn && prevBtn && galleryTrack) {
    nextBtn.addEventListener("click", handleNext);
    prevBtn.addEventListener("click", handlePrev);
    window.addEventListener("resize", updateGallery);
    window.addEventListener("load", updateGallery);
  }

// 💡 Natural swipe with real gesture scroll
let startX = 0;
let scrollStart = 0;

if (gallerySlider) {
  gallerySlider.addEventListener("touchstart", (e) => {
    startX = e.touches[0].clientX;
    scrollStart = gallerySlider.scrollLeft;
  });

  gallerySlider.addEventListener("touchmove", (e) => {
    const currentX = e.touches[0].clientX;
    const deltaX = startX - currentX;

    gallerySlider.scrollLeft = scrollStart + deltaX;
  });
}



});





