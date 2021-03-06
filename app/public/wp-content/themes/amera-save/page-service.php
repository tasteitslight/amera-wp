<?php
/*

  Template Name: Service
 */

get_header();
?>

<main role="main">
    
    <!-- Header -->

    <header class="header-primary header-service d-flex align-items-center justify-content-center">
      <div class="container text-center">
        <h1>
          Our Service
        </h1>
        <p>
          Building Wealth in the asset class of fortunes
        </p>
      </div>
      <svg class="svg-diagonal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
        <polygon fill="#f8f8f8" points="0,100 100,0 100,100" />
      </svg>
    </header>

    <!-- Quote  -->

    <section class="container-fluid section-quote--service">
        <div class="container" >
          <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-8 text-center text-sm-right align-self-center">
              <h4>
                “Ninety percent of all millionaires become so through owning real estate.” 
              </h4>
              <p>
                -Andrew Carnegie
              </p>
            </div>
            <div class="col-12 col-sm-2 align-self-center text-center text-sm-left pb-3">
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/headshot/andrewcarnegie.png" />
            </div>
          </div>
        </div>  
          
        </section><!-- /container --> 

    <!-- Lead  -->

    <section class="container text-center py-5">
      <h1 class="">We Strengthen Your Portfolio</h1>
      <div class="row d-flex justify-content-center pt-5 pb-3">
        <div class="col-7 portfolio-bar bg-grey-gradient text-center align-self-center">
          70% Stocks
        </div>
        <div class="col-3 portfolio-bar bg-grey-gradient text-center align-self-center">
          30% Bonds
        </div>
      </div>
      <div class="row d-flex justify-content-center pb-5">
        <div class="col-3 portfolio-bar bg-purple text-center align-self-center">
          ~30% Real Estate
        </div>
        <div class="col-2 portfolio-bar bg-red text-center align-self-center">
          Bonds
        </div>
        <div class="col-5 portfolio-bar bg-blue text-center align-self-center">
          Stocks
        </div>
        
      </div>
      <p class="pb-5">
        At American Group, we help clients invest in private market real estate. Modern Investment Theory
        supports diversification in not only stocks and bonds, but real estate too. <a href="/why-real-estate">Learn more about 
        the strengths of real estate.</a>
      </p>
      <hr/>
    </section> <!-- /container -->

    <!-- Lead  -->

    <section class="container-fluid text-center">
      <div class="container">
        <h3 class="pb-5">Here's what you get when you invest with American Group</h3>
        <div class="row d-flex justify-content-center pb-5 ">
          <div class="col-12 col-md-4">
            <img class="w-50 pb-3" src="<?php bloginfo('template_directory'); ?>/assets/img/svg/quality.svg" />
            <h4 class="py-3">Quality</h4>
            <p>We specialize in high end acquisitions, choosing the best properties in which to invest.</p>
          </div>
          <div class="col-12 col-md-4">
            <img class="w-50 pb-3" src="<?php bloginfo('template_directory'); ?>/assets/img/svg/expert.svg" />
            <h4 class="py-3">Expert Management</h4>
            <p>Our team is led by experienced professionals whose insight maximizes your return</p>
          </div>
          <div class="col-12 col-md-4">
            <img class="w-50 pb-3" src="<?php bloginfo('template_directory'); ?>/assets/img/svg/diversification.svg" />
            <h4 class="py-3">Diversification</h4>
            <p>Properties are diversified across select higher growth areas in the United States</p>
          </div>
        </div>
      </div>
    </section> <!-- /container -->

    <!-- Learn Opportunity Funds Section -->
      
    <section class="container-fluid bg-grey border-top text-center py-5">
      <?php get_template_part('section','learnMoreA'); ?>
    </section>

    <!-- View Investments Section -->

    <?php get_template_part('section', 'viewInvestments'); ?>

    <!-- Need Help Section -->

    <?php get_template_part('section', 'help'); ?>
  
  </main>

<?php
get_footer();
