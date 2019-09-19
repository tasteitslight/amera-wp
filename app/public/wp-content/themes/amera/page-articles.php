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
          <div class="col-4">
            <a href="#">
              <img class="border-radius w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/resources/1.jpg"/>
            </a>
          </div>
          <div class="col-8">
            <a class="font-georgia" href="#">
              <h5 class="color-dark">
                Article Title
              </h5>
              <p >
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus nisl sed neque condimentum, a congue elit faucibus. Morbi ultricies enim ipsum, ac faucibus arcu lobortis in.
              </p>
            </a>
          </div>
        </div>
        <div class="row hover-float my-5 pb-5">
          <div class="col-4">
            <a href="#">
              <img class="border-radius w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/resources/2.jpg"/>
            </a>
          </div>
          <div class="col-8">
            <a class="font-georgia" href="#">
              <h5 class="color-dark">
                Article Title
              </h5>
              <p >
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus nisl sed neque condimentum, a congue elit faucibus. Morbi ultricies enim ipsum, ac faucibus arcu lobortis in.
              </p>
            </a>
          </div>
        </div>
        <div class="row hover-float my-5 pb-5">
          <div class="col-4">
            <a href="#">
              <img class="border-radius w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/resources/3.jpg"/>
            </a>
          </div>
          <div class="col-8">
            <a class="font-georgia" href="#">
              <h5 class="color-dark">
                Article Title
              </h5>
              <p >
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus nisl sed neque condimentum, a congue elit faucibus. Morbi ultricies enim ipsum, ac faucibus arcu lobortis in.
              </p>
            </a>
          </div>
        </div>
        
      </section>

      <section class="container-fluid border-top bg-white">
        <div class="container py-5 mt-5">
          <div class="row">
            <div class="col-md-6 mb-3">
              <h1 class="">View Investments</h1>
              <p>
                Register for an American Group account to access and review all fund documents. Already have an account?
                <br/><a href="#pills-signin" data-toggle="modal" data-target="#modal-login">Click here to sign in.</a>
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
