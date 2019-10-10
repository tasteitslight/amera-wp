<?php
/*

  Template Name: Opportunity Fund
  
 */

get_header();
?>

<main role="main">
    
      <!-- Header -->

      <header class=" header-primary header-opportunityfund d-flex align-items-center justify-content-center">
        <div class="container text-center">
          <h1 class="mb-3">
            Opportunity Fund Intro
          </h1>
          <p class="mb-4">
            Learn why Opportunity Funds are the most exciting investment<br class="pof-br1"/> to develop in recent history.
          </p>
          <div class="row">
            <div class="col-12 mb-3 m-sm-0 col-sm-6 text-center text-sm-right">
              <a href="/investments" class="button-custom mt-2">View Investments</a>
            </div>
            <div class="col-12 col-sm-6 text-center text-sm-left">
              <!-- Calendly link widget begin -->
              <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
              <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>
              <a class="button-custom mt-2" href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/will-american-group/discovery-call'});return false;">Schedule A Call</a>
              <!-- Calendly link widget end -->
            </div>
          </div>
        </div>
        <svg class="svg-diagonal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
          <polygon fill="white" points="0,100 100,0 100,100" />
        </svg>
      </header>

      <!-- What is an Opportunity Fund?  -->

      <section class="container">
        <div class="row my-5">
          <div class="col-md-7 lead-custom">
            <h2 class="pb-2">What is an Opportunity Fund?</h2>
            <p class="pb-2">
              Opportunity Funds are a new investment that receives preferencial tax treatment. Created by the Tax Cuts and Jobs Act of 2017, they incentivize investment in targeted census tracts called Opportunity Zones.
            </p>
            <h2 class="pb-2">What Are Opportunity Zones?</h2>
            <p class="pb-2">
              Opportunity Zones are communities designated by state and federal governments, targeted regions where officials seek to spur economic development.
            </p>
            <h2 class="pb-2">Why Invest in Opportunity Funds?</h2>
            <p class="pb-2">
              Opportunity Funds allow investors to (1) pay zero federal taxes on profits from an Opportunity Fund if held for 10 years and (2) defer federal taxes on any current capital gain taxes until 2027 while reducing that tax payment by 15%.
            </p>
          </div>
          <div class="d-none d-md-block col-md-5 text-center">
            <img class="w-75" src="<?php bloginfo('template_directory'); ?>/assets/img/general/aerial.jpg" />
          </div>
        </div>
        <hr/>
      </section> <!-- /container -->

      <!-- Section Q&A  -->

      <section class="container-fluid gradient-wtg border-bottom pb-5 mb-5">
        <div class="container">
          <img class="mt-5 d-block d-md-none w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/general/aerialhoriz.jpg" />
          <h2 class="mt-5">
            How Does it Work?
          </h2>
          <h4 style="color: #73787F;"class="pt-4 pb-5">
              An investor with a captial gain from any sale (such as stocks, real estate, cars, jewelry, artwork, etc.) 
              receives the following tax benefits if they invest that gain into an Opportunity Fund <span style="font-weight: 700; color: #33302E">within 180 days:</span>
          </h4>
              <div class="card my-4">
                <h5 class="card-header card-header-one bg-blue">Invest Capital Gains &amp; Receive <span style="font-weight:700">TAX-FREE</span> Returns</h5>
                <div class="card-body">
                  <h5 class="card-title">When Investors place capital gains into an Opportunity Fund, those gains appreciate
                    federal tax-free with <strong>zero federal tax</strong> due after 10 years.
                  </h5>
                </div>
              </div>
              <div class="card my-4">
                <h5 class="card-header card-header-two bg-red"><span style="font-weight:700">Defer &amp; Reduce</span> Current Federal Capital Gain Taxes</h5>
                <div class="card-body">
                  <h5 class="card-title">Capital gains from the prior 180 days placed into an Opportunity Fund are allowed to defer
                    federal tax payment until 2027 and reduce that payment by 15%.
                  </h5>
                </div>
              </div>
          
          
        </div>
        
      </section> <!-- /container -->

      <!-- Section Example -->

      <section id="example" class="container text-center pb-0 pt-5 mt-5">
        <h1 class="pb-5">Example</h1>
        <p class="pb-5">
            If a long term sale results in $1,000,000 profit and $238,000 federal capital gain taxes (23.8%), invest all of the $1,000,000 gain into an Opportunity Fund. Assuming an annual return rate of 9% simple, the post-tax value of the investment after 10 years is $1,900,000. The investor pays <span class="color-blue"><strong>zero federal taxes</strong></span> on this gain. The only tax liability is $202,300, <span class="color-red"><strong>deferred until 2027 and a 15% reduced amount,</strong></span> from what would have currently been paid. As a result, post-tax earnings are more than <strong>double</strong> had they invested elsewhere.
        </p>
        <hr class="pb-4"/>
        <div class="container calc__container mb-5">
          <div class="calc__table">
            <div class="row calc__row--sticky">
              <div class="col-12 col-md-6">
              </div>
              <div class="col-6 col-md-3 calc__col bg-red">
                Taxable Investment<br/>(Stocks, Bonds, etc)
              </div>
              <div class="col-6 col-md-3 calc__col bg-blue">
                AAAmerican<br/>Opportunity Fund
              </div>
            </div> <!--End Row-->
  
            <div class="row calc__row">
              <div class="col-12 col-md-6 calc__col">
                Capital Gain
              </div>
              <div class="col-6 col-md-3 calc__col ">
                $1,000,000
              </div>
              <div class="col-6 col-md-3 calc__col ">
                $1,000,000
              </div>
            </div> <!--End Row-->
            
            <div class="row calc__row">
              <div class="col-12 col-md-6 calc__col ">
                Top Federal Tax Paid on Original Gain - 23.8%
              </div>
              <div class="col-6 col-md-3 calc__col ">
                (238,000)
              </div>
              <div class="col-6 col-md-3 calc__col ">
                -
              </div>
            </div> <!--End Row-->
                      
            <div class="row calc__row bg-grey border-top">
              <div class="col-12 col-md-6 calc__col ">
                Capital Available for a "New Investment" in 2019
              </div>
              <div class="col-6 col-md-3 calc__col ">
                $762,000
              </div>
              <div class="col-6 col-md-3 calc__col ">
                $1,000,000
              </div>
            </div> <!--End Row-->
  
            <div class="row">
              <div class="col-12 col-md-6 calc__col calc__col--spacer">
                 
              </div>
              <div class="col-6 col-md-3 calc__col  calc__col--spacer">
                 
              </div>
              <div class="col-6 col-md-3 calc__col  calc__col--spacer">
                 
              </div>
            </div>
                      
            <div class="row calc__row">
              <div class="col-12 col-md-6 calc__col ">
                Value of New Investment after 10 years @ 9%<br/>
              </div>
              <div class="col-6 col-md-3 calc__col ">
                $1,447,800
              </div>
              <div class="col-6 col-md-3 calc__col ">
                $1,900,000
              </div>
            </div> <!--End Row-->
                      
            <div class="row calc__row">
              <div class="col-12 col-md-6 calc__col ">
                Top Federal Tax on 85% of Original Gain due 2027
              </div>
              <div class="col-6 col-md-3 calc__col ">
                -
              </div>
              <div class="col-6 col-md-3 calc__col ">
                (202,300) 
              </div>
            </div> <!--End Row-->
                      
            <div class="row calc__row">
              <div class="col-12 col-md-6 calc__col ">
                Top Federal Tax on Disposition of "New Investment" in 2029<br/>
              </div>
              <div class="col-6 col-md-3 calc__col ">
                (163,220)
              </div>
              <div class="col-6 col-md-3 calc__col ">
                -
              </div>
            </div> <!--End Row-->
                      
            <div class="row calc__row bg-grey border-top">
              <div class="col-12 col-md-6 calc__col  ">
                After Tax Proceeds
              </div>
              <div class="col-6 col-md-3 calc__col  ">
                $1,284,580
              </div>
              <div class="col-6 col-md-3 calc__col  ">
                $1,697,700
              </div>
            </div> <!--End Row-->

            <div class="row calc__row">
              <div class="col-12 col-md-6 calc__col  ">
                Less: Original Gain
              </div>
              <div class="col-6 col-md-3 calc__col  ">
                (1,000,000)
              </div>
              <div class="col-6 col-md-3 calc__col  ">
                (1,000,000)
              </div>
            </div> <!--End Row-->

            <div class="row calc__row bg-grey blueDashBorder final">
              <div class="col-12 col-md-6 calc__col">
                After-tax Profit
              </div>
              <div class="col-6 col-md-3 calc__col ">
                <strong>$284,580</strong>
              </div>
              <div class="col-6 col-md-3 calc__col ">
                <strong>$697,700</strong>
              </div>
            </div> <!--End Row-->
          </div>
        </div>
      </section> <!-- /container -->

      <!-- Section Example -->

      <section class="container-fluid border-top bg-grey py-5">
        <div class="container text-center pt-2">
          <h1>Compare Your After-Tax Potential Returns</h1>
          <p class="pb-3">
            See for yourself how much you could profit in AAAmerican Opportunity Fund versus a traditionally taxed investment.
          </p>
          <a href="/tax-advantage#compare" class="button-custom mb-5 w-75">View My Profits</a>
        </div>
      </section> <!-- /container -->

      <!-- More About Opportunity Zones Section -->

      <section class="container-fluid bg-white border-top text-center">
        <div class="container mt-5">
          <h3>Learn About Opportunity Funds</h3>
          <div class="row my-5">
            <div class="hover-rise col-sm-7 mb-4 mb-sm-0">
              <div class="left-bar-red"></div>
              <a class="img-link" href="/tax-advantage">
                <img class="img-link--img" src="<?php bloginfo('template_directory'); ?>/assets/img/hero/taxadvantage.jpg"/>
                <div class="img-link--gradient-dark d-flex justify-content-center">
                  <div class="my-auto">
                    Tax Advantages of Opportunity Funds
                  </div>
                </div>
              </a>
            </div>
            <div class="hover-rise col-sm-5">
              <div class="left-bar-red"></div>
              <a class="img-link" href="/rules">
                <img class="img-link--img" src="<?php bloginfo('template_directory'); ?>/assets/img/hero/rules.jpg"/>
                <div class="img-link--gradient-dark d-flex justify-content-center">
                  <div class="my-auto">
                    Rules & Regulations
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- Invest -->
      
      <?php get_template_part('section', 'viewInvestments'); ?>
      
      <!-- Download -->

      <?php get_template_part('section', 'download'); ?>

      <!-- Create Account Section -->

      <?php get_template_part('section', 'createAccount'); ?>

      <!-- Need Help Section -->

      <?php get_template_part('section', 'help'); ?>

      

    
    </main>

<?php
get_footer();
