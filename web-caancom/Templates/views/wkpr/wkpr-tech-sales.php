<?php

namespace ProcessWire;
$procedureList = page()->children;
?>
<pw-region id="page-content">
    <main>
        <div class="uk-section uk-padding-remove-top">
            <div class="uk-container">
                <!-- breadcrumb content begin -->
                <?php include("./views/wkpr/parts/_page-breadcrumb.php"); ?>
                <!-- breadcrumb content end -->
                <!-- grid content begin -->
                <div class="uk-grid">
                    
                    <div class="uk-width-1-1 uk-margin-bottom">
                            <table class="uk-table uk-table-divider uk-table-responsive uk-text-left">
                                <tbody>
                              
                                    <?php foreach ($procedureList as $item): ?>
                                    <tr>
                                        <td>
                                            <a href="<?=$item->url?>"><h5><?=$item->title?></h5></a>
                                        </td>
                                        <td><?=$item->body?></td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                                
                        </table>
                    </div>
            </div>
        </div>
    </main>
</pw-region>
