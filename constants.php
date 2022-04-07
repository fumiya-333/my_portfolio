<?php
class Constants {
  const TITLE = "Tsuji My Portfolio";

  const RATE_PLUN_SLUG = "rate-plun";

  const WORK_URL = "#work";
  const SERVICE_URL = "#service";
  const ABOUT_URL = "#about";
  const SKILL_URL = "#skill";
  const CONTACT_URL = HOME_URL . "/contact";
  const PRICE_URL = HOME_URL . "/price-detail";

  const KEY_NAME = "name";
  const KEY_EMAIL = "email";

  const NAME = "氏名";
  const EMAIL = "メールアドレス";

  const INPUT_ERR_MSG = "を入力してください";

  const PAGE_ID_WORK = 2381;

  /** 電話番号 */
  const PHONE_NUMBER_VAL = "090-3613-0104";

  /** お問い合わせフォームID */
  const FORM_ID_CONTACT = 2377;
  /** 料金詳細ページID */
  const PAGE_ID_PRICE_DETAIL = 2149;

  /**
   * 定数を配列として全て取得する
   */
  public static function getConstants() {
    $oClass = new ReflectionClass(__CLASS__);

    return $oClass->getConstants();
  }
}
