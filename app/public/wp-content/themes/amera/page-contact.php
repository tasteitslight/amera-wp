<?php
/*

  Template Name: Contact

 */

get_header();
?>

<main role="main">
      
      <!-- Header -->

      <header class="header-primary header-offering d-flex align-items-center justify-content-center">
        <div class="container text-center">
          <h1 class="mb-3">
            Contact
          </h1>
        </div>
        <svg class="svg-diagonal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
          <polygon fill="white" points="0,100 100,0 100,100" />
        </svg>
      </header>

      <!-- Lead  -->

      <section class="container-fluid my-5">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="card-white">
                <h2>
                  Address
                </h2>
                <div class="separator-gradient mb-3"></div>
                <div class="row fund-table">
                  <div class="col-6">
                    <h5>1109 Westwood Ave</h5>
                    <h5>Los Angeles, CA 90402</h5>
                  </div>
                </div>
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

     

     <!-- Need Help Section -->

     <?php get_template_part('section', 'help'); ?>

    </main>

<?php
get_footer();
