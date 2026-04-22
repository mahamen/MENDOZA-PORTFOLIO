document.addEventListener("DOMContentLoaded", function () {

  // ===== SEND EMAIL =====
  // Uses mailto: so it opens the compose window correctly on both desktop and mobile
  const sendEmailBtn = document.querySelector('.btn-send-email');
  if (sendEmailBtn) {
    sendEmailBtn.addEventListener('click', function (e) {
      e.preventDefault();
      window.location.href = "mailto:hanahmendoza78@gmail.com";
    });
  }

  // ===== TAB NAVIGATION & INDICATOR =====
  const tabs      = document.querySelectorAll('.nav-tab');
  const contents  = document.querySelectorAll('.tab-content');
  const indicator = document.getElementById('indicator');

  function moveIndicator(tab) {
    if (indicator) {
      indicator.style.left  = `${tab.offsetLeft}px`;
      indicator.style.width = `${tab.offsetWidth}px`;
    }
  }

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      tabs.forEach(t => t.classList.remove('active'));
      contents.forEach(c => c.classList.remove('active'));
      tab.classList.add('active');
      document.getElementById(tab.getAttribute('data-tab')).classList.add('active');
      moveIndicator(tab);
    });
  });

  window.addEventListener('load', () => {
    const activeTab = document.querySelector('.nav-tab.active');
    if (activeTab) moveIndicator(activeTab);
  });

  // ===== THEME TOGGLE =====
  const themeToggle = document.getElementById('themeToggle');

  if (localStorage.getItem("theme") === "light") {
    document.body.classList.add("light");
    themeToggle.textContent = "☀";
  }

  themeToggle.addEventListener("click", () => {
    document.body.classList.toggle("light");
    const isLight = document.body.classList.contains("light");
    themeToggle.textContent = isLight ? "☀" : "☾";
    localStorage.setItem("theme", isLight ? "light" : "dark");
  });

  // ===== CONTACT FORM SUBMIT =====
  const contactForm = document.getElementById('contactForm');
  const formSuccess = document.getElementById('formSuccess');
  const submitBtn   = document.getElementById('submitBtn');

  if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();
      submitBtn.textContent = 'Sending...';
      submitBtn.disabled = true;
      const formData = new FormData(contactForm);
      fetch('https://formspree.io/f/xeevqbbz', {
        method: 'POST',
        body: formData,
        headers: { 'Accept': 'application/json' }
      })
        .then(response => {
          if (response.ok) {
            contactForm.style.display = 'none';
            formSuccess.style.display = 'flex';
          }
        })
        .catch(() => {
          contactForm.style.display = 'none';
          formSuccess.style.display = 'flex';
        });
    });
  }

  // ===== CERTIFICATE LINKS =====
  document.querySelectorAll('.cert-title').forEach(title => {
    title.addEventListener('click', () => {
      const link = title.getAttribute('data-link');
      if (link) window.open(link, '_blank');
    });
  });

  // ===== VIDEO FULLSCREEN =====
  window.openFullscreen = function (videoElement) {
    if (videoElement.requestFullscreen)            videoElement.requestFullscreen();
    else if (videoElement.webkitRequestFullscreen) videoElement.webkitRequestFullscreen();
    else if (videoElement.msRequestFullscreen)     videoElement.msRequestFullscreen();
    videoElement.muted = false;
    videoElement.play();
  };

  // ===== DESIGN CAROUSELS =====
  const carouselSets = {
    set1: { currentSlide: 0, slides: [] },
    set2: { currentSlide: 0, slides: [] },
    set3: { currentSlide: 0, slides: [] },
    set4: { currentSlide: 0, slides: [] }
  };

  const designSets = {
    set1: [
      "assets/images/lovemilk1.jpg",
      "assets/images/lovemilk2.jpg",
      "assets/images/lovemilk3.jpg",
      "assets/images/lovemilk4.jpg",
      "assets/images/lovemilk5.jpg",
      "assets/images/lovemilk6.jpg",
      "assets/images/lovemilk7.jpg"
    ],
    set2: [
      "assets/images/Panchitan1.png",
      "assets/images/Panchitan2.png",
      "assets/images/Panchitan3.png",
      "assets/images/Panchitan4.png",
      "assets/images/Panchitan5.png",
      "assets/images/Panchitan6.png",
      "assets/images/Panchitan7.png",
      "assets/images/Panchitan8.png"
    ],
    set3: [
      "assets/images/minsuvas1.png",
      "assets/images/minsuvas2.png",
      "assets/images/minsuvas3.png",
      "assets/images/minsuvas4.png",
      "assets/images/minsuvas5.png",
      "assets/images/minsuvas6.png",
      "assets/images/minsuvas7.png"
    ],
    set4: [
      "assets/images/lava1.png",
      "assets/images/lava2.png",
      "assets/images/lava3.png",
      "assets/images/lava4.png",
      "assets/images/lava5.png",
      "assets/images/lava6.png",
      "assets/images/lava7.png"
    ]
  };

  function initCarousels() {
    carouselSets.set1.slides = document.querySelectorAll('#designCarousel1 .carousel-slide');
    carouselSets.set2.slides = document.querySelectorAll('#designCarousel2 .carousel-slide');
    carouselSets.set3.slides = document.querySelectorAll('#designCarousel3 .carousel-slide');
    carouselSets.set4.slides = document.querySelectorAll('#designCarousel4 .carousel-slide');

    showSlide('set1', 0);
    showSlide('set2', 0);
    showSlide('set3', 0);
    showSlide('set4', 0);
  }

  function showSlide(setId, index) {
    const set = carouselSets[setId];
    if (!set || !set.slides.length) return;
    set.slides.forEach(slide => slide.classList.remove('active-slide'));
    set.slides[index].classList.add('active-slide');
    set.currentSlide = index;
  }

  window.changeSlide = function (setId, direction) {
    const set = carouselSets[setId];
    if (!set || !set.slides.length) return;
    const newIndex = (set.currentSlide + direction + set.slides.length) % set.slides.length;
    showSlide(setId, newIndex);
  };

  window.jumpToSlide = function (setId, index) {
    showSlide(setId, index);
  };

  // ===== MODAL =====
  const modal    = document.getElementById('galleryModal');
  const modalImg = document.getElementById('modalImage');
  let currentModalSet   = 'set1';
  let currentModalIndex = 0;

  window.openModal = function (setId, index) {
    currentModalSet   = setId;
    currentModalIndex = index;
    if (modalImg) modalImg.src = designSets[setId][index];
    if (modal)    modal.style.display = 'flex';
  };

  window.closeModal = function () {
    if (modal) modal.style.display = 'none';
  };

  window.modalChange = function (direction) {
    const setImages = designSets[currentModalSet];
    currentModalIndex = (currentModalIndex + direction + setImages.length) % setImages.length;
    if (modalImg) modalImg.src = setImages[currentModalIndex];
  };

  if (modal) {
    modal.addEventListener('click', e => {
      if (e.target === modal) closeModal();
    });
  }

  document.addEventListener('keydown', e => {
    if (modal && modal.style.display === 'flex') {
      if (e.key === 'ArrowLeft')  modalChange(-1);
      if (e.key === 'ArrowRight') modalChange(1);
      if (e.key === 'Escape')     closeModal();
    }
  });

  // ===== DESIGN TAB SWITCHER =====
  const designTabBar = document.getElementById('designTabBar');
  if (designTabBar) {
    designTabBar.addEventListener('click', e => {
      const btn = e.target.closest('.design-tab');
      if (!btn) return;
      designTabBar.querySelectorAll('.design-tab').forEach(t => t.classList.remove('active'));
      btn.classList.add('active');
      document.querySelectorAll('.design-panel').forEach(p => p.classList.remove('active'));
      const target = document.getElementById(btn.getAttribute('data-design'));
      if (target) target.classList.add('active');
    });
  }

  // ===== CAROUSEL DOTS =====
  const dotSetMap = {
    set1: { el: document.getElementById('dots-set1'), count: 7 },
    set2: { el: document.getElementById('dots-set2'), count: 8 },
    set3: { el: document.getElementById('dots-set3'), count: 7 },
    set4: { el: document.getElementById('dots-set4'), count: 7 }
  };

  function buildDots() {
    Object.entries(dotSetMap).forEach(([setId, { el, count }]) => {
      if (!el) return;
      el.innerHTML = '';
      for (let i = 0; i < count; i++) {
        const dot = document.createElement('button');
        dot.className = 'carousel-dot' + (i === 0 ? ' active-dot' : '');
        dot.addEventListener('click', () => { jumpToSlide(setId, i); updateDots(setId, i); });
        el.appendChild(dot);
      }
    });
  }

  function updateDots(setId, index) {
    const { el } = dotSetMap[setId] || {};
    if (!el) return;
    el.querySelectorAll('.carousel-dot').forEach((d, i) => {
      d.classList.toggle('active-dot', i === index);
    });
  }

  // Patch changeSlide & showSlide to also update dots
  const _origShowSlide = showSlide;
  function showSlide(setId, index) {
    const set = carouselSets[setId];
    if (!set || !set.slides.length) return;
    set.slides.forEach(slide => slide.classList.remove('active-slide'));
    set.slides[index].classList.add('active-slide');
    set.currentSlide = index;
    updateDots(setId, index);
  }

  // ===== INIT =====
  window.addEventListener('load', () => {
    initCarousels();
    buildDots();
  });

});
