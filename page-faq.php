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
    <section class="faq-fv sub-fv">
        <div class="sub-fv__inner">
            <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/faq_fv_pc.jpg" media="(min-width: 768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/faq_fv_pc.jpg" alt="よくある質問のトップ">
            </picture>

            <div class="sub-fv__heading">
                <h1 class="sub-fv__text">FAQ</h1>
            </div>
        </div>
    </section>



    <!-- breadcrumb -->
    <section class="top-breadcrumb breadcrumb">
        <div class="breadcrumb__inner inner">
            <?php get_template_part('parts/breadcrumb') ?>
        </div>
    </section>
    
    
    
    <div class="top-faq faq fish-logo">
        <div class="faq__inner inner">

            <ul class="faq__items">
                <!-- ループ -->
                <?php
                    $price_item = SCF::get_option_meta('theme-options-faq' ,'faq');
                    foreach ($price_item as $fields):
                ?>
                    <li class="faq__item accordion">
                        <div class="accordion js-accordion open">
                            <div class="accordion__title">
                                <p><?php echo $fields['question']; ?></p>
                                <p class="accordion__icon">
                                    <span></span>
                                    <span></span>
                                </p>
                            </div>
                            <p class="accordion__text">
                                <?php echo $fields['answer']; ?>
                            </p>
                        </div>
                    </li>
                    <!-- ループ終わり -->
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php get_footer() ;?>