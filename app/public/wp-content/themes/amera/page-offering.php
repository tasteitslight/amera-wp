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
          <div class="row">
            <div class="col-12 mb-3 m-sm-0 col-sm-6 text-center text-sm-right">
              <?php if (is_user_logged_in()) { ?>
                <a href="/offering-full" class="button-custom mt-2">Review Documents</a>
             <?php } else { ?>
                <a href="#pills-signup" data-toggle="modal" data-target="#modal-login" class="button-custom">Create Account to Access Details</a>
              <?php } ?>
            </div>
            <div class="col-12 col-sm-6 text-center text-sm-left">
              <a href="#" class="button-custom">Indicate Interest</a>
            </div>
          </div>
        </div>
        <svg class="svg-diagonal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
          <polygon fill="white" points="0,100 100,0 100,100" />
        </svg>
      </header>

      <!-- Lead  -->

      <section class="container-fluid my-5 fund-aaa-intro-lead-section">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="card-white">
                <h2>
                  Terms
                </h2>
                <div class="separator-gradient mb-3"></div>
                <div class="row fund-table">
                  <div class="col-6">
                    <h5>10+ years</h5>
                    <p>Hold Period</p>
                    <h5>Result Growth</h5>
                    <p>Investment Type</p>
                    <h5>Income Property, Multifamily</h5>
                    <p>Asset Type</p>
                  </div>
                  <div class="col-6">
                    <h5>Development &amp; Value-Add Existing</h5>
                    <p>Investment Profile</p>
                    <h5>$100,000</h5>
                    <p>Minimum Investment</p>
                  </div>
                </div>
                <h2>
                  Fund Strategy
                </h2>
                <div class="separator-gradient mb-3"></div>
                <p>
                  AAAmerican Opportunity Fund intends to acquire, develop and improve a portfolio of real estate properties while benefiting from the preferential tax treatment of the <a href="/opportunity-fund">Opportunity Zone Program.</a>
                </p>
                <p>
                  The AAAmerican Opportunity Fund seeks to acquire high-quality real estate properties located in designated Opportunity Zones that have strong long-term growth potential. The Fund will meet the requirements necessary to qualify as an Opportunity Fund as defined in the Tax Cuts and Jobs Act of 2017 in order to avail investors of the substantial tax-related benefits provided under the bill.
                </p>
                <p>
                  The Fund anticipates an investment term of no less than 10 years in order to capture the full tax benefits offered under the tax code for Opportunity Funds.
                </p>
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
              <h2 class="mt-4">
                Delivering Federal Tax Free Appreciation and Depreciation
              </h2>
              <p>
                Distributions are automatically reinvested to increase your <a href="/tax-advantage">tax free</a> investment.
              </p>
              <a href="#pills-signup" data-toggle="modal" data-target="#modal-login" class="button-custom mb-4">
                Create An Account
              </a>
            </div>
          </div>
        </div>
      </section> <!-- /container -->

      <section class="container">
        <h1 class="text-center my-5 pb-5">
          Key Benefits
        </h1>
        <div class="row mb-5 pb-5">
          <div class="col-12 col-sm-6">
            <h2>
              Zero Capital Gain Taxes
            </h2>
            <p>
              Invest capital gains and receive tax-free compounding &amp; defer and reduce current federal capital gain taxes. <a href="/tax-advantage">Understanding Opportunity Fund tax benefits.</a>
            </p>
          </div>
          <div class="col-12 col-sm-6 text-center">
            <img class="w-50" src="<?php bloginfo('template_directory'); ?>/assets/img/icons/no-tax.jpg"/>
          </div>
        </div>
        <div class="row mb-5 pb-5">
          <div class="col-12 col-sm-6 order-2 order-sm-1 text-center">
            <img class="w-75" src="<?php bloginfo('template_directory'); ?>/assets/img/graphs/reduce-risk.jpg"/>
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
        <div class="row mb-5">
          <div class="col-12 col-sm-6">
            <h2>
              Invest in High Growth Markets
            </h2>
            <p>
              We invest in fast-growing U.S. markets including: Atlanta, Austin, Charlotte, Dallas, Denver, Houston, Nashville, Orlando, Phoenix and Raleigh. 
            </p>
          </div>
          <div class="col-12 col-sm-6 mb-5 text-center">
            <img class="w-75" src="<?php bloginfo('template_directory'); ?>/assets/img/icons/growth.jpg"/>
          </div>
        </div>
        <hr />
      </section>

      <section class="container pb-5 text-center">
        <h1 class="text-center mt-5 pt-5 mb-3">
          Example Business Plan
        </h1>
        <h4 class="mb-5 text-center">
          New development in a growing West Palm Beach, FL neighborhood
        </h4>
        <div class="row mb-5">
          <div class="col-6">
            <img class="w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/general/before.jpg"/>
            <figcaption class="text-center">The existing distress lot</figcaption>
          </div>
          <div class="col-6">
            <img class="w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/renderings/offering-2.jpg"/>
            <figcaption class="text-center">Illustrative rendering of finished project</figcaption>
          </div>
        </div>
        <img class="text-center m-auto offering-arrow" src="<?php bloginfo('template_directory'); ?>/assets/img/icons/arrow-fade-blue.png"/>
        <p class="text-left neg-margin">
          Our first Opportunity Fund, 1 American Elite, acquired this property in a growing area of West Palm Beach, a principal city of the Miami Metropolitan Area. Founded in 1894, it is the oldest incorporated municipality in Greater Miami, and has always attracted affluent homebuyers with its tropical tree-lined streets and a mixture of Art Deco and Spanish architecture.
        </p>
        <p class="text-left mb-5">
          A thriving community, West Palm Beach Park has enjoyed significant population growth in recent years, outperforming its metropolitan neighbors. Nationwide, according to US Census Bureau data, Florida has received the most domestic inmovers. The 1 American Elite Opportunity Fund acquired the property in 2019. It plans to build a 376 unit apartment building, self storage, and retail and commercial business space.
        </p>
      </section>

      <section class="container border-top text-center">
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
                  Founded in 1971, American Group's experienced team of over 100 professionals manages ten real estate investment vehicles.
                </h5>
            </div>
          </div>
          <div class="row">
            <div class="col-1">
                <img class="w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/icons/gold-badge.jpg" />
            </div>
            <div class="col-11 text-left">
                <h5>
                  American Group invested in, manages, or owns over $1 billion in real estate nationwide with over $63 million aggregate funds raised across our programs.
                </h5>
            </div>
          </div>
          <div class="row">
            <div class="col-1">
                <img class="w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/icons/gold-badge.jpg" />
            </div>
            <div class="col-11 text-left">
                <h5>
                Since its inception, American Group has returned 567% of money invested in real estate to investors.
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

      <!-- Download Section -->

      <?php get_template_part('section', 'download'); ?>

      <section class="container-fluid border-top bg-white pt-5 pb-5 mb-5">
        <h3 class="pb-5 text-center">
          External Link Resources
        </h3>
        <div class="row justify-content-center">
          <div class="col-9 col-lg-6 col-xl-4">
            <a class="external-links" target="_blank" href="https://www.irs.gov/newsroom/irs-issues-guidance-relating-to-deferral-of-gains-for-investments-in-a-qualified-opportunity-fund">
              <div class="separator-gradient mb-3"></div>
              <div class="d-flex">
                <i class="fas fa-external-link-alt"></i>
                <p class="d-block">
                  IRS issues guidance relating to deferral of gains for investments in a qualified opportunity fund
                </p>
                <i class="fas fa-chevron-right"></i>
              </div>
              <div class="separator-gradient mb-3"></div>
            </a>
            <a class="external-links" target="_blank" href="https://eig.org/wp-content/uploads/2018/01/Tax-Benefits-of-Investing-in-Opportunity-Zones.pdf">
              <div class="separator-gradient mb-3"></div>
              <div class="d-flex">
              <i class="fas fa-external-link-alt"></i>
                <p class="d-block">
                  Economic Investment Group - Tax Benefits of Investing in Opportunity Zones
                </p>
                <i class="fas fa-chevron-right"></i>
              </div>
              <div class="separator-gradient mb-3"></div>
            </a>
            <a class="external-links" target="_blank" href="https://www.forbes.com/sites/forbesdigitalcovers/2018/07/17/an-unlikely-group-of-billionaires-and-politicians-has-created-the-most-unbelievable-tax-break-ever/#2ecaa7d14855">
              <div class="separator-gradient mb-3"></div>
              <div class="d-flex">
                <i class="fas fa-external-link-alt"></i>
                <p class="d-block">
                  Forbes - An unlikely group has created the most unbelievable tax break ever
                </p>
                <i class="fas fa-chevron-right"></i>
              </div>
              <div class="separator-gradient mb-5"></div>
            </a>
          </div>
        </div>
      </section>

      <!-- Create Account Section -->

     <?php get_template_part('section', 'createAccount'); ?>

     <!-- Need Help Section -->

     <?php get_template_part('section', 'help'); ?>

    </main>

<?php
get_footer();
