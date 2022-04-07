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
		<div id="Group_ck">
			<div onclick="application.goToTargetView(event)" id="Group_cl">
				<svg class="n_6">
					<rect id="n_6" rx="0" ry="0" x="0" y="0" width="243" height="55">
					</rect>
				</svg>
				<div onclick="application.goToTargetView(event)" id="Text_cn">
					<span>入会はこちら</span>
				</div>
				<svg class="n_27_co">
					<rect id="n_27_co" rx="0" ry="0" x="0" y="0" width="322" height="127">
					</rect>
				</svg>
			</div>
			<div onclick="application.goToTargetView(event)" id="Group_cp">
				<svg class="n_7">
					<rect id="n_7" rx="0" ry="0" x="0" y="0" width="243" height="55">
					</rect>
				</svg>
				<div id="Text_cr">
					<span>創立目的</span>
				</div>
				<svg class="n_26_cs">
					<rect id="n_26_cs" rx="0" ry="0" x="0" y="0" width="290" height="127">
					</rect>
				</svg>
			</div>
			<div id="Component_ct" class="_______">
				<svg class="n_3">
					<rect id="n_3" rx="0" ry="0" x="0" y="0" width="243" height="55">
					</rect>
				</svg>
				<div id="Text_cv">
					<span>アクティビティ</span>
				</div>
				<svg class="n_24">
					<rect id="n_24" rx="0" ry="0" x="0" y="0" width="346" height="127">
					</rect>
				</svg>
				<div id="n_24_cx">
					<svg class="n_29_cy">
						<rect id="n_29_cy" rx="0" ry="0" x="0" y="0" width="346" height="280">
						</rect>
					</svg>
					<div id="n_1_cz">
						<div id="Group_c" class="">
							<svg class="n_30_c">
								<rect id="n_30_c" rx="0" ry="0" x="0" y="0" width="346" height="56">
								</rect>
							</svg>
						</div>
						<div id="Group_da" class="">
							<svg class="n_30_da">
								<rect id="n_30_da" rx="0" ry="0" x="0" y="0" width="346" height="56">
								</rect>
							</svg>
						</div>
						<div id="Group_db" class="">
							<svg class="n_30_db">
								<rect id="n_30_db" rx="0" ry="0" x="0" y="0" width="346" height="56">
								</rect>
							</svg>
						</div>
						<div id="Group_dc" class="">
							<svg class="n_30_dc">
								<rect id="n_30_dc" rx="0" ry="0" x="0" y="0" width="346" height="56">
								</rect>
							</svg>
						</div>
						<div id="Group_dd" class="">
							<svg class="n_30_dd">
								<rect id="n_30_dd" rx="0" ry="0" x="0" y="0" width="346" height="56">
								</rect>
							</svg>
						</div>
					</div>
					<div onclick="application.goToTargetView(event)" id="Text_da">
						<span>勉強会</span>
					</div>
					<div onclick="application.goToTargetView(event)" id="Text_db">
						<span>ビジコン・ハッコン</span>
					</div>
					<div onclick="application.goToTargetView(event)" id="GameFi_dc">
						<span>GameFiギルド</span>
					</div>
					<div onclick="application.goToTargetView(event)" id="Text_dd">
						<span>教育プログラム</span>
					</div>
					<div onclick="application.goToTargetView(event)" id="Text_de">
						<span>ゲームの企画・開発</span>
					</div>
				</div>
			</div>
		</div>
		
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