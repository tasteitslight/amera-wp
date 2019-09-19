<?php
/*

  Template Name: How To Invest

 */

get_header();
?>

<main role="main" class="page-howToInvest">
    
    <!-- Header -->
    <header class="header-primary header-howtoinvest d-flex align-items-center justify-content-center">
      <div class="container text-center">
        <div>
          <h1 class="">
            Getting Started
          </h1>
          <p class="strong">
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
        We aim to make the process as short and simple as possible. Understanding the <a href="/tax-advantage">tax advantages</a> of Opportunity Funds and the <a href="why-real-estate">benefits</a> of real estate is a great start. You're now ready to review fund documents, details and indicate interest. Here are the steps:
      </p>
    </section>

    <section class="container text-center">
      <div class="how-to-menu row d-flex justify-content-center text-left">
        <div class="col-12 col-md-7 mb-5">
          <ul class="pl-0">
            <li>
              <p class="d-inline pr-4"><strong>1</strong></p><a href="#create-account">Create an Account</a>
            </li>
            <li>
            <p class="d-inline pr-4"><strong>2</strong></p><a href="#review-details">Review Investment Details</a>
            </li>
            <li>
            <p class="d-inline pr-4"><strong>3</strong></p><a href="#indicate-interest">Indicate Interest</a>
            </li>
          </ul>
        </div>
      </div>
      <a href="#pills-signup" data-toggle="modal" data-target="#modal-login" class="button-custom my-5">Create An Account</a>
    </section>

    <section id="create-account" class="container-fluid px-0 mt-5">
      <div class="w-100 position-sticky how-to-invest-header bg-blue">
        <div class="container">
          <h3>1 &nbsp;&nbsp;&nbsp; Create an Account</h3>
        </div>
      </div>
      <div class="container mt-5 pt-5">
        <h5 class="strong">
          Fill out a brief sign up form
        </h5>
        <p>
          After completing, you will receive access to our members area where additional information is provided.
        </p>
        <p><a href="#pills-signup" data-toggle="modal" data-target="#modal-login" >Sign Up</a></p>
        <div class="separator-gradient mt-4"></div>
      </div>    
      <div class="container mt-5 py-5">
        <h5 class="strong">
          Understand Opportunity Zones and Real Estate Investing
        </h5>
        <p>
          If you haven't already, take the time to familiarize yourself with the concepts specific to Qualified Opportunity Zone (QOZ) Funds, their tax benefits, and the value of investing in real estate. 
        </p>
        <p><a href="/opportunity-fund">Opportunity Fund Basics</a> <i class="fas fa-circle"></i> <a href="/why-real-estate">Why Real Estate</a></p>
        <div class="separator-gradient my-4"></div>
      </div>     
    </section>

    <section id="review-details" class="container-fluid px-0">
      <div class="w-100 position-sticky how-to-invest-header bg-blue">
        <div class="container">
          <h3>2 &nbsp;&nbsp;&nbsp; Review Investment Details</h3>
        </div>
      </div>
      <div class="container mt-5 pt-5">
        <h5 class="strong">
          Browse offerings and review investment documents
        </h5>
        <p>
          Comprehensive details are provided in the private offering page. Review this information and consider the investment opportunities.
        </p>
        <p><a href="/investments">View Our Current Offering</a></p>
        <div class="separator-gradient mt-4"></div>
      </div>    
      <div class="container mt-5 py-5">
        <h5 class="strong">
          Ask us anything
        </h5>
        <p>
          Opportunity Funds can be a confusing topic, and investing in real estate is a serious decision. Our invesment team will be happy to provide you with additional information.
        </p>
        <p><a href="mailto:investments@placeholder.com">Contact Us</a></p>
        <div class="separator-gradient mt-4 mb-5"></div>
      </div>     
    </section>

    <section id="indicate-interest" class="container-fluid px-0">
      <div class="w-100 position-sticky how-to-invest-header bg-blue">
        <div class="container">
          <h3>3 &nbsp;&nbsp;&nbsp; Indicate Interest</h3>
        </div>
      </div>
      <div class="container mt-5 py-5">
        <h5 class="strong">
          Let us know you're considering
        </h5>
        <p>
          When you are ready to invest, let us know via a message, email, or phone call. Placeholder will contact you to arrange placement.
        </p>
        <p><a href="/investments">Submit Offer</a></p>
        <div class="separator-gradient mt-4"></div>
      </div>  
      <div class="text-center mb-5">
        <a href="#pills-signup" data-toggle="modal" data-target="#modal-login"  class="button-custom my-5">Create An Account</a>     
      </div>
    </section>
    
    

    <!--  Invest Section  -->
      
    <section class="container-fluid border-top bg-grey">
        <div class="container py-5 mt-5">
          <div class="row">
            <div class="col-md-6 mb-3">
              <h1 class="">View Investments</h1>
              <p>
                Register for an Placeholder account to access and review all fund documents. Already have an account?
                <br/><a href="#pills-signin" data-toggle="modal" data-target="#modal-login"  class="show_login">Click here to sign in.</a>
              </p>
              <a class="button-custom button-custom-1 show_login" href="/investments">View Offerings</a>
            </div>
            <div class="col-md-6">
              <img class="w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/invest.png"/>
            </div>
          </div>
        </div> 
      </section> <!-- /container -->

      <!-- More About Opportunity Zones Section -->

    <section class="container-fluid bg-white border-top text-center">
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

      <!-- Need Help Section  -->

      <section class="container-fluid border-top bg-grey pt-5 pb-2 section-help">
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
