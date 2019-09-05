<?php
/*

  Template Name: How To Invest

 */

get_header();
?>

<main role="main">
    
    <!-- Header -->
    <header class="header-primary header-1031 d-flex align-items-center justify-content-center">
      <div class="container text-center">
        <div>
          <h1>
            Getting Started
          </h1>
          <p>
            How to invest in Real Estate with Placeholder
          </p>
        </div>
      </div>
      <svg class="svg-diagonal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
        <polygon fill="white" points="0,100 100,0 100,100" />
      </svg>
    </header>

    <!-- Intro  -->

    <section class="container text-center pt-5">
      <p class="pb-5">
        We aim to make the process as short and simple as possible. Understanding the <a href="/tax-advantage">tax advantages</a> of Opportunity Funds and the <a href="why-real-estate">benefits</a> of real estate is a great start. After creating an account, you can review fund documents and details, and indicate interest. Here are the steps:
      </p>
    </section>

    <section class="container text-center">
      <div class="how-to-menu row d-flex justify-content-center text-left">
        <div class="col-12 col-md-7">
          <ul class="pl-0">
            <li>
              <p class="d-inline pr-4"><strong>1</strong></p><a href="#">Create an Account</a>
            </li>
            <li>
            <p class="d-inline pr-4"><strong>2</strong></p><a href="#">Review Investment Details</a>
            </li>
            <li>
            <p class="d-inline pr-4"><strong>3</strong></p><a href="#">Indicate Interest</a>
            </li>
          </ul>
        </div>
      </div>
      <a href="" class="button-custom my-5">Get Started</a>
    </section>

    <section class="container-fluid">
      
    </section>
    

    <!-- More About Opportunity Zones Section -->

    <section class="container-fluid bg-grey border-top border-bottom text-center">
      <div class="container my-5">
          <h3>Learn More About Opportunity Funds</h3>
          <div class="row my-5">
            <div class="col-sm-7 pb-4 pb-sm-0">
              <a class="img-link" href="/opportunity-fund">
                <img class="img-link--img" src="<?php bloginfo('template_directory'); ?>/assets/img/hero/opportunityfund-2.jpg"/>
                <div class="img-link--gradient-dark d-flex justify-content-center">
                  <div class="my-auto">
                    Opportunity Fund Basics
                  </div>
                </div>
              </a>
            </div>
            <div class="col-sm-5">
              <a class="img-link" href="/tax-advantage">
                <img class="img-link--img" src="<?php bloginfo('template_directory'); ?>/assets/img/hero/taxadvantage.jpg"/>
                <div class="img-link--gradient-dark d-flex justify-content-center">
                  <div class="my-auto">
                    Tax Advantages
                  </div>
                </div>
              </a>
            </div>
          </div>
      </div>
    </section>

    <!--  Invest Section  -->

    <section class="container py-5 my-5">
      <div class="row">
        <div class="col-md-6 mb-3">
          <h1 class="">Ready to invest?</h1>
          <p>
            Register for an Placeholder account to access and review all fund documents. Already have an account?
            <br/><a href="" class="show_login">Click here to sign in.</a>
          </p>
          <a class="button-custom button-custom-1 show_login">Register</a>
        </div>
        <div class="col-md-6">
          <img class="border-radius w-100 box-shadow" src="<?php bloginfo('template_directory'); ?>/assets/img/invest.jpg"/>
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
