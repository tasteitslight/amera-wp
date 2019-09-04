<?php
/*

  Template Name: Why Real Estate
 */

get_header();
?>

<main role="main">
    
      <!-- Header -->

      <header class="header-primary header-whyrealestate d-flex align-items-center justify-content-center">
        <div class="container text-center">
          <h1>Why Invest in Real Estate?</h1>
          <p class="text-center">
              Real Estate is a distinct asset class that can enhance the risk &amp; return of your portfolio.
            </p>
        </div>
        <svg class="svg-diagonal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
          <polygon fill="white" points="0,100 100,0 100,100" />
        </svg>
      </header>

      <!-- Historical Performance  -->

      <section class="container-fluid pb-5">
        <div class="container">
          <h3 class="text-center pt-5 pb-3">Historical Performance</h3>
          <p class="text-center pb-4">
            Real estate investments can offer several advantages over other types of investments, including potentially higher returns, stability, inflation hedging, and diversification. The following figures show why real estate is a valuable contribution to any well-balanced portfolio.
          </p>
          <hr class="pb-5" />
          <div class="row">
            <div class="col-12 col-sm-6">
              <h1>Over 145 Years</h1>
              <p>
                Real Estate outperforms stocks &amp; bonds with 53% less risk than stocks.
              </p>
            </div>
            <div class="col-12 col-sm-6 pt-3 pt-sm-0 text-left text-sm-right">
              <img class="w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/graphs/145years.png"/>
            </div>
          </div>
        </div>
      </section> <!-- /container -->

      <!-- Historical Performance  -->

      <section class="container-fluid border-top bg-grey">
        <div class="container py-5">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h1>Over 20 Years</h1>
              <p>
                Real Estate beat S&amp;P 500 by 255%
              </p>
            </div>
            <div class="col-12 col-sm-6 pt-3 pt-sm-0 text-left text-sm-right">
              <img class="w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/graphs/20years.png"/>
            </div>
          </div>
        </div>
      </section> <!-- /container -->

      <!-- Historical Performance  -->

      <section class="container-fluid border-top">
        <div class="container py-5">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h1>First Quarter 2019</h1>
              <p>
                Real Estate emerges as major player in stock market's best recent period.
              </p>
            </div>
            <div class="col-12 col-sm-6 pt-3 pt-sm-0 text-left text-sm-right">
              <img class="w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/graphs/2019q1.png" />
            </div>
          </div>
        </div>
      </section> <!-- /container -->

      <!-- Historical Performance  -->

      <section class="container-fluid border-top border-bottom bg-grey">
        <div class="container py-5">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h1>This May Be A Time To Realize Cap Gains</h1>
              <p>
                Earnings per share (EPS) and stock valuations are moving in opposite directions.
              </p>
            </div>
            <div class="col-12 col-sm-6 pt-3 pt-sm-0 text-left text-sm-right">
              <img class="w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/graphs/realizecapgains.png"/>
            </div>
          </div>
        </div>
      </section> <!-- /container -->

      <!--  Invest Section  -->

      <section class="container-fluid bg-white py-5 border-top border-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-6 mb-3">
              <h1 class="">Invest with Us</h1>
              <p>
                Register for an Placeholder account to access and review all fund documents. Already have an account?
                <br/><a href="#">Click here to sign in.</a>
              </p>
              <button class="button-custom button-custom-1">Register</button>
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
