<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Amera
 */

get_header();
?>

	<div class="container d-flex align-content-middle justify-content-center text-center mt-5">
    <div class="card my-5 py-5 px-1 px-sm-5">
      <div class="card-body">
        <h1 class="" style="font-size:2em">Registered Users Only</h1>
        <p class="mt-4">Need access to see this page? <a data-toggle="modal" data-target="#modal-login" href="#pills-signin">Login</a> or <a data-toggle="modal" data-target="#modal-login" href="#pills-signup">Create An Account</a></p>
      </div>
    </div>
    
    
  </div>



<?php
get_footer();
