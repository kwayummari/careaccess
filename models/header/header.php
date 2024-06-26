<?php include 'functions/setActiveMenu.php'; ?>

<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center" style="background-color: white; color: black;">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo4.png" width="100px" height="50px" alt="">
        <!-- <h1>CARE ACCESS<span>.</span></h1> -->
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#home" <?php setActiveClass('index.php'); ?>>Home</a></li>
          <li><a href="#about" <?php setActiveClass('about.php'); ?>>About</a></li>
          <li><a href="#services" <?php setActiveClass('services.php'); ?>>Services</a></li>
          <li><a href="#products" <?php setActiveClass('projects.php'); ?>>Products</a></li>
          <li><a href="#" <?php setActiveClass('blog.php'); ?>>Blog</a></li>
          <li><a href="#" <?php setActiveClass('contact.php'); ?>>Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
