<?php
/*

  Template Name: Landing
  
 */

get_header('landing');
?>

<main role="main">
    
      <!-- Header -->

      <header class=" header-p-landing header-landing color-white d-flex align-items-center justify-content-center">
        <div class="container text-center">
          <h1 class="mb-3">
            AAAmerican Opportunity Fund
          </h1>
          <p class="mb-5 color-white">
            Invest in Real Estate and pay as little as $0 in Capital Gains Tax
          </p>
          <!-- AC Form -->
          <?php get_template_part('ac', 'form'); ?>   
          <div class="scroll-down"></div>
        </div>
        <svg class="svg-diagonal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
          <polygon fill="#d1e3ee" points="0,100 100,0 100,100" />
        </svg>
      </header>

      <!-- Video  -->

      <section class="container-fluid py-5">
        <div class="container text-center home-video-container">
          <iframe id="video-iframe" src="https://www.youtube.com/embed/gnoU7EppUAI?rel=0&modestbranding=1&autohide=1&fs=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>   
      </section><!-- /container --> 

      <section class="container-fluid pb-4 mb-5  section-quote ">
        <div class="container text-center">
          <h3>
            "People...do not understand how gigantic [Opportunity Zone Funds are],
            this is the biggest [tax benefit] that anyone has ever seen in their lifetime.”
          </h3>
          <p>
            -Manny Friedman, CEO <a target="_blank" href="https://www.cnn.com/2019/06/14/economy/opportunity-zones-investing-los-angeles/index.html">Link to Article</a>
          </p>
          <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo/CNN-Business-01.svg" style="width:100px;"/>
        </div>  
      </section><!-- /container --> 

      <section class="container-fluid px-0 mt-5">
        <div class="w-100 sticky-top landing-sticky-header bg-blue">
          <div class="container">
            <h3>1 &nbsp;&nbsp;&nbsp; Fund Strategy</h3>
          </div>
        </div>
        <div class="container mt-5">
        <h3>Business Plan</h3>
        <p>
          AAAmerican Opportunity Fund intends to acquire, develop and improve a portfolio of real estate properties while benefiting from the preferential tax treatment of the Opportunity Zone Program.
        </p>
        <p>
          The AAAmerican Opportunity Fund seeks to acquire high-quality real estate properties located in designated Opportunity Zones that have strong long-term growth potential. The Fund will meet the requirements necessary to qualify as an Opportunity Fund as defined in the Tax Cuts and Jobs Act of 2017 in order to avail investors of the substantial tax-related benefits provided under the bill.
        </p>
        <p>
          The Fund anticipates an investment term of no less than 10 years in order to capture the full tax benefits offered under the tax code for Opportunity Funds.
        </p>
        <div class="">
          <h5>10+ years</h5>
          <p>Minimum Hold Period</p>
          <h5>IDEAL&trade; Property</h5>
          <p>Investment Type</p>
          <h5>Income Property, Multifamily</h5>
          <p>Primary Asset Type</p>
        </div>
        <div class="">
          <h5>Development &amp; Value-Add Existing</h5>
          <p>Investment Profile</p>
          <h5>$100,000</h5>
          <p class="mb-0 pb-5">Minimum Investment</p>
        </div>
        </div>      
      </section>

      <section class="container-fluid px-0">
        <div class="w-100 sticky-top landing-sticky-header bg-blue">
          <div class="container">
            <h3>1 &nbsp;&nbsp;&nbsp; Introduction</h3>
          </div>
        </div>
        <div class="container mt-5">
          <div class="row mt-5">
            <div class="col-md-8 pb-5">
              <h2 class="pb-2">What is an Opportunity Fund?</h2>
              <p class="pb-2">
                Opportunity Funds are a new investment that receives preferencial tax treatment. Created by the Tax Cuts and Jobs Act of 2017, they incentivize investment in targeted census tracts called Opportunity Zones.
              </p>
              <div class="separator-gradient mt-4"></div>
              <h2 class="pb-2">What Are Opportunity Zones?</h2>
              <p class="pb-2">
                Opportunity Zones are communities designated by state and federal governments, targeted regions where officials seek to spur economic development.
              </p>
              <div class="separator-gradient mt-4"></div>
              <h2 class="pb-2">Why Invest in Opportunity Funds?</h2>
              <p class="pb-2">
                Opportunity Funds allow investors to (1) pay zero federal taxes on profits from an Opportunity Fund if held for 10 years and (2) defer federal taxes on any current capital gain taxes until 2027 while reducing that tax payment by 15%.
              </p>
            </div>
            <div class="d-none d-md-block col-md-4 text-center">
              <img class="w-75" src="<?php bloginfo('template_directory'); ?>/assets/img/general/aerial.jpg" />
            </div>
            <img class="mt-5 d-block d-md-none w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/general/aerialhoriz.jpg" />
          </div>
        </div>      
      </section>

      <section class="container-fluid px-0">
        <div class="w-100 sticky-top landing-sticky-header bg-blue">
          <div class="container">
            <h3>2 &nbsp;&nbsp;&nbsp; How Does it Work?</h3>
          </div>
        </div>
        <div class="container">
          <h4 style="color: #73787F;" class="mt-5 pt-4 pb-5">
            An investor with a captial gain from any sale (such as stocks, real estate, cars, jewelry, artwork, etc.) receives the following tax benefits if they invest that gain into an Opportunity Fund <span style="font-weight: 700; color: #33302E">within 180 days:</span>
          </h4>
          <div class="pb-5">
            <h4><span class="color-blue" style="font-weight:700">1. Elimination</span> - No federal taxes on profits from an opportunity fund when held 10+ years</h4>
            <h4><span class="color-red" style="font-weight:700">2. Deferment and Reduction</span> of original capital gain taxes: Not due until 2027 with a 15% reduction</h4>
          </div>
          <section class="container-fluid border-top--light mt-5 section-advantage">
            <div class="container position-relative ">
              <div class="position-absolute test-absolute font-source color-white bg-blue align-middle">
                <h3 class="">Benefit 1</h3>
              </div>
              <div class="advantage-text">
                <h1 class="pb-2 pb-sm-3">Elimination</h1>
                <p class="color-dark">
                  <span style="font-weight: 700">
                  If an opportunity fund investment is held for at least 10 years, there is no federal capital gains tax due on any profits from it's sale.
                  </span>
                </p>
                <p>
                This is by far the biggest benefit of the opportunity zones program, and the #1 reason why Treasury Secretary Steven Mnuchin expects more than $100 billion in investments to flow to opportunity zones as a result of this program. (This ~$100 billion will push up the value of early QOZ investments.)
                </p>  
              </dv>
            </div>
          </section>

          <section class="container-fluid border-top--light section-advantage">
            <div class="container position-relative ">
              <div class="position-absolute test-absolute font-source color-white bg-red align-middle">
                <h3 class="">Benefit 2</h3>
              </div>
              <div class="advantage-text">
                <h1 class="pb-2 pb-sm-3">Deferral &amp; Reduction</h1>
                <p class="color-dark">
                  <span style="font-weight: 700">
                    Any capital gain invested into an opportunity fund within 180 days of realization will be tax deferred. This current capital gain tax obligation is reduced 15% when paid in 2027 (with inflated dollars).
                  </span>
                </p>
                <p>
                  An investor with capital gains from any source, such as the sale of stock, real estate, jewelry, artwork, etc. is not required to pay taxes on that gain until 2027 if it is placed into an Opportunity Fund. When paid in 2027, this original capital gain tax is reduced 15% and paid in inflated dollars.
                </p>  
              </dv>
            </div>
          </section>
        </div>       
      </section>

      <section class="container-fluid px-0">
        <div class="w-100 sticky-top landing-sticky-header bg-blue">
          <div class="container">
            <h3>3 &nbsp;&nbsp;&nbsp; Example</h3>
          </div>
        </div>
        <div class="container mt-5">
          <p class="pb-5">
            If a long term sale results in $1,000,000 profit and $238,000 federal capital gain taxes (23.8%), invest all of the $1,000,000 gain into an Opportunity Fund. Assuming an annual return rate of 9% simple, the post-tax value of the investment after 10 years is $1,900,000. The investor pays <span class="color-blue"><strong>zero federal taxes</strong></span> on this gain. The only tax liability is $202,300, <span class="color-red"><strong>deferred until 2027 and a 15% reduced amount,</strong></span> from what would have currently been paid. As a result, post-tax earnings are more than <strong>double</strong> had they invested elsewhere.
          </p>
          <div class="container text-center" id="compare">
        <h1 class="py-4 mt-5">
          After-Tax Net Profit Comparison
        </h1>
        <p class="pb-4">
          See for yourself how much money you could gain by investing in AAAmerican Opportunity Fund versus a traditionally taxed investment.
        </p>

        <?php

          wp_register_script('calc-script', get_template_directory_uri() . '/js/calculator.js', '', '', true ); 
          wp_enqueue_script('calc-script');

        ?>

        <div class="row justify-content-center mb-5">
          <div class="col-8">

            <h5 class="mb-4 text-left">
              Input Capital Gains:
            </h5>

            <form class="pb-4 mb-4 text-left" id="" onsubmit="return updateCalc();">
              <input 
                class="border-radius font-source"
                type="text"
                id="initialGain"
                placeholder="1,000,000"
                value=""
              />
              <input
              class="button-custom"
              type="submit"
              value="Calculate" />
            </form>

            <h5 class="mb-4 text-left">
              Select Type:
            </h5>

            <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-short-tab" data-toggle="pill" href="#pills-short" role="tab" aria-controls="pills-short" aria-selected="true">
                  Short Term gains
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-long-tab" data-toggle="pill" href="#pills-long" role="tab" aria-controls="pills-long" aria-selected="false">
                  Long Term Gains
                </a>
              </li>
            </ul>
          </div>
        </div>

        <hr class="mb-5" />

        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-short" role="tabpanel" aria-labelledby="pills-short-tab">
            <?php get_template_part('section', 'calcShort'); ?>
          </div>
          <div class="tab-pane fade" id="pills-long" role="tabpanel" aria-labelledby="pills-long-tab">
            <?php get_template_part('section', 'calcLong'); ?>
          </div>
        </div>
        <script>
          let input = document.getElementById('initialGain');
            input.addEventListener('keyup', function(){
              let n = parseInt(this.value.replace(/\D/g,''),10);
              if( n > 3 ) { input.value = n.toLocaleString(); }
          }, false);
        </script>
      </div>
      </section>

      <!-- Download -->

      <?php get_template_part('section', 'download'); ?>


                

      

 

      <section class="container text-center">
        <h1 class="text-center pt-5 mb-5">
          About the Sponsor
        </h1>
        <div class="sponsor-bullets">
          <div class="row">
            <div class="col-1">
                <img class="w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/icons/gold-badge.jpg" />
            </div>
            <div class="col-11 text-left">
                <h5>
                  Founded in 1971, American Group's experienced team of over 100 professionals manages ten real estate investment funds and a REIT.
                </h5>
            </div>
          </div>
          <div class="row">
            <div class="col-1">
                <img class="w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/icons/gold-badge.jpg" />
            </div>
            <div class="col-11 text-left">
                <h5>
                  American Group invested in, manages, and owns over $1 billion in real estate nationwide with over $63 million from investors.
                </h5>
            </div>
          </div>
          <div class="row">
            <div class="col-1">
                <img class="w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/icons/gold-badge.jpg" />
            </div>
            <div class="col-11 text-left">
                <h5>
                  The American Group has returned an average 567% of money invested in real estate to our investors.
                </h5>
            </div>
          </div>
        </div>
        <hr/>
        <h2 class="my-5">
          Real Estate Track Record
        </h2>
        <div class="row font-georgia color-red sponsor-stats text-center ">
            <div class="col-12 col-sm-3">
              <h1>$1B</h1>
              <p>Total value<br/>of real estate</p>
            </div>
            <div class="col-12 col-sm-3">
              <h1>6000+</h1>
              <p>investors in partnership</p>
            </div>
            <div class="col-12 col-sm-3">
              <h1>50+</h1>
              <p>Real estate investments</p>
            </div>
            <div class="col-12 col-sm-3">
              <h1>567%</h1>
              <p>Average return<br/>to investors</p>
            </div>
          </div>
      </section>

      
    </main>

<?php
get_footer('landing');
