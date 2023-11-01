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
    <section class="voice-fv sub-fv">
        <div class="sub-fv__inner">
            <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/voice_fv_pc.jpg" media="(min-width: 768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/voice_fv_pc.jpg" alt="お客様の声のトップ">
            </picture>
            <div class="sub-fv__heading">
                <h1 class="sub-fv__text">Voice</h1>
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
    <section class="top-page-voice page-voice fish-logo">
        <div class="page-voice__inner inner">
            <div class="page-voice__tabs tab-parts">
                <ul class="tab-parts__flex">
                    <li class="tab-parts__tab current"><a href="<?php echo $voice; ?>">ALL</a></li>
                    <?php
                        $terms = get_terms('voice_category');
                        foreach ( $terms as $term ) {
                        echo '<li class="tab-parts__tab"><a href="'.get_term_link($term).'">'.esc_html($term->name).'</a></li>';
                        }
                    ?>
                </ul>
            </div>

            <div class="page-voice__container">
                <!-- ALL -->
                <div class="page-voice__wrapper">
                    <ul class="page-voice__list voice-cards">
                        <?php if(have_posts()): ?>
                            <?php while(have_posts()): the_post(); ?>
                            <li class="voice-cards__item voice-card">
                                    <div class="voice-card__head">
                                        <div class="voice-card__head-left">
                                            <div class="voice-card__head-flex">
                                                <p class="voice-card__age">
                                                    <?php 
                                                        $voice_group = get_field('voice_group'); 
                                                        echo $voice_group['voice_1'] . ' (' . $voice_group['voice_2'] . ')';
                                                    ?>
                                                </p>

                                                <?php
                                                    $terms = get_the_terms(get_the_ID(), 'voice_category'); // カスタムタクソノミーのタームを取得
                                                    if ($terms && !is_wp_error($terms)) { // タームが取得されているか確認
                                                        $term = array_shift($terms); // 最初のタームを取得
                                                        $cat_name = $term->name; // ターム名を取得
                                                        echo '<span class="voice-card__meta">' . $cat_name . '</span>'; // ターム名を表示
                                                    }
                                                ?>
                                            </div>
                                            <p class="voice-card__title">
                                                <?php the_title(); ?>
                                            </p>
                                        </div>
                                        <div class="voice-card__head-right colorbox js-colorbox">
                                            <?php if ( get_the_post_thumbnail() ) : ?>
                                                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                                            <?php else: ?>
                                                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/noimage.jpg" alt="no image">
                                            <?php endif; ?>                                    
                                        </div>
                                    </div>
                                    <div class="voice-card__sentence">
                                        <div class="voice-card__text">
                                            <?php the_content(); ?>
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