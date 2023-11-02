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

       
       <!-- contact -->
       <?php
            if (!is_404() && !is_page('contact') && !is_page('thanks')) :
                // 404ページ、'contact' ページ、'thanks' ページ以外でコンタクトセクション表示
        ?>
        <section class="top-contact contact">
            <div class="contact__inner inner">
                <div class="contact__wrapper">
                    <div class="contact__information">
                        <div class="contact__information-img">
                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/contact1.png" alt="contactのロゴ">
                        </div>
                        <div class="contact__information-contents">
                            <div class="contact__information-text">
                                <p>東京都新宿区1-2-3</p>
                                <p>TEL:0120-345-6789</p>
                                <p>営業時間:11:00-20:00</p>
                                <p>定休日:毎週水曜日</p>
                            </div>
                            <div class="contact__information-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.4880133857355!2d139.7005713!3d35.6896067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cd0d6b1ba1f%3A0x1c32a1f1ecacfdd5!2z5paw5a6_6aeF!5e0!3m2!1sja!2sjp!4v1698762566545!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                            </div>
                            </div>
                    </div>
                    <div class="contact__inquiry">
                        <div class="contact__inquiry-title">
                            <h2 class="contact__inquiry-title__en">contact</h2>
                            <p class="contact__inquiry-title__jp">お問い合わせ</p>
                            <p class="contact__inquiry-title__guide">ご予約・お問い合わせはコチラ</p>
                        </div>
                        <div class="contact__button">
                            <a href="<?php echo $contact ?>" class="button"><span>View&nbsp;more</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
    </main>
    
    <!-- footer -->
    <footer class="top-footer footer">
        <div class="footer__inner inner">
            <div class="footer__head">
                <h1 class="footer__logo">
                    <a href="<?php echo $top ?>" class="footer__logo-link">
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/header_logo.png" alt="フッターロゴ">
                    </a>
                </h1>
                <div class="footer-icon">
                    <ul class="footer-icon__list">
                        <li class="footer-icon__item footer-facebook">
                            <a href="https://www.facebook.com/ユーザー名/" target="break" class="footer-icon__link">
                                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/facebook.png" alt="facebookのicon">
                            </a>
                        </li>
                        <li class="footer-icon__item footer-instagram">
                            <a href="https://www.instagram.com/ユーザー名/" target="break" class="footer-icon__link">
                                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/Instagram.png" alt="instagramのicon">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
    
            <div class="footer__body">
                <div class="footer__wrapper ">
                    <div class="footer__container footer-nav">
                        <ul class="footer-nav__items">
                            <li class="footer-nav__item">
                                <div class="footer-nav__item-title">
                                    <a href="<?php echo $campaign ?>">猫ちゃん一覧</a>
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
                            <li class="footer-nav__item">
                                <div class="footer-nav__item-title">
                                    <a href="<?php echo $about ?>">私たちについて</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__container footer-nav">
                        <ul class=" footer-nav__items footer-nav__item">
                            <li class="footer-nav__item-title">
                                <a href="<?php echo $information ?>">環境・健康管理</a>
                            </li>
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
                        </ul>
                        <ul class="footer-nav__items">
                            <li class="footer-nav__item">
                                <div class="footer-nav__item-title">
                                    <a href="<?php echo $blog ?>">ブログ</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer__wrapper footer__wrapper-space">
                    <div class="footer__container footer__container--space footer-nav">
                        <ul class="footer-nav__items">
                            <li class="footer-nav__item">
                                <div class="footer-nav__item-title">
                                    <a href="<?php echo $voice ?>">お客様の声</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="footer-nav__items">
                            <li class="footer-nav__item">
                                <div class="footer-nav__item-title">
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
                            <li class="footer-nav__item">
                                <div class="footer-nav__item-title">
                                    <a href="<?php echo $faq ?>">よくある質問</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="footer-nav__items">
                            <li class="footer-nav__item">
                                <div class="footer-nav__item-title">
                                    <a href="<?php echo $privacy ?>">プライバシー<br class="u-mobile">ポリシー</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="footer-nav__items">
                            <li class="footer-nav__item">
                                <div class="footer-nav__item-title">
                                    <a href="<?php echo $termsofservise ?>">利用規約</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="footer-nav__items">
                            <li class="footer-nav__item">
                                <div class="footer-nav__item-title">
                                    <a href="<?php echo $contact ?>">お問い合わせ</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="footer-nav__items">
                            <li class="footer-nav__item">
                                <div class="footer-nav__item-title">
                                    <a href="<?php echo $sitemap ?>">Site MAP</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <p class="footer__copyright">
                <small>Copyright © 2021 - 2023 CodeUps LLC. All Rights Reserved.</small>
            </p>
        </div>
    </footer>

    <!-- スクロールトップ -->
    <div class="scroll-top js-scroll-top">
        <a href="#"><img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/top-scroll.png" alt="上向きの矢印"></a>
    </div>
</body>
<?php wp_footer(); ?>
</html>