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

<div id="page landing" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'amera' ); ?></a>