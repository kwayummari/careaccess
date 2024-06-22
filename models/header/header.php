<?php include 'functions/setActiveMenu.php'; ?>

<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo3.png" width="150px" height="100px" alt="">
        <!-- <h1>CARE ACCESS<span>.</span></h1> -->
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" <?php setActiveClass('index.php'); ?>>Home</a></li>
          <li><a href="about.php" <?php setActiveClass('about.php'); ?>>About</a></li>
          <li><a href="services.php" <?php setActiveClass('services.php'); ?>>Services</a></li>
          <li><a href="projects.php" <?php setActiveClass('projects.php'); ?>>Projects</a></li>
          <li><a href="blog.php" <?php setActiveClass('blog.php'); ?>>Blog</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="contact.php" <?php setActiveClass('contact.php'); ?>>Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
