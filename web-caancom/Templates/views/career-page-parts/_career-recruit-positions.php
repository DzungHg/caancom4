<?php

namespace ProcessWire;

$jobList = $page->children("career_job_on=1");
?>
<div class="uk-grid">
    <div class="uk-width-1-1 uk-margin-bottom">
        <h2 class="uk-text-center">Các Vị Trí</h2>
        <table class="uk-table uk-table-divider uk-table-responsive uk-text-left">
            <tbody>
                <?php
                $out = '';
                foreach ($jobList as $row) {

                    $out .= "<tr>
                            <td>
                                <h4>$row->meta_title</h4>
                            </td>
                            <td>$row->career_job_working_place</td>
                            <td class='uk-text-left uk-text-right@m'><a class='uk-button uk-button-primary uk-border-rounded' href='$row->url'>Xem chi tiết <span data-uk-icon='icon: fa-arrow-right; ratio: 0.028'></span></a></td>
                        </tr>";
                };
                echo $out; ?>
            </tbody>
        </table>

    </div>
</div>