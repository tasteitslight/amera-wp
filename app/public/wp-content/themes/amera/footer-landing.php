<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Amera
 */

?>

<footer class="container-fluid footer-container-fluid--landing border-top--darker">
  <div class="container footer-disclaimer">
      <p>
        AmericanGroup.us is a website owned and operated by Placeholder Company, Inc. (“American Group”). By accessing the website and any pages thereof, you agree to be bound by the <a href="/terms">Terms of Use</a> and <a href="/privacy">Privacy Policy</a>, as each may be amended from time to time. American Group is not a registered broker, dealer, investment advisor, investment manager or registered funding portal. The securities offerings on this site are available only to <a href="/glossary#a">"Accredited Investors"</a> – generally, natural persons must have a net worth of over $1 million (exclusive of residence) or income in excess of $200,000 individually or $300,000 jointly with a spouse. The securities are offered in reliance on an exemption from the registration requirements of the Securities Act of 1933, as amended, and are not required to comply with specific disclosure requirements that apply to registration under the Securities Act. Neither the Securities and Exchange Commission nor any state regulator has passed upon the merits of or given its approval to the securities, the terms of the offerings, or the accuracy or completeness of any offering materials. The securities are subject to legal restrictions on transfer and resale and investors should not assume they will be able to resell their securities. Investing in securities involves risk, and investors should be able to bear the loss of their entire investment. All investors should make their own determination of whether or not to make any investment, based on their own independent evaluation and analysis.
      </p>
      <p>
        The information on the website includes historic results of certain investments made by American Group; however, past performance is no guarantee of future results. Historic returns may not reflect actual future performance, may not reflect potential deductions for fees which may reduce actual realized returns. Investors are advised that any investment with American Group may experience different results from those shown. Projected IRR and multiples are based upon the anticipated redemption or maturity date. All investments offered by American Group involve risk and may result in loss.
      </p>
      <p>
        Some of the statements contained on the American Group website are forward-looking statements. You should not rely upon forward-looking statements as predictions of future events. These statements involve known and unknown risks, uncertainties, and other factors that may cause an investment’s actual results, levels of activity, performance, or achievements to be materially and adversely different from those expressed or implied by these forward-looking statements. Forward-looking statements may be identified by terminology such as “may,” “will,” “should,” “expects,” “plans,” “anticipates,” “believes,” “targeted,” “projected,” “underwritten,” “estimates,” “predicts,” “potential,” or “continue” or the negative of these terms or other comparable terminology.
      </p>
      <p>
        Although American Group believes that the expectations reflected in the forward-looking statements are reasonable, guarantees of future results, levels of activity, performance or achievements cannot be made. Moreover, neither American Group nor any other person or entity assumes responsibility for the accuracy and completeness of forward-looking statements. Neither American Group nor any other person or entity is under any duty to update any of the forward-looking statements to conform them to actual results.
      </p>
      <p>
        The information on this website contains a preliminary summary of the purpose and principal business terms of the investments offered by American Group. This summary does not purport to be complete and is qualified in its entirety by reference to the more detailed discussion contained in the actual text of the definitive documentation regarding such investment. Further, the overviews presented on the American Group website do not constitute an offer to sell or a solicitation of an offer to make an investment herein. No such offer or solicitation will be made prior to the delivery of definitive documentation relating to such investment. The information on this website does not constitute an offer of, or the solicitation of an offer to buy or subscribe for, any securities to any person in any jurisdiction to whom or in which such offer or solicitation is unlawful.
      </p>
      <p>
        Before making an investment decision with respect to any offering, potential investors are advised to carefully read the related subscription and offering memorandum documents and to consult with their tax, legal and financial advisors. American Group does not give investment advice or recommendations regarding any offering posted on the website.
      </p>
      <p class="text-center pb-5 mb-0">
        &copy; 2019 American Group
      </p>
  </div>
</footer>

<?php wp_footer(); ?>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    <!-- Animate on Scroll -->

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <!-- Lightbox -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js.map"></script>

    <script>

    // Animate on Scroll
    AOS.init();

    // Lightbox
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox();
    });

    // Nav Transition on Scroll
    $(function changeNav() {
        $(document).scroll(function () {
          var $nav = $(".navbar-custom");
          $nav.toggleClass('scrolled', $(this).scrollTop() > 1 );
          var $navItem = $('.nav-item');
          $navItem.toggleClass('scrolled', $(this).scrollTop() > 1 );
        });
      });

    // Signup / Login Modal Pill Selector
    $('#modal-login').on('show.bs.modal', function (event) {
    // Button that triggered the modal
    var link = $(event.relatedTarget)
    // the modal
    var modal = $(this);
    //show tab
    modal.find('[href="'+link.attr("href")+'"]').tab('show');
    });

    </script>
    
</body>
</html>
