<?php
/*

  Template Name: Offering

 */

get_header();
?>

<main role="main">
      
      <!-- Header -->

      <header class="header-primary header-offering d-flex align-items-center justify-content-center">
        <div class="container text-center">
          <h1 class="mb-3">
            AAAmerican Opportunity Fund
          </h1>
          <div class="investment-tag-2 text-center mb-4">
            Accepting Investments 
          </div>
          <br/>
          <a href="/offering-full" class="button-custom">Review Documents</a>
          <a class="button-custom">Indicate Interest</a>
        </div>
        <svg class="svg-diagonal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
          <polygon fill="white" points="0,100 100,0 100,100" />
        </svg>
      </header>

      <!-- Lead  -->

      <section class="container-fluid my-5 fund-aaa-intro-lead-section">
        <div class="container">
          <div class="row">
            <div class="col-11 col-sm-6">
              <div class="card-white">
                <h2>
                  Fund Strategy
                </h2>
                <div class="separator-gradient mb-3"></div>
                <p class="mb-5">
                  This growth fund owns and operates multifamily properties while benefiting from the preferential tax treatment of the <a href="/opportunity-fund">Opportunity Zone Program.</a>
                </p>
                <h2>
                  Terms
                </h2>
                <div class="separator-gradient mb-3"></div>
                <div class="row fund-table">
                  <div class="col-6">
                    <h5>10+ years</h5>
                    <p>Hold Period</p>
                    <h5>Growth</h5>
                    <p>Investment Type</p>
                    <h5>Multifamily</h5>
                    <p>Asset Type</p>
                  </div>
                  <div class="col-6">
                    <h5>Development &amp; Value Add</h5>
                    <p>Investment Profile</p>
                    <h5>$100,000</h5>
                    <p>Minimum Investment</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="container-fluid bg-grey border-top border-bottom">
        <div class="container mt-5">
          <div class="row pb-5">
            <div class="col-12 col-sm-6">
              <img class="w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/graphs/graph-1.png" />
            </div>
            <div class="col-12 col-sm-6 text-right">
              <h2>
                Delivering Federal Tax Free Income and Appreciation
              </h2>
              <p>
                Choose to collect your income to live more comfortably today or automatically reinvest your distributions to increase your <a href="/tax-advantage">tax free</a> investment.
              </p>
              <a href="#pills-signup" data-toggle="modal" data-target="#modal-login" class="button-custom mb-4">
                Create An Account
              </a>
            </div>
          </div>
        </div>
      </section> <!-- /container -->

      <section class="container">
        <h1 class="text-center my-5">
          Key Benefits
        </h1>
        <div class="row mb-5">
          <div class="col-12 col-sm-6">
            <h2>
              Zero Capital Gain Taxes
            </h2>
            <p>
              Invest capital gains and receive tax-free compounding &amp; defer and reduce current federal capital gain taxes. <a href="/tax-advantage">Understanding Opportunity Fund tax benefits.</a>
            </p>
          </div>
          <div class="col-12 col-sm-6 text-center">
            <img class="w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/graphs/no-tax.png"/>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-12 col-sm-6 order-2 order-sm-1 text-center">
            <img class="w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/graphs/volatility.png"/>
          </div>
          <div class="col-12 col-sm-6 order-1 order-sm-2">
            <h2>
              Reduce Portfolio Risk
            </h2>
            <p>
              Temper your portfolio's overall volatility with real estate's low correlation to stocks and bonds. <a href="/why-real-estate">Learn why top investors choose real estate</a>
            </p>
          </div>
        </div>
        <div class="row mb-5 pb-5">
          <div class="col-12 col-sm-6">
            <h2>
              Invest in High Growth Markets
            </h2>
            <p>
              We invest in fast-growing U.S. markets including: Atlanta, Austin, Charlotte, Dallas, Denver, Houston, Nashville, Orlando, Phoenix and Raleigh. 
            </p>
          </div>
          <div class="col-12 col-sm-6 mb-5">
            <img class="w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/graphs/target.png"/>
          </div>
        </div>
      </section>

      <section class="container-fluid border-top gradient-gtw pb-5">
        <div class="container text-center">
          <img class="d-block m-auto mockup-mac" src="<?php bloginfo('template_directory'); ?>/assets/img/mockup/invest-macbook.png"/>
          <h1 class="mt-5 mb-4">
            Create an American Group Account
          </h1>
          <h2 class="mb-4">
            To Review Fund Documents &amp; Invest When You're Ready
          </h2>
          <a href="#pills-signup" data-toggle="modal" data-target="#modal-login" class="button-custom mb-4">
            Create An Account
          </a>
          <p class="mt-4">
            Already have an account? <a href="#pills-signin" data-toggle="modal" data-target="#modal-login">Sign In</a>
          </p>
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
              <h4 class="">
                Need help getting started?
              </h4>
              <p>              
                We are happy assist you.
              </p>
            </div>
            <div class="col-12 col-md-4 text-center text-md-left d-flex align-items-middle">
              <a href="mailto:invest@americangroupcre.com"class="button-custom help-button">invest@americangroupcre.com</a>
            </div>
          </div>
        </div>
      </section> <!-- /container -->
    </main>

<?php
get_footer();
