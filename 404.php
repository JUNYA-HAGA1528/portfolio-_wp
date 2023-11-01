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

    <!-- breadcrumb -->
    <div class="top-breadcrumb top-breadcrumb--margin breadcrumb breadcrumb--padding">
        <div class="breadcrumb__inner inner">
            <?php get_template_part('parts/breadcrumb') ?>        
        </div>
    </div>
    
    
    
    <main>
        <section class="top-contact-error contact-error">
            <div class="contact-error__inner inner">
                <h2 class="contact-error_title">404</h2>
                <p class="contact-error_text">
                    申し訳ありません。<br>
                    お探しのページが見つかりません。
                </p>
                <div class="contact-error__button">
                    <a href="<?php echo $top ?>" class="button"><span>Page&nbsp;TOP</span></a>
                </div>
            </div>
        </section>
    </main>
<?php get_footer() ;?>