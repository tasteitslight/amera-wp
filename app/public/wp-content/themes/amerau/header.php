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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

  <!-- Fonts -->

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600&display=swap" rel="stylesheet"> 

  <link rel="stylesheet" href="https://use.typekit.net/xiq8kfz.css">

  <!-- FontAwesome Icons -->

  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Custom CSS -->

  <link rel="stylesheet" href="/assets/css/styles.css" >

  <!-- Custom JS -->

  <script type="text/javascript" src="/assets/js/main.js"></script>

  <!-- AOS Animate on Scroll -->

  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Form For AJAX Login Modal -->

<form class="text-center" id="login" action="login" method="post">
  <h4>Site Login</h4>
  <p class="status"></p>
  <label for="username">Username</label>
  <input id="username" type="text" name="username">
  <label for="password">Password</label>
  <input id="password" type="password" name="password">
  <br/>
  <a class="lost" href="<?php echo wp_lostpassword_url(); ?>">Lost your password?</a>
  <br/>
  <input class="submit_button" type="submit" value="Login" name="submit">
  <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
</form>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'amera' ); ?></a>

  <?php if ( current_user_can( 'manage_options' ) ) { ?>
    <nav class="navbar fixed-top admin-pad navbar-expand-lg navbar-light navbar-custom py-0">
  <?php } else { ?>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light navbar-custom py-0">
  <?php } ?>

      <a class="navbar-brand" href="<?php echo home_url(); ?>">
        <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo/logo-placeholder.png" />
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
                      <p class="pt-1 d-none d-md-block">
                        Placeholder operates commercial real estate across the country. We connect investors with high-quality assets in select business-friendly and high-growth locations.
                      </p>
                      <a class="button-custom m-0 dropdown-button" href="/investments">View Current Investments</a>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 pr-0 d-none d-lg-block dropdown-image-column">
                      <img class="dropdown-image" src="<?php bloginfo('template_directory'); ?>/assets/img/dropdown-image-investments.jpg"  />
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
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
                        <a class="button-custom m-0 dropdown-button" href="/about">Meet Our Team</a>
                      </div>
                      <div class="col-12 col-sm-6 col-lg-3 pr-0 d-none d-lg-block dropdown-image-column">
                        <img class="dropdown-image" src="<?php bloginfo('template_directory'); ?>/assets/img/dropdown-image-about-us"  />
                      </div>
                      <div class="col-12 col-sm-6 col-lg-4">
                        <a class="dropdown-item" href="/about">About Placeholder</a>
                        <a class="dropdown-item" href="/history">History &amp; Organization</a>
                        <a class="dropdown-item" href="/service">Our Services</a>
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
                          <a class="button-custom m-0 dropdown-button" href="#">How To Invest</a>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 pr-0 d-none d-lg-block dropdown-image-column">
                          <img class="dropdown-image" src="<?php bloginfo('template_directory'); ?>/assets/img/dropdown-image-resources.jpg"  />
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4">
                          <a class="dropdown-item" href="/why-real-estate">Why Invest in Real Estate?</a>
                          <a class="dropdown-item" href="#">Opportunity Zone Articles</a>
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
                <a class="nav-link py-3 login_button" id="show_login" href="">LOGIN</a>
            <?php } ?>
      
          </li>
          <a class="button-custom dropdown-button button-custom-1" href="#">Get Started</a>
        </ul>
      </div>
    </nav>