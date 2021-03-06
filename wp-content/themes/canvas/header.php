<?php
/**
* @package Canvas
**/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php // Favicons/application icons ?>
	<link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/canvas/img/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/canvas/img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/canvas/img/favicon-16x16.png">
	<link rel="manifest" href="/wp-content/themes/canvas/img/site.webmanifest">
	<link rel="mask-icon" href="/wp-content/themes/canvas/img/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="/wp-content/themes/canvas/img/favicon.ico">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-config" content="/wp-content/themes/canvas/img/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

	<!-- Font Scripts -->
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">

	<!-- Additional Scripts -->
	<script type='text/javascript' src='/wp-content/themes/canvas/js/plugins/parallax-scroll-min.js'></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-12321735-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-12321735-1');
	</script>

	<script data-account="lAHGKsg9fb" src="https://cdn.userway.org/widget.js"></script>

	<script type="application/ld+json">
	{
	  "@context": "https://schema.org",
	  "@type": "Dentist",
	  "name": "Align Orthdontics",
	  "image": "https://smilesbydrm.com/",
	  "@id": "",
	  "url": "https://smilesbydrm.com/",
	  "telephone": "(616) 531-1811",
	  "address": {
	    "@type": "PostalAddress",
	    "streetAddress": "1673 Gezon Parkway SW",
	    "addressLocality": "Wyoming",
	    "addressRegion": "MI",
	    "postalCode": "49519",
	    "addressCountry": "US"
	  },
	  "geo": {
	    "@type": "GeoCoordinates",
	    "latitude": 42.861285,
	    "longitude": -85.705376
	  } 
	}
	</script>

	<script type="application/ld+json">
	{
	  "@context": "https://schema.org/",
	  "@type": "Person",
	  "name": "Dr. Larry Majznerski",
	  "url": "https://smilesbydrm.com",
	  "image": "https://smilesbydrm.com",
	  "sameAs": "https://www.facebook.com/majznerski/",
	  "jobTitle": "Orthodontist",
	  "worksFor": {
	    "@type": "Organization",
	    "name": "Align Orthodontics"
	  }  
	}
	</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>

	<?php // Logo ?>
	<a href="/" class="logo">
		<img src="/wp-content/themes/canvas/img/logo.svg" alt="Align Orthodontics Logo">
	</a>

	<?php // Mobile menu ?>
	<a class="menu-toggle"><span></span></a>

	<?php // On smaller devices, the main menu will appear here ?>

	<nav id="side-menu">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		<div class="menu-contact">
			<a href="/free-consult" class="btn">Free Consult</a>
			<p>
				<a href="tel:616-531-1811" class="phone-link"><svg height="14" viewBox="0 0 15 14" width="15" xmlns="http://www.w3.org/2000/svg"><path fill="#000000" d="m3.90625 17c1.6328125-.015625 4.53125-1.2890625 6.9140625-3.671875 2.390625-2.390625 3.6640625-5.2890625 3.6797962-6.9140625.0155163-1.6328125-1.6563587-2.8671875-3.2188587-3.3203125-.1640625-.046875-.34375-.09375-.515625-.09375-.640625 0-.8671875.5234375-.9765625.78125-.2265625.5078125-.5390625 1.1875-.8125 1.78125-.1953125.421875-.375.8125-.5 1.09375-.234375.53125-.2734375.9453125.25 1.4609375l.6953125.703125c-.2421875.40625-.6953125 1.078125-1.359375 1.7421875s-1.34375 1.1171875-1.75 1.359375l-.6953125-.6953125c-.1328125-.1328125-.4140625-.4140625-.8359375-.4140625-.234375 0-.4375.0859375-.6328125.171875-.2734375.125-.671875.3046875-1.09375.4921875-.59375.2734375-1.2734375.5859375-1.78125.8125-.71875.3125-.90625.734375-.6875 1.4921875.453125 1.5546875 1.6796875 3.21875 3.296875 3.21875zm-.015625-1.25h-.0078125c-.890625 0-1.765625-1.171875-2.1015625-2.3125v-.015625c.515625-.2265625 1.1953125-.53125 1.796875-.8125.421875-.1875.8046875-.3671875 1.078125-.4921875.0234375-.0078125.046875-.015625.0625-.0234375.0078125 0 .0078125.0078125.015625.015625l1.34375 1.34375.3984375-.1953125c.046875-.0234375 1.265625-.609375 2.46875-1.8125 1.1953125-1.203125 1.7890625-2.421875 1.8125-2.46875l.1875-.3984375-1.3359375-1.3359375c-.0078125-.0078125-.015625-.015625-.015625-.0234375.0078125-.015625.015625-.03125.0234375-.0546875.125-.28125.296875-.6640625.4921875-1.078125.2734375-.6015625.5859375-1.28125.8125-1.796875h.0078125c1.1484375.3359375 2.3359375 1.21875 2.3281633 2.109375-.0156633 1.1484375-1.0547258 3.7890625-3.3125383 6.046875-2.265625 2.2578125-4.8984375 3.296875-6.0546875 3.3046875z" transform="translate(0 -3)"/></svg> 616-531-1811</a>
			</p>
			<p>
				<a href="https://g.page/AlignOrthoMI?share" class="location-link" target="_blank"><svg height="15" viewBox="0 0 11 15" width="11" xmlns="http://www.w3.org/2000/svg"><path d="m7.875 18.25.4921875-.6328125s1.625-2.0859375 2.265625-2.921875c1.1953125-1.5703125 2.3671875-3.2890625 2.3671875-5.5546875 0-2.8359375-2.296875-5.140625-5.125-5.140625s-5.125 2.3046875-5.125 5.140625c0 2.265625 1.171875 3.984375 2.3671875 5.5546875.640625.8359375 2.265625 2.921875 2.265625 2.921875zm0-1.9765625c-.5390625-.6953125-1.3671875-1.765625-1.78125-2.3125-1.3515625-1.765625-2.1328125-3.1171875-2.1328125-4.8359375 0-2.1640625 1.7578125-3.9296875 3.9140625-3.9296875s3.9140625 1.765625 3.9140625 3.9296875c0 1.71875-.78125 3.0703125-2.1328125 4.8359375-.4140625.546875-1.2421875 1.6171875-1.78125 2.3125zm0-6.0234375c.8984375 0 1.625-.7265625 1.625-1.625s-.7265625-1.625-1.625-1.625-1.625.7265625-1.625 1.625.7265625 1.625 1.625 1.625z" fill="#000000" transform="translate(-2 -4)"/></svg> 1673 Gezon Pkwy SW<br/> Wyoming, MI 49519</a>
			</p>
		</div>
	</nav>

	<a href="tel:616-531-1811" class="phone-cta"><svg height="14" viewBox="0 0 15 14" width="15" xmlns="http://www.w3.org/2000/svg"><path d="m3.90625 17c1.6328125-.015625 4.53125-1.2890625 6.9140625-3.671875 2.390625-2.390625 3.6640625-5.2890625 3.6797962-6.9140625.0155163-1.6328125-1.6563587-2.8671875-3.2188587-3.3203125-.1640625-.046875-.34375-.09375-.515625-.09375-.640625 0-.8671875.5234375-.9765625.78125-.2265625.5078125-.5390625 1.1875-.8125 1.78125-.1953125.421875-.375.8125-.5 1.09375-.234375.53125-.2734375.9453125.25 1.4609375l.6953125.703125c-.2421875.40625-.6953125 1.078125-1.359375 1.7421875s-1.34375 1.1171875-1.75 1.359375l-.6953125-.6953125c-.1328125-.1328125-.4140625-.4140625-.8359375-.4140625-.234375 0-.4375.0859375-.6328125.171875-.2734375.125-.671875.3046875-1.09375.4921875-.59375.2734375-1.2734375.5859375-1.78125.8125-.71875.3125-.90625.734375-.6875 1.4921875.453125 1.5546875 1.6796875 3.21875 3.296875 3.21875zm-.015625-1.25h-.0078125c-.890625 0-1.765625-1.171875-2.1015625-2.3125v-.015625c.515625-.2265625 1.1953125-.53125 1.796875-.8125.421875-.1875.8046875-.3671875 1.078125-.4921875.0234375-.0078125.046875-.015625.0625-.0234375.0078125 0 .0078125.0078125.015625.015625l1.34375 1.34375.3984375-.1953125c.046875-.0234375 1.265625-.609375 2.46875-1.8125 1.1953125-1.203125 1.7890625-2.421875 1.8125-2.46875l.1875-.3984375-1.3359375-1.3359375c-.0078125-.0078125-.015625-.015625-.015625-.0234375.0078125-.015625.015625-.03125.0234375-.0546875.125-.28125.296875-.6640625.4921875-1.078125.2734375-.6015625.5859375-1.28125.8125-1.796875h.0078125c1.1484375.3359375 2.3359375 1.21875 2.3281633 2.109375-.0156633 1.1484375-1.0547258 3.7890625-3.3125383 6.046875-2.265625 2.2578125-4.8984375 3.296875-6.0546875 3.3046875z" transform="translate(0 -3)"/></svg> 616-531-1811</a>

	<a href="/free-consult" class="consult-btn">Free Consult</a>


</header>

<div id="page" class="site">