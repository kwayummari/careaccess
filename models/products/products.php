<!-- ======= Our Projects Section ======= -->
<section id="projects" class="projects" id="products">
      <div class="container" data-aos="fade-up">
      <div class="section-header">
            <h2>OUR SPECIAL PRODUCTS</h2>
        </div>
        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-laboratory">Laboratory equipment</li>
            <li data-filter=".filter-surgical">Surgical equipment</li>
            <li data-filter=".filter-icu">ICU solutions</li>
            <li data-filter=".filter-hospital">Hospital furniture</li>
          </ul><!-- End Projects Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <?php include 'laboratory.php'?>
            <?php include 'surgical.php'?>
            <?php include 'icu.php' ?>
            <?php include 'hospital.php' ?>

          </div><!-- End Projects Container -->

        </div>
      </div>
      <div style="display: flex; justify-content: center; align-items: center; margin-top: 20px;">
        <a data-aos="fade-up" data-aos-delay="200" href="products.php" 
        style="background-color: #6d8df8; color: aliceblue; 
        padding: 15px; border-radius: 20px;" class="btn-get-started">View More Products</a>
    </div>
    </section><!-- End Our Projects Section -->