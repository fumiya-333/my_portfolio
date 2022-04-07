<?php
  add_filter("mwform_error_message_mw-wp-form-" . Constants::FORM_ID_CONTACT, "error_message", 10, 3);
?>
<html>
  <?php get_template_part('head'); ?>
  <body>
    <div class="wrapper">
      <?php get_header("contact"); ?>
      <main>
        <?php get_template_part('parts/contact_form'); ?>
      </main>
      <?php get_template_part('script'); ?>
      <?php get_footer(); ?>
    </div>
  </body>
</html>