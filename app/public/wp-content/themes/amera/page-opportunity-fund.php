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
            Learn why Opportunity Funds are the most exciting investment to develop in recent history.
          </p>
          <a href="/investments" class="button-custom mt-2">View Investments</a>
          <a href="#" class="button-custom mt-2">Schedule A Call</a>
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
              Opportunity Funds are a new investment that receives preferencial tax treatment. Created by the Tax Cuts and Jobs Act of 2017, they incentivize investment in targeted communities called Opportunity Zones.
            </p>
            <h2 class="pb-2">What Are Opportunity Zones?</h2>
            <p class="pb-2">
              Opportunity Zones are census tracts designated by state and federal governments, targeted regions where officials seek to spur economic development.
            </p>
            <h2 class="pb-2">Why Invest in Opportunity Funds?</h2>
            <p class="pb-2">
              Opportunity Funds allow investors to (1) pay zero federal taxes on profits from an Opportunity Fund if held for 10 years and (2) defer federal taxes on any current capital gain taxes until 2027 while reducing that tax payment by 15%.
            </p>
          </div>
          <div class="d-none d-md-block col-md-5 text-center">
            <img class="w-75" src="<?php bloginfo('template_directory'); ?>/assets/img/aerial.png" />
          </div>
        </div>
        <hr/>
      </section> <!-- /container -->

      <!-- Section Q&A  -->

      <section class="container-fluid gradient-wtg border-bottom pb-5 mb-5">
        <div class="container">
          <img class="mt-5 d-block d-md-none w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/aerialhoriz.jpg" />
          <h2 class="mt-5">
            How Does it Work?
          </h2>
          <h4 style="color: #73787F;"class="pt-4 pb-5">
              An investor with a captial gain from any sale (such as stocks, real estate, cars, artwork, etc.) 
              receives the following tax benefits if they place that gain into an Opportunity Fund <span style="font-weight: 700; color: #33302E">within 180 days:</span>
          </h4>
              <div class="card my-4">
                <h5 class="card-header card-header-one bg-blue">Invest Capital Gains &amp; Receive <span style="font-weight:700">TAX-FREE</span> Compounding</h5>
                <div class="card-body">
                  <h5 class="card-title">When Investors place capital gains into an Opportunity Fund, those gains appreciate
                    federal tax-free with <strong>zero federal tax</strong> due after 10 years.
                  </h5>
                </div>
              </div>
              <div class="card my-4">
                <h5 class="card-header card-header-two bg-red"><span style="font-weight:700">Defer &amp; Reduce</span> Current Federal Capital Gain Taxes</h5>
                <div class="card-body">
                  <h5 class="card-title">Capital gains from the previous investment placed into an Opportunity Fund are allowed to defer
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
            When a great stock rises to $2,000 per share, John sells. 
            The sale results in $1,000,000 profit and $238,000 federal capital gain taxes (23.8%).
            Instead of paying the $238,000, John invests all of his $1,000,000 
            gain into an Opportunity Fund. Assuming an annual return rate of over 8%, the post-tax value of 
            his investment after 10 years is $2,000,000. John pays <span class="color-blue"><strong>zero federal taxes</strong></span> 
            on this gain. John's only tax liability is $202,300, <span class="color-red"><strong>deferred until 2027 and reduced,</strong></span> only 85% of the standard tax of $238,000 mentioned above. 
            As a result, John’s post-tax earnings are more than double had he had invested elsewhere.
        </p>
        <hr class="pb-4"/>
        <h3 class="pb-5">Schedule of Example</h3>
        <div class="container calc__container mb-5">
          <div class="calc__table">
            <div class="row calc__row--sticky">
              <div class="col-12 col-md-6 calc__col--empty">
              </div>
              <div class="col-6 col-md-3 calc__col calc__col--taxable bg-red">
                Taxable Investment<br/>(Stocks, Bonds, etc)
              </div>
              <div class="col-6 col-md-3 calc__col calc__col--aaa bg-blue">
                AAAmerican<br/>Opportunity Fund
              </div>
            </div> <!--End Row-->
  
            <div class="row calc__row">
              <div class="col-12 col-md-6 calc__col calc__col--title">
                Capital Gain
              </div>
              <div class="col-6 col-md-3 calc__col calc__col--red">
                $1,000,000
              </div>
              <div class="col-6 col-md-3 calc__col calc__col--blue">
                $1,000,000
              </div>
            </div> <!--End Row-->
            
            <div class="row calc__row">
              <div class="col-12 col-md-6 calc__col calc__col--title">
                Top Federal Tax Paid on Original Gain - 23.8%
              </div>
              <div class="col-6 col-md-3 calc__col calc__col--red">
                (238,000)
              </div>
              <div class="col-6 col-md-3 calc__col calc__col--blue">
                -
              </div>
            </div> <!--End Row-->
                      
            <div class="row calc__row">
              <div class="col-12 col-md-6 calc__col calc__col--title calc__row--bgGreytopBorder">
                Capital Available for a "New Investment" in 2019
              </div>
              <div class="col-6 col-md-3 calc__col calc__col--red calc__row--bgGreytopBorder">
                $762,000
              </div>
              <div class="col-6 col-md-3 calc__col calc__col--blue calc__row--bgGreytopBorder">
                $1,000,000
              </div>
            </div> <!--End Row-->
  
            <div class="row">
              <div class="col-12 col-md-6 calc__col calc__col--title calc__col--spacer">
                 
              </div>
              <div class="col-6 col-md-3 calc__col calc__col--red calc__col--spacer">
                 
              </div>
              <div class="col-6 col-md-3 calc__col calc__col--blue calc__col--spacer">
                 
              </div>
            </div>
                      
            <div class="row calc__row">
              <div class="col-12 col-md-6 calc__col calc__col--title">
                Value of New Investment after 10 years<br/>
              </div>
              <div class="col-6 col-md-3 calc__col calc__col--red">
                $1,524,000
              </div>
              <div class="col-6 col-md-3 calc__col calc__col--blue">
                $2,000,000
              </div>
            </div> <!--End Row-->
                      
            <div class="row calc__row">
              <div class="col-12 col-md-6 calc__col calc__col--title">
                Top Federal Tax on 85% of Original Gain due 2027
              </div>
              <div class="col-6 col-md-3 calc__col calc__col--red">
                -
              </div>
              <div class="col-6 col-md-3 calc__col calc__col--blue">
                (202,300) 
              </div>
            </div> <!--End Row-->
                      
            <div class="row calc__row">
              <div class="col-12 col-md-6 calc__col calc__col--title">
                Top Federal Tax on Disposition of New Investment in 2029<br/>
              </div>
              <div class="col-6 col-md-3 calc__col calc__col--red">
                (181,356)
              </div>
              <div class="col-6 col-md-3 calc__col calc__col--blue">
                -
              </div>
            </div> <!--End Row-->
                      
            <div class="row calc__row">
              <div class="col-12 col-md-6 calc__col calc__col--title calc__row--bgGreyBlueBorder">
                After Tax Proceeds
              </div>
              <div class="col-6 col-md-3 calc__col calc__col--red calc__row--bgGreyBlueBorder">
                $1,342,644
              </div>
              <div class="col-6 col-md-3 calc__col calc__col--blue calc__row--bgGreyBlueBorder">
                $1,797,700
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
            See for yourself how much money you could save investing in AAAmerican Opportunity Fund
              versus a traditionally taxed investment.
          </p>
          <a href="/tax-advantage#compare" class="button-custom mb-5 w-75">View My Savings</a>
        </div>
      </section> <!-- /container -->

      <!-- More About Opportunity Zones Section -->

      <section class="container-fluid bg-white border-top text-center">
          <div class="container my-5">
              <h3>Learn More About Opportunity Funds</h3>
              <div class="row my-5">
                <div class="col-sm-7 pb-4 pb-sm-0">
                  <a class="img-link" href="/tax-advantage">
                    <img class="img-link--img" src="<?php bloginfo('template_directory'); ?>/assets/img/hero/taxadvantage.jpg"/>
                    <div class="img-link--gradient-dark d-flex justify-content-center">
                      <div class="my-auto">
                        Tax Advantages of Opportunity Funds
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-sm-5">
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

        <!-- Invest -->
           
      <section class="container-fluid border-top bg-white">
        <div class="container py-5 mt-5">
          <div class="row">
            <div class="col-md-6 mb-3">
              <h1 class="">View Investments</h1>
              <p>
                Register for an American Group account to access and review all fund documents. Already have an account?
                <br/><a href="#pills-signin" data-toggle="modal" data-target="#modal-login">Click here to Sign In</a>
              </p>
              <a class="button-custom button-custom-1" href="/investments">View Offerings</a>
            </div>
            <div class="col-md-6">
              <img class="w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/invest.png"/>
            </div>
          </div>
        </div> 
      </section> <!-- /container -->

      <section class="container text-center py-5 mb-5">
        <hr class="pb-5" />
        <div class="row mb-5">
          <div class="col-12 col-sm-8 order-2 order-sm-1 text-right">
            <h3>Opportunity Zone Investor Handbook</h3>
            <p>
              Get an overview of the Opportunity Zone Program and how to invest in an 
              Opportunity Fund with this guide.
            </p>
            <a href="#" class="button-custom mb-4">Download</a>
          </div>
          <div class="col-12 col-sm-4 order-1 order-sm-2 mb-3 mb-sm-0">
            <a class="handbook--link" href="#">
              <img class="handbook--img" src="<?php bloginfo('template_directory'); ?>/assets/img/hero/offering.jpg"/>
            </a>
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
          <a href="#pills-signup" data-toggle="modal" data-target="#modal-login" class="button-custom" >
            Create An Account
          </a>
          <p class="mt-5">
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
              <h4 >
                Need help getting started?
              </h4>
              <p>              
                We are happy assist you.
              </p>
            </div>
            <div class="col-12 col-md-4 text-center text-md-left">
              <button class="button-custom help-button">invest@americangroupcre.com</button>
            </div>
          </div>
        </div>
      </section> <!-- /container -->

    
    </main>

<?php
get_footer();
