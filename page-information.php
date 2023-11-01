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
    <section class="page-imformation-fv sub-fv">
        <div class="sub-fv__inner">
            <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/imformation1.jpg" media="(min-width: 768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/imformation1.jpg" alt="環境・健康管理のトップ">
            </picture>
            <div class="sub-fv__heading">
                <h1 class="sub-fv__text">Information</h1>
            </div>
        </div>
    </section>



    <!-- breadcrumb -->
    <section class="top-breadcrumb breadcrumb">
        <div class="breadcrumb__inner inner">
            <?php get_template_part('parts/breadcrumb') ?>
        </div>
    </section>


    
    <section id="page-imformation" class="page-imformation layout-information fish-logo">
        <div class="page-imformation__inner inner">
            <div class="page-imformation__contents">
                <ul class="page-imformation__tab js-tab-info">
                    <li class="page-imformation__tab-label">
                        <a href="#info1">
                            <span class="u-desktop"></span>
                            <span>毎日の</span><br class="u-mobile" />
                            <span>健康管理</span>
                        </a>
                    </li>
                    <li class="page-imformation__tab-label page-imformation__tab-label--2">
                        <a href="#info2">
                            <span class="u-desktop"></span>
                            <span>スタッフ教育の</span><br class="u-mobile" />
                            <span>徹底</span>
                        </a>
                    </li>
                    <li class="page-imformation__tab-label page-imformation__tab-label--3">
                        <a href="#info3">
                            <span class="u-desktop"></span>
                            <span>獣医師との</span><br class="u-mobile" />
                            <span>提携</span>
                        </a>
                    </li>
                </ul>
    
                <ul class="page-imformation__tab-cards">
                    <li class="page-imformation__card">
                        <div class="page-imformation__body">
                            <h3 class="page-imformation__title">毎日の健康管理</h3>
                            <p class="page-imformation__text">
                                当店では、猫たちの健康チェックを日常的に行い、定期的な獣医師の診察を受けています。猫たちの食事には栄養バランスを考えた特製フードを使用し、運動や遊びを通じて適切な運動量を確保します。また、清潔な環境を保つために定期的な消毒作業を行い、空気の質を管理します。お客様にも猫たちとの触れ合いを通じてストレス解消や心地よい時間を提供し、心身の健康促進に貢献します。健康な猫たちが快適な空間で暮らすことで、お客様も安心して癒しの空間を過ごせるでしょう。
                            </p>
                        </div>
                        <div class="page-imformation__img">
                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/page-information1.jpg" alt="歯磨き中の猫" />
                        </div>
                    </li>
    
                    <li class="page-imformation__card">
                        <div class="page-imformation__body">
                            <h3 class="page-imformation__title">スタッフ教育の徹底</h3>
                            <p class="page-imformation__text">
                                初めに、獣医師による基本的な猫の健康や行動に関する講義を行い、実践的なケア技術を身につけさせます。また、猫の心理やコミュニケーションの理解を深めるためのワークショップも行います。さらに、緊急事態への対応やトラブルシューティングについてのシミュレーションを通じて、スタッフの自信とスキルを向上させます。定期的な研修や情報の更新を通じて、最新の猫のケア手法やトレンドにも対応し、お客様に安心して猫とのふれあいを楽しんでいただける環境を提供します。
                            </p>
                        </div>
                        <div class="page-imformation__img">
                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/page-informatio3.jpg" alt="3人の女性スタッフ" />
                        </div>
                    </li>

                    <li class="page-imformation__card">
                        <div class="page-imformation__body">
                            <h3 class="page-imformation__title">獣医師との提携</h3>
                            <p class="page-imformation__text">
                                猫たちの健康と幸福を第一に考えるため、獣医師との緊密な提携を築いています。定期的な健康診断や予防接種の実施はもちろんのこと、猫たちが快適に過ごせる環境作りにも力を入れています。獣医師からのアドバイスをもとに、栄養管理や運動プログラムを策定し、猫たちの生活の質を向上させています。急な緊急事態にも迅速に対応できる体制を整え、安心してお客様と猫たちが過ごせる空間を提供しています。猫カフェは、獣医師と連携することで、より健康で幸せな猫たちを育てる使命を全うしています。
                            </p>
                        </div>
                        <div class="page-imformation__img">
                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/imformation1.jpg" alt="診察中の猫" />
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
<?php get_footer() ;?>