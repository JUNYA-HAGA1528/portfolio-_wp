<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="format-detection" content="telephone=no" />
        <?php wp_head(); ?>
  </head>
<body>

<?php
    $top = esc_url( home_url( '/' ) );
    $campaign = esc_url( home_url( '/campaign/' ) );
    $about = esc_url( home_url( '/about/' ) );
    $information = esc_url( home_url( '/information/' ) );
    $blog = esc_url( home_url( '/blog/' ) );
    $voice = esc_url( home_url( '/voice/' ) );
    $price = esc_url( home_url( '/price/' ) );
    $faq = esc_url( home_url( '/faq/' ) );
    $privacy = esc_url( home_url( '/privacy/' ) );
    $termsofservise = esc_url( home_url( '/terms-of-service/' ) );
    $contact = esc_url( home_url( '/contact/' ) );
    $sitemap = esc_url( home_url( '/sitemap/' ) );
?> 

    <!-- header -->
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">
                <a href="<?php echo $top ?>" class="header__logoLink">
                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/header_logo.png" alt="ヘッダーロゴ">
                </a>
            </h1>
            <button class="header__hamburger js-hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <!-- headerメニュー sp -->
            <nav class="header__sp-nav sp-nav js-drawer-menu">
                <div class="sp-nav__wrapper">
                    <div class="sp-nav__body">
                        <ul class="sp-nav__items">
                            <li class="sp-nav__item">
                                <div class="sp-nav__item-title">
                                    <a href="<?php echo $campaign ?>">猫ちゃん一覧</a>
                                </div>
                                <div class="sp-nav__item-normal">
                                    <?php
                                        $terms = get_terms('campaign_category');
                                        foreach ( $terms as $term ) {
                                        echo '<a href="'.get_term_link($term).'">'.esc_html($term->name).'</a>';
                                        }
                                    ?>
                                </div>
                            </li>
                        </ul>
                        <ul class="sp-nav__items">
                            <li class="sp-nav__item">
                                <div class="sp-nav__item-title">
                                    <a href="<?php echo $about ?>">私たちについて</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="sp-nav__items">
                            <li class="sp-nav__item">
                                <div class="sp-nav__item-title">
                                    <a href="<?php echo $information ?>">環境・健康管理</a>
                                </div>
                                <div class="sp-nav__item-normal">
                                    <a href="<?php echo esc_url( home_url( '/information#info1' ) ); ?>">毎日の健康管理</a>
                                    <a href="<?php echo esc_url( home_url( '/information#info2' ) ); ?>">スタッフ教育の徹底</a>
                                    <a href="<?php echo esc_url( home_url( '/information#info3' ) ); ?>">獣医師との提携</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="sp-nav__items">
                            <li class="sp-nav__item">
                                <div class="sp-nav__item-title">
                                    <a href="<?php echo $blog ?>">ブログ</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="sp-nav__body">
                        <ul class="sp-nav__items">
                            <li class="sp-nav__item">
                                <div class="sp-nav__item-title">
                                    <a href="<?php echo $voice ?>">お客様の声</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="sp-nav__items">
                            <li class="sp-nav__item">
                                <div class="sp-nav__item-title">
                                    <a href="<?php echo $price ?>">料金一覧</a>
                                </div>
                                <div class="sp-nav__item-normal">
                                    <a href="<?php echo esc_url( home_url( '/price#price1' ) ); ?>">入場料金</a>
                                    <a href="<?php echo esc_url( home_url( '/price#price2' ) ); ?>">アイスドリンク</a>
                                    <a href="<?php echo esc_url( home_url( '/price#price3' ) ); ?>">ホットドリンク</a>
                                    <a href="<?php echo esc_url( home_url( '/price#price4' ) ); ?>">ねこちゃんのおやつ</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="sp-nav__items">
                            <li class="sp-nav__item">
                                <div class="sp-nav__item-title">
                                    <a href="<?php echo $faq ?>">よくある質問</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="sp-nav__items">
                            <li class="sp-nav__item">
                                <div class="sp-nav__item-title">
                                    <a href="<?php echo $privacy ?>">プライバシー<br>ポリシー</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="sp-nav__items">
                            <li class="sp-nav__item">
                                <div class="sp-nav__item-title">
                                    <a href="<?php echo $termsofservise ?>">利用規約</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="sp-nav__items">
                            <li class="sp-nav__item">
                                <div class="sp-nav__item-title">
                                    <a href="<?php echo $contact ?>">お問い合わせ</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="sp-nav__items">
                            <li class="sp-nav__item">
                                <div class="sp-nav__item-title">
                                    <a href="<?php echo $sitemap ?>">Site MAP</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- headerメニュー pc -->
            <nav class="header__pc-nav pc-nav u-desktop">
                <ul class="pc-nav__list">
                    <li class="pc-nav__item">
                        <a href="<?php echo $campaign ?>">
                            <div class="pc-nav__wrapper">
                                <p class="pc-nav__en">cat list</p>
                                <p class="pc-nav__ja">猫ちゃん一覧</p>
                            </div>
                        </a>
                    </li>
                    <li class="pc-nav__item">
                        <a href="<?php echo $about ?>">
                            <div class="pc-nav__wrapper">
                                <p class="pc-nav__en">about&nbsp;us</p>
                                <p class="pc-nav__ja">私たちについて</p>
                            </div>
                        </a>
                    </li>
                    <li class="pc-nav__item">
                        <a href="<?php echo $information ?>">
                            <div class="pc-nav__wrapper">
                                <p class="pc-nav__en">information</p>
                                <p class="pc-nav__ja">環境・健康管理</p>
                            </div>
                        </a>
                    </li>
                    <li class="pc-nav__item">
                        <a href="<?php echo $blog ?>">
                            <div class="pc-nav__wrapper">
                                <p class="pc-nav__en">blog</p>
                                <p class="pc-nav__ja">ブログ</p>
                            </div>
                        </a>
                    </li>
                    <li class="pc-nav__item">
                        <a href="<?php echo $voice ?>">
                            <div class="pc-nav__wrapper">
                                <p class="pc-nav__en">voice</p>
                                <p class="pc-nav__ja">お客様の声</p>
                            </div>
                        </a>
                    </li>
                    <li class="pc-nav__item">
                        <a href="<?php echo $price ?>">
                            <div class="pc-nav__wrapper">
                                <p class="pc-nav__en">price</p>
                                <p class="pc-nav__ja">料金一覧</p>
                            </div>
                        </a>
                    </li>
                    <li class="pc-nav__item pc-nav__item--faq">
                        <a href="<?php echo $faq ?>">
                            <div class="pc-nav__wrapper">
                                <p class="pc-nav__en">faq</p>
                                <p class="pc-nav__ja">よくある質問</p>
                            </div>
                        </a>
                    </li>
                    <li class="pc-nav__item">
                        <a href="<?php echo $contact ?>">
                            <div class="pc-nav__wrapper">
                                <p class="pc-nav__en">contact</p>
                                <p class="pc-nav__ja">お問合せ</p>
                            </div>
                        </a>
                    </li>
                </ul>
                
            </nav>
        </div>
    </header>