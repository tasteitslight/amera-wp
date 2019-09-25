<?php
/*

  Template Name: Investments

 */

get_header();
?>

<main role="main">
    
      <!-- Header -->
      <header class="header-primary header-investments d-flex align-items-center justify-content-center">
        <div class="container text-center">
          <h1>
            American Group Investments
          </h1>
          <p>
            Build wealth by investing in cash flowing Opportunity Funds
          </p>
        </div>
        <svg class="svg-diagonal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
          <polygon fill="white" points="0,100 100,0 100,100" />
        </svg>
      </header>

      <!-- Section Offerings  -->

      <section class="container mt-5 text-center">
        <h3 class="mb-5">
          Our Current Offerings
        </h3>
        <p class="mb-5">
          American Group Opportunity Funds create wealth by investing in cash-flowing apartment buildings and other mixed-use assets in Qualified Opportunity Zones. Our focus is on long-term capital appreciation from the renovation, development and repositioning of multi-family properties in high growth locations.
        </p>
        <a class="img-link-2 box-shadow hover-float investment-container d-flex justify-content-center w-100 mb-5" href="/offering">
          <img class="img-link-2--img" src="<?php bloginfo('template_directory'); ?>/assets/img/hero/offering2.jpg"/>
          <div class="img-link-2--gradient-dark d-flex justify-content-center">
            <div class="align-self-center text-center">
                <h3 class="color-white">AAAmerican Opportunity Fund</h3>
                <p class="color-white">A long term growth fund seeking to maximize tax efficiency</p>
                <button class="button-custom">Learn More</button>
              </div>
          </div>
          <div class="investment-tag open">
            Open 
          </div>
        </a>

        <div class="img-link-2 investment-container d-flex justify-content-center w-100 my-5" href="">
          <img class="img-link-2--img" src="<?php bloginfo('template_directory'); ?>/assets/img/hero/offering.jpg"/>
          <div class="img-link-2--gradient-grey d-flex justify-content-center">
            <div class="align-self-center text-center">
                <h3 class="color-white">1 American Elite</h3>
                <p class="color-white">A Qualified Opportunity Fund</p>
              </div>
          </div>
          <div class="investment-tag closed">
            Funded 
          </div>
        </div>
        <hr class="my-5"/>
      </section> <!-- /container -->

      <!-- Section Investment Process -->

      <section class="container invest-process text-center pb-0">
        <h1>Investment Process</h1>
        <div class="row pt-5 d-flex justify-content-center text-left">
          <div class="col-2 col-md-1 mr-5">
              <h1 class="big-font big-font--invest">1</h1>
          </div>
          <div class="col-7 pl-0 border-bottom">
              <h3>Create an Account</h3>
              <p class="">Submit your contact information and investment details. <a href="#pills-signup" data-toggle="modal" data-target="#modal-login"  class="show_login">Sign Up</a></p>
          </div>
        </div>
        <div class="row pt-5 d-flex justify-content-center text-left">
          <div class="col-2 col-md-1 mr-5">
              <h1 class="big-font big-font--invest">2</h1>
          </div>
          <div class="col-7 pl-0 border-bottom">
              <h3>Review Investment Details</h3>
              <p class="">Browse offerings and review investment documents. If you would like additional 
                information, contact us.
              </p>
          </div>
        </div>
        <div class="row pt-5 d-flex justify-content-center text-left pb-5">
          <div class="col-2 col-md-1 mr-5">
              <h1 class="big-font big-font--invest">3</h1>
          </div>
          <div class="col-7 pl-0">
              <h3>American Group will contact you to arrange placement</h3>
              <p class="">
                A member of the American Group team will personally reach out 
                to qualified investment candidates to discuss specific details &amp; next steps.
              </p>
          </div>
        </div>
      </section> <!-- /container -->

      <!--Need Help Section -->

      <?php get_template_part('section', 'help'); ?>  

    
    </main>

<?php
get_footer();
