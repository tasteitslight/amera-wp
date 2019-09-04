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
        <div class="col-7 portfolio-bar bg-blue text-center align-self-center">
          70% Stocks
        </div>
        <div class="col-3 portfolio-bar bg-red text-center align-self-center">
          30% Bonds
        </div>
      </div>
      <div class="row d-flex justify-content-center pb-5">
        <div class="col-3 portfolio-bar bg-purple text-center align-self-center">
          ~30% Real Estate
        </div>
        <div class="col-2 portfolio-bar bg-lred text-center align-self-center">
          Bonds
        </div>
        <div class="col-5 portfolio-bar bg-lblue text-center align-self-center">
          Stocks
        </div>
        
      </div>
      <p class="pb-5">
        At Placeholder, we help clients invest in private market real estate. Modern Investment Theory
        supports diversification in not only stocks and bonds, but real estate too. <a href="#">Learn more about 
        the strengths of real estate.</a>
      </p>
      <hr/>
    </section> <!-- /container -->

    <!-- Lead  -->

    <section class="container-fluid text-center gradient-wtg">
      <div class="container">
        <h3 class="pb-5">Here's what you get when you invest with Placeholder</h3>
        <div class="row d-flex justify-content-center pb-5 ">
          <div class="col-12 col-md-4">
            <img class="w-50 pb-3" src="<?php bloginfo('template_directory'); ?>/assets/img/svg/quality.svg" />
            <h4 class="py-3">Quality</h4>
            <p>We specialize in high end acquisitions, choosing only the best properties to invest.</p>
          </div>
          <div class="col-12 col-md-4">
            <img class="w-50 pb-3" src="<?php bloginfo('template_directory'); ?>/assets/img/svg/expert.svg" />
            <h4 class="py-3">Expert Management</h4>
            <p>Our team is led by experienced professionals whose insight maximizes your return</p>
          </div>
          <div class="col-12 col-md-4">
            <img class="w-50 pb-3" src="<?php bloginfo('template_directory'); ?>/assets/img/svg/diversification.svg" />
            <h4 class="py-3">Diversification</h4>
            <p>Properties are diversified across select high growth areas in the United States</p>
          </div>
        </div>
      </div>
    </section> <!-- /container -->

    <!--  Invest Section  -->

    <section class="container-fluid py-5 bg-white border-top">
      <div class="container pt-4">
        <div class="row">
          <div class="col-md-6 mb-3">
            <h1 >Invest with Us</h1>
            <p>
              Register for an Placeholder account to access and review all fund documents. Already have an account?
              <br/><a href="#">Click here to sign in.</a>
            </p>
            <button class="button-custom button-custom-1 mb-5">Register</button>
          </div>
          <div class="col-md-6">
            <img class="border-radius w-100 box-shadow" src="<?php bloginfo('template_directory'); ?>/assets/img/invest.jpg"/>
          </div>
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
            <h4 >
              Need help getting started?
            </h4>
            <p>              
              We are happy assist you.
            </p>
          </div>
          <div class="col-12 col-md-4 text-center text-md-left">
            <button class="button-custom help-button">investments@placeholder.com</button>
          </div>
        </div>
      </div>
    </section> <!-- /container -->

  
  </main>

<?php
get_footer();
