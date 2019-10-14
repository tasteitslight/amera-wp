<form id="register" class="ajax-auth"  action="register" method="post">
<h3 class="pt-4 text-left">Create an American Group account</h3>
<p class="text-left">Review our investment opportunities and receive our educational newsletter. </p>
  <p class="status"></p>
  <?php wp_nonce_field('ajax-register-nonce', 'signonsecurity'); ?>         
  <label for="fname">First Name</label>
  <input id="fname" type="text" name="fname">
  <label for="lname">Last Name</label>
  <input id="lname" type="text" name="lname">
  <label for="email">Email</label>
  <input id="email" type="text" class="required email" name="email">

  <!--<label for="capitalgainsradio">Have you recognized a capital gain within the past 180 days?</label><br/>
  <input id="capitalgainsradio" type="radio" name="capitalgainsradio" value="Yes"> Yes&nbsp;&nbsp;&nbsp;
  <input id="capitalgainsradio" type="radio" name="capitalgainsradio" value="No"> No&nbsp;&nbsp;&nbsp;
  <input id="capitalgainsradio" type="radio" name="capitalgainsradio" value="Unsure"> I don't know&nbsp;&nbsp;&nbsp;
  <br/>-->

  <label for="signonpassword">Password</label>
  <input id="signonpassword" type="password" class="required" name="signonpassword" >
  <input class="submit_button" type="submit" value="Submit">
</form>