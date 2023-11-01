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
    <section class="terms-service-fv sub-fv">
        <div class="sub-fv__inner">
            <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/privacy-policy_fv_pc.jpg" media="(min-width: 768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/privacy-policy_fv_pc.jpg" alt="利用規約のトップ">
            </picture>

            <div class="sub-fv__heading">
                <h1 class="sub-fv__text sub-fv__text--norap">Terms of Service</h1>
            </div>
        </div>
    </section>



    <!-- breadcrumb -->
    <section class="top-breadcrumb breadcrumb">
        <div class="breadcrumb__inner inner">
            <?php get_template_part('parts/breadcrumb') ?>
        </div>
    </section>
    
    
    
    <section class="terms-of-service top-terms-of-service fish-logo">
        <div class="terms-of-service__inner inner">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post(); ?>
                    <h2 class="terms-of-service__title"><?php the_title(); ?></h2>
                    <p class="terms-of-service__top-text">
                        以下は、Webサイトで使用する一般的な利用規約の例です。
                    </p>
                    <div class="terms-of-service__content">
                        <?php the_content(); ?>
                    </div>
                    <p class="terms-of-service__bottom-text">以上が、当社の利用規約の概要です。お客様のサービス利用にあたっては、本規約をお読みいただき、同意いただける場合のみサービスをご利用ください。</p>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
<?php get_footer() ;?>