<?php

/* 

Template Name: Article-Benefit

*/

get_header();
?>

<main role="main">
    
      <!-- Header -->
      <header class="header-secondary header-article-2 d-flex align-items-center justify-content-center">
        <div class="container text-left">
        </div>
        <svg class="svg-diagonal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
          <polygon fill="#ffffff" points="0,100 100,0 100,100" />
        </svg>
      </header>

      <!-- Intro  -->

      <section class="container position-relative my-5">  
        <div class="row">
          <div class="col-md-1 sidebar-sticky-2 text-center mt-2">
            <a class="d-inline-block footer-social footer-social-email my-1" href="#"></a>
            <a class="d-inline-block footer-social footer-social-twitter my-1" href="#"></a>
            <a class="d-inline-block footer-social footer-social-fb my-1 mb-3" href="#"></a>
          </div>
          <div class="col-12 col-md-8">
          <h6 class="font-source">
            Opportunity Funds
          </h6>
          <h1>
            The Benefits of Opportunity Fund Investing
          </h1>
          <h6 class="font-source">
            American Group Staff, September 19, 2019
          </h6> 
            <p class="pt-5">
              An Opportunity Fund is an investment vehicle designed for business and real estate investment in areas known as Opportunity Zones. Investors in Opportunity Funds are eligible to receive incredible tax benefits for their capital gains contributions.
            </p>
            <h3>
              Tax Advantages of Opportunity Zones
            </h3>
            <p>
              Capital Gains receive 3 main benefits if invested in Qualified Opportunity Funds. Simply put, they are:
            </p>
            <ul>
              <li>
                1. Deferral
              </li>
              <li>
                2. Reduction
              </li>
              <li>
                3. Elimination
              </li>
            </ul>
            <p>
              Note: As of 2019, the IRS, along with the U.S. Treasury is still adjusting specific rules and regulation for taxation and investment in qualified opportunity funds. Potential investors with capital gains interested in participation must consult with investment and tax professionals. Please refer to <a href="/rules">rules and regulations</a> for more details.
            </p>
            <h3>
              Investor Benefits
            </h3>
            <h5>
              1. Deferral: Pay capital gain taxes after December 31st, 2026
            </h5>
            <p>
            Any sort of capital gain rolled into an opportunity fund within 180 days will be tax-deferred until December 31st, 2026 or that particular date on which the opportunity fund was sold, if before.
            </p>
            <h5>
              2.  Reduction: A step-up in basis on original capital gain tax liability
            </h5>
            <p>
              Long term investments in Opportunity Funds provide a massive opportunity to make profits via tax savings. Along with tax deferral, any capital gain rolled into the Opportunity Fund within 180 days is eligible for a step-up in basis. The basis of the original investment is stepped up by 10% after held in an opportunity fund for 5 years, and by another 5% if it is held for 7 years, as long as these milestones are hit before December 31st, 2026.
            </p>
            <h5>
              3. Elimination: Zero tax on capital gains from Opportunity Fund investments
            </h5>
            <p>
              The single largest benefit of Opportunity Zone program, this final tax benefit has the potential to create such immense savings that it can double after tax profits. This is the number 1 reason why Steven Mnuchin, the Treasury Secretary expects over $100 billion in investments to flow towards opportunity zones as a result of this program.
            </p>
            <p>
              As long as an opportunity fund investment is held for at least 10 or more years, the basis of the investment will be adjusted in order to the fair market value of the investment on the exact date on which it was sold. In simpler words, zero capital gain taxes are due on the profit you made from the sale of the opportunity fund investment after 10 years.
            </p>
            <h3>
              For the community
            </h3>
            <h5>
              Impact Benefits of Opportunity Fund Investing
            </h5>
            <p>
              Opportunity Funds are required to make ‘substantial improvements’ to the Opportunity Zone properties. The ‘Tax Cuts and Jobs Act’ defines the ‘substantial improvements’ as that which is at least equal to the original value that was paid by the fund. These need to be made within 30 months. For example: If a property was purchased with a building worth around $700,000, then the opportunity fund would be required make at least $700,000 worth of improvements on the land.
            </p>
            <p>
              However, certain types of business aren’t allowed to be included in the opportunity funds, even if they do reside within the opportunity zones. These include:
            </p>
            <ul class="ul-offering-full">
              <li>
                Country Clubs
              </li>
              <li>
                Golf Courses
              </li>
              <li>
                Suntan Facilities
              </li>
              <li>
                Massage Parlors
              </li>
              <li>
                Hot Tub Facilities
              </li>
              <li>
                Liquor Stores
              </li>
              <li>
                Racetracks or other facilities used for gambling
              </li>
            </ul>
            <h3>
              Potential Impact of the Opportunity Zone Program
            </h3>
            <p>
              Here is one staggering number to consider – Did you know that currently, U.S. investors hold over $2.3 trillion in unrealized capital gains? The unrealized capital gains represent a massive untapped resource for investment possibilities and economic development. It was these assets that the Opportunity Zone Program sought to target and mobilize. Already, Opportunity Funds have allowed the investors throughout the US and its territories to use these resources to spark economic activity. It’s a win-win, both for investors and the communities in which the capital is investment. As methods for tracking Opportunity Fund process and efficacy are developed, we will learn just how powerful the program is.
            <p>
          </div>
          <div class="col-12 col-sm-6 col-md-3 article-sidebar sidebar-sticky-2 mb-2">
            <div class="">
              <h5 class="">
                Related
              </h5>
              <div class="separator-gradient mb-3"></div>
              <div class="article-sidebar--article pb-2">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/resources/1.jpg" class="border-radius box-shadow" />
                <h6 class="pt-2">
                  Article Name
                </h6>
              </div>
              <div class="article-sidebar--article">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/resources/2.jpg" class="border-radius box-shadow" />
                <h6 class="pt-2">
                  Article Name
                </h6>
              </div>
            </div>
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