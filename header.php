<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!-- [if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif] -->
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

</head>
<body>
  <div class="wrapper">
    <header class="header">
      <div class="levelone">
        <div class="marcosLogo">
          <img alt="Marco's Pizza Logo" class='logo' src="<?php echo get_template_directory_uri(); ?>/images/marcos.png" />
        </div>
        <div class="marcosContact">
          <div class="contactIcons">
            <div>
              F
            </div>
            <div>
              T
            </div>
            <div>
              P
            </div>
          </div>
          <p class='franchiseInfo'>Franchise Information</p>
          <h3>1-800-555-5555</h3>
          <div class="reBtn">
            <p>real estate</p>
          </div>
        </div>
      </div>
      <div class="leveltwo">
        <p>learn about marco's pizza</p>
        <p>request franchise information</p>
        <p>ownership application</p>
        <p>blog</p>
      </div>
      <div class="levelthree" style='background-image: url("<?php echo get_template_directory_uri(); ?>/images/report.png")'>
        <div class="reportBtn">
          <p>CLICK HERE</p>
        </div>
      </div>
    </header>
