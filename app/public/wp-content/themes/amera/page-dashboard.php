<?php
/*

  Template Name: Dashboard

 */

get_header();
?>

<main role="main" class="bg-grey">
    
      <!-- Header -->
      <header class="header-secondary d-flex align-items-center justify-content-center">
        <div class="container text-center">
          <h1 class="pt-4">
            Member Area
          </h1>  
        </div>
        <svg class="svg-diagonal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
          <polygon fill="#f8f8f8" points="0,100 100,0 100,100" />
        </svg>
      </header>

      <!-- Articles  -->

      <section class="container pt-5 bg-grey">
        <h3 class="mt-5">
          Review Fund Details
        </h3>
        <div class="row hover-float my-5 pb-5">
          <div class="col-4">
            <a href="/offering-full">
              <img class="border-radius w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/resources/1.jpg"/>
            </a>
          </div>
          <div class="col-8">
            <a class="font-georgia" href="/offering-full">
              <h5 class="color-dark">
                AAAmerican Opportunity Fund
              </h5>
              <p >
                A long term growth fund seeking to maximize tax efficiency.
              </p>
              <a href="/offering-full" class="button-custom">Review Documents</a>
            </a>
          </div>
        </div>
        
      </section>

      <!-- Need Help Section  -->

      <?php get_template_part('section', 'help'); ?>

    </main>

<?php
get_footer();
