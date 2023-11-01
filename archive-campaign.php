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
    <section class="campaign-fv sub-fv">
        <div class="sub-fv__inner">
            <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign_fv_pc.jpg" media="(min-width: 768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign_fv_pc.jpg" alt="猫ちゃん一覧ページのトップ">
            </picture>

            <div class="sub-fv__heading">
                <h1 class="sub-fv__text">Cat list</h1>
            </div>
        </div>
    </section>



    <!-- breadcrumb -->
    <section class="top-breadcrumb breadcrumb">
        <div class="breadcrumb__inner inner">
            <?php get_template_part('parts/breadcrumb') ?>
        </div>
    </section>
    
    
    
    <main>
    <section id="campaign"  class="layout-campaign page-campaign fish-logo">
        <div class="page-campaign__inner inner">
            <div class="page-campaign__tabs tab-parts">
                <ul class="tab-parts__flex">
                    <li class="tab-parts__tab current"><a href="<?php echo $campaign; ?>">ALL</a></li>
                    <?php
                        $terms = get_terms('campaign_category');
                        foreach ( $terms as $term ) {
                        echo '<li class="tab-parts__tab"><a href="'.get_term_link($term).'">'.esc_html($term->name).'</a></li>';
                        }
                    ?>
                </ul>
            </div>

            <div class="page-campaign__container">
                <!-- ALL -->
                <div class="page-campaign__wrapper">
                    <ul class="page-campaign__items">
                        <?php if(have_posts()): ?>
                            <?php while(have_posts()): the_post(); ?>

                                <li class="page-campaign__item campaign-card">
                                    <div class="campaign-card__img">
                                        <?php if ( get_the_post_thumbnail() ) : ?>
                                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                                        <?php else: ?>
                                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/noimage.jpg" alt="no image">
                                        <?php endif; ?>
                                    </div>
                                    <div class="campaign-card__body">
                                        <div class="page-campaign-card__heading">
                                            <?php
                                                $terms = get_the_terms(get_the_ID(), 'campaign_category'); // カスタムタクソノミーのタームを取得
                                                if ($terms && !is_wp_error($terms)) { // タームが取得されているか確認
                                                    $term = array_shift($terms); // 最初のタームを取得
                                                    $cat_name = $term->name; // ターム名を取得
                                                    echo '<span class="page-campaign-card__meta">' . $cat_name . '</span>'; // ターム名を表示
                                                }
                                            ?>
                                        </div>
                                        <h3 class="campaign-card__title"><?php the_field('cat_type'); ?></h3>
                                        <div class="campaign-card__wrapper">
                                            <p class="campaign-card__subtitle"><?php the_title(); ?></p>
                                            <div class="campaign-card__price">
                                                <?php if( have_rows('campaign_cat') ): the_row(); ?>
                                                    <?php $campaign_cat1 = get_sub_field('cat1'); ?>
                                                    <?php $campaign_cat2 = get_sub_field('cat2'); ?>

                                                    <div class="campaign-card__price-before"><?php echo $campaign_cat1; ?></div>
                                                    <div class="campaign-card__price-after"><?php echo $campaign_cat2; ?></div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="page-campaign-card__text u-desktop">
                                            <?php the_content(); ?>
                                        </div>
                                        
                                        <p class="page-campaign-card__inquiry u-desktop">ご来店予約・お問い合わせはコチラ</p>
                                        <div class="page-campaign-card__button u-desktop">
                                            <a href="contact.html" class="button"><span>Contact&nbsp;as</span></a>
                                        </div>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="pagenavi">
            <div class="pagenavi__inner">
                <?php wp_pagenavi(); ?>
            </div>
        </div>
    </section>
<?php get_footer() ;?>