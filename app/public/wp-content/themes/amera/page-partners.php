<?php
/*

  Template Name: Partners

 */

get_header();
?>

<main role="main">
    
      <!-- Header -->
      <header class="header-primary header-partners d-flex align-items-center justify-content-center">
        <div class="container text-center">
          <h1 class="pt-4">
            Partner Network
          </h1>  
        </div>
        <svg class="svg-diagonal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
          <polygon fill="white" points="0,100 100,0 100,100" />
        </svg>
      </header>

      <!-- Intro  -->

      <section class="container text-center py-5">
          <h3 class="pb-4">
            We care about relationships
          </h3>
          <p>
            And are proud to work with and support these incredible institutions.
          </p>
  
        </section>

      <section class="container-fluid border-top py-5 text-center gradient-gtw">
        <div class="container">
          <h3 class="pb-4">
            Service
          </h3>
          <div class="row mt-5 justify-content-center">
            <div class="col-4 col-sm-3 border-all bg-white mx-2 my-2 box-shadow--light">
              <img class="w-100 my-4" src="<?php bloginfo('template_directory'); ?>/assets/img/logo/fidelity.jpg" />
              <h4>Fidelity</h4>
            </div>
            <div class="col-4 col-sm-3 border-all bg-white mx-2 my-2 box-shadow--light">
              <img class="w-100 my-4" src="<?php bloginfo('template_directory'); ?>/assets/img/logo/freddiemac.jpg" />
              <h4>Freddie Mac</h4>
            </div>
            <div class="col-4 col-sm-3 border-all bg-white mx-2 my-2 box-shadow--light">
              <img class="w-100 my-4" src="<?php bloginfo('template_directory'); ?>/assets/img/logo/fanniemae.jpg" />
              <h4>Fannie Mae</h4>
            </div>
            <div class="col-4 col-sm-3 border-all bg-white mx-2 my-2 box-shadow--light">
              <img class="w-100 my-4" src="<?php bloginfo('template_directory'); ?>/assets/img/logo/farmersmerchants.jpg" />
              <h4>F&amp;M Bank</h4>
            </div>
            <div class="col-4 col-sm-3 border-all bg-white mx-2 my-2 box-shadow--light">
              <img class="w-100 my-4" src="<?php bloginfo('template_directory'); ?>/assets/img/logo/bofa.jpg" />
              <h4>Bank of America</h4>
            </div>
          </div>
        </div>
        
      </section> <!-- /container -->

      <section class="container-fluid border-top py-5 text-center gradient-wtg">
        <div class="container">
          <h3 class="pb-4">
            Community
          </h3>
          <div class="row mt-5 justify-content-center">
            <div class="col-4 col-sm-3 border-all bg-white mx-2 my-2 box-shadow--light">
              <img class="w-100 my-4" src="<?php bloginfo('template_directory'); ?>/assets/img/logo/oxy.jpg" />
              <h4>Occidental College</h4>
            </div>
            <div class="col-4 col-sm-3 border-all bg-white mx-2 my-2 box-shadow--light">
              <img class="w-100 my-4" src="<?php bloginfo('template_directory'); ?>/assets/img/logo/uofcal.jpg" />
              <h4>University of California</h4>
            </div>
            <div class="col-4 col-sm-3 border-all bg-white mx-2 my-2 box-shadow--light">
              <img class="w-100 my-4" src="<?php bloginfo('template_directory'); ?>/assets/img/logo/caltech.jpg" />
              <h4>Cal Tech</h4>
            </div>
            <div class="col-4 col-sm-3 border-all bg-white mx-2 my-2 box-shadow--light">
              <img class="w-100 my-4" src="<?php bloginfo('template_directory'); ?>/assets/img/logo/csu.jpg" />
              <h4>California State University</h4>
            </div>
            <div class="col-4 col-sm-3 border-all bg-white mx-2 my-2 box-shadow--light">
              <img class="w-100 my-4" src="<?php bloginfo('template_directory'); ?>/assets/img/logo/imc.jpg" />
              <h4>Int Medical Corp</h4>
            </div>
          </div>
        </div>
        
      </section> <!-- /container -->

      <!-- View Investments Section -->

      <?php get_template_part('section', 'viewInvestments'); ?>

      <!-- Need Help Section -->

      <?php get_template_part('section', 'help'); ?>

    </main>

<?php
get_footer();
