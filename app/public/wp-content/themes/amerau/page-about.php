<?php
/*

  Template Name: About

 */

get_header();
?>

<main role="main">
    
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
            The Placeholder Story
          </h3>
          <p>
            Backed by over a century of investment experience, Placeholder, a subsidiary of American Group, is a commercial real estate firm connecting investors with high-quality assets in select business-friendly and high-growth locations. Meet our team and connect with us on LinkedIn.
          </p>
  
        </section>

      <section class="container-fluid border-top py-5 text-center bg-grey">
        <div class="container container-lg">
          <h1>
            Meet The Team
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
              <p>CEO, Placeholder</p>
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
              <p>Business Development, Placeholder</p>
            </div>
            <div class="col-12 col-sm-5 col-md border-all bg-white m-1 bio-card" data-toggle="modal" data-target="#mason">
              <img class="team--img my-5" src="<?php bloginfo('template_directory'); ?>/assets/img/headshot/headshot-mason.png" />
              <h5>Mason Brown</h5>
              <p>Marketing Manager, Placeholder</p>
            </div>
            <div class="col-12 col-sm-5 col-md border-all bg-white m-1 bio-card" data-toggle="modal" data-target="#devan">
              <img class="team--img my-5" src="<?php bloginfo('template_directory'); ?>/assets/img/headshot/headshot-devan.png" />
              <h5>Devan Makwana</h5>
              <p>Lead Developer, Placeholder</p>
            </div>
          </div>
          <div class="row mt-5 justify-content-center">
            
          </div>
          <div class="row mt-4 justify-content-center">
            
          </div>
        </div>
      </section> <!-- /container -->

      <!-- Modals -->

      <div class="modal fade" id="fred" tabindex="-1" role="dialog" aria-labelledby="FredHameetmanModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
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
            <div class="modal-body text-center">
              <img class="team--img my-5" src="<?php bloginfo('template_directory'); ?>/assets/img/headshot/headshot-greg.png" />
              <h5>Gregory L. Horton</h5>
              <p class="mb-5">CEO, Placeholder</p>
              <p class="text-left">
                Mr. Horton received his Bachelor of Science in Mechanical Engineering from Texas A&M University and attended Arizona State University’s MBA Program. He began his career working as an engineer designing avionics for commercial aircraft at Sperry Flight Systems, prior to starting SMTEK International, Inc. As CEO, he ran this entrepreneurial company for 16 years, providing engineering, design, and automated production services in aerospace, defense, medical, and other highly regulated markets. Mr. Horton started Stellar Microelectronics in the same industry and grew it for ten years prior to selling the company. During his entrepreneurial years, Mr. Horton acquired, designed, leased, built, developed, and sold various industrial buildings for automated factories on three continents, which is what led him to join 1 American Elite™.
              </p>
            </div>
          </div>
        </div>
      </div>  

      <div class="modal fade" id="jacqueline" tabindex="-1" role="dialog" aria-labelledby="JacquelineModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
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
            <div class="modal-body text-center">
              <img class="team--img my-5" src="<?php bloginfo('template_directory'); ?>/assets/img/headshot/headshot-raj.png" />
              <h5>Raj Makwana</h5>
              <p class="mb-5">President, Regent West Corp.</p>
              <p class="text-left">
                Raj Makwana brings 29 years of multi-family, commercial property and corporate accounting and finance experience to 1 American Elite. During his career, Mr. Makwana has been involved in the full breadth of property and corporate financial operations from day-to-day accounting and cash management to valuations, acquisition, and disposition. Mr. Makwana has also been a key player in securing property debt, working with a wide array of lending institutions including private equity funds. During his career, he has worked on optimizing the financial health of all entities through in-depth analysis and forecasting including multi-tiered assets. He is involved in annual financial audits, working with a variety of CPA firms. Mr Makwana also has an extensive technical background managing complex business networks, data, and VOIP systems. He holds several technical certifications, including the Microsoft professional designation. During his free time, Mr. Makwana enjoys spending time with his family and volunteering with local public schools.
                </p>
            </div>
          </div>
        </div>
      </div>  

      <div class="modal fade" id="will" tabindex="-1" role="dialog" aria-labelledby="WillModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-body text-center">
              <img class="team--img my-5" src="<?php bloginfo('template_directory'); ?>/assets/img/headshot/headshot-will.png" />
              <h5>Will Caulfield</h5>
              <p class="mb-5">Business Development, Placeholder</p>
              <p class="text-left">
                A multidisciplinary contributor to 1 American Elite™, Will began his career working in design and development while traveling the world. Concluding his Bachelor of Arts in International Studies and Globalization, Will accepted positions in marketing, business development, and project management in residential real estate, where he played a part in launching a brokerage in Gulf Breeze, Florida. Most recently, Will acted as Managing Director of a commercial photography studio in Chicago, Illinois. He is a resident of Santa Monica, where he is actively engaged in the development of the 1 American Elite™ Opportunity Fund portfolio.
              </p>
            </div>
          </div>
        </div>
      </div>  

      <div class="modal fade" id="mason" tabindex="-1" role="dialog" aria-labelledby="MasonModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-body text-center">
              <img class="team--img my-5" src="<?php bloginfo('template_directory'); ?>/assets/img/headshot/headshot-mason.png" />
              <h5>Mason Brown</h5>
              <p class="mb-5">Marketing Manager, Placeholder</p>
              <p class="text-left">
                ...
              </p>
            </div>
          </div>
        </div>
      </div>  

      <div class="modal fade" id="devan" tabindex="-1" role="dialog" aria-labelledby="DevanModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-body text-center">
              <img class="team--img my-5" src="<?php bloginfo('template_directory'); ?>/assets/img/headshot/headshot-devan.png" />
              <h5>Devan Makwana</h5>
              <p class="mb-5">Lead Developer, Placeholder</p>
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
