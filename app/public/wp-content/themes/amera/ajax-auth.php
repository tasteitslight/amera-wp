<form id="register" class="ajax-auth"  action="register" method="post">
  <p class="status"></p>
  <?php wp_nonce_field('ajax-register-nonce', 'signonsecurity'); ?>         
  <label for="fname">First Name</label>
  <input id="fname" type="text" name="fname">
  <label for="lname">Last Name</label>
  <input id="lname" type="text" name="lname">
  <label for="email">Email</label>
  <input id="email" type="text" class="required email" name="email">
  <label for="signonpassword">Password</label>
  <input id="signonpassword" type="password" class="required" name="signonpassword" >
  <input class="submit_button" type="submit" value="SIGNUP">
</form>