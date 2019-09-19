<?php
/*

  Template Name: Resources
 */

get_header();
?>

<main role="main">
    
      <!-- Header -->
      <header class="header-primary header-resources d-flex align-items-center justify-content-center">
        <div class="container text-center">
          <h1 class="pt-4">
            Resources
          </h1>  
          <a href="" class="button-custom mt-4">
            Subscribe to Newsletter
          </a>
        </div>
        <svg class="svg-diagonal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
          <polygon fill="#ffffff" points="0,100 100,0 100,100" />
        </svg>
      </header>

      <!-- Intro  -->

      <section class="container">  
        <div class="row d-flex justify-content-center align-items-center text-center resources-nav">
          <div class="col-3">
            <a href="/articles">
              Articles
            </a>
          </div>
          <div class="col-3">
            <a href="/glossary">
              Glossary
            </a>
          </div>
          <div class="col-3">
            <a href="/faq">
              FAQ
            </a>
          </div>
        </div>
        <h2 class="text-center py-5">
          Featured Articles
        </h2>
        <a class="img-link" href="#">
          <img class="img-link--img" src="<?php bloginfo('template_directory'); ?>/assets/img/hero/taxadvantage.jpg"/>
          <div class="img-link--gradient-dark d-flex justify-content-center">
            <div class="my-auto">
              Featured Article Name
            </div>
          </div>
        </a>
        <div class="row my-5">
          <div class="col-sm-6">
            <a class="img-link" href="#">
              <img class="img-link--img" src="<?php bloginfo('template_directory'); ?>/assets/img/resources/1.jpg"/>
              <div class="d-flex justify-content-center"> <!-- img-link--gradient for gradients over image-->
                <!-- <div class="my-auto"> Overlay Text </div> -->
              </div>
            </a>
            <h6 class="pt-4">
              Article Category
            </h6>
            <h4>
              Top 5 Generic Blog Article Titles
            </h4>
            <p>
              This is a short blip of text from the beginning of the article...
            </p>
          </div>
          <div class="col-sm-6">
            <a class="img-link" href="#">
              <img class="img-link--img" src="<?php bloginfo('template_directory'); ?>/assets/img/resources/2.jpg"/>
              <div class="d-flex justify-content-center"> <!-- img-link--gradient for gradients over image-->
                <!-- <div class="my-auto"> Overlay Text </div> -->
              </div>
            </a>
            <h6 class="pt-4">
              Article Category
            </h6>
            <h4>
              Top 5 Generic Blog Article Titles
            </h4>
            <p>
              This is a short blip of text from the beginning of the article...
            </p>
          </div>
        </div>
        <div class="row my-5">
          <div class="col-sm-6">
            <a class="img-link" href="#">
              <img class="img-link--img" src="<?php bloginfo('template_directory'); ?>/assets/img/resources/3.jpg"/>
              <div class="d-flex justify-content-center"> <!-- img-link--gradient for gradients over image-->
                <!-- <div class="my-auto"> Overlay Text </div> -->
              </div>
            </a>
            <h6 class="pt-4">
              Article Category
            </h6>
            <h4>
              Top 5 Generic Blog Article Titles
            </h4>
            <p>
              This is a short blip of text from the beginning of the article...
            </p>
          </div>
          <div class="col-sm-6">
            <a class="img-link" href="#">
              <img class="img-link--img" src="<?php bloginfo('template_directory'); ?>/assets/img/resources/1.jpg"/>
              <div class="d-flex justify-content-center"> <!-- img-link--gradient for gradients over image-->
                <!-- <div class="my-auto"> Overlay Text </div> -->
              </div>
            </a>
            <h6 class="pt-4">
              Article Category
            </h6>
            <h4>
              Top 5 Generic Blog Article Titles
            </h4>
            <p>
              This is a short blip of text from the beginning of the article...
            </p>
          </div>
        </div>
      </section>

      <!-- View Investments Section -->

      <?php get_template_part('section', 'viewInvestments'); ?>

      <!-- Need Help Section -->

      <?php get_template_part('section', 'help'); ?>

    </main>

<?php
get_footer();
