<?php
  $bl_helper = BlHelper::getInstance();
?>
<section id="work" class="work">
  <div class="work-inner">
    <h2 class="h2-title">実績・制作物</h2>
    <div class="work-accordion">
      <?php
        echo $bl_helper->execGetFields(Constants::PAGE_ID_WORK,
          function(&$result, $key, $value, $cnt) {
            if($cnt % 2 !== 0){
              $result .= <<< RESULT
                <div class="work-accordion-row">
                  <div class="work-accordion-row-text">{$value}</div>
                  <span class="toggle-btn toggle-open toggle-open"></dpan>
                </div>
RESULT;
            }else{
              $result .= <<< RESULT
                <div class="work-accordion-row-open">
                  {$value}
                </div>
RESULT;
            }
          }
        );
      ?>
    </div>
  </div>
</section>