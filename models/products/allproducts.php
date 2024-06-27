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
            <li data-filter=".filter-imaging">Imaging solutions</li>
            <li data-filter=".filter-icu">ICU solutions</li>
            <li data-filter=".filter-hospital">Hospital furniture</li>
            <li data-filter=".filter-orthopedic">Orthopedic implants & instruments</li>
            <li data-filter=".filter-rapid">Rapid diagnostic kits</li>
            <li data-filter=".filter-dental">Dental equipment</li>
            <li data-filter=".filter-Medical">Medical consumables and disposables</li>
            <li data-filter=".filter-Surgical">Surgical equipment</li>
            <li data-filter=".filter-Physiotherapy">Physiotherapy and rehabilitation</li>
            <li data-filter=".filter-Dialysis">Dialysis products</li>
            <li data-filter=".filter-Gas">Medical gas</li>
            <li data-filter=".filter-test">Point-of-care tests</li>
            <li data-filter=".filter-health">Digital health & home tests</li>
          </ul><!-- End Projects Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <?php include 'laboratory.php'?>
            <?php include 'surgical.php'?>
            <?php include 'icu.php' ?>
            <?php include 'hospital.php' ?>
            <?php include 'orthopedic.php' ?>
            <?php include 'rapid.php' ?>
            <?php include 'dental.php' ?>
            <?php include 'test.php' ?>
          </div><!-- End Projects Container -->

        </div>

      </div>
    </section><!-- End Our Projects Section -->