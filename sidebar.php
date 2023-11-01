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


<!--aside-->
<div class="aside">
    <div class="aside__inner">




        <!--blog-->
        <div class="aside__content">
            <div class="aside__heading">
                <div class="aside__heading-img">
                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/sideBar_title_logo.png" alt="クジラのロゴ">
                </div>
                <h2 class="aside__heading-title">人気記事</h2>
            </div>
            <ul class="aside__items aside-blog-item">
                <?php
                    setPostViews(get_the_ID());
                    $args = array(
                        'meta_key' => 'post_views_count',
                        'orderby' => 'meta_value_num',
                        'posts_per_page' => 3,
                        'order' => 'DESC',
                    );

                $custom_query = new WP_Query($args);

                if ($custom_query->have_posts()) :?>
                    <?php while ($custom_query->have_posts()) : $custom_query->the_post();?>
                        <a href="<?php the_permalink(); ?>" class="aside-blog-item__link">
                            <li class="aside-blog-item__flex">
                                <div class="aside-blog-item__img">
                                    <?php if ( get_the_post_thumbnail() ) : ?>
                                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                                    <?php else: ?>
                                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/noimage.jpg" alt="no image">
                                    <?php endif; ?>                                    
                                </div>

                                <div class="aside-blog-item__content">
                                    <time datetime="<?php the_time("c"); ?>" class="aside-blog-item__data"><?php the_time("Y.m.d"); ?></time>
                                    <h2 class="aside-blog-item__title"><?php the_title(); ?></h2>
                                </div>
                            </li>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
        <!--blog-->


        
        <!--voice-->
        <div class="aside__content">
            <div class="aside__heading">
                <div class="aside__heading-img">
                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/sideBar_title_logo.png" alt="クジラのロゴ">
                </div>
                <h2 class="aside__heading-title">口コミ</h2>
            </div>
            <ul class="aside__items aside-voice-item">
                <?php
                    $args = array('post_type' => 'voice',
                    'posts_per_page' => 1); 
                    $the_query = new WP_Query($args); 
                ?>
                <?php if($the_query->have_posts()): ?>
                    <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                        <li class="aside-voice-item__content">
                            <div class="aside-voice-item__img colorbox js-colorbox">
                                <?php if ( get_the_post_thumbnail() ) : ?>
                                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                                <?php else: ?>
                                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/noimage.jpg" alt="no image">
                                <?php endif; ?>
                            </div>
                            <div class="aside-voice-item__text">
                                <div class="voice-card__head-flex">
                                    <p class="voice-card__age">
                                        <?php 
                                            $voice_group = get_field('voice_group'); 
                                            echo $voice_group['voice_1'] . ' (' . $voice_group['voice_2'] . ')';
                                        ?>
                                    </p>
                                </div>
                                <p class="aside-voice-item__title">
                                    <?php the_title(); ?>
                                </p>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <?php wp_reset_postdata(); endif; ?>
            </ul>
            <div class="aside__button">
                <a href="<?php echo $voice ?>" class="button"><span>View&nbsp;more</span></a>
            </div>
        </div>
        <!--voice-->









        <!--campaign-->
        <div class="aside__content">
            <div class="aside__heading">
                <div class="aside__heading-img">
                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/sideBar_title_logo.png" alt="クジラのロゴ">
                </div>
                <h2 class="aside__heading-title">キャンペーン</h2>
            </div>

            <ul class="aside__items">
                <?php
                    $args = array('post_type' => 'campaign',
                    'posts_per_page' => 1); 
                    $the_query = new WP_Query($args); 
                ?>
                <?php if($the_query->have_posts()): ?>
                    <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                        <li class="aside__item aside__item--calc">
                            <div class="campaign-card">
                                <div class="campaign-card__img campaign-card__img--calc">
                                    <?php if ( get_the_post_thumbnail() ) : ?>
                                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                                    <?php else: ?>
                                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/noimage.jpg" alt="no image">
                                    <?php endif; ?>
                                </div>
                                <div class="campaign-card__body campaign-card__body--calc">
                                    <h3 class="campaign-card__title campaign-card__title--calc"><?php the_field('cat_type'); ?></h3>
                                    <div class="campaign-card__wrapper campaign-card__wrapper--calc">
                                        <p class="campaign-card__subtitle campaign-card__subtitle--calc"><?php the_title(); ?></p>
                                        <div class="campaign-card__price">
                                            <?php if( have_rows('campaign_cat') ): the_row(); ?>
                                                <?php $campaign_cat1 = get_sub_field('cat1'); ?>
                                                <?php $campaign_cat2 = get_sub_field('cat2'); ?>

                                                <div class="campaign-card__price-before"><?php echo $campaign_cat1; ?></div>
                                                <div class="campaign-card__price-after"><?php echo $campaign_cat2; ?></div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <?php wp_reset_postdata(); endif; ?>
            </ul>
            <div class="aside__button">
                <a href="<?php echo $campaign ?>" class="button"><span>View&nbsp;more</span></a>
            </div>
        </div>
        <!-- campaign-->









        <!--archive-->
        <div class="aside__content">
            <div class="aside__heading">
                <div class="aside__heading-img">
                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/sideBar_title_logo.png" alt="クジラのロゴ">
                </div>
                <h2 class="aside__heading-title">アーカイブ</h2>
            </div>
            <div class="aside__archive aside-archive">
                <div class="aside-archive__inner">

                    <?php
                        $year_prev = null;
                        $months = $wpdb->get_results("SELECT DISTINCT MONTH( post_date ) AS month ,
                                YEAR( post_date ) AS year,
                                COUNT( id ) as post_count FROM $wpdb->posts
                                WHERE post_status = 'publish' and post_date <= now( )
                                and post_type = 'post'
                                GROUP BY month , year
                                ORDER BY post_date DESC");

                        $first = true; // 最初の要素かどうかを示すフラグ

                        foreach($months as $month):
                        $year_current = $month->year;
                        if ($year_current != $year_prev):
                        if ($year_prev != null):
                    ?>
                </div>
                <?php endif; ?>
                <div class="aside-archive__items js-archive-accordion <?= $first ? 'open' : '' ?>">
                    <p><?= $month->year ?></p>
                    <ul class="aside-archive__item">
                        <?php $first = false; // 最初の要素が表示されたのでフラグを false に設定
                            endif;?>
                            <li>
                                <a href="<?= bloginfo('url') ?>/<?= $month->year ?>/<?= date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>"><?= '▶︎&thinsp;'.date("n", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>月</a>
                            </li>
                        <?php $year_prev = $year_current; endforeach;?>
                    </ul>
                </div>
            </div>
        </div>
        <!--archive -->


        
    </div>
</div>