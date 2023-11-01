<?php get_header() ;?>
    <!-- fv -->
    <section class="fv">
        <div class="swiper js-fv-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="fv__slide">
                        <picture>
                            <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/fv_pc_1.jpg" media="(min-width: 768px)">
                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/fv_sp_1.jpg" alt="ウミガメ単体">
                        </picture>
                    </div>
                </div>   
                <div class="swiper-slide">
                    <div class="fv__slide">
                        <picture>
                            <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/fv_pc_2.jpg" media="(min-width: 768px)">
                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/fv_sp_2.jpg" alt="ウミガメとダイバー">
                        </picture>
                    </div>
                </div>  
                <div class="swiper-slide">
                    <div class="fv__slide">
                        <picture>
                            <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/fv_pc_3.jpg" media="(min-width: 768px)">
                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/fv_sp_3.jpg" alt="海上の船">
                        </picture>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="fv__slide">
                        <picture>
                            <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/about2.jpg" media="(min-width: 768px)">
                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/about2.jpg" alt="浜辺">
                        </picture>
                    </div>
                </div>   
            </div>
            <div class="fv__heading heading">
                <h2 class="heading__title">With&nbsp;cats</h2>
                <p class="heading__subtitle">have&nbsp;a&nbsp;great&nbsp;time</p>
            </div>
        </div>
    </section>
    
    
    <main>
        <!-- campaign -->
        <section class="top-campaign campaign">
            <div class="campaign__inner inner">

                <!-- タイトル 再利用 -->
                <div class="campaign__title section-title">
                    <p class="section-title__en">cat list</p>
                    <h2 class="section-title__jp">猫ちゃん一覧</h2>
                </div>
                <!-- タイトル 再利用 -->




                
                <div class="campaign__slider campaign-cards swiper js-campaign-swiper">
                    <ul class="campaign-cards__items swiper-wrapper">


                        <li class="campaign-cards__item  swiper-slide">
                            <div class="campaign-card">
                                <div class="campaign-card__img">
                                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign1.jpg" alt="魚が泳ぐ">
                                </div>
                                <div class="campaign-card__body">
                                    <div class="campaign-card__heading">
                                        <p class="campaign-card__meta">渋谷本店</p>
                                    </div>
                                    <h3 class="campaign-card__title">スコティッシュフォールド</h3>
                                    <div class="campaign-card__wrapper">
                                        <p class="campaign-card__subtitle">ルナ</p>
                                        <div class="campaign-card__price">
                                            <div class="campaign-card__price-before">おんなのこ</div>
                                            <div class="campaign-card__price-after">2023年10月23日生</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="campaign-cards__item  swiper-slide">
                            <div class="campaign-card">
                                <div class="campaign-card__img">
                                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign2.jpg" alt="魚が泳ぐ">
                                </div>
                                <div class="campaign-card__body">
                                    <div class="campaign-card__heading">
                                        <p class="campaign-card__meta">新宿店</p>
                                    </div>
                                    <h3 class="campaign-card__title">ラグドール</h3>
                                    <div class="campaign-card__wrapper">
                                        <p class="campaign-card__subtitle">キナコ</p>
                                        <div class="campaign-card__price">
                                            <div class="campaign-card__price-before">おんなのこ</div>
                                            <div class="campaign-card__price-after">2023年10月23日生</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="campaign-cards__item  swiper-slide">
                            <div class="campaign-card">
                                <div class="campaign-card__img">
                                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign3.jpg" alt="魚が泳ぐ">
                                </div>
                                <div class="campaign-card__body">
                                    <div class="campaign-card__heading">
                                        <p class="campaign-card__meta">池袋店</p>
                                    </div>
                                    <h3 class="campaign-card__title">ノルウェージャンフォレストキャット</h3>
                                    <div class="campaign-card__wrapper">
                                        <p class="campaign-card__subtitle">コハク</p>
                                        <div class="campaign-card__price">
                                            <div class="campaign-card__price-before">おとこのこ</div>
                                            <div class="campaign-card__price-after">2023年10月23日生</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="campaign-cards__item  swiper-slide">
                            <div class="campaign-card">
                                <div class="campaign-card__img">
                                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign4.jpg" alt="魚が泳ぐ">
                                </div>
                                <div class="campaign-card__body">
                                    <div class="campaign-card__heading">
                                        <p class="campaign-card__meta">渋谷本店</p>
                                    </div>
                                    <h3 class="campaign-card__title">マンチカン</h3>
                                    <div class="campaign-card__wrapper">
                                        <p class="campaign-card__subtitle">ナズナ</p>
                                        <div class="campaign-card__price">
                                            <div class="campaign-card__price-before">おんなのこ</div>
                                            <div class="campaign-card__price-after">2023年10月23日生</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="campaign-cards__item  swiper-slide">
                            <div class="campaign-card">
                                <div class="campaign-card__img">
                                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign1.jpg" alt="魚が泳ぐ">
                                </div>
                                <div class="campaign-card__body">
                                    <div class="campaign-card__heading">
                                        <p class="campaign-card__meta">渋谷本店</p>
                                    </div>
                                    <h3 class="campaign-card__title">スコティッシュフォールド</h3>
                                    <div class="campaign-card__wrapper">
                                        <p class="campaign-card__subtitle">ルナ</p>
                                        <div class="campaign-card__price">
                                            <div class="campaign-card__price-before">おんなのこ</div>
                                            <div class="campaign-card__price-after">2023年10月23日生</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="campaign-cards__item  swiper-slide">
                            <div class="campaign-card">
                                <div class="campaign-card__img">
                                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign2.jpg" alt="魚が泳ぐ">
                                </div>
                                <div class="campaign-card__body">
                                    <div class="campaign-card__heading">
                                        <p class="campaign-card__meta">新宿店</p>
                                    </div>
                                    <h3 class="campaign-card__title">ラグドール</h3>
                                    <div class="campaign-card__wrapper">
                                        <p class="campaign-card__subtitle">キナコ</p>
                                        <div class="campaign-card__price">
                                            <div class="campaign-card__price-before">おんなのこ</div>
                                            <div class="campaign-card__price-after">2023年10月23日生</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="campaign-cards__item  swiper-slide">
                            <div class="campaign-card">
                                <div class="campaign-card__img">
                                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign3.jpg" alt="魚が泳ぐ">
                                </div>
                                <div class="campaign-card__body">
                                    <div class="campaign-card__heading">
                                        <p class="campaign-card__meta">池袋店</p>
                                    </div>
                                    <h3 class="campaign-card__title">ノルウェージャンフォレストキャット</h3>
                                    <div class="campaign-card__wrapper">
                                        <p class="campaign-card__subtitle">コハク</p>
                                        <div class="campaign-card__price">
                                            <div class="campaign-card__price-before">おとこのこ</div>
                                            <div class="campaign-card__price-after">2023年10月23日生</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="campaign-cards__item  swiper-slide">
                            <div class="campaign-card">
                                <div class="campaign-card__img">
                                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/campaign4.jpg" alt="魚が泳ぐ">
                                </div>
                                <div class="campaign-card__body">
                                    <div class="campaign-card__heading">
                                        <p class="campaign-card__meta">渋谷本店</p>
                                    </div>
                                    <h3 class="campaign-card__title">マンチカン</h3>
                                    <div class="campaign-card__wrapper">
                                        <p class="campaign-card__subtitle">ナズナ</p>
                                        <div class="campaign-card__price">
                                            <div class="campaign-card__price-before">おんなのこ</div>
                                            <div class="campaign-card__price-after">2023年10月23日生</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="swiper-button">
                    <div class="swiper-button-prev js-campaign-button-prev u-desktop"></div>
                    <div class="swiper-button-next js-campaign-button-next u-desktop"></div>
                </div>
                <div class="campaign__button">
                    <a href="campaign.html" class="button"><span>View&nbsp;more</span></a>
                </div>
            </div>
        </section>

        <!-- about -->
        <section class="top-about about">
            <div class="about__inner inner">

                <div class="about__title section-title">
                    <p class="section-title__en">About us</p>
                    <h2 class="section-title__jp">私たちについて</h2>
                </div>
                
                <div class="about__img">
                    <div class="about__img-left">
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/about1.jpg" alt="シーサーが屋根の上にいる">
                    </div>
                    <div class="about__img-right">
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/about_gallery4.jpg" alt="黄色い魚が泳ぐ">
                    </div>
                </div>
                <div class="about__content">
                    <div class="about__heading">
                        <h3 class="about__heading-title">spend&nbsp;time<br>with&nbsp;cats</h3>
                    </div>
                    <div class="about__sentence">
                        <p class="about__text">
                            癒しとふれあいの空間、猫カフェへようこそ！ここでは可愛らしい猫たちと共に、リラックスしたひと時をお過ごしいただけます。<br>心地よいBGMと心温まる雰囲気で、日常の喧騒を忘れ、癒しのひとときを提供します。是非お立ち寄りください！
                        </p>
                        <div class="about__button">
                            <a href="about.html" class="button"><span>View&nbsp;more</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- information -->
        <section class="top-information information">
            <div class="information__inner inner">

                <div class="information__title section-title">
                    <p class="section-title__en">Information</p>
                    <h2 class="section-title__jp">環境・健康管理</h2>
                </div>
                
                <div class="information__flex">
                    <div class="information__img colorbox js-colorbox">
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/imformation1.jpg" alt="イソギンチャクとオレンジの魚">
                    </div>
                    
                    <div class="information__content">
                        <h3 class="information__content-title">猫の環境・健康管理について</h3>
                        <p class="information__text">
                            安心して猫との時間を過ごしていただくため、環境・健康ともに安全第一に取り組んでおります。<br>
                            正規登録店として、初めての方でも安心安全に猫と触れ合っていただけるように、徹底したサポートで対応しております。
                        </p>
                        <div class="information__button">
                            <a href="information.html" class="button"><span>View&nbsp;more</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- blog -->
        <section class="top-blog blog">
            <div class="blog__bg u-desktop">
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog1.jpg" alt="ブログの背景画像">
            </div>
            <div class="blog__inner inner">

                <div class="blog__title section-title">
                    <p class="section-title__en section-title__en--white">Blog</p>
                    <h2 class="section-title__jp section-title__jp--white">ブログ</h2>
                </div>
            
                <ul class="blog__list blog-cards">
                    <li class="blog-cards__item blog-card">
                        <a href="" class="blog-card__link">
                            <div class="blog-card__img">
                                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog_card_1.jpg" alt="海中にある珊瑚">
                            </div>
                            <div class="blog-card__content">
                                <time class="blog-card__data">2023.11/17</time>
                                <h3 class="blog-card__title">TVの取材がありました！</h3>
                                <p class="blog-card__text">
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                                </p>
                            </div>
                        </a>
                    </li>
                    <li class="blog-cards__item blog-card">
                        <a href="" class="blog-card__link">
                            <div class="blog-card__img">
                                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog_card_2.jpg" alt="ウミガメのアップ">
                            </div>

                            <div class="blog-card__content">
                                <time class="blog-card__data">2023.11/17</time>
                                <h3 class="blog-card__title">健康診断の様子</h3>
                                <p class="blog-card__text">
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                                </p>
                            </div>
                        </a>
                    </li>
                    <li class="blog-cards__item blog-card">
                        <a href="" class="blog-card__link">
                            <div class="blog-card__img">
                                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog_card_3.jpg" alt="イソギンチャクとカクレクマノミ">
                            </div>

                            <div class="blog-card__content">
                                <time class="blog-card__data">2023.11/17</time>
                                <h3 class="blog-card__title">スタッフ研修</h3>
                                <p class="blog-card__text">
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                                </p>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="blog__button">
                    <a href="blog.html" class="button"><span>View&nbsp;more</span></a>
                </div>
            </div>
        </section>

        <!-- voice -->
        <section class="top-voice voice">
        <div class="voice-picture"></div>
            <div class="voice__inner inner">

                <div class="voice__title section-title">
                    <p class="section-title__en">Voice</p>
                    <h2 class="section-title__jp">お客様の声</h2>
                </div>
                
                <ul class="voice__list voice-cards">
                    <li class="voice-cards__item voice-card">
                        <div class="voice-card__head">
                            <div class="voice-card__head-left">
                                <div class="voice-card__head-flex">
                                    <p class="voice-card__gender">20代(女性)</p>
                                    <h3 class="voice-card__meta">ライセンス講習</h3>
                                </div>
                                <p class="voice-card__title">
                                    ここにタイトルが入ります。ここにタイトル
                                </p>
                            </div>
                            <div class="voice-card__head-right colorbox js-colorbox">
                                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/voice1.jpg" alt="女性">
                            </div>
                        </div>
                        <div class="voice-card__sentence">
                            <p class="voice-card__text">
                                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                                ここにテキストが入ります。ここにテキストが入ります。
                            </p>
                        </div>
                    </li>
                    <li class="voice-cards__item voice-card">
                        <div class="voice-card__head">
                            <div class="voice-card__head-left">
                                <div class="voice-card__head-flex">
                                    <p class="voice-card__gender">30代(男性)</p>
                                    <h3 class="voice-card__meta">ファンダイビング</h3>
                                </div>
                                <p class="voice-card__title">
                                    ここにタイトルが入ります。ここにタイトル
                                </p>
                            </div>
                            <div class="voice-card__head-right colorbox js-colorbox">
                                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/voice2.jpg" alt="男性">
                            </div>
                        </div>
                        <div class="voice-card__sentence">
                            <p class="voice-card__text">
                                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                                ここにテキストが入ります。ここにテキストが入ります。
                            </p>
                        </div>
                    </li>
                </ul>
                <div class="voice__button">
                    <a href="voice.html" class="button"><span>View&nbsp;more</span></a>
                </div>
            </div>
        </section>

        <!-- price -->
        <section class="top-price price">
            <div class="price__inner inner">

                <div class="price-title section-title">
                    <p class="section-title__en">Price</p>
                    <h2 class="section-title__jp">料金一覧</h2>
                </div>

                <div class="price__body">
                    <div class="price__img colorbox js-colorbox">
                        <picture>
                            <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/price_pc.jpg" media="(min-width: 768px)">
                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/price_sp.jpg" alt="スマホ時の画像">
                        </picture>
                    </div>
                    <div class="price__menu">
                        <dl class="price__items">
                            <h3 class="price__title">入場料金（1名様分）</h3>
                            <div class="price__item">
                                <dt>30分ご利用の金額</dt>
                                <dd>¥600</dd>
                            </div>
                            <div class="price__item">
                                <dt>60分ご利用の金額</dt>
                                <dd>¥1,000</dd>
                            </div>
                            <div class="price__item">
                                <dt>90分ご利用の金額</dt>
                                <dd>¥1,500</dd>
                            </div>
                            <div class="price__item">
                                <dt>延長（15分）</dt>
                                <dd>¥300</dd>
                            </div>
                        </dl>
                        <dl class="price__items">
                            <h3 class="price__title">アイスドリンク</h3>
                            <div class="price__item">
                                <dt>猫型アイスのクリームソーダ</dt>
                                <dd>¥600</dd>
                            </div>
                            <div class="price__item">
                                <dt>レモンスカッシュ</dt>
                                <dd>¥550</dd>
                            </div>
                            <div class="price__item">
                                <dt>アイスミルクティー</dt>
                                <dd>¥550</dd>
                            </div>
                            <div class="price__item">
                                <dt>ドリンクバー(時間内、飲み放題)</dt>
                                <dd>¥500</dd>
                            </div>
                        </dl>
                        <dl class="price__items">
                            <h3 class="price__title">ホットドリンク</h3>
                            <div class="price__item">
                                <dt>ふわふわココア</dt>
                                <dd>¥600</dd>
                            </div>
                            <div class="price__item">
                                <dt>ブレンドコーヒー</dt>
                                <dd>¥500</dd>
                            </div>
                            
                            <div class="price__item">
                                <dt>ロイヤルミルクティ</dt>
                                <dd>¥550</dd>
                            </div>
                        </dl>
                        <dl class="price__items">
                            <h3 class="price__title">ねこちゃんのおやつ</h3>
                            <div class="price__item">
                                <dt>すてきなおやつ</dt>
                                <dd>¥500</dd>
                            </div>
                            <div class="price__item">
                                <dt>すぺしゃるなおやつ</dt>
                                <dd>¥700</dd>
                            </div>
                            <div class="price__item">
                                <dt>とくべつなおやつ（猫アイス）</dt>
                                <dd>¥700</dd>
                            </div>
                        </dl>
                    </div>
                </div>
                <div class="price__button">
                    <a href="price.html" class="button"><span>View&nbsp;more</span></a>
                </div>
            </div>
        </section>
<?php get_footer() ;?>