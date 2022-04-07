<html>
  <?php get_template_part('head'); ?>
  <body>
    <div class="wrapper">
      <?php get_header(); ?>
      <main>
        <?php get_template_part('parts/hero'); ?>
        <?php get_template_part('parts/work'); ?>
        <?php get_template_part('parts/service'); ?>
        <?php get_template_part('parts/about'); ?>
        <?php get_template_part('parts/skill'); ?>
        <?php get_template_part('parts/contact'); ?>
      </main>
      <?php get_template_part('script'); ?>
      <?php get_footer(); ?>
    </div>
  </body>
</html>