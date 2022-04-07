<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" id="applicationStylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css"/>
<?php //jsの読み込みとheadの認識設定
wp_enqueue_script('jquery');
wp_enqueue_script('uug-main',get_template_directory_uri() . '/assets/js/index.js'); 
wp_head(); 
?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="Top">
	<div id="Component_ci" class="_______">
		<svg class="n_1_cj">
			<rect id="n_1_cj" rx="0" ry="0" x="0" y="0" width="1920" height="127">
			</rect>
		</svg>
		<nav class="gnav">
                <?php
                $args = array(
                'menu' => 'global-navigation', // 管理画面で作成したメニューの名前
                'menu_class' => '', // メニューを構成するulタグのクラス名
                'container' => false, // <ul>タグを囲んでいる<div>タグを削除
                );
                wp_nav_menu($args);
                ?>
            </nav>
		
		<div id="n_34">
			<div id="Group_dl">
				<div id="UUG_dm">
					<span>UUG</span>
				</div>
				<div id="Text_dn">
					<span>学生ギルド連合</span>
				</div>
			</div>
			<img id="n__do" src="<?php echo get_template_directory_uri(); ?>/assets/img/n__do.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/n__do.png 1x">
				
		</div>
	</div>