<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maria Hanah · portfolio</title>

  <!-- Fonts & Icons -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
  <link rel="stylesheet" href="assets/css/designs.css">

</head>
<body>
  <div class="container">
    <!-- HERO -->
    <div class="hero">
      <img src="assets/images/hanah.jpg" alt="Maria Hanah Mendoza" onerror="this.src='https://via.placeholder.com/180?text=MH'">
      <h1>Maria Hanah G. Mendoza</h1>
      <p class="title">UI/UX DESIGNER</p>
      <p>Calapan City · Oriental Mindoro</p>
      <div class="btn-row">
        <a href="#" class="btn btn-send-email">Send Email</a>
        <a href="assets/files/MENDOZA_RESUME.pdf" class="btn btn-primary" target="_blank">Download Resume</a>
      </div>
    </div>

    <!-- TAB BAR -->
    <div class="tab-bar">
      <button class="nav-tab active" data-tab="about">About</button>
      <button class="nav-tab" data-tab="works">Works</button>
      <button class="nav-tab" data-tab="CONNECT">Connect</button>
      <div class="theme-toggle" id="themeToggle">☾</div>
      <div class="tab-indicator" id="indicator"></div>
    </div>

    <!-- ABOUT TAB -->
    <div id="about" class="tab-content active">
      <div class="grid-2col">
        <div class="card">
          <h2>About</h2>
          <p>An aspiring IT professional with a solid foundation in information technology fundamentals, including networking, systems administration, cybersecurity principles, and software development. Passionate about solving real-world problems through efficient, scalable, and well-structured technological solutions. Experienced in working on academic and personal projects that demonstrate analytical thinking, adaptability, and attention to detail. Continuously learning and exploring emerging technologies to stay current in the fast-evolving tech industry.</p>
        </div>
        <div class="card">
          <h2>Experience</h2>
          <div style="position:relative; padding-left:2rem; border-left:3px solid var(--green);">
            <div style="position:absolute; left:-10px; top:0; width:20px; height:20px; background:var(--green); border-radius:50%; border:3px solid green; box-shadow:0 0 10px green;"></div>
            <p style="font-weight:600; margin-bottom:.6rem;">Developer Intern – New San Jose Builders Inc.</p>
            <p style="margin-bottom:2rem;">2026 – Present</p>
            <div style="position:absolute; left:-10px; top:100px; width:16px; height:16px; background:var(--green); border-radius:50%;"></div>
            <p style="font-weight:600; margin-bottom:.6rem;">BS Information Technology – Mindoro State University</p>
            <p>2022 – Present</p>
            <ul style="margin-top:.5rem;">
              <p>Dean’s Lister (AY 2022–2025)</p>
              <p>Capstone Project: Documentation & UI Design Drafting</p>
            </ul>
          </div>
        </div>
        <div class="tech-card">
          <h2>Technical Skills</h2>
          <div class="skill-category">
            <p class="category-title"><i class="fas fa-code"></i> Programming</p>
            <div class="skills-row"><span>JavaScript</span><span>PHP</span><span>HTML/CSS</span><span>SQL</span></div>
          </div>
          <div class="skill-category">
            <p class="category-title"><i class="fas fa-pen-ruler"></i> Design</p>
            <div class="skills-row"><span>UI/UX Design</span><span>Graphic Design</span><span>Figma</span><span>Canva</span><span>Prototyping</span></div>
          </div>
          <div class="skill-category">
            <p class="category-title"><i class="fas fa-shield-halved"></i> Quality & Support</p>
            <div class="skills-row"><span>QA Testing</span><span>Technical Problem Solving</span><span>Documentation</span><span>Test Case Creation</span><span>End-User Training</span></div>
          </div>
          <div class="skill-category">
            <p class="category-title"><i class="fas fa-cloud"></i> CMS & Platforms</p>
            <div class="skills-row"><span>WordPress</span><span>Wix</span></div>
          </div>
          <div class="skill-category">
            <p class="category-title"><i class="fas fa-users"></i> Professional</p>
            <div class="skills-row"><span>Project Management</span><span>Team Collaboration</span><span>Client Communication</span><span>Time Management</span></div>
          </div>
        </div>
        <div class="tech-card">
          <h2>Hobbies & Interests</h2>
          <div class="skill-category">
            <p class="category-title"><i class="fas fa-camera"></i> Visual Arts</p>
            <div class="skills-row"><span>Photography</span><span>Videography</span><span>Content Creation</span><span>Editing</span></div>
          </div>
          <div class="skill-category">
            <p class="category-title"><i class="fas fa-film"></i> Film & Media</p>
            <div class="skills-row"><span>Films</span><span>Movies</span><span>Music</span><span>Podcasts</span><span>Documentaries</span></div>
          </div>
          <div class="skill-category">
            <p class="category-title"><i class="fas fa-book"></i> Literature & Fashion</p>
            <div class="skills-row"><span>Literature</span><span>Thrifting</span><span>Styling</span></div>
          </div>
          <div class="skill-category">
            <p class="category-title"><i class="fas fa-palette"></i> Creative Expression</p>
            <div class="skills-row"><span>Creative Writing</span><span>Visual Design</span></div>
          </div>
          <div class="hobby-influence">
            <div class="hobby-box"><i class="fas fa-paint-brush hobby-icon"></i><h4>Creative Eye</h4><p>Photography & film sharpen my visual composition skills for UI design</p></div>
            <div class="hobby-box"><i class="fas fa-magic hobby-icon"></i><h4>Attention to Detail</h4><p>Editing & styling train my eye for detail — crucial in QA and design</p></div>
          </div>
        </div>
      </div>
      <!-- certifications -->
      <div class="card" style="width:100%; margin-top:2rem;">
        <h2>Certifications</h2>
        <div class="certifications-list">
          <div class="cert-item"><span class="cert-title" data-link="assets/files/CodechumPythonProgramming2.pdf">Fortinet Certified Associate in Cybersecurity</span><a href="assets/files/CodechumPythonProgramming2.pdf" target="_blank" class="cert-link">➔</a></div>
          <div class="cert-item"><span class="cert-title" data-link="assets/files/FortinetCertifiedFundamentalsinCybersecurity.pdf">Fortinet Certified Fundamentals in Cybersecurity</span><a href="assets/files/FortinetCertifiedFundamentalsinCybersecurity.pdf" target="_blank" class="cert-link">➔</a></div>
          <div class="cert-item"><span class="cert-title" data-link="assets/files/MicrosoftDataAnalytics.pdf">Certificate in Microsoft Data Analytics</span><a href="assets/files/MicrosoftDataAnalytics.pdf" target="_blank" class="cert-link">➔</a></div>
          <div class="cert-item"><span class="cert-title" data-link="assets/files/CodechumPythonProgramming2.pdf">CodeChum Python Programming 2</span><a href="assets/files/CodechumPythonProgramming2.pdf" target="_blank" class="cert-link">➔</a></div>
        </div>
      </div>
    </div>

    <!-- ===== WORKS TAB with THREE DESIGN SETS ===== -->
    <div id="works" class="tab-content">
      <div class="grid-2col">

       <!-- COLUMN 1 · PROJECTS (IMPROVED with icons) -->
        <div class="card">
          <h2></i>Projects</h2>
          <div class="mini-project-list">

            <!-- RM'S -->
            <a href="assets/files/RM'SCapstone.pdf" target="_blank" class="mini-project-item">
              <div class="project-icon"><i class="fas fa-robot"></i></div>
              <div class="project-details">
                <div class="project-title">RM’S: AI Inventory <span>➔</span></div>
                <p class="project-desc">AI-powered inventory & e‑commerce</p>
                <div class="project-stack"><span><i class="fab fa-node-js"></i> Node.js</span><span><i class="fas fa-brain"></i> AI</span></div>
              </div>
            </a>

            <!-- ILoveMilktea -->
            <a href="assets/files/ILoveMilkteaECommerceKiosk.pdf" target="_blank" class="mini-project-item">
              <div class="project-icon"><i class="fas fa-mug-hot"></i></div>
              <div class="project-details">
                <div class="project-title">ILoveMilktea Kiosk <span>➔</span></div>
                <p class="project-desc">E‑commerce & kiosk ordering</p>
                <div class="project-stack"><span><i class="fab fa-node-js"></i> Node.js</span></div>
              </div>
            </a>

            <!-- MinSU Clinic -->
            <a href="https://github.com/mahamen/MINSUCLINIC" target="_blank" class="mini-project-item">
              <div class="project-icon"><i class="fas fa-clinic-medical"></i></div>
              <div class="project-details">
                <div class="project-title">MinSU Clinic System <span>➔</span></div>
                <p class="project-desc">Clinic management system</p>
                <div class="project-stack"><span><i class="fab fa-php"></i> PHP</span><span><i class="fab fa-html5"></i> HTML</span></div>
              </div>
            </a>

            <!-- PanChitan -->
            <a href="https://github.com/mahamen/PANCHITANLAVALUST" target="_blank" class="mini-project-item">
              <div class="project-icon"><i class="fas fa-store"></i></div>
              <div class="project-details">
                <div class="project-title">PanChitan E‑Commerce <span>➔</span></div>
                <p class="project-desc">Lavalust framework</p>
                <div class="project-stack"><span><i class="fas fa-fire"></i> Lavalust</span></div>
              </div>
            </a>

            <!-- Meat Quality Detector -->
            <a href="assets/files/MeatQualityDetector.pdf" target="_blank" class="mini-project-item">
              <div class="project-icon"><i class="fas fa-drumstick-bite"></i></div>
              <div class="project-details">
                <div class="project-title">Meat Quality Detector <span>➔</span></div>
                <p class="project-desc">AI‑based classification</p>
                <div class="project-stack"><span><i class="fab fa-python"></i> Python</span><span><i class="fab fa-django"></i> Django</span></div>
              </div>
            </a>

            <!-- SLites -->
            <a href="assets/files/SLites.pdf" target="_blank" class="mini-project-item">
              <div class="project-icon"><i class="fas fa-bolt"></i></div>
              <div class="project-details">
                <div class="project-title">SLites <span>➔</span></div>
                <p class="project-desc">Xianfire framework</p>
                <div class="project-stack"><span><i class="fas fa-cubes"></i> Xianfire</span></div>
              </div>
            </a>

            <!-- MinSU Event Scheduling -->
            <a href="assets/files/MinSUEventSchedulingSystem.pdf" target="_blank" class="mini-project-item">
              <div class="project-icon"><i class="fas fa-calendar-alt"></i></div>
              <div class="project-details">
                <div class="project-title">MinSU Event Scheduler <span>➔</span></div>
                <p class="project-desc">University event management</p>
                <div class="project-stack"><span><i class="fas fa-globe"></i> Web App</span></div>
              </div>
            </a>
          </div>
        </div>


        <!-- COLUMN 3 · FILM -->
        <div class="work-tile">
          <h2> Films</h2>
          <div class="film-grid">

            <!-- FILM 1 -->
            <div class="film-item">
              <div class="film-icon"><i class="fas fa-clapperboard"></i></div>
              <div class="film-info"><h4>"Alpas"</h4><p>Trailer</p></div>
            </div>
            <div style="margin-bottom:1.5rem;">
              <video width="100%" autoplay muted loop playsinline class="video-clickable" onclick="openFullscreen(this)">
                <source src="assets/films/ALPASTrailer.mp4" type="video/mp4">
              </video>
            </div>

            <!-- FILM 2 -->
            <div class="film-item">
              <div class="film-icon"><i class="fas fa-film"></i></div>
              <div class="film-info"><h4>"Alpas"</h4><p>A Short Film</p></div>
            </div>
            <div style="margin-bottom:1.5rem;">
              <video width="100%" autoplay muted loop playsinline class="video-clickable" onclick="openFullscreen(this)">
                <source src="assets/films/ALPASAShortFilm.mov" type="video/mp4">
              </video>
            </div>

            <!-- FILM 3 -->
            <div class="film-item">
              <div class="film-icon"><i class="fas fa-camera-retro"></i></div>
              <div class="film-info"><h4>"On the Move With Aling Lorena"</h4><p>A Short DocuFilm</p></div>
            </div>
            <div style="margin-bottom:1.5rem;">
              <video width="100%" autoplay muted loop playsinline class="video-clickable" onclick="openFullscreen(this)">
                <source src="assets/films/OntheMoveWithAlingLorenaDocufilm.mov" type="video/mp4">
              </video>
            </div>

          </div>
        </div>
      </div>

              <!-- COLUMN 2 · DESIGNS (THREE SETS ORGANIZED) -->
      <div class="grid-2col">
        <div class="card">
          <h2> Designs</h2>
          
          <!-- DESIGN SET 1: Mobile App UI -->
          <div style="margin-bottom:2rem;">
            <h3 style="color:var(--green); font-size:1.1rem; margin-bottom:0.8rem;">
              <i class="fas fa-mobile-alt" style="margin-right:6px;"></i> PanChitan ni Unchang</h3>
              <!-- DESIGN SET 2: Branding Concepts -->
              <div class="design-showcase">
                <div class="design-carousel" id="designCarousel2">
                  <div class="carousel-slide active-slide"><img src="assets/images/Panchitan1.png" onclick="openModal('set2',0)"></div>
                  <div class="carousel-slide"><img src="assets/images/Panchitan2.png" onclick="openModal('set2',1)"></div>
                  <div class="carousel-slide"><img src="assets/images/Panchitan3.png" onclick="openModal('set2',2)"></div>
                  <div class="carousel-slide"><img src="assets/images/Panchitan4.png" onclick="openModal('set2',3)"></div>
                  <div class="carousel-slide"><img src="assets/images/Panchitan5.png" onclick="openModal('set2',4)"></div>
                  <div class="carousel-slide"><img src="assets/images/Panchitan6.png" onclick="openModal('set2',5)"></div>
                  <div class="carousel-slide"><img src="assets/images/Panchitan7.png" onclick="openModal('set2',6)"></div>
                  <div class="carousel-slide"><img src="assets/images/Panchitan8.png" onclick="openModal('set2',7)"></div>
                  <button class="carousel-btn" onclick="changeSlide('set2',-1)">❮</button>
                  <button class="carousel-btn next-btn" onclick="changeSlide('set2',1)">❯</button>
                </div>
                <div class="design-thumb-grid">
                  <div class="design-thumb-card" onclick="jumpToSlide('set2',0)"><img src="assets/images/Panchitan1.png"></div>
                  <div class="design-thumb-card" onclick="jumpToSlide('set2',1)"><img src="assets/images/Panchitan2.png"></div>
                  <div class="design-thumb-card" onclick="jumpToSlide('set2',2)"><img src="assets/images/Panchitan3.png"></div>
                  <div class="design-thumb-card" onclick="jumpToSlide('set2',3)"><img src="assets/images/Panchitan4.png"></div>
                  <div class="design-thumb-card" onclick="jumpToSlide('set2',4)"><img src="assets/images/Panchitan5.png"></div>
                  <div class="design-thumb-card" onclick="jumpToSlide('set2',5)"><img src="assets/images/Panchitan6.png"></div>
                  <div class="design-thumb-card" onclick="jumpToSlide('set2',6)"><img src="assets/images/Panchitan7.png"></div>
                  <div class="design-thumb-card" onclick="jumpToSlide('set2',7)"><img src="assets/images/Panchitan8.png"></div>
                </div>
              </div>
          </div>
          
          <!-- DESIGN SET 2: Branding Concepts -->
          <div style="margin-bottom:2rem;">
            <h3 style="color:var(--green); font-size:1.1rem; margin-bottom:0.8rem;">
              <i class="fas fa-id-badge" style="margin-right:6px;"></i> iLoveMilktea</h3>
            <!-- DESIGN SET 1: Mobile App UI -->
            <div class="design-showcase">
              <div class="design-carousel" id="designCarousel1">
                <div class="carousel-slide active-slide"><img src="assets/images/lovemilk1.jpg" alt="lovemilk1" onclick="openModal('set1',0)"></div>
                <div class="carousel-slide"><img src="assets/images/lovemilk2.jpg" alt="lovemilk2" onclick="openModal('set1',1)"></div>
                <div class="carousel-slide"><img src="assets/images/lovemilk3.jpg" alt="lovemilk3" onclick="openModal('set1',2)"></div>
                <div class="carousel-slide"><img src="assets/images/lovemilk4.jpg" alt="lovemilk4" onclick="openModal('set1',3)"></div>
                <div class="carousel-slide"><img src="assets/images/lovemilk5.jpg" alt="lovemilk5" onclick="openModal('set1',4)"></div>
                <div class="carousel-slide"><img src="assets/images/lovemilk6.jpg" alt="lovemilk6" onclick="openModal('set1',5)"></div>
                <div class="carousel-slide"><img src="assets/images/lovemilk7.jpg" alt="lovemilk7" onclick="openModal('set1',6)"></div>
                <button class="carousel-btn" onclick="changeSlide('set1',-1)">❮</button>
                <button class="carousel-btn next-btn" onclick="changeSlide('set1',1)">❯</button>
              </div>
              <div class="design-thumb-grid">
                <div class="design-thumb-card" onclick="jumpToSlide('set1',0)"><img src="assets/images/lovemilk1.jpg" alt="thumb1"></div>
                <div class="design-thumb-card" onclick="jumpToSlide('set1',1)"><img src="assets/images/lovemilk2.jpg" alt="thumb2"></div>
                <div class="design-thumb-card" onclick="jumpToSlide('set1',2)"><img src="assets/images/lovemilk3.jpg" alt="thumb3"></div>
                <div class="design-thumb-card" onclick="jumpToSlide('set1',3)"><img src="assets/images/lovemilk4.jpg" alt="thumb4"></div>
                <div class="design-thumb-card" onclick="jumpToSlide('set1',4)"><img src="assets/images/lovemilk5.jpg" alt="thumb5"></div>
                <div class="design-thumb-card" onclick="jumpToSlide('set1',5)"><img src="assets/images/lovemilk6.jpg" alt="thumb6"></div>
                <div class="design-thumb-card" onclick="jumpToSlide('set1',6)"><img src="assets/images/lovemilk7.jpg" alt="thumb7"></div>
              </div>
            </div>
          </div>
          </div>
          
          <!-- COLUMN 2 · DESIGNS (continued) -->
          <div class="card">
        <h2>‎ </h2>
                  <!-- Add another Set if you want Lava designs later -->
          <div style="margin-bottom:2rem;">
            <h3 style="color:var(--green); font-size:1.1rem; margin-bottom:0.8rem;">
              <i class="fas fa-fire" style="margin-right:6px;"></i> Lava Designs
            </h3>
            <div class="design-showcase">
              <div class="design-carousel" id="designCarousel4">
                <div class="carousel-slide active-slide"><img src="assets/images/lava1.png" onclick="openModal('set4',0)"></div>
                <div class="carousel-slide"><img src="assets/images/lava2.png" onclick="openModal('set4',1)"></div>
                <div class="carousel-slide"><img src="assets/images/lava3.png" onclick="openModal('set4',2)"></div>
                <div class="carousel-slide"><img src="assets/images/lava4.png" onclick="openModal('set4',3)"></div>
                <div class="carousel-slide"><img src="assets/images/lava5.png" onclick="openModal('set4',4)"></div>
                <div class="carousel-slide"><img src="assets/images/lava6.png" onclick="openModal('set4',5)"></div>
                <div class="carousel-slide"><img src="assets/images/lava7.png" onclick="openModal('set4',6)"></div>
                <button class="carousel-btn" onclick="changeSlide('set4',-1)">❮</button>
                <button class="carousel-btn next-btn" onclick="changeSlide('set4',1)">❯</button>
              </div>
              <div class="design-thumb-grid">
                <div class="design-thumb-card" onclick="jumpToSlide('set4',0)"><img src="assets/images/lava1.png"></div>
                <div class="design-thumb-card" onclick="jumpToSlide('set4',1)"><img src="assets/images/lava2.png"></div>
                <div class="design-thumb-card" onclick="jumpToSlide('set4',2)"><img src="assets/images/lava3.png"></div>
                <div class="design-thumb-card" onclick="jumpToSlide('set4',3)"><img src="assets/images/lava4.png"></div>
                <div class="design-thumb-card" onclick="jumpToSlide('set4',4)"><img src="assets/images/lava5.png"></div>
                <div class="design-thumb-card" onclick="jumpToSlide('set4',5)"><img src="assets/images/lava6.png"></div>
                <div class="design-thumb-card" onclick="jumpToSlide('set4',6)"><img src="assets/images/lava7.png"></div>
              </div>
            </div>
          </div>

          <div style="margin-bottom:2rem;">
            <h3 style="color:var(--green); font-size:1.1rem; margin-bottom:0.8rem;">
              <i class="fas fa-calendar-alt" style="margin-right:6px;"></i> Event Scheduler UI
            </h3>
            <div class="design-showcase">
              <div class="design-carousel" id="designCarousel3">
                <div class="carousel-slide active-slide"><img src="assets/images/sched1.jpg" onclick="openModal('set3',0)"></div>
                <div class="carousel-slide"><img src="assets/images/sched2.jpg" onclick="openModal('set3',1)"></div>
                <div class="carousel-slide"><img src="assets/images/sched3.jpg" onclick="openModal('set3',2)"></div>
                <div class="carousel-slide"><img src="assets/images/sched4.jpg" onclick="openModal('set3',3)"></div>
                <button class="carousel-btn" onclick="changeSlide('set3',-1)">❮</button>
                <button class="carousel-btn next-btn" onclick="changeSlide('set3',1)">❯</button>
              </div>
              <div class="design-thumb-grid">
                <div class="design-thumb-card" onclick="jumpToSlide('set3',0)"><img src="assets/images/sched1.jpg"></div>
                <div class="design-thumb-card" onclick="jumpToSlide('set3',1)"><img src="assets/images/sched2.jpg"></div>
                <div class="design-thumb-card" onclick="jumpToSlide('set3',2)"><img src="assets/images/sched3.jpg"></div>
                <div class="design-thumb-card" onclick="jumpToSlide('set3',3)"><img src="assets/images/sched4.jpg"></div>
              </div>
            </div>
          </div>

        </div>          
        </div>
        </div>
    </div>
    <footer>© 2025 Maria Hanah Mendoza. All rights reserved.</footer>
  </div>
  

  <!-- FULLSCREEN GALLERY MODAL (for designs) -->
  <div id="galleryModal" class="gallery-modal">
    <span class="close-modal" onclick="closeModal()">&times;</span>
    <a class="modal-prev" onclick="modalChange(-1)">&#10094;</a>
    <a class="modal-next" onclick="modalChange(1)">&#10095;</a>
    <img id="modalImage" src="" alt="fullscreen design">
  </div>

  <script src="assets/js/mainn.js" defer></script>


</body>
</html>