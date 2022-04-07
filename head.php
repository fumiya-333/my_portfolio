<?php
  global $template;
?>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <!-- 作成するサイトによっては消す start -->
  <meta name="robots" content="noindex">
  <!-- 作成するサイトによっては消す end -->
  <meta name="format-detection" content="telephone=no">
  <!-- <meta name=”description“ content=“日本人へのTOEFL指導歴豊かな講師陣のコーチング型TOEFLスクール“> -->
  <link rel="stylesheet" href="<?= bloginfo('template_directory') ?>/css/<?= pathinfo($template)["filename"] ?>.css">
  <link rel="stylesheet" type="text/css" href="<?= bloginfo('template_directory') ?>/css/plugin/fontawesome-free-6.1.1-web/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="<?= bloginfo('template_directory') ?>/css/plugin/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="<?= bloginfo('template_directory') ?>/css/plugin/slick.css">

  <title><?= Constants::TITLE ?></title>
  <?php wp_head(); ?>
</head>