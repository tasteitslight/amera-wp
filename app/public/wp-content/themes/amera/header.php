<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Amera
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149851832-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-149851832-1');
  </script>


	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  
  <!-- Favicon -->

  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- Fonts -->

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600&display=swap" rel="stylesheet"> 

  <link rel="stylesheet" href="https://use.typekit.net/xiq8kfz.css">

  <!-- FontAwesome Icons -->

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" rel="stylesheet">

  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Lightbox -->

  <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">
  
  <!-- Custom CSS -->

  <!-- <link rel="stylesheet" href="/assets/css/styles.css" > -->

  <!-- SmoothScroll -->

  <!-- <script type="text/javascript" src="/js/smoothscroll.min.js"></script> -->

  <!-- Custom JS -->

  <!-- <script type="text/javascript" src="/assets/js/main.js"></script> -->

  <!-- AOS Animate on Scroll -->

  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- Calculator -->

  <!--<script type="text/javascript" src="/calculator.js"></script>-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Signup/Signin Modal -->

<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-login" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md">
    <div class="modal-content login-modal">
      <div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="w-100 d-flex justify-content-center pt-3 pb-5">
        <img class="login-logo" src="<?php bloginfo('template_directory');?>/assets/img/logo/logo-ag-globe.png" />
      </div>
      <ul class="nav nav-pills nav-fill my-2" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link" id="pills-signin-tab" data-toggle="pill" href="#pills-signin" role="tab" aria-controls="pills-signin" aria-selected="true">Log in</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-signup-tab" data-toggle="pill" href="#pills-signup" role="tab" aria-controls="pills-signup" aria-selected="false">Create an account</a>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade" id="pills-signin" role="tabpanel" aria-labelledby="pills-signin-tab">
          
        <!-- Insert Signin Form Here -->

        <?php get_template_part('ajax', 'signin'); ?>    

        </div>
        <div class="tab-pane fade" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
        
        <!-- Insert Signup Form Here -->

        <?php get_template_part('ajax', 'auth'); ?>             

        </div>
      </div>
    </div><!-- end modal-content -->
  </div><!-- end modal-dialog -->
</div><!-- end modal -->

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'amera' ); ?></a>

  <?php if ( current_user_can( 'manage_options' ) ) { ?>
    <nav class="navbar fixed-top admin-pad navbar-expand-lg navbar-light navbar-custom py-0">
  <?php } else { ?>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light navbar-custom py-0">
  <?php } ?>

      <a class="navbar-brand" href="<?php echo home_url(); ?>">
        <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo/logo-ag-horiz.png" />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item dropdown position-static">
            <a class="nav-link py-3" onclick="showDiv()" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Investments</a>
            <div class="dropdown-menu w-100 dropdown-menu-custom" aria-labelledby="navbarDropdown">
              <form>
                <div class="container-fluid dropdown-form-container">
                  <div class="row dropdown-row">
                    <div class="col-12 col-lg-5">
                      <p class="pt-1 d-none d-md-block pb-2 pb-lg-0">
                        American Group operates commercial real estate across the country. We connect investors with high-quality assets in select business-friendly and high-growth locations.
                      </p>
                      <a class="button-custom m-0 dropdown-button" href="/investments">View Current Investments</a>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 pr-0 d-none d-lg-block dropdown-image-column">
                      <img class="dropdown-image" src="<?php bloginfo('template_directory'); ?>/assets/img/general/dropdown-image-investments.jpg"  />
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 pt-2 pt-lg-0">
                      <a class="dropdown-item" href="/opportunity-fund">What Are Opportunity Funds?</a>
                      <a class="dropdown-item" href="/tax-advantage">Tax Advantages of QOZ Funds</a>
                      <a class="dropdown-item" href="/1031-exchange">1031 vs QOZ Funds</a>
                      <a class="dropdown-item" href="/rules">Rules & Regulations</a>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </li>
          <li class="nav-item dropdown position-static">
              <a class="nav-link py-3" onclick="showDiv()" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
              <div class="dropdown-menu w-100 dropdown-menu-custom" aria-labelledby="navbarDropdown">
                <form>
                  <div class="container-fluid dropdown-form-container">
                    <div class="row dropdown-row">
                      <div class="col-12 col-lg-5">
                        <p class="pt-1 d-none d-md-block">
                          Our team is backed by over 150 years of experience in commercial and multifamily real estate. We specialize in generating reliable, long term returns for our investors.
                        </p>
                        <a class="button-custom m-0 dropdown-button" href="/service">Our Service</a>
                      </div>
                      <div class="col-12 col-sm-6 col-lg-3 pr-0 d-none d-lg-block dropdown-image-column">
                        <img class="dropdown-image" src="<?php bloginfo('template_directory'); ?>/assets/img/general/dropdown-image-about-us"  />
                      </div>
                      <div class="col-12 col-sm-6 col-lg-4 pt-2 pt-lg-0">
                        <a class="dropdown-item" href="/about">About American Group</a>
                        <a class="dropdown-item" href="/about/#team">Meet The Team</a>
                        <a class="dropdown-item" href="/history">History &amp; Organization</a>
                        <a class="dropdown-item" href="/partners">Partners &amp; Community</a>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            <li class="nav-item dropdown position-static">
                <a class="nav-link py-3" onclick="showDiv()" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Resources</a>
                <div class="dropdown-menu w-100 dropdown-menu-custom" aria-labelledby="navbarDropdown">
                  <form>
                    <div class="container-fluid dropdown-form-container">
                      <div class="row dropdown-row">
                        <div class="col-12 col-lg-5">
                          <p class="pt-1 d-none d-md-block">
                            Learn why we believe Real Estate is the best investment and how when coupled with Opportunity Funds it can provide unprecedented returns.
                          </p>
                          <a class="button-custom m-0 dropdown-button" href="/how-to-invest">How To Invest</a>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 pr-0 d-none d-lg-block dropdown-image-column">
                          <img class="dropdown-image" src="<?php bloginfo('template_directory'); ?>/assets/img/general/dropdown-image-resources.jpg"  />
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 pt-2 pt-lg-0">
                          <a class="dropdown-item" href="/why-real-estate">Why Invest in Real Estate?</a>
                          <a class="dropdown-item" href="/resources">Opportunity Zone Articles</a>
                          <a class="dropdown-item" href="/glossary">Glossary</a>
                          <a class="dropdown-item" href="/faq">FAQ</a>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </li>
        </ul>
        <ul class="navbar-nav ml-auto ">
          <li class="nav-item nav-item-border-right" style="border-left:none">

            <?php if (is_user_logged_in()) { ?>
                <a class="nav-link py-3 login_button" href="<?php echo wp_logout_url( home_url() ); ?>">LOGOUT</a>
            <?php } else { ?>
                <a href="#pills-signin" data-toggle="modal" data-target="#modal-login" class="nav-link py-3">LOGIN</a>
            <?php } ?>
      
          </li>

            <?php if (is_user_logged_in()) { ?>
              <a class="button-custom dropdown-button text-center" href="/dashboard" >Dashboard</a>
            <?php } else { ?>
              <a class="button-custom dropdown-button text-center" href="/how-to-invest" >Get Started</a>
            <?php } ?>
        </ul>
      </div>
    </nav>