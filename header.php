<!doctype html>
<?php 
	$site_url = site_url(); 
	$template_directory = get_template_directory_uri();
?>

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-M3H2MZW');</script>
	<!-- End Google Tag Manager -->

	<?php if (is_search()) { ?>
		<meta name="robots" content="noindex, nofollow">
	<?php } ?>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $template_directory; ?>/favicon.ico/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $template_directory; ?>/favicon.ico/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $template_directory; ?>/favicon.ico/favicon-16x16.png">
	<link rel="manifest" href="<?php echo $template_directory; ?>/favicon.ico/site.webmanifest">

	<!-- Code for the Salesforce form -->
	<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
	<script src="https://www.google.com/recaptcha/api.js"></script>
	<script>
	function timestamp() { 
		var response = document.getElementById("g-recaptcha-response"); 
		if (response == null || response.value.trim() == "") {
			var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);
			elems["ts"] = JSON.stringify(new Date().getTime());
			document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems); 
		} 
	} setInterval(timestamp, 500); 
	function recaptcha_callback() {
		$('.form-submit').prop('disabled', false);
	}
	function recaptcha_expired() {
		$('.form-submit').prop('disabled', true);
	}
	</script>
	<!-- Code for the Salesforce form -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M3H2MZW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header class="header">
	<div class="wrapper">
		<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img class="svg" src="<?php echo $template_directory; ?>/dist/assets/img/lifequiptsm_rgb.svg" alt="Lifequipt™ logo">
		</a>
		<div class="buttons">
			<a class="btn style-1" href="<?php echo esc_url( home_url( '/' ) ); ?>#contact">Contact</a>
		</div>
	</div>
</header>

<main class="main">
