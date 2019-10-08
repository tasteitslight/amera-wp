<?php
/*

  Template Name: Tax Advantage
 */

get_header();
?>

<main role="main">
    
      <!-- Header -->

      <header class="header-primary header-taxadvantage d-flex align-items-center justify-content-center">
        <div class="container text-center">
          <h1>
            Tax Advantages of Opportunity Funds
          </h1>
          <p>
           A deep dive into how Opportunity Funds reduce taxes
          </p>
        </div>
        <svg class="svg-diagonal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
          <polygon fill="white" points="0,100 100,0 100,100" />
        </svg>
      </header>

      <!-- Intro  -->

      <section class="container pb-5 mb-5">
        <div class="row">
          <div class="col-md-8">
            <h3 class="py-5">To encourage capital deployment in Opportunity Zones, two main tax advantages 
              were created:
            </h3>
            <p><span class="color-blue" style="font-weight:700">1. Elimination</span> - No taxes owed on profits from an opportunity fund when held 10+ years</p>
            <p><span class="color-red" style="font-weight:700">2. Deferment and Reduction</span> of original (non opportunity fund) capital gain taxes: Not due until 2027 with a 15% reduction</p>
          </div>
        </div>
      </section> <!-- /container -->

      <section class="container-fluid bg-grey border-top section-advantage">
        <div class="container position-relative ">
          <div class="position-absolute test-absolute font-source color-white bg-blue align-middle">
            <h3 class="">Advantage 1</h3>
          </div>
          <div class="advantage-text">
            <h1 class="pb-2 pb-sm-3">Elimination</h1>
            <p class="color-dark">
              <span style="font-weight: 700">
              So long as an opportunity fund investment is held for at least 10 years, there is 
              zero capital gain taxes due on any profits from it's sale.
              </span>
            </p>
            <p>
            This is by far the biggest benefit of the opportunity zones program, and the #1 reason why 
            Treasury Secretary Steven Mnuchin expects <a href="https://thehill.com/hilltv/rising/408980-mnuchin-predicts-100b-in-cap-investment-from-new-opportunity-zones">more than $100 billion in investments</a> to flow 
            to opportunity zones as a result of this program.
            </p>  
          </dv>
        </div>
      </section>

      <section class="container-fluid border-top section-advantage">
        <div class="container position-relative ">
          <div class="position-absolute test-absolute font-source color-white bg-red align-middle">
            <h3 class="">Advantage 2</h3>
          </div>
          <div class="advantage-text">
            <h1 class="pb-2 pb-sm-3">Deferral &amp; Reduction</h1>
            <p class="color-dark">
              <span style="font-weight: 700">
                Any capital gain rolled into an opportunity fund within 180 days will be tax deferred until 2027.
                This capital gain tax payment is reduced 15% when paid.
              </span>
            </p>
            <p>
              An investor with capital gains from any source, such as the sale of stock, real estate, artwork, etc. is not
              required to pay taxes on that gain until 2027 if it is placed into an Opportunity Fund. When paid in 2027,
              this original capital gain tax is reduced 15%. <a href="/opportunity-fund#example">Click here for an example.</a>
            </p>  
          </dv>
        </div>
      </section>

      <section class="container-fluid gradient-gtw border-top text-center py-5">
        <h1 class="pb-5">Timeline</h1>
        <div class="row d-flex justify-content-center">
          <div class="col-12 col-sm-4 col-md-3 text-right order-1 order-sm-0 pt-4 pt-sm-0 text-center text-sm-right">
            <p>
              <strong>Year 0</strong>
            </p>
          </div>
          <div class="col-sm-2 col-lg-1 order-0 order-sm-1">
            <img style="width:90%" src="<?php bloginfo('template_directory'); ?>/assets/img/svg/calendar.svg" />
          </div>
          <div class="col-sm-4 col-md-3 text-left order-2">
            <p>
              <span class="color-dark"><strong>2019</strong></span> - Investor sells an asset, places entire gain
               into an opportunity fund and <span class="color-red"><strong>DEFERS</strong></span> payment of 
              capital gain tax
            </p>
          </div>
        </div>
        <div class="row d-flex justify-content-center">
          <div class="test-line"></div>
        </div>
        <div class="row d-flex justify-content-center">
          <div class="col-12 col-sm-4 col-md-3 text-right order-1 order-sm-0 pt-4 pt-sm-0 text-center text-sm-right">
            <p>
                <strong>Year 8</strong>
            </p>
          </div>
          <div class="col-sm-2 col-lg-1 order-0 order-sm-1">
            <img style="width:90%" src="<?php bloginfo('template_directory'); ?>/assets/img/svg/reduce.svg" />
          </div>
          <div class="col-sm-4 col-md-3 text-left order-2">
            <p>
              <span class="color-dark"><strong>2027</strong></span> - Deferred tax on original gain is paid April 2027
              and payment is <span class="color-red"><strong>REDUCED</strong></span> by 15%.
            </p>
          </div>
        </div>
        <div class="row d-flex justify-content-center">
          <div class="test-line"></div>
        </div>
        <div class="row d-flex justify-content-center">
          <div class="col-12 col-sm-4 col-md-3 text-right order-1 order-sm-0 pt-4 pt-sm-0 text-center text-sm-right">
            <p>
                <strong>Year 10+</strong>
            </p>
          </div>
          <div class="col-sm-2 col-lg-1 order-0 order-sm-1">
            <img style="width:90%" src="<?php bloginfo('template_directory'); ?>/assets/img/svg/moneybuilding.svg" />
          </div>
          <div class="col-sm-4 col-md-3 text-left order-2">
            <p>
              <span class="color-dark"><strong>2029+</strong></span> - Sale of opportunity fund,
               <span class="color-blue"><strong>ZERO Federal Tax Due</strong></span>
            </p>
          </div>
        </div>
      </section>

      <section class="container text-center" id="compare">
        <hr/>
        <h1 class="py-4 mt-5">
          After Tax Net Profit Comparison
        </h1>
        <p class="pb-4">
          See for yourself how much money you could gain investing in AAAmerican Opportunity Fund 
          versus a traditionally taxed investment.
        </p>
        <?php get_template_part('sec', 'calcChart'); ?>
      </section>

      <!-- View Investments Section -->

      <?php get_template_part('section', 'viewInvestments'); ?>

      <!-- More About Opportunity Zones Section -->

      <section class="container-fluid bg-white border-top text-center">
          <div class="container my-5">
              <h3>Learn More About Opportunity Funds</h3>
              <div class="row my-5">
                <div class="col-sm-7 pb-4 pb-sm-0 hover-rise">
                  <div class="left-bar-red"></div>
                  <a class="img-link" href="/tax-advantage">
                    <img class="img-link--img" src="<?php bloginfo('template_directory'); ?>/assets/img/hero/opportunityfund.jpg"/>
                    <div class="img-link--gradient-dark d-flex justify-content-center">
                      <div class="my-auto">
                        Opportunity Fund Basics
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-sm-5 hover-rise">
                  <div class="left-bar-red"></div>
                  <a class="img-link" href="/rules">
                    <img class="img-link--img" src="<?php bloginfo('template_directory'); ?>/assets/img/hero/rules.jpg"/>
                    <div class="img-link--gradient-dark d-flex justify-content-center">
                      <div class="my-auto">
                        Rules &amp; Regulations
                      </div>
                    </div>
                  </a>
                </div>
              </div>
          </div>
        </section>

      <!-- Download Section -->

      <?php get_template_part('section','download'); ?>

      <!-- Create Account Section -->

      <?php get_template_part('section', 'createAccount'); ?>

      <!-- Need Help Section -->

      <?php get_template_part('section', 'help'); ?>

    </main>


<?php
get_footer();
