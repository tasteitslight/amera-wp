<?php
	
	wp_register_script('calc-script', get_template_directory_uri() . '/js/calculator.js', '', '', true ); 
  wp_enqueue_script('calc-script');

?>

<section class="container-fluid border-top gradient-gtw pb-5">
  <div class="container text-center">
    <img class="d-block m-auto mockup-mac" src="<?php bloginfo('template_directory'); ?>/assets/img/mockup/invest-macbook.png"/>
    <h1 class="mt-1 mt-sm-4 mb-4">
      Create an American Group Account
    </h1>
    <h2 class="mb-4">
      To Review Fund Documents &amp; Invest When You're Ready
    </h2>
    <a href="#pills-signup" data-toggle="modal" data-target="#modal-login" class="button-custom mb-4">
      Create An Account
    </a>
    <p class="mt-4">
      Already have an account? <a href="#pills-signin" data-toggle="modal" data-target="#modal-login">Sign In</a>
    </p>
  </div>
</section>

