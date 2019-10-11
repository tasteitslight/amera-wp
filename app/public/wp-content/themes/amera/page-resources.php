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
          <!-- AC Form -->

          <?php get_template_part('ac', 'formR'); ?>   
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
        <a class="img-link hover-float" href="/articles/intro-to-opportunity-zones">
          <img class="img-link--img" src="<?php home_url(); ?>/content/intro.jpg"/>
          <div class="img-link--gradient-dark-2 d-flex justify-content-center">
            <div class="my-auto">
              Start Here: An Introduction To Opportunity Zones
            </div>
          </div>
        </a>
        <div class="row my-5">
          <div class="col-sm-6 hover-float">
            <a class="img-link" href="/articles/benefits-of-opportunity-zone-investing">
              <img class="img-link--img" src="<?php home_url(); ?>/content/benefits.jpg"/>
              <div class="d-flex justify-content-center"> <!-- img-link--gradient for gradients over image-->
                <!-- <div class="my-auto"> Overlay Text </div> -->
              </div>
            </a>
            <h6 class="pt-4">
              Opportunity Funds
            </h6>
            <h4>
             The Benefits of Opportunity Zone Investing
            </h4>
            <p>
              Learn why Opportunity Funds are such an attractive investment option for Capital Gains...
            </p>
          </div>
          <div class="col-sm-6 hover-float">
            <a class="img-link" href="/articles/modern-portfolio-theory-why-you-should-invest-in-real-estate">
              <img class="img-link--img" src="<?php home_url(); ?>/content/mpt.jpg"/>
              <div class="d-flex justify-content-center"> <!-- img-link--gradient for gradients over image-->
                <!-- <div class="my-auto"> Overlay Text </div> -->
              </div>
            </a>
            <h6 class="pt-4">
              Investing
            </h6>
            <h4>
              Modern Portfolio Theory & Why You Should Invest in Real Estate
            </h4>
            <p>
              What is Modern Portfolio Theory? Today we'll explain the origins of this fundamental...
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
