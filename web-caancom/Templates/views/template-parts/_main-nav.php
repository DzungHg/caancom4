<?php

namespace ProcessWire;

$homeMenu = pages('/');
$menuTaiNguyen = pages()->get('/tai-nguyen/');
$menuKinhDoanh = pages()->get('/kinh-doanh/');
$searchPage = pages()->get('template=search')->url;
$pageWorkProced = pages("/quy-trinh-caan");

?>
<nav class="uk-navbar-container uk-navbar-transparent uk-visible@m uk-margin-top uk-margin-bottom" data-uk-navbar>
    <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
            <li>
                <a href="<?= $homeMenu->url ?>"><?= $homeMenu->title ?></a>
            </li>
            <li>
                <a href="<?= $menuKinhDoanh->url ?>" data-uk-icon="icon: fa-sort-down; ratio: 0.023"><?= $menuKinhDoanh->title ?></a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <?php foreach ($menuKinhDoanh->children as $item) { ?>
                            <li><a href="<?= $item->url ?>"><?= $item->title ?></a></li>

                        <?php
                        }
                        ?>

                    </ul>
                </div>
            </li>
            <li>
                <a href="#" data-uk-icon="icon: fa-sort-down; ratio: 0.023">Công Ty</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li><a href="/cong-ty/ve-ca-an/">Về Ca An</a></li>
                        <li><a href="/blog/">Blog</a></li>
                        <li><a href="/cong-ty/tuyen-dung/">Tuyển Dụng</a></li>
                        <li><a href="/cong-ty/lien-he/">Liên Hệ</a></li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="#" data-uk-icon="icon: fa-sort-down; ratio: 0.023">Tài Nguyên</a>
                <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                    <div class="uk-navbar-dropdown-grid uk-child-width-1-2" data-uk-grid>
                        <div>
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="/tai-nguyen/qua-trinh-phat-trien">Quá Trình Phát Triển</a></li>
                                <li><a href="/tai-nguyen/ho-so-nang-luc">Hồ Sơ Năng Lực</a></li>
                                <li><a href="<?=$pageWorkProced->url?>"><?=$pageWorkProced->title?></a></li>
                            </ul>
                        </div>
                        <div>
                            <ul class="uk-nav uk-navbar-dropdown-nav">

                                <li>
                                    <p><?= $menuTaiNguyen->meta_description ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="uk-navbar-right">
        <div>
            <a class="uk-navbar-toggle" data-uk-search-icon href="<?= $searchPage ?>"></a>
            <div class="uk-drop" data-uk-drop="mode: click; pos: left-center; offset: 0">
                <form class="uk-search uk-search-navbar uk-float-right" action="<?= $searchPage ?>" method="get">
                    <input class="uk-search-input" type="search" name="q" id="q" placeholder="Search..." autofocus>
                </form>
            </div>
        </div>
    </div>
</nav>