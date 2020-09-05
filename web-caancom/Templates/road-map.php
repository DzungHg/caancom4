<?php namespace ProcessWire;
/**
 * render chỉ dùng 1  uk-label-success, bỏ bớt: uk-label-warning; uk-label, Lo ngại
 */

function renderRoadMapItems(Page $page)
{
    $out = '';
    $statusArr = array("warning"=>"Lo ngại", "complete"=>"Hoàn thành", "progress"=>"Tiến triển");
    $ukLabelClass = '';
    $status = '';

    foreach($page->field_repeater_matrix as $item) {
        if($item->type == 'road_map') {
            $status = trim($item->roadmap_status);

            if($status == $statusArr['warning'])
            { 
                $ukLabelClass = 'uk-label-warning';
            } else if($status == $statusArr['complete'])
            {
                $ukLabelClass = 'uk-label-success';
            } else
            {
                $ukLabelClass ='';
            }
            
            $out .= "
            <div>
                <div class='in-roadmap-branch'>
                    <div class='uk-flex'>
                        <div class='in-icon-wrapper circle'>$item->roadmap_quarter_num</div>
                        <div class='in-roadmap-title uk-flex uk-flex-middle'>
                            <h4 class='uk-margin-remove-bottom'>$item->roadmap_year_num <span class='uk-label $ukLabelClass'>$item->roadmap_status</span></h4>
                        </div>
                    </div>
                </div>
                <div class='uk-card uk-card-default uk-card-small'>
                    <div class='uk-card-body'>
                    $item->roadmap_content
                    </div>
                </div>
            </div>
            ";
        }
        
    }
    return $out;
}

?>

<pw-region id="page-content">
<main>    
      <div class="uk-section uk-padding-remove-top">
         <div class="uk-container">
                    <!-- breadcrumb content begin -->
                    <?php include("./blocks/_page-breadcrumb.php"); ?>
                    <!-- breadcrumb content end -->
                    <!-- grid content begin -->
                    <div class="uk-grid">
                        <div class="uk-flex uk-flex-center">
                            <div class="uk-width-1-1 uk-width-3-4@m">
                                <?php echo $page->body ?>
                            </div>
                        </div>
                    </div>
                    <!-- grid content end -->

                    <!-- grid content begin -->
                    <div class="uk-grid">
                        <div class="uk-width-1-1 in-roadmap uk-margin-bottom">
                            <hr>
                            <div class="uk-grid-small uk-child-width-1-1 uk-child-width-1-3@m" data-uk-grid>
                                <!-- render roadmap items -->
                                <?=renderRoadMapItems($page) ?>
                                <!-- render roadmap items end-->
                            </div>
                        </div>
                    </div>
                    <!-- grid content end -->
                                  
         </div>
      </div>
</main>			
</pw-region>

