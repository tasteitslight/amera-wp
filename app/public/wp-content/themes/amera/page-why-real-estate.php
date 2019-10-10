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
              Real Estate is a distinct asset class that can reduce the risk &amp; enhance the return of your portfolio.
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
                Real Estate outperforms stocks &amp; bonds<br/>with 53% less risk than stocks.
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
                Real Estate beat S&amp;P 500 by 2.5x
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
                Real Estate emerges as major player in stock market's most recent period.
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

      <!-- Learn Opportunity Funds Section -->
      
      <section class="container-fluid gradient-wtg text-center py-5">
        <?php get_template_part('section','learnMoreA'); ?>
      </section>

      <!-- View Investments Section -->

      <?php get_template_part('section', 'viewInvestments'); ?>

      <!-- Need Help Section -->

      <?php get_template_part('section', 'help'); ?>

    
    </main>

<?php
get_footer();
