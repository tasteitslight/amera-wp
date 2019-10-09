<?php
/*

  Template Name: About

 */

get_header();
?>

<main role="main" id="page-about">
    
      <!-- Header -->
      <header class="header-primary header-about d-flex align-items-center justify-content-center">
        <div class="container text-center">
          <h1 class="pt-4">
            About Us
          </h1>  
        </div>
        <svg class="svg-diagonal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
          <polygon fill="white" points="0,100 100,0 100,100" />
        </svg>
      </header>

      <!-- Intro  -->

      <section class="container text-center py-5">
        <h3 class="pb-4">
          The American Group Story
        </h3>
        <p class="pb-4">
          Backed by over a century of investment experience, American Group is a group of commercial real estate firms connecting investors with high-quality assets in select business-friendly and high-growth locations. Meet our team and connect with us on LinkedIn.
        </p>
        <hr />
      </section>

      <!-- Accordion -->

      <section class="container pb-5 mb-5">
        <div class="accordion text-center" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Strategy
                </button>
              </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                The strategy is simple: Conservative underwriting and real, dependable returns with a value-add strategy. Every acquisition deal we do is built with a going-in return and a plan to significantly boost revenue in the hold period, typically 10+ years. Being selective & patient, American Group has never had to do a capital call and never had a negative cash flow year.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Experience
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
              The principals in the partnership have over 150 years of experience in real estate with a proven track record of success with over X acquisitions and nearly X dispositions.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Integration
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
              From the acquisition or the sourcing of the development site to the final disposition of the asset, every facet of the investment is handled in-house. Construction, supplies, insurance, property management, leasing & sales brokerage, and asset management are all handled by an affiliated group of companies owned by the principals or closely partnered.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFour">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Integrity
                </button>
              </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
              <div class="card-body">
                Our principals pride themselves in serving their clients, investors, and tenants first & foremost. Investors are treated fairly and are given honest and regular reporting and access. We value and   respect people & relationships and always take the long-term view.  Each of our investments and everyone involved with each deal reflects that mentality.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFive">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  Sustainability
                </button>
              </h2>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
              <div class="card-body">
                We believe that sustainability is applicable within our field because it captures the full spectrum of our company’s interactions: with the economy, including the industry within which we operate; with society, from employees to partners, vendors and tenants; and with the environment. We believe this approach can drive performance towards excellence and that companies with superior environmental and social management are likely to be more successful in operating projects in today’s world.
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="team" class="container-fluid border-top border-bottom py-5 text-center bg-grey">
        <div class="container container-lg">
          <h1>
            Leadership
          </h1>
          <div class="row mt-5 justify-content-center">
            <div class="col-12 col-sm-5 col-md border-all bg-white m-1 bio-card" data-toggle="modal" data-target="#fred">
              <img class="team--img my-5" src="<?php bloginfo('template_directory'); ?>/assets/img/headshot/headshot-fred.png" />
              <h5>Fred Hameetman</h5>
              <p>Chairman, American Group</p>
            </div>
            <div class="col-12 col-sm-5 col-md border-all bg-white m-1 bio-card" data-toggle="modal" data-target="#greg">
              <img class="team--img my-5" src="<?php bloginfo('template_directory'); ?>/assets/img/headshot/headshot-greg.png" />
              <h5>Gregory L. Horton</h5>
              <p>President, American Group</p>
            </div>
            <div class="col-12 col-sm-5 col-md border-all bg-white m-1 bio-card" data-toggle="modal" data-target="#jacqueline">
              <img class="team--img my-5" src="<?php bloginfo('template_directory'); ?>/assets/img/headshot/headshot-jacqueline.png" />
              <h5>Jacqueline S. Miller</h5>
              <p>CEO, Cal-American</p>
            </div>
            <div class="col-12 col-sm-5 col-md border-all bg-white m-1 bio-card" data-toggle="modal" data-target="#raj">
              <img class="team--img my-5" src="<?php bloginfo('template_directory'); ?>/assets/img/headshot/headshot-raj.png" />
              <h5>Raj Makwana</h5>
              <p>CEO, Regent West Corp.</p>
            </div>
            <div class="col-12 col-sm-5 col-md border-all bg-white m-1 bio-card" data-toggle="modal" data-target="#will">
              <img class="team--img my-5" src="<?php bloginfo('template_directory'); ?>/assets/img/headshot/headshot-will.png" />
              <h5>Will Caulfield</h5>
              <p>Director of Communications, American Group</p>
            </div>
            <div class="col-12 col-sm-5 col-md border-all bg-white m-1 bio-card" data-toggle="modal" data-target="#mason">
              <img class="team--img my-5" src="<?php bloginfo('template_directory'); ?>/assets/img/headshot/headshot-mason.png" />
              <h5>Mason Brown</h5>
              <p>Property &amp; Marketing Manager, American Group</p>
            </div>
            <div class="col-12 col-sm-5 col-md border-all bg-white m-1 bio-card" data-toggle="modal" data-target="#devan">
              <img class="team--img my-5" src="<?php bloginfo('template_directory'); ?>/assets/img/headshot/headshot-devan.png" />
              <h5>Devan Makwana</h5>
              <p>Lead Developer, American Group</p>
            </div>
          </div>
          <div class="row mt-5 justify-content-center">
            
          </div>
          <div class="row mt-4 justify-content-center">
            
          </div>
        </div>
      </section> <!-- /container -->

      <!-- Learn about Opportunity Funds  -->

      <!-- Learn Opportunity Funds Section -->
      
      <section class="container-fluid gradient-wtg text-center py-5">
        <?php get_template_part('section','learnMoreA'); ?>
      </section>

      <!-- View Investments Section -->

      <?php get_template_part('section', 'viewInvestments'); ?>

      <!-- Modals -->

      <div class="modal fade" id="fred" tabindex="-1" role="dialog" aria-labelledby="FredHameetmanModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body text-center">
              <img class="team--img my-5" src="<?php bloginfo('template_directory'); ?>/assets/img/headshot/headshot-fred.png" />
              <h5>Fred Hameetman</h5>
              <p class="mb-5">Chairman, American Group</p>
              <p class="text-left">
                Fred Hameetman is Chairman of the American Group, which comprises approximately 50 companies, corporations, limited liability companies, and partnerships. Mr. Hameetman earned a Bachelor of Arts from Occidental College and a Bachelor of Science from the California Institute of Technology. He later received a Master of Science in Engineering from the University of Southern California. After graduating from Occidental and Caltech, Mr. Hameetman went to work at Douglas Aircraft as an aerophysicist and engineering supervisor. Mr. Hameetman was with Hayden, Stone &amp; Co., a New York Stock Exchange member; vice-president of Carlsberg Equities; and vice president of Funds International; before buying the first of the American Group of companies in 1971. The management company, a general partner of nine real estate limited partnerships, currently oversees the management of approximately $1,000,000,000 of real estate, representing over a million square feet of commercial and residential real estate in California and Washington. Mr. Hameetman and his wife, Joyce, are the lead donors for the Hameetman Science Center and the Hameetman Career Center at Occidental College and for the Hameetman Auditorium and the Hameetman Center at Caltech. Mr. Hameetman is on the leadership board of International Medical Corps, and, in 2016, he and his wife were the recipients of its Humanitarian Award.
              </p>
            </div>
          </div>
        </div>
      </div>   
      
      <div class="modal fade" id="greg" tabindex="-1" role="dialog" aria-labelledby="gregModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body text-center">
              <img class="team--img my-5" src="<?php bloginfo('template_directory'); ?>/assets/img/headshot/headshot-greg.png" />
              <h5>Gregory L. Horton</h5>
              <p class="mb-5">President, American Group</p>
              <p class="text-left">
                Mr. Horton received his Bachelor of Science in Mechanical Engineering from Texas A&M University and attended Arizona State University’s MBA Program. He began his career working as an engineer designing avionics for commercial aircraft at Sperry Flight Systems, prior to starting SMTEK International, Inc. As CEO, he ran this entrepreneurial company for 16 years, providing engineering, design, and automated production services in aerospace, defense, medical, and other highly regulated markets. Mr. Horton started Stellar Microelectronics in the same industry and grew it for ten years prior to selling the company. During his entrepreneurial years, Mr. Horton acquired, designed, leased, built, developed, and sold various industrial buildings for automated factories on three continents, which is what led him to join American Group.
              </p>
            </div>
          </div>
        </div>
      </div>  

      <div class="modal fade" id="jacqueline" tabindex="-1" role="dialog" aria-labelledby="JacquelineModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body text-center">
              <img class="team--img my-5" src="<?php bloginfo('template_directory'); ?>/assets/img/headshot/headshot-jacqueline.png" />
              <h5>Jacqueline S. Miller</h5>
              <p class="mb-5">CEO, Cal-American</p>
              <p class="text-left">
                Ms. Miller is a Certified Property Manager (CPM®) with over 40 years of experience in both commercial and residential property management. In her career, she has overseen the management of a diverse portfolio of properties—retail, office, residential, and industrial—representing over a million square feet of shopping centers, office buildings, and apartment complexes in California and Washington. She holds a California real estate license and has extensive knowledge of real estate law and lease administration.
              </p>
            </div>
          </div>
        </div>
      </div>  

      <div class="modal fade" id="raj" tabindex="-1" role="dialog" aria-labelledby="RajModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body text-center">
              <img class="team--img my-5" src="<?php bloginfo('template_directory'); ?>/assets/img/headshot/headshot-raj.png" />
              <h5>Raj Makwana</h5>
              <p class="mb-5">President, Regent West Corp.</p>
              <p class="text-left">
                Raj Makwana brings 29 years of multi-family, commercial property and corporate accounting and finance experience to American Group. During his career, Mr. Makwana has been involved in the full breadth of property and corporate financial operations from day-to-day accounting and cash management to valuations, acquisition, and disposition. Mr. Makwana has also been a key player in securing property debt, working with a wide array of lending institutions including private equity funds. During his career, he has worked on optimizing the financial health of all entities through in-depth analysis and forecasting including multi-tiered assets. He is involved in annual financial audits, working with a variety of CPA firms. Mr Makwana also has an extensive technical background managing complex business networks, data, and VOIP systems. He holds several technical certifications, including the Microsoft professional designation. During his free time, Mr. Makwana enjoys spending time with his family and volunteering with local public schools.
                </p>
            </div>
          </div>
        </div>
      </div>  

      <div class="modal fade" id="will" tabindex="-1" role="dialog" aria-labelledby="WillModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body text-center">
              <img class="team--img my-5" src="<?php bloginfo('template_directory'); ?>/assets/img/headshot/headshot-will.png" />
              <h5>Will Caulfield</h5>
              <p class="mb-5">Business Development, American Group</p>
              <p class="text-left">
                A multidisciplinary contributor to American Group™, Will began his career working in design and development while traveling the world. Concluding his Bachelor of Arts in International Studies and Globalization, Will accepted positions in marketing, business development, and project management in residential real estate, where he played a part in launching a brokerage in Gulf Breeze, Florida. Most recently, Will acted as Managing Director of a commercial photography studio in Chicago, Illinois. He is a resident of Santa Monica, where he is actively engaged in the development of the American Group™ Opportunity Fund portfolio.
              </p>
            </div>
          </div>
        </div>
      </div>  

      <div class="modal fade" id="mason" tabindex="-1" role="dialog" aria-labelledby="MasonModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body text-center">
              <img class="team--img my-5" src="<?php bloginfo('template_directory'); ?>/assets/img/headshot/headshot-mason.png" />
              <h5>Mason Brown</h5>
              <p class="mb-5">Property &amp; Marketing Manager, American Group</p>
              <p class="text-left">
                With years experience in real estate investment and property management, Mason is a tremendous asset to the American Group team. A natural self starter, Mr. Brown holds a degree in Communication Media and Chemistry. He started his career in Philadelphia in hospitality and entertainment, and upon moving to Los Angeles, transitioned into Property Management, which benefits greatly from his skills in event planning, marketing, and customer relations. Holding a CA Real Estate License and currently living in Hollywood, Mason is continuing his education in Property Management and the Multi-Family Industry while contributing to the American Group initiative.
              </p>
            </div>
          </div>
        </div>
      </div>  

      <div class="modal fade" id="devan" tabindex="-1" role="dialog" aria-labelledby="DevanModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body text-center">
              <img class="team--img my-5" src="<?php bloginfo('template_directory'); ?>/assets/img/headshot/headshot-devan.png" />
              <h5>Devan Makwana</h5>
              <p class="mb-5">Lead Developer, American Group</p>
              <p class="text-left">
                Since the age of 8, Devan has been learning and using several computer languages from HTML 5, Java and Java script to C++ and is now learning SQL Scripting & Python. He was also nominated to attend a national STEM conference by his instructors. As a young entrepreneur, he and a friend began their own successful online wearables company to help raise money for the ASCPA. Serving as the Chief Technology Officer, while his partner undertook the role of Chief Creative Officer, they continue to expand the reach of their work to further support non-profit, animal welfare organizations.  Devan has also helped design digital presentations for local public schools and networks for several local businesses. In his free time, he enjoys coding, traveling and playing board games.
              </p>
            </div>
          </div>
        </div>
      </div>  
      

    
    </main>

<?php
get_footer();
