<?php
/*

  Template Name: Home Page

 */

 // Custom Fields

 $hero_tagline         = get_post_meta ( 7, 'hero_tagline', true );
 $hero_subtitle         = get_post_meta ( 7, 'hero_subtitle', true );

get_header();
?>

<main role="main">

      <div class="window-frame"></div>
    
      <!-- Header -->
      <header class="header-primary d-flex align-items-center justify-content-center">
        <div class="container text-center">
          <h1>
            <?php echo $hero_tagline; ?>
          </h1>
          <h3 class="pt-3">
            <?php echo $hero_subtitle; ?>
          </h3>
          <form class="header-form">
            <input class="input-header" type="email" placeholder="Enter your email"/>
            <input class="button-custom header-button" type="submit" value="Request Information"/>
          </form>
        </div>
        <svg class="svg-diagonal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
          <polygon fill="white" points="0,100 100,0 100,100" />
        </svg>
      </header>

      <!-- Lead  -->

      <section class="container">
        <div class="row">
          <div class="col-md-6 lead-pad pb-5">
            <h1 class="">The Tax Benefit of a Lifetime</h1>
            <h3>Introducing Placeholder's AAAmerican Opportunity Fund</h3>
            <p>
              Our Qualified Opportunity Zone (QOZ) Fund combines the high returns and low volatility of real estate investment with unparalleled tax-savings benefits.
              <a href="/opportunity-fund">Learn More</a>
            </p>
          </div>
          <div class="col-md-6">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/iso-geo.png" width="100%" />
          </div>
        </div>
      </section> <!-- /container -->

      <!-- Quote  -->

      <section class="container-fluid py-4 my-5 bg-grey border-top border-bottom section-quote">
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

      <!-- Now Accepting Investors  -->

      <section class="container py-5">
        <div class="row">
          <div 
            class="col-md-6"
            data-aos="fade-up" 
            data-aos-delay="5"
            data-aos-duration="700"
            data-aos-easing="ease-in-out"
            data-aos-once="false">
            <img  src="<?php bloginfo('template_directory'); ?>/assets/img/mockup/index-laptop.jpg" width="100%" />
          </div>
          <div class="col-md-6 text-right">
            <h1 class="">Exclusively For Accredited Investors</h1>
            <p>
              Register for an Placeholder account to access and view Opportunity Fund investments. Already have an account?
              <a class="show_login" href="">Click here to sign in.</a>
            </p>
            <a class="button-custom button-custom-1">Register</a>
          </div>
        </div>
      </section> <!-- /container -->

      <section class="container text-center">
        <hr class="pb-5 mb-5"/>
        <h1 class="mb-5 pb-3">Earn 2x the Profits</h1>
        <img src="<?php bloginfo('template_directory'); ?>/assets/img/graphs/comparison.png" class="w-75 mb-5"/>
        <p class="mb-5 pb-5">
          Amounts shown are example after-tax profits of $1,000,000 invested for 10 years in a traditional stock portfolio with 8% appreciation versus that invested in an Opportunity Fund with a 8% appreciation. For illustrative purposes only. Learn more about the <a href="/tax-advantage">Tax Benefits of Opportunity Funds.</a>
        </p>
      </section>

      <!-- More About Opportunity Zones Section -->

      <section class="container-fluid bg-grey border-top border-bottom text-center pb-5">
        <div class="container my-5">
          <h3>Learn More About Opportunity Funds</h3>
          <div class="row my-5">
            <div class="col-sm-7 pb-4 pb-sm-0">
              <a class="img-link" href="/opportunity-fund">
                <img class="img-link--img" src="<?php bloginfo('template_directory'); ?>/assets/img/hero/opportunityfund.jpg"/>
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
      
      <!-- Section United States  -->

      <section class="container-fluid py-4 mt-5 text-center gradient-wtg border-bottom">
        <div class="container">
        <h1>
          Invest in America's Growing Markets
        </h1>
        <p class="pb-5">
          Placeholder seeks opportunities across the country. We evaluate national demographic trends, local market health, and key transaction metrics to give our investors the highest return.
        </p>
        </div>
        <div class="container" >
          <img src="<?php bloginfo('template_directory'); ?>/assets/img/svg/svg-usa-home.svg"/>
        </div>
      </section> <!-- /container -->

      <!-- Section Stats -->

      <section class="container py-5 mb-5 text-center">
        <h1>
          Join Our Trusted Network
        </h1>
        <p>
          Become part of the many who enjoy our success.
        </p>
        <div class="row mb-4">
          <div class="col-12 col-sm-4">
            <img class="img--stat" src="<?php bloginfo('template_directory'); ?>/assets/img/svg/svg-1B-assets.svg" />
          </div>
          <div class="col-12 col-sm-4">
              <img class="img--stat" src="<?php bloginfo('template_directory'); ?>/assets/img/svg/svg-6k-investors-02.svg" />
          </div>
          <div class="col-12 col-sm-4">
            <img class="img--stat" src="<?php bloginfo('template_directory'); ?>/assets/img/svg/svg-150-years.svg" />
          </div>
        </div>
      </section> <!-- /container -->

      <section class="container-fluid border-top gradient-gtw pb-5">
          <div class="container text-center">
            <img class="d-block m-auto mockup-mac" src="<?php bloginfo('template_directory'); ?>/assets/img/mockup/invest-macbook.png"/>
            <h1 class="mt-5 mb-4">
              Create a Placeholder Account
            </h1>
            <h2 class="mb-4">
              To Review Fund Documents &amp; Invest When You're Ready
            </h2>
            <a href="" class="button-custom mb-4 show_login">
              Create An Account
            </a>
            <p>
              Already have an account? <a href="" class="show_login">Sign In</a>
            </p>
          </div>
        </section>

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
