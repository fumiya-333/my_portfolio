<?php
  global $template;
?>
<script><?= CommonUtil::getAllConstants(); ?></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="<?= bloginfo('template_directory'); ?>/jq/jquery.js"></script>
<script src="<?= bloginfo('template_directory'); ?>/jq/plugin/slick.min.js"></script>
<script src="<?= bloginfo('template_directory'); ?>/jq/<?= pathinfo($template)["filename"] ?>.js"></script>