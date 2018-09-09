<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
	<head>

<!--from wp tmpl-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="dns-prefetch" href="//fonts.googleapis.com">
		<link rel="dns-prefetch" href="//s.w.org">
<!--end of wp tmpl-->

		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" />
		<?$APPLICATION->ShowMeta("robots")?>
		<?$APPLICATION->ShowMeta("keywords")?>
		<?$APPLICATION->ShowMeta("description")?>
		<title><?$APPLICATION->ShowTitle()?></title>
		<?$APPLICATION->ShowHead();?>
		<?IncludeTemplateLangFile(__FILE__);?>

		<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/colors.css" />
		<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/print.css" media="print" />


		<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
		</style>

<link rel="stylesheet" id="fashify-fonts-css" href="https://fonts.googleapis.com/css?family=Libre+Franklin%3A300%2C300i%2C400%2C400i%2C600%2C600i%2C800%2C800i&amp;subset=latin%2Clatin-ext" type="text/css" media="all">
<!--

<link rel="stylesheet" id="font-awesome-css" href="https://wpstash.com/fashify/wp-content/themes/fashify/assets/css/font-awesome.min.css?ver=4.5" type="text/css" media="all">
<link rel="stylesheet" id="fashify-style-css" href="https://wpstash.com/fashify/wp-content/themes/fashify/style.css?ver=4.9.8" type="text/css" media="all">
<link rel="stylesheet" id="contact-form-7-css" href="https://wpstash.com/fashify/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=4.9" type="text/css" media="all">
-->
		<style id="fashify-style-inline-css" type="text/css">

			.entry-meta a,
			.main-navigation a:hover,
			.main-navigation .current-menu-item > a,
			.main-navigation .current-menu-ancestor > a,
			.widget_tag_cloud a:hover,
              a:hover,
			.social-links ul a:hover::before
			 {
				 color : #f75357;
			 }
			button, input[type="button"], input[type="reset"], input[type="submit"]{
        background: #f75357;
				border-color : #f75357;
			}
			.widget_tag_cloud a:hover { border-color : #f75357;}
      .main-navigation a,
			h1.entry-title,
			.widget-title,
			.footer-staff-picks h3,
			.navigation .current {
        color: #444;
      }
      button:hover, input[type="button"]:hover,
			input[type="reset"]:hover,
			input[type="submit"]:hover {
      	background: #444;
				border-color: #444;
			}
			.site-header {
				background-image: url(https://wpstash.com/fashify/wp-content/uploads/sites/5/2017/01/cropped-coffee-apple-iphone-desk.jpg);
				background-repeat: no-repeat; background-size: cover; 
			}
		</style>

		<script type="text/javascript" src="https://wpstash.com/fashify/wp-includes/js/jquery/jquery.js?ver=1.12.4"></script>

		<script type="text/javascript" src="https://wpstash.com/fashify/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1"></script>

		<link rel="https://api.w.org/" href="https://wpstash.com/fashify/wp-json/">

		<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://wpstash.com/fashify/xmlrpc.php?rsd">

<!--<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://wpstash.com/fashify/wp-includes/wlwmanifest.xml"> -->
<!--<meta name="generator" content="WordPress 4.9.8">-->

		<style type="text/css">
			.site-title a,
			.site-description,
			.social-links ul a {
				color: #ffffff;
			}
		</style>

		<!--end of wp tmpl-->
	</head>

	<body class="home blog hfeed homepage-home3"> <!--class fromv wp tmpl-->
	<!--	<div id="leaves-left"></div>
	<div id="leaves-right"></div>-->	

	<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<!--from original
		<div id="header-container">
			<div id="header">
				<h1 id="site-name"><?$APPLICATION->IncludeFile(
					SITE_TEMPLATE_PATH."/include_areas/site_name.php",
					Array(),
					Array("MODE"=>"html")
				);?></h1>
			</div>
		</div>

		<div id="sub-header">
			<?$APPLICATION->IncludeComponent(
				"bitrix:menu", 
				"personal_tab", 
				Array(
					"ROOT_MENU_TYPE"	=>	"top",
					"MAX_LEVEL"	=>	"1",
					"USE_EXT"	=>	"N"
				)
			);?>
			<?$APPLICATION->IncludeComponent("bitrix:search.form", "personal", Array(
						"PAGE"	=>	SITE_DIR."search.php"
						)
				);?>

		</div>

		<div id="top-corners">
			<div class="workarea-corners"><b class="r1"></b><b class="r0"></b></div>
			<div class="sidebar-corners"><b class="r1"></b><b class="r0"></b></div>
		</div>
end of from original-->

	<header id="masthead" class="site-header" role="banner">
		<div class="container">

			<div class="site-branding">
				<h1 class="site-title"><a href="/" rel="home">Fashify</a></h1>
				<p class="site-description">Just another WPStash Sites site</p>
			</div><!-- .site-branding -->

			<div class="social-menu">
				<div id="menu-social" class="social-links">
					<ul id="menu-social" class="menu">
						<li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9">
							<a href="https://www.facebook.com/">
								<span class="screen-reader-text">facebook</span>
							</a>
						</li>
						<li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10">
							<a href="https://twitter.com/">
								<span class="screen-reader-text">twitter</span>
							</a>
						</li>
						<li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11">
							<a href="https://plus.google.com/u/0/">
								<span class="screen-reader-text">google plus</span>
							</a>
						</li>
						<li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12">
							<a href="https://www.linkedin.com"><span class="screen-reader-text">linkedin</span></a>
						</li>
						<li id="menu-item-61" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-61">
							<a href="https://youtube.com">
								<span class="screen-reader-text">Youtube</span>
							</a>
						</li>
						<li id="menu-item-62" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-62">
							<a href="https://www.pinterest.com/">
								<span class="screen-reader-text">Pinterest</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<nav id="site-navigation" class="main-navigation" role="navigation">
		<div class="container">

			<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">Menu</button>
			<div class="menu-main-menu-container">
				<ul id="primary-menu" class="menu nav-menu" aria-expanded="false">
					<li id="menu-item-8" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-8">
						<a href="/">Home</a>
					</li>
					<li id="menu-item-66" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-66">
						<a href="/about.php">About</a>
					</li>
					<li id="menu-item-40" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-40">
						<a href="/design.php">Design</a>
					</li>
					<li id="menu-item-41" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-41">
						<a href="https://wpstash.com/fashify/category/fashion/">Fashion</a>
					</li>
					<li id="menu-item-44" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-44">
						<a href="https://wpstash.com/fashify/category/photo/">Photos</a>
					</li>
					<li id="menu-item-45" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-45">
						<a href="https://wpstash.com/fashify/category/video/">Videos</a>
					</li>
					<li id="menu-item-67" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67">
						<a href="https://wpstash.com/fashify/contact/">Contact</a>
					</li>

					<li id="menu-item-68" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-68">
						<a href="/news/index.php">News</a>
					</li>
				</ul>
			</div>
		</div>
	</nav><!-- #site-navigation -->

	<!--<div id="content-wrapper">-->
<!--from original 
rss-панель
			<?
echo '$APPLICATION->GetCurPage(true) = ';
print_r($APPLICATION->GetCurPage(true));
echo "<br>";
echo 'SITE_DIR.+index.php = ';
print_r(SITE_DIR."index.php");
echo "<br>";

			if($APPLICATION->GetCurPage(true) == SITE_DIR."index.php"):?>
			<a href="<?=SITE_DIR?>rss/" id="rss-link"><?=GetMessage("TMPL_RSS")?></a>
			<?endif?>
end of from original-->



			<div id="content" class="site-content">

				<div class="container right-sidebar">

<!--from original-->
				<div id="workarea">
					<div id="workarea-inner">

						<?if($APPLICATION->GetCurPage(true) != SITE_DIR."index.php")
						{
							echo "<h1>";
							$APPLICATION->ShowTitle(false);
							echo "</h1>";
						}
						?>
