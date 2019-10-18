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

	<div class="container-fluid text-center">
    <h1 class="mt-5 pt-5" style="font-size:10em">404</h1>
    <p>There's nothing here. Yet.</p>
    <h5 class="mb-4">Find what you're looking for in Real Estate</h5>
    <a class="button-custom text-center mb-5" href="/investments">View Available Investments</a>
    <p class="mt-5">Need access to see this page? <a data-toggle="modal" data-target="#modal-login" href="#pills-signin">Login</a></p>
    <div style="height:150px"></div> 
    
  </div>



<?php
get_footer();
