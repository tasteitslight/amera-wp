<?php
/*

  Template Name: History

 */

get_header();
?>

<main role="main">
    
      <!-- Header -->
      <header class="header-primary header-history d-flex align-items-center justify-content-center">
        <div class="container text-center">
          <h1>
            Our History
          </h1> 
        </div>
        <svg class="svg-diagonal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
          <polygon fill="white" points="0,100 100,0 100,100" />
        </svg>
      </header>

      <!-- Intro  -->

      <section class="container-fluid text-center">
        <div class="container py-5">
          <h3 class="pb-4">
            Seasoned Professionals
          </h3>
          <p>
            American Group is comprised of over than 60 companies that work together to acquire, develop and manage multi-family housing & mixed-use projects throughout the country.
          </p>          
        </div>
      </section>

      <section class="container-fluid border-top border-bottom py-5 text-center bg-grey">
        <div class="container">
          <h1>
            Corporate Structure
          </h1>
          <div class="row mt-5">
            <div class="col border-all bg-white mx-2">
              <img class="corporate-img--lg mt-5 mb-3" src="<?php bloginfo('template_directory'); ?>/assets/img/logo/logo-american-group.png" />
              <h3>American Group</h3>
              <p>Acquisitions, Investors & Development</p>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col border-all bg-white mx-2">
              <img class="team--img my-5" src="<?php bloginfo('template_directory'); ?>/assets/img/logo/cal-american.png" />
              <h5>Cal-American</h5>
              <p>Property Management</p>
            </div>
            <div class="col border-all bg-white mx-2">
              <img class="team--img my-5" src="<?php bloginfo('template_directory'); ?>/assets/img/logo/regent-west.png" />
              <h5>Regent West</h5>
              <p>Finance & Lending</p>
            </div>
          </div>
          
        </div>        
      </section> <!-- /container -->

      <section class="container-fluid past-inv--section">
        <section class="container font-source">
          <h1 class="font-georgia text-center my-5 pb-5">
            Portfolio
          </h1>
          <div class="row my-5">
            <div class="col-3">
              <svg width="100%" height="100%" viewBox="0 0 42 42" class="donut">
                <circle class="donut-hole" cx="21" cy="21" r="15.91549430918954" fill="#fff"></circle>
                <circle class="donut-ring" cx="21" cy="21" r="15.91549430918954" fill="transparent" stroke="#C7CCD2" stroke-width="4"></circle>
                <!-- unused 10% -->
                <circle class="donut-segment" cx="21" cy="21" r="15.91549430918954" fill="transparent" stroke="#08306A" stroke-width="4" stroke-dasharray="40 60" stroke-dashoffset="0"></circle>
                <circle class="donut-segment" cx="21" cy="21" r="15.91549430918954" fill="transparent" stroke="#A93831" stroke-width="4" stroke-dasharray="20 80" stroke-dashoffset="20"></circle>
                <circle class="donut-segment" cx="21" cy="21" r="15.91549430918954" fill="transparent" stroke="#382C44" stroke-width="4" stroke-dasharray="30 70" stroke-dashoffset="50"></circle>
              </svg>
            </div>
            <div class="col-4 portfolio-table">
              <h3>BY LOCATION</h3>
                <div class="row border-bottom">
                  <div class="col-7">
                    Los Angeles, CA
                  </div>
                  <div class="col-3">
                    216
                  </div>
                  <div class="col-2">
                    7%
                  </div>
                </div> 
                <div class="row border-bottom">
                  <div class="col-7">
                    San Francisco, CA
                  </div>
                  <div class="col-3">
                    749
                  </div>
                  <div class="col-2">
                    25%
                  </div>
                </div>
                <div class="row border-bottom">
                  <div class="col-7">
                    San Diego, CA
                  </div>
                  <div class="col-3">
                    354
                  </div>
                  <div class="col-2">
                    12%
                  </div>
                </div>  
                <div class="row border-bottom--bold">
                  <div class="col-7">
                    Elsewhere, CA, WA
                  </div>
                  <div class="col-3">
                    1709
                  </div>
                  <div class="col-2">
                    56%
                  </div>
                </div>  
                <div class="row color-grey">
                  <div class="col-7">
                   </div>
                  <div class="col-3">
                    Units
                  </div>
                  <div class="col-2">
                    %
                  </div>
                </div>              
            </div>
          </div>
          <div class="row my-5">
            <div class="col-3">
              <svg width="100%" height="100%" viewBox="0 0 42 42" class="donut">
                <circle class="donut-hole" cx="21" cy="21" r="15.91549430918954" fill="#fff"></circle>
                <circle class="donut-ring" cx="21" cy="21" r="15.91549430918954" fill="transparent" stroke="#C7CCD2" stroke-width="4"></circle>
                <!-- unused 10% -->
                <circle class="donut-segment" cx="21" cy="21" r="15.91549430918954" fill="transparent" stroke="#08306A" stroke-width="4" stroke-dasharray="40 60" stroke-dashoffset="0"></circle>
                <circle class="donut-segment" cx="21" cy="21" r="15.91549430918954" fill="transparent" stroke="#A93831" stroke-width="4" stroke-dasharray="20 80" stroke-dashoffset="20"></circle>
                <circle class="donut-segment" cx="21" cy="21" r="15.91549430918954" fill="transparent" stroke="#382C44" stroke-width="4" stroke-dasharray="30 70" stroke-dashoffset="50"></circle>
              </svg>
            </div>
            <div class="col-4 portfolio-table">
                <h3>BY PROPERTY TYPE</h3>
                  <div class="row border-bottom">
                    <div class="col-7">
                      MULTIFAMILY
                    </div>
                    <div class="col-3">
                      2682
                    </div>
                    <div class="col-2">
                      89%
                    </div>
                  </div> 
                  <div class="row border-bottom">
                    <div class="col-7">
                      RETAIL
                    </div>
                    <div class="col-3">
                      170
                    </div>
                    <div class="col-2">
                      6%
                    </div>
                  </div>
                  <div class="row border-bottom">
                    <div class="col-7">
                      OFFICE
                    </div>
                    <div class="col-3">
                      134
                    </div>
                    <div class="col-2">
                      4%
                    </div>
                  </div>  
                  <div class="row border-bottom--bold">
                    <div class="col-7">
                      MIXED/OTHER
                    </div>
                    <div class="col-3">
                      42
                    </div>
                    <div class="col-2">
                      1%
                    </div>
                  </div>  
                  <div class="row color-grey">
                    <div class="col-7">
                     </div>
                    <div class="col-3">
                      Units
                    </div>
                    <div class="col-2">
                      %
                    </div>
                  </div>              
              </div>
            </div>
          </div>
        </section>
      </section>
      
      <section class="container-fluid border-top bg-white">
        <div class="container py-5 mt-5">
          <div class="row">
            <div class="col-md-6 mb-3">
              <h1 class="">View Investments</h1>
              <p>
                Register for an American Group account to access and review all fund documents. Already have an account?
                <br/><a href="#pills-signin" data-toggle="modal" data-target="#modal-login">Click here to sign in.</a>
              </p>
              <a class="button-custom button-custom-1 show_login" href="/investments">View Offerings</a>
            </div>
            <div class="col-md-6">
              <img class="w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/invest.png"/>
            </div>
          </div>
        </div> 
      </section> <!-- /container -->

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
