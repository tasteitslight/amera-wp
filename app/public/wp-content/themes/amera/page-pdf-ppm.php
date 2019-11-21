<?php
/*

  Template Name: PDF PPM

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
    src="https://drive.google.com/file/d/1PFbywSEAPTZGSDcRc9LUBS8orjS4D-cS/preview"
    class="w-100 pdf-term"
    ></iframe>

        

</div>


      <!-- Need Help Section  -->

      <?php get_template_part('section', 'help'); ?>

    </main>

<?php
get_footer();
