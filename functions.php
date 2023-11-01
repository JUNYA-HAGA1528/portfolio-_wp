<?php 

/*========================================================= 
head読み込み
=========================================================*/
function enqueue_custom_styles_scripts() {
  // Google Fonts
  wp_enqueue_style('google-fonts-1', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&display=swap');
  wp_enqueue_style('google-fonts-2', 'https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@300;400;500;700&display=swap');
  wp_enqueue_style('google-fonts-3', 'https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@400;500;700&display=swap');

  // CSS
  wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css');
  wp_enqueue_style('custom-css', get_template_directory_uri() . '/dist/assets/css/style.css');

  // JavaScript
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), '3.6.0', true);
  wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array('jquery'), '9.0.0', true);
  wp_enqueue_script('inview-js', get_template_directory_uri() . '/dist/assets/js/jquery.inview.min.js', array('jquery'), null, true);
  wp_enqueue_script('custom-script', get_template_directory_uri() . '/dist/assets/js/script.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles_scripts');





/*========================================================= 
アイキャッチ
=========================================================*/
function my_setup() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );



/*========================================================= 
投稿ページの設定
=========================================================*/
function Change_menulabel() {
    global $menu;
    global $submenu;
    $name = 'ブログ';
    $menu[5][0] = $name;
    $submenu['edit.php'][5][0] = $name.'一覧';
    $submenu['edit.php'][10][0] = '新規'.$name.'投稿';
    $submenu['edit.php'][15][0] = $name.'カテゴリー';
    $submenu['edit.php'][16][0] = $name.'タグ';
  }
  function Change_objectlabel() {
    global $wp_post_types;
    $name = 'ブログ';
    $labels = &$wp_post_types['post']->labels;
    $labels->name = $name;
    $labels->singular_name = $name;
    $labels->add_new = _x('追加', $name);
    $labels->add_new_item = $name.'の新規追加';
    $labels->edit_item = $name.'の編集';
    $labels->new_item = '新規'.$name;
    $labels->view_item = $name.'を表示';
    $labels->search_items = $name.'を検索';
    $labels->not_found = $name.'が見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
  }
  function Change_taxonomieslabel() {
    global $wp_taxonomies;
    $name = 'お知らせ';
    $labels = $wp_taxonomies['category']->labels;
    $labels->name = $name.'カテゴリー';
    $labels->singular_name = $name.'カテゴリー';
    $labels->search_items = $name.'カテゴリーを検索';
    $labels->all_items = $name.'カテゴリー一覧';
    $labels->parent_item = '親の'.$name.'カテゴリー';
    $labels->parent_item_colon = '親の'.$name.'カテゴリー：';
    $labels->edit_item = $name.'カテゴリーの編集';
    $labels->view_item = $name.'カテゴリーの表示';
    $labels->update_item = $name.'カテゴリーの更新';
    $labels->add_new_item = '新規'.$name.'カテゴリーの追加';
    $labels->new_item_name = '新規'.$name;
    $labels->not_found = $name.'カテゴリーが見つかりませんでした';
    $labels->no_terms = $name.'カテゴリーなし';
  
  
    $labels = $wp_taxonomies['post_tag']->labels;
    $name = 'ブログ';
    $labels->name = $name.'タグ';
    $labels->singular_name = $name.'タグ';
    $labels->search_items = $name.'タグを検索';
    $labels->popular_items = '人気の'.$name.'タグ';
    $labels->all_items = 'すべての'.$name.'タグ';
    $labels->edit_item = $name.'タグの編集';
    $labels->view_item = $name.'タグの表示';
    $labels->update_item = $name.'タグの更新';
    $labels->add_new_item = '新規'.$name.'タグの追加';
    $labels->new_item_name = '新規'.$name;
    $labels->separate_items_with_commas = $name.'タグが複数ある場合はコンマで区切ってください';
    $labels->add_or_remove_items = $name.'タグの追加もしくは削除';
    $labels->choose_from_most_used = 'よく使われている'.$name.'タグから選択';
    $labels->not_found = $name.'タグが見つかりませんでした';
    $labels->no_terms = $name.'タグなし';
  }
  add_action( 'admin_menu', 'Change_menulabel' );
  add_action( 'init', 'Change_objectlabel' );
  add_action( 'init', 'Change_taxonomieslabel' );



