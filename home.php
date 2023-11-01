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
                <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog1.jpg" media="(min-width: 768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog1.jpg" alt="ブログページのトップ">
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
                    <ul class="page-blog__list blog-cards">
                        <?php if(have_posts()): ?>
                            <?php while(have_posts()): the_post(); ?>
                                <li class="blog-cards__item blog-cards__item--calc blog-card">
                                    <a href="<?php the_permalink(); ?>" class="blog-card__link">
                                        <div class="blog-card__img">
                                            <?php if ( get_the_post_thumbnail() ) : ?>
                                                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                                            <?php else: ?>
                                                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/noimage.jpg" alt="no image">
                                            <?php endif; ?>
                                        </div>
                                        <div class="blog-card__content">
                                            <time datetime="<?php the_time("c"); ?>" class="blog-card__data"><?php the_time("Y.m.d"); ?></time>
                                            <h3 class="blog-card__title"><?php the_title(); ?></h3>
                                            <p class="blog-card__text"><?php echo wp_trim_words( get_the_content(), 100, '…' ); ?></p>
                                        </div>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                    
                    <div class="pagenavi">
                        <div class="pagenavi__inner">
                            <?php wp_pagenavi(); ?>
                        </div>
                    </div>
                </div>

                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
<?php get_footer() ;?>