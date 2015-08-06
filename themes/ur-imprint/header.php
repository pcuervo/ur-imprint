<!doctype html>
	<head>
		<meta charset="utf-8">
		<title><?php print_title(); ?></title>
		<!-- Sets initial viewport load and disables zooming -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- SEO -->
		<meta name="keywords" content="">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<!-- Compatibility -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="cleartype" content="on">
		<!-- Favicon - generated with http://www.favicomatic.com/ -->
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo THEMEPATH; ?>favicon/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo THEMEPATH; ?>favicon/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo THEMEPATH; ?>favicon/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo THEMEPATH; ?>favicon/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo THEMEPATH; ?>favicon/apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo THEMEPATH; ?>favicon/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo THEMEPATH; ?>favicon/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo THEMEPATH; ?>favicon/apple-touch-icon-152x152.png" />
		<link rel="icon" type="image/png" href="<?php echo THEMEPATH; ?>favicon/favicon-196x196.png" sizes="196x196" />
		<link rel="icon" type="image/png" href="<?php echo THEMEPATH; ?>favicon/favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/png" href="<?php echo THEMEPATH; ?>favicon/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="<?php echo THEMEPATH; ?>favicon/favicon-16x16.png" sizes="16x16" />
		<link rel="icon" type="image/png" href="<?php echo THEMEPATH; ?>favicon/favicon-128.png" sizes="128x128" />
		<meta name="application-name" content="Little Crow"/>
		<meta name="msapplication-TileColor" content="#009C9F" />
		<meta name="msapplication-TileImage" content="<?php echo THEMEPATH; ?>favicon/mstile-144x144.png" />
		<meta name="msapplication-square70x70logo" content="<?php echo THEMEPATH; ?>favicon/mstile-70x70.png" />
		<meta name="msapplication-square150x150logo" content="<?php echo THEMEPATH; ?>favicon/mstile-150x150.png" />
		<meta name="msapplication-wide310x150logo" content="<?php echo THEMEPATH; ?>favicon/mstile-310x150.png" />
		<meta name="msapplication-square310x310logo" content="<?php echo THEMEPATH; ?>favicon/mstile-310x310.png" />
		<!-- Google font(s) -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->

		<!-- Typekit -->
		<!-- <script src="//use.typekit.net/xxxxxx.js"></script> -->
		<!-- <script>try{Typekit.load();}catch(e){}</script> -->
		<?php wp_head(); ?>
	</head>

	<body>
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		<div class="[ container ]">
			<?php if ( ! is_home() ){ ?>
				<!-- Mobile header
				================================================== -->
				<header class="[ xmall-12 ][ padding-top-bottom--small ][ bg-light ][ drop-shadow ][ hidden--xlarge ]">
					<div class="[ wrapper ]">
						<div class="[ text-center color-light ]">
							<div class="[ bg-image-placeholder__wrapper bg-image-placeholder__wrapper__logo ][ no-margin ][ hidden--xlarge-inline ]">
								<a class="[ bg-image-placeholder bg-image-placeholder__logo ]" href="<?php echo site_url(); ?>"></a>
							</div>
						</div>
					</div>
				</header>
			<?php } ?>

			<!-- Desktop header on top
			================================================== -->
			<header class="[ xmall-12 ][ shown--xlarge ][ padding-top-bottom--small ]<?php echo ( is_home() ? '' : '[ drop-shadow ]'); ?>">
				<div class="[ wrapper ]">
					<div class="[ xmall-2 ][ inline-block align-middle ][ menu__item ]">
						<div class="[ bg-image-placeholder__wrapper <?php echo ( is_home() ? 'bg-image-placeholder__wrapper__logo--white' : 'bg-image-placeholder__wrapper__logo'); ?> ]">
							<a class="[ bg-image-placeholder bg-image-placeholder__logo ]" href="<?php echo site_url(); ?>"></a>
						</div>
					</div><div
					class="[ xmall-10 ][ inline-block align-middle ][ text-center ]">
						<nav class="[ text-right ]">
							<a href="<?php echo site_url('create'); ?>" class="[ button button--hollow <?php echo ( is_home() ? 'button--light' : 'button--primary'); ?> ][ inline-block align-middle ]">Create</a>
							<a href="<?php echo site_url('catalogue'); ?>" class="[ button button--ink <?php echo ( is_home() ? 'button--light' : 'button--primary'); ?> ][ inline-block align-middle ]">Catalogue</a>
							<a href="<?php echo site_url('contact'); ?>" class="[ button button--ink <?php echo ( is_home() ? 'button--light' : 'button--primary'); ?> ][ inline-block align-middle ]">Contact</a>
							<a href="<?php echo site_url('my-account'); ?>" class="[ button button--ink <?php echo ( is_home() ? 'button--light' : 'button--primary'); ?> ][ inline-block align-middle ]">Register / Login</a>
							<a href="<?php echo site_url('cart'); ?>" class="[ button button--ink <?php echo ( is_home() ? 'button--light' : 'button--primary'); ?> ][ inline-block align-middle ]">
								<img class="[ svg icon icon--small ][ <?php echo ( is_home() ? 'color-light' : 'color-primary'); ?> ]" src="<?php echo THEMEPATH; ?>icons/cart.svg" alt="cart">
							</a>
						</nav><!-- categorias -->
					</div>
				</div>
			</header>

			<!-- Desktop header when scrolled
			================================================== -->
			<header class="[ xmall-12 ][ shown--xlarge ][ padding-top-bottom--small ][ drop-shadow ][ scrolled ][ hide ]">
				<div class="[ wrapper ]">
					<div class="[ xmall-2 ][ inline-block align-middle ][ menu__item ]">
						<div class="[ bg-image-placeholder__wrapper bg-image-placeholder__wrapper__logo ]">
							<a class="[ bg-image-placeholder bg-image-placeholder__logo ]" href="<?php echo site_url(); ?>"></a>
						</div>
					</div><div
					class="[ xmall-10 ][ inline-block align-middle ][ text-center ]">
						<nav class="[ text-right ]">
							<a href="<?php echo site_url('create'); ?>" class="[ button button--hollow button--primary ][ inline-block align-middle ]">Create</a>
							<a href="<?php echo site_url('catalogue'); ?>" class="[ button button--ink button--primary ][ inline-block align-middle ]">Catalogue</a>
							<a href="<?php echo site_url('contact'); ?>" class="[ button button--ink button--primary ][ inline-block align-middle ]">Contact</a>
							<a href="<?php echo site_url('my-ccount'); ?>" class="[ button button--ink button--primary ][ inline-block align-middle ]">Register / Login</a>
							<a href="<?php echo site_url('cart'); ?>" class="[ button button--ink ][ inline-block align-middle ]">
								<img class="[ svg icon icon--small ][ color-primary ]" src="<?php echo THEMEPATH; ?>icons/cart.svg" alt="cart">
							</a>
						</nav><!-- categorias -->
					</div>
				</div>
			</header>

			<div class="[ main ]">
