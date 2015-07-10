<form action='admin.php?page=travelinsurance' method="post">
  <!-- Flash Messages -->
	<?php if(isset($status)) : ?>
		<div id="message" class="<?php echo $class_message ?> notice is-dismissible below-h2">
			<p><?php echo $message; ?></p>
			<button type="button" class="notice-dismiss"></button>
		</div>
	<?php endif; ?>
  
  <!-- SIGN UP -->
	<h3>1 - <?php echo $str->t('Not yet an affiliate?'); ?></h3>
  <p>
    <?php echo $str->t('Real Travel Insurance Affiliate Program is focused on people who wish') ?>
    <strong><?php echo $str->t('to raise their profits') ?></strong>
    <?php echo $str->t('quickly, through their'); ?>
    <strong><?php echo $str->t('contacts network'); ?></strong>.
  </p>
  <p>
    <?php echo $str->t('Sign up on our Affiliate Program') ?>.<br />

    <?php echo $str->t('Register in'); ?>:
    <a href='https://www.seguroviagem.srv.br/afiliados' target="_blank">
      https://www.seguroviagem.srv.br/afiliados
    </a>
  </p>


  <!-- FILL UP -->
  <h3>2 - <?php echo $str->t('Inform your affiliate key'); ?></h3>
  <p><?php echo $str->t('Once an affiliate, you can copy your affiliate key and paste it on this field') ?></p>
  <p>
    <label><?php echo $str->t('Affiliate key'); ?>:</label><br/>
    <input size="40" type="text" name="wp-travel-insurance-metas[travel-insurance-token]" value="<?php echo $token; ?>"/>
    <input type="submit" value="<?php echo $str->t('Save'); ?>" class="button-primary" name="submit"/>  
  </p>


  <!-- USE -->
  <h3>3 - <?php echo $str->t('Use your shortcode'); ?></h3>
  <p>
    <?php echo $str->t('Copy this shortcode and paste it on a post') ?>.<br/>
    <?php echo $str->t('After that, you should save your post and publish it') ?>.<br/>
    <?php echo $str->t('There you go! Now you have your own travel insurance comparison site.') ?><br/>
  </p>
  <div class="updated notice-info notice below-h2">
    [travelinsurance]
  </div>
</form>
