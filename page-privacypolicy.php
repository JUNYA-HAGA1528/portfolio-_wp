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
    <section class="privacy-policy-fv sub-fv">
        <div class="sub-fv__inner">
            <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/privacy-policy_fv_pc.jpg" media="(min-width: 768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/privacy-policy_fv_pc.jpg" alt="プライバシーポリシーのトップ">
            </picture>

            <div class="sub-fv__heading">
                <h1 class="sub-fv__text sub-fv__text--norap">Privacy Policy</h1>
            </div>
        </div>
    </section>



    <!-- breadcrumb -->
    <section class="top-breadcrumb breadcrumb">
        <div class="breadcrumb__inner inner">
            <?php get_template_part('parts/breadcrumb') ?>
        </div>
    </section>
    
    
    
    <section class="privacy-policy top-privacy-policy fish-logo">
        <div class="privacy-policy__inner inner">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post(); ?>
                    <h2 class="privacy-policy__title"><?php the_title(); ?></h2>
                    <p class="privacy-policy__top-text">
                        以下は、Webサイトで使用するための一般的なプライバシーポリシーの例です。
                    </p>
                    <div class="privacy-policy__content">
                        <?php the_content(); ?>
                    </div>
                    <p class="privacy-policy__bottom-text">以上が、当社のプライバシーポリシーの概要です。お客様の個人情報保護のために、常に努めてまいります。</p>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
<?php get_footer() ;?>