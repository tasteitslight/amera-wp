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
  
  <!-- Favicon -->

  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-KQVF2TD');</script>
  <!-- End Google Tag Manager -->

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

  <!-- Global site tag (gtag.js) - Google Ads: 702438112 -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-702438112"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-702438112');
  </script>

  <!-- Event snippet for Page View conversion page
  In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
  <script>
  function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-702438112/4mJ-CN7RgLUBEOC1-c4C',
      'event_callback': callback
  });
  return false;
  }
  </script>




  <!-- Facebook Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1188770888177726');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1188770888177726&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Facebook Pixel Code -->
  
</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQVF2TD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

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

<div id="page landing" class="site bg-landing">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'amera' ); ?></a>