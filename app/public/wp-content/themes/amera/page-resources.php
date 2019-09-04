<?php
/*

  Template Name: Resources
 */

get_header();
?>

<main role="main">
    
      <!-- Header -->
      <header class="header-primary header-resources d-flex align-items-center justify-content-center">
        <div class="container text-center">
          <h1 class="pt-4">
            Resources
          </h1>  
          <a href="" class="button-custom mt-4">
            Subscribe to Newsletter
          </a>
        </div>
        <svg class="svg-diagonal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
          <polygon fill="#ffffff" points="0,100 100,0 100,100" />
        </svg>
      </header>

      <!-- Intro  -->

      <section class="container">  
        <div class="row d-flex justify-content-center align-items-center text-center resources-nav">
          <div class="col-3">
            <a href="">
              Articles
            </a>
          </div>
          <div class="col-3">
            <a href="/glossary">
              Glossary
            </a>
          </div>
          <div class="col-3">
            <a href="/faq">
              FAQ
            </a>
          </div>
        </div>
        <h2 class="text-center py-5">
          Featured Articles
        </h2>
        <a class="img-link" href="#">
          <img class="img-link--img" src="<?php bloginfo('template_directory'); ?>/assets/img/hero/taxadvantage.jpg"/>
          <div class="img-link--gradient-dark d-flex justify-content-center">
            <div class="my-auto">
              Featured Article Name
            </div>
          </div>
        </a>
        <div class="row my-5">
          <div class="col-sm-6">
            <a class="img-link" href="#">
              <img class="img-link--img" src="<?php bloginfo('template_directory'); ?>/assets/img/resources/1.jpg"/>
              <div class="d-flex justify-content-center"> <!-- img-link--gradient for gradients over image-->
                <!-- <div class="my-auto"> Overlay Text </div> -->
              </div>
            </a>
            <h6 class="pt-4">
              Article Category
            </h6>
            <h4>
              Top 5 Generic Blog Article Titles
            </h4>
            <p>
              This is a short blip of text from the beginning of the article...
            </p>
          </div>
          <div class="col-sm-6">
            <a class="img-link" href="#">
              <img class="img-link--img" src="<?php bloginfo('template_directory'); ?>/assets/img/resources/2.jpg"/>
              <div class="d-flex justify-content-center"> <!-- img-link--gradient for gradients over image-->
                <!-- <div class="my-auto"> Overlay Text </div> -->
              </div>
            </a>
            <h6 class="pt-4">
              Article Category
            </h6>
            <h4>
              Top 5 Generic Blog Article Titles
            </h4>
            <p>
              This is a short blip of text from the beginning of the article...
            </p>
          </div>
        </div>
        <div class="row my-5">
          <div class="col-sm-6">
            <a class="img-link" href="#">
              <img class="img-link--img" src="<?php bloginfo('template_directory'); ?>/assets/img/resources/3.jpg"/>
              <div class="d-flex justify-content-center"> <!-- img-link--gradient for gradients over image-->
                <!-- <div class="my-auto"> Overlay Text </div> -->
              </div>
            </a>
            <h6 class="pt-4">
              Article Category
            </h6>
            <h4>
              Top 5 Generic Blog Article Titles
            </h4>
            <p>
              This is a short blip of text from the beginning of the article...
            </p>
          </div>
          <div class="col-sm-6">
            <a class="img-link" href="#">
              <img class="img-link--img" src="<?php bloginfo('template_directory'); ?>/assets/img/resources/1.jpg"/>
              <div class="d-flex justify-content-center"> <!-- img-link--gradient for gradients over image-->
                <!-- <div class="my-auto"> Overlay Text </div> -->
              </div>
            </a>
            <h6 class="pt-4">
              Article Category
            </h6>
            <h4>
              Top 5 Generic Blog Article Titles
            </h4>
            <p>
              This is a short blip of text from the beginning of the article...
            </p>
          </div>
        </div>
      </section>

      <!--  Invest Section  -->

      <section class="container-fluid py-5 bg-white border-top">
        <div class="container pt-4">
          <div class="row">
            <div class="col-md-6 mb-3">
              <h1 >Ready to invest?</h1>
              <p>
                Register for an Placeholder account to access and review all fund documents. Already have an account?
                <br/><a href="" class="show_login">Click here to sign in.</a>
              </p>
              <a class="button-custom button-custom-1 mb-5 show_login">Register</a>
            </div>
            <div class="col-md-6">
              <img class="border-radius w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/invest.jpg"/>
            </div>
          </div>
        </div>        
      </section> <!-- /container -->

      <!-- Need Help Section  -->

      <section class="container-fluid border-top border-bottom--darker bg-grey pt-5 pb-2 section-help">
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
              <a href="mailto:investments@placeholder.com" class="button-custom help-button text-center">investments@placeholder.com</a>
            </div>
          </div>
        </div>
      </section> <!-- /container -->

    </main>

<?php
get_footer();
