

<form id="register" class="ajax-auth"  action="register" method="post">
<h3 class="pt-4 text-left">Create an American Group account</h3>
<p class="text-left">Review our investment opportunities and receive our educational newsletter. </p>
  <p class="status"></p>
  <?php wp_nonce_field('ajax-register-nonce', 'signonsecurity'); ?>         
  <input id="fname" type="text" name="fname" placeholder="First Name">
  <input id="lname" type="text" name="lname" placeholder="Last Name">
  <input id="email" type="text" class="required email" name="email" placeholder="Email">
  <input id="signonpassword" type="password" class="required" name="signonpassword" placeholder="Password">
  <div class="radios">
    <input type="radio" id="ac1" name="ac" value="yes">
    <label for="ac1">I'm an <a href="#" data-toggle="tooltip" data-placement="right" title="Your income is >$200K, or >$300K w/ spouse; OR your net worth is >$1M alone or combined with spouse">Accredited Investor <i class="fa fa-info-circle"></i></a></label>
    <br/>
    <input type="radio" id="ac2" name="ac" value="no">
    <label for="ac2">I'm not an Accredited Investor</label>
  </div>
  <input class="submit_button" type="submit" value="Submit">
</form>

<script>



</script>