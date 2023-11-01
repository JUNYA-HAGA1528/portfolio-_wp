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
    <section class="contact-thanks-fv sub-fv">
        <div class="sub-fv__inner">
            <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/privacy-policy_fv_pc.jpg" media="(min-width: 768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/privacy-policy_fv_pc.jpg" alt="浜辺">
            </picture>

            <div class="sub-fv__heading">
                <h1 class="sub-fv__text sub-fv__text--norap">Contact</h1>
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
        <section class="top-contact-thanks contact-thanks fish-logo">
            <div class="contact-thanks__inner inner">
                <h2 class="contact-thanks__title">お問い合わせ内容を送信完了しました。</h2>
                <p class="contact-thanks__text">
                    このたびは、お問い合わせ頂き<br class="u-mobile">
                    誠にありがとうございます。<br>
                    お送り頂きました内容を確認の上、<br class="u-mobile">
                    3営業日以内に折り返しご連絡させて頂きます。<br>
                    また、ご記入頂いたメールアドレスへ、<br class="u-mobile">
                    自動返信の確認メールをお送りしております。
                </p>
            </div>
        </section>
    </main>
<?php get_footer() ;?>