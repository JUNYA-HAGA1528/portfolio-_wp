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
    <section class="blog-fv sub-fv">
        <div class="sub-fv__inner">
            <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog_fv_pc.jpg" media="(min-width: 768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog_fv_pc.jpg" alt="浜辺">
            </picture>
            <div class="sub-fv__heading">
                <h1 class="sub-fv__text">Blog</h1>
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
    <section class="top-page-blog page-blog fish-logo">
        <div class="page-blog__inner inner">
            <div class="page-blog__wrapper">

                <!--main-->
                <div class="page-blog__main">
                    <article id="single-contents" class="article">
                        <?php if(have_posts()): ?>
                            <?php while(have_posts()): the_post(); ?>
                            <?php
                                if( !is_user_logged_in() && !is_bot() ) { //クローラーとログイン時のアクセスをカウントから除外
                                    setPostViews( get_the_ID() );
                                }
                            ?>
                                <div class="article__body">
                                    <time datetime="<?php the_time("c"); ?>" class="article__data"><?php the_time("Y.m.d"); ?></time>
                                    <h3 class="article__title"><?php the_title(); ?></h3>
                                    <figure class="article__img">
                                        <?php if ( get_the_post_thumbnail() ) : ?>
                                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                                        <?php else: ?>
                                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/noimage.jpg" alt="no image">
                                        <?php endif; ?>                                    
                                    </figure>
                                    <div class="article__content">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </article>

                    <div class="pagenavi">
                        <div class="pagenavi__inner">
                            <div class="wp-pagenavi">

                                <?php
                                    $prev = get_previous_post();
                                    if ( ! empty( $prev ) ) {
                                    $prev_url = esc_url( get_permalink( $prev->ID ) );
                                    }
                                    
                                    $next = get_next_post();
                                    if ( ! empty( $next ) ) {
                                    $next_url = esc_url( get_permalink( $next->ID ) );
                                    }
                                ?>

                                <?php if ( ! empty( $prev ) ) : ?>
                                    <a class="previouspostslink" rel="prev" href="<?php echo $prev_url; ?>">＜</a>
                                <?php endif; ?>

                                <?php if ( ! empty( $next ) ) : ?>
                                    <a class="nextpostslink" rel="next" href="<?php echo $next_url; ?>">＞</a>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>

                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
<?php get_footer() ;?>