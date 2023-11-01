<?php get_header() ;?>
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

    <!-- sub-fv -->
    <section class="site-map-fv sub-fv">
        <div class="sub-fv__inner">
            <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/privacy-policy_fv_pc.jpg" media="(min-width: 768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/privacy-policy_fv_pc.jpg" alt="サイトマップのトップ">
            </picture>

            <div class="sub-fv__heading">
                <h1 class="sub-fv__text">Site MAP</h1>
            </div>
        </div>
    </section>



    <!-- breadcrumb -->
    <section class="top-breadcrumb breadcrumb">
        <div class="breadcrumb__inner inner">
            <?php get_template_part('parts/breadcrumb') ?>
        </div>
    </section>
    
    
    
    <section class="top-site-map site-map fish-logo">
        <div class="site-map__inner inner">
            <div class="footer__body">
                <div class="footer__wrapper">
                    <div class="footer__container footer-nav">
                        <ul class="footer-nav__items">
                            <li class="footer-nav__item footer-nav__item--black">
                                <div class="footer-nav__item-title footer-nav__item-title--logo">
                                    <a href="<?php echo $campaign ?>">ねこちゃん一覧</a>
                                </div>
                                <div class="footer-nav__item-normal">
                                    <?php
                                        $terms = get_terms('campaign_category');
                                        foreach ( $terms as $term ) {
                                        echo '<a href="'.get_term_link($term).'">'.esc_html($term->name).'</a>';
                                        }
                                    ?>
                                </div>
                            </li>
                        </ul>
                        <ul class="footer-nav__items">
                            <li class="footer-nav__item footer-nav__item--black">
                                <div class="footer-nav__item-title footer-nav__item-title--logo">
                                    <a href="<?php echo $about ?>">私たちについて</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__container footer__container--space footer-nav">
                        <ul class="footer-nav__items">
                            <li class="footer-nav__item footer-nav__item--black">
                                <div class="footer-nav__item-title footer-nav__item-title--logo">
                                    <a href="<?php echo $information ?>">環境・健康管理</a>
                                </div>
                                <ul class="footer-nav__item js-tab-link-footer footer-nav__item-normal">
                                    <li>
                                        <a href="<?php echo esc_url( home_url( '/information#info1' ) ); ?>">毎日の健康管理</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo esc_url( home_url( '/information#info2' ) ); ?>">スタッフ教育の徹底</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo esc_url( home_url( '/information#info3' ) ); ?>">獣医師との提携</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="footer-nav__items">
                            <li class="footer-nav__item footer-nav__item--black">
                                <div class="footer-nav__item-title footer-nav__item-title--logo">
                                    <a href="<?php echo $blog ?>">ブログ</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer__wrapper footer__wrapper-space">
                    <div class="footer__container footer__container--space footer-nav">
                        <ul class="footer-nav__items">
                            <li class="footer-nav__item footer-nav__item--black">
                                <div class="footer-nav__item-title footer-nav__item-title--logo">
                                    <a href="<?php echo $voice ?>">お客様の声</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="footer-nav__items">
                            <li class="footer-nav__item footer-nav__item--black">
                                <div class="footer-nav__item-title footer-nav__item-title--logo">
                                    <a href="<?php echo $price ?>">料金一覧</a>
                                </div>
                                <div class="footer-nav__item-normal">
                                    <a href="<?php echo esc_url( home_url( '/price#price1' ) ); ?>">入場料金</a>
                                    <a href="<?php echo esc_url( home_url( '/price#price2' ) ); ?>">アイスドリンク</a>
                                    <a href="<?php echo esc_url( home_url( '/price#price3' ) ); ?>">ホットドリンク</a>
                                    <a href="<?php echo esc_url( home_url( '/price#price4' ) ); ?>">ねこちゃんのおやつ</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__container footer__container--space footer-nav">
                        <ul class="footer-nav__items">
                            <li class="footer-nav__item footer-nav__item--black">
                                <div class="footer-nav__item-title footer-nav__item-title--logo">
                                    <a href="<?php echo $faq ?>">よくある質問</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="footer-nav__items">
                            <li class="footer-nav__item footer-nav__item--black">
                                <div class="footer-nav__item-title footer-nav__item-title--logo">
                                    <a href="<?php echo $privacy ?>">プライバシー<br class="u-mobile">ポリシー</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="footer-nav__items">
                            <li class="footer-nav__item footer-nav__item--black">
                                <div class="footer-nav__item-title footer-nav__item-title--logo">
                                    <a href="<?php echo $termsofservise ?>">利用規約</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="footer-nav__items">
                            <li class="footer-nav__item footer-nav__item--black">
                                <div class="footer-nav__item-title footer-nav__item-title--logo">
                                    <a href="<?php echo $contact ?>">お問い合わせ</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="footer-nav__items">
                            <li class="footer-nav__item footer-nav__item--black">
                                <div class="footer-nav__item-title footer-nav__item-title--logo">
                                    <a href="<?php echo $sitemap ?>">Site MAP</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer() ;?>