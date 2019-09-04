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
            Placeholder Offerings
          </h1>
        </div>
        <svg class="svg-diagonal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
          <polygon fill="white" points="0,100 100,0 100,100" />
        </svg>
      </header>

      <!-- Section Offerings  -->

      <section class="container mt-5">
        <a class="img-link-2 investment-container d-flex justify-content-center w-100 my-5" href="/offering">
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

        <a class="img-link-2 investment-container d-flex justify-content-center w-100 my-5" href="">
          <img class="img-link-2--img" src="<?php bloginfo('template_directory'); ?>/assets/img/hero/offering.jpg"/>
          <div class="img-link-2--gradient-dark d-flex justify-content-center">
            <div class="align-self-center text-center">
                <h3 class="color-white">1 American Elite</h3>
                <p class="color-white">A Single Asset Opportunity Zone Investment</p>
                <button class="button-custom">Learn More</button>
              </div>
          </div>
          <div class="investment-tag closed">
            Funded 
          </div>
        </a>
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
              <p class="">Submit your contact information and investment details. <a href="" class="show_login">Sign Up</a></p>
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
              <h3>Placeholder will contact you to arrange placement</h3>
              <p class="">
                A member of the Placeholder team will personally reach out 
                to qualified investment candidates to discuss specific details &amp; next steps.
              </p>
          </div>
        </div>
      </section> <!-- /container -->

      

      <!-- Need Help Section  -->

      <section class="container-fluid border-top border-bottom--darker bg-grey pt-5 pb-2 section-help">
        <div class="container">
          <div class="row ">
            <div class="col-12 col-md-3 text-center section-help-img">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/headshot/headshot-will.png" width="100px" />
                <h6>Will</h6>
            </div>
            <div class="col-12 col-md-5 text-center text-md-left section-help-text">
              <h4 class="">
                Need help getting started?
              </h4>
              <p>              
                We are happy assist you.
              </p>
            </div>
            <div class="col-12 col-md-4 text-center text-md-left">
              <a href="mailto:investments@placeholder.com" class="button-custom help-button text-center">investments@placeholder.com</a>
            </div>
          </div>
        </div>
      </section> <!-- /container -->

    
    </main>

<?php
get_footer();