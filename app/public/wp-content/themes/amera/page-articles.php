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

      <!-- View Investments Section -->

      <?php get_template_part('section', 'viewInvestments'); ?>

      <!-- Need Help Section  -->

      <?php get_template_part('section', 'help'); ?>

    </main>

<?php
get_footer();
