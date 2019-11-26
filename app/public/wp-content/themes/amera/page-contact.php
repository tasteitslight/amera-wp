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
              <div class="mt-5 card-white">
                <h2>
                  Direct
                </h2>
                <div class="separator-gradient mb-3"></div>
                <div class="row fund-table">
                  <div class="col-6">
                    <h5><a href="tel:8889454242">888-945-4242</a></h5>
                    <h5><a href="mailto:invest@americangroup.us" target="_blank">invest@americangroup.us</a></h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      

     <!-- Need Help Section -->

     <?php get_template_part('section', 'help'); ?>

    </main>

<?php
get_footer();
