<?php
/*

  Template Name: Articles

 */

get_header();
?>

<main role="main" class="bg-grey">
    
      <!-- Header -->
      <header class="header-primary header-articles d-flex align-items-center justify-content-center">
        <div class="container text-center">
          <h1 class="pt-4">
            Articles
          </h1>  
        </div>
        <svg class="svg-diagonal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
          <polygon fill="#f8f8f8" points="0,100 100,0 100,100" />
        </svg>
      </header>

      <!-- Articles  -->

      <section class="container pt-5 bg-grey">
        <div class="container bg-grey">
          <a href="/resources" class="resources--link"><i class="fa fa-chevron-left"></i>Resources</a>
        </div>
        <h3 class="mt-5">
          All Articles
        </h3>

        <div class="row hover-float my-5 pb-5">

          <div class="col-12 col-sm-4">
            <a class="img-link-article" href="/articles/intro-to-opportunity-zones">
              <img class="img-link--img" src="<?php home_url(); ?>/content/intro.jpg"/>
            </a>
          </div>

          <div class="col-12 col-sm-8">
            <a class="font-georgia" href="/articles/intro-to-opportunity-zones">
              <h5 class="color-dark">
                Start Here: An Introduction To Opportunity Zones
              </h5>
              <p>
              Opportunity Zones are newly appointed census tracts consisting of economically underdeveloped communities that qualify for designation as outlined in the Tax Cuts and Jobs Act of 2017. Read this article to learn more about the tax benefits of Opportunity Zones and how they intend to help the community.
              </p>
              <a href="/articles/intro-to-opportunity-zones">Read More...</a>
            </a>
          </div>

        </div>

        <div class="row hover-float my-5 pb-5">

          <div class="col-12 col-sm-4">
            <a class="img-link-article" href="/articles/benefits-of-opportunity-zone-investing">
              <img class="img-link--img" src="<?php home_url(); ?>/content/benefits.jpg"/>
            </a>
          </div>
          
          <div class="col-12 col-sm-8">
            <a class="font-georgia" href="/articles/benefits-of-opportunity-zone-investing">
              <h5 class="color-dark">
                The Benefits of Opportunity Zone Investing
              </h5>
              <p>
                An Opportunity Fund is an investment vehicle designed for business and real estate investment in areas known as Opportunity Zones. Investors in Opportunity Funds are eligible to receive incredible tax benefits for their capital gains contributions.
              </p>
              <a href="/articles/benefits-of-opportunity-zone-investing">Read More...</a>
            </a>
          </div>

        </div><!--end row-->

        <div class="row hover-float my-5 pb-5">

          <div class="col-12 col-sm-4">
            <a class="img-link-article" href="/articles/modern-portfolio-theory-why-you-should-invest-in-real-estate">
              <img class="img-link--img" src="<?php home_url(); ?>/content/mpt.jpg"/>
            </a>
          </div>
          
          <div class="col-12 col-sm-8">
            <a class="font-georgia" href="/articles/modern-portfolio-theory-why-you-should-invest-in-real-estate">
              <h5 class="color-dark">
                Modern Portfolio Theory & Why You Should Invest in Real Estate
              </h5>
              <p>
                Modern Portfolio Theory describes how investors construct portfolios to maximize returns while managing exposure to market risk. Since it’s definition, it has become the leading practice in investments today.
              </p>
              <a href="/articles/modern-portfolio-theory-why-you-should-invest-in-real-estate">Read More...</a>
            </a>
          </div>

        </div>
        
      </section>

      <!-- View Investments Section -->

      <?php get_template_part('section', 'viewInvestments'); ?>

      <!-- Need Help Section  -->

      <?php get_template_part('section', 'help'); ?>

    </main>

<?php
get_footer();
