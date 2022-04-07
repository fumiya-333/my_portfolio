<header>
  <div class="header-inner">
    <div class="header-title">
      <h1><a href="<?= HOME_URL ?>"><?= Constants::TITLE ?></a></h1>
    </div>
    <nav class="nav" id="nav">
      <ul>
        <li><a href="<?php echo HOME_URL ?>">トップ</a></li>
        <li><a class="page-in-scroll" href="<?php echo Constants::WORK_URL ?>">実績・制作物</a></li>
        <li><a class="page-in-scroll" href="<?php echo Constants::SERVICE_URL ?>">サービス</a></li>
        <li><a class="page-in-scroll" href="<?php echo Constants::ABOUT_URL ?>">サイトについて</a></li>
        <li><a class="page-in-scroll" href="<?php echo Constants::SKILL_URL ?>">スキル</a></li>
        <li><a href="<?php echo Constants::CONTACT_URL ?>">お問い合わせ</a></li>
      </ul>
    </nav>
    <div class="hamburger">
      <button class="btn-hamburger" id="btn-hamburger">
        <span class="btn-hamburger-line" id="btn-hamburger-line"></span>
      </button>
    </div>
</header>