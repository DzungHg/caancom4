<?php

namespace ProcessWire;

$statusArr = array("warning" => "Lo ngại", "complete" => "Hoàn thành", "progress" => "Tiến triển");
$ukLabelClass = '';
$status = '';

foreach ($page->field_repeater_matrix as $item) {
   if ($item->type == 'road_map') {
      $status = trim($item->roadmap_status);

      if ($status == $statusArr['warning']) {
         $ukLabelClass = 'uk-label-warning';
      } else if ($status == $statusArr['complete']) {
         $ukLabelClass = 'uk-label-success';
      } else {
         $ukLabelClass = '';
      }
?>
      <div>
         <div class="in-roadmap-branch">
            <div class="uk-flex">
               <div class="in-icon-wrapper circle"><?= $item->roadmap_quarter_num ?></div>
               <div class="in-roadmap-title uk-flex uk-flex-middle">
                  <h4 class="uk-margin-remove-bottom"><?= $item->roadmap_year_num ?> <span class="uk-label $ukLabelClass"><?= $item->roadmap_status ?></span></h4>
               </div>
            </div>
         </div>
         <div class="uk-card uk-card-default uk-card-small">
            <div class="uk-card-body">
               <?= $item->roadmap_content ?>
            </div>
         </div>
      </div>
<?php
   }
}

?>