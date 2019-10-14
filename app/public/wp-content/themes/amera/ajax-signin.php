<form class="" id="login" action="login" method="post">              
  <p class="status"></p>
  <label for="username">Email</label>
  <input id="username" type="text" name="username">
  <label for="password">Password</label>
  <input id="password" type="password" name="password">
  <br/>
  <a class="lost" href="<?php echo wp_lostpassword_url(); ?>">Lost your password?</a>
  <br/>
  <input class="submit_button" type="submit" value="Submit" name="submit">
  <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
</form>