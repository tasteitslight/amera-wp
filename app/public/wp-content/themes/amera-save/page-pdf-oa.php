<?php
/*

  Template Name: PDF OA

 */

get_header();
?>

<main role="main" class="bg-white pdf-page">

<style>
  .modal-backdrop
{
    opacity:0.00 !important;
}

.modal-open { overflow-y: auto; }
  </style>

  <div class="mt-5 pt-5 container">
  

  <iframe 
    type="application/pdf"
    src="https://drive.google.com/file/d/19z_kXiB2l0r2pFvuy3GiO7qsM2VzJcP6/preview"
    class="w-100 pdf-term"
    ></iframe>

        

</div>


      <!-- Need Help Section  -->

      <?php get_template_part('section', 'help'); ?>

    </main>

<?php
get_footer();