/*========================================================= 
SCF設定
=========================================================*/
  /* 料金一覧*/
  SCF::add_options_page( '', '料金一覧', 'manage_options', 'theme-options-pricing', 'dashicons-money-alt', 9 );

  /* よくある質問*/
  SCF::add_options_page( '', 'よくある質問', 'manage_options', 'theme-options-faq', 'dashicons-editor-help', 9 );
  
  /* 私たちについて*/
  SCF::add_options_page( '', 'ギャラリー', 'manage_options', 'theme-options-gallery', 'dashicons-layout', 9 );



  /*========================================================= 
アーカイブ 表示件数
=========================================================*/
function change_posts_per_page($query) {
  if ( is_admin() || ! $query->is_main_query() )
      return;
  if ( $query->is_post_type_archive('campaign') ) { // campaignのアーカイブページ
      $query->set( 'posts_per_page', '4' ); // campaignの表示件数を4件に指定
  }
  if ( $query->is_post_type_archive('voice') ) { // voiceのアーカイブページ
      $query->set( 'posts_per_page', '6' ); // voiceの表示件数を6件に指定
  }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );



/*========================================================= 
タクソノミー 表示件数
=========================================================*/
function custom_taxonomy_archive_posts_per_page($query) {
  if ( is_admin() || ! $query->is_main_query() )
      return;

  if ( $query->is_tax('campaign_category') ) { // campaignページを
      $query->set('posts_per_page', 4); // 表示件数を4件に指定
  }

  if ( $query->is_tax('voice_category') ) { // voiceページを
      $query->set('posts_per_page', 6); // 表示件数を6件に指定
  }
}

add_action('pre_get_posts', 'custom_taxonomy_archive_posts_per_page');
function custom_body_class($classes) {
  // この条件で .blog クラスを除外
  if (is_single() || is_archive() || is_page() || is_home()) {
      $key = array_search('blog', $classes);
      if ($key !== false) {
          unset($classes[$key]);
      }
  }
  return $classes;
}

// フィルターフックにカスタム関数を登録
add_filter('body_class', 'custom_body_class');



/*========================================================= 
サイドバー ブログを人気件数順に表示する
=========================================================*/
//記事閲覧数を取得する
function getPostViews($postID){
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
    return "0 View";
  }
  return $count.' Views';
}
//記事閲覧数を保存する
function setPostViews($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
    $count = 0;
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
  }else{
    $count++;
    update_post_meta($postID, $count_key, $count);
  }
}
//headに出力されるタグを削除(閲覧数を重複してカウントするのを防止するため)
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

//クローラーのアクセス判別
function is_bot() {
  $ua = $_SERVER['HTTP_USER_AGENT'];
  $bot = array(
    "googlebot",
    "msnbot",
    "yahoo"
  );
  foreach( $bot as $bot ) {
    if (stripos( $ua, $bot ) !== false){
      return true;
    }
  }
  return false;
}



/*========================================================= 
サイドバー アーカイブページ
=========================================================*/
add_filter( 'get_the_archive_title', function ($title) {
  if (is_category()) {
    $title = single_cat_title('', false);
  } elseif (is_tag()) {
    $title = single_tag_title('', false);
  } elseif (is_tax()) {
    $title = single_term_title('', false);
  } elseif (is_post_type_archive() ){
    $title = post_type_archive_title('', false);
  } elseif (is_date()) {
    if (is_year()) {
      $title = get_the_time('Y年の記事');
    } elseif (is_month()) {
      $title = get_the_time('Y年n月の記事');
    }
  } elseif (is_search()) {
    $title = '検索結果：' . esc_html( get_search_query(false) );
  } elseif (is_404()) {
    $title = 'ページが見つかりません';
  } else {
  }
  return $title;
});



/*========================================================= 
Contact Form 7で自動挿入されるPタグ、brタグを削除
=========================================================*/
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}



/*========================================================= 
Contact Form 7 キャンペーンを引っ張ってくる
=========================================================*/
function filter_wpcf7_form_tag($scanned_tag, $replace) {
  if (!empty($scanned_tag)) {
    if ($scanned_tag['name'] == 'menu-968') {
      global $post;
      $args = array(
        'posts_per_page' => -1,
        'post_type' => 'campaign',
        'order' => 'DESC',
      );
      $customPosts = get_posts($args);
      $unique_titles = array(); // 重複を防ぐための一時的な配列

      if ($customPosts) {
        foreach ($customPosts as $post) {
          setup_postdata($post);
          $title = get_the_title();

          // 重複をチェックし、重複がない場合に追加
          if (!in_array($title, $unique_titles)) {
            $unique_titles[] = $title;
            $scanned_tag['values'][] = $title;
            $scanned_tag['labels'][] = $title;
          }
        }
      }
      wp_reset_postdata();
    }
  }
  return $scanned_tag;
}
add_filter('wpcf7_form_tag', 'filter_wpcf7_form_tag', 11, 2);



/*========================================================= 
Contact Form 7 送信後に完了ページに移行する
=========================================================*/
add_action('wp_footer', 'redirect_to_thanks_page');
function redirect_to_thanks_page() {
  $homeUrl = home_url();
  echo <<< EOD
    <script>
      document.addEventListener( 'wpcf7mailsent', function( event ) {
        location = '{$homeUrl}/thanks/';
      }, false );
    </script>
  EOD;
}