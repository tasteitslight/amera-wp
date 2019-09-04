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
            Explain importance of this partner network, and these service providers to our firm.
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
              <img class="w-100 my-4" src="<?php bloginfo('template_directory'); ?>/assets/img/logo/imc.jpg" />
              <h4>Int Medical Corp</h4>
            </div>
            <div class="col-4 col-sm-3 border-all bg-white mx-2 my-2 box-shadow--light">
              <img class="w-100 my-4" src="<?php bloginfo('template_directory'); ?>/assets/img/logo/csu.jpg" />
              <h4>California State University</h4>
            </div>
            <div class="col-4 col-sm-3 border-all bg-white mx-2 my-2 box-shadow--light">
              <img class="w-100 my-4" src="<?php bloginfo('template_directory'); ?>/assets/img/logo/caltech.jpg" />
              <h4>Cal Tech</h4>
            </div>
          </div>
        </div>
        
      </section> <!-- /container -->

      <!--  Invest Section  -->

      <section class="container-fluid py-5 bg-white border-top">
        <div class="container mt-4">
          <div class="row">
            <div class="col-md-6 mb-3">
              <h1 class="">Ready to invest?</h1>
              <p>
                Register for an Placeholder account to access and review all fund documents. Already have an account?
                <br/><a href="" class="show_login">Click here to sign in.</a>
              </p>
              <a class="button-custom button-custom-1 mb-5 show_login">Register</a>
            </div>
            <div class="col-md-6">
              <img class="border-radius w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/invest.jpg"/>
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
