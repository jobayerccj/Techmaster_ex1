<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
            <meta charset="<?php bloginfo( 'charset' ); ?>">
            <title><?php wp_title('|', true, 'right'); ?></title>  
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
            
            <meta name="description" content="<?php bloginfo('description'); ?>" />
            
            <?php wp_head(); ?>
        </head>
        
        <body id="top">

		<!-- Header -->
			<header id="header">
				<a href="<?php echo esc_url( get_template_directory_uri() ); ?>" class="image avatar"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/avatar.jpg" alt="" /></a>
                                <h1>
                                    <?php bloginfo('name');?><br/>
                                    <?php bloginfo('description');?>
                                </h1>
<!--				<h1><strong>I am Strata</strong>, a super simple<br />
				responsive site template freebie<br />
				crafted by <a href="http://html5up.net">HTML5 UP</a>.</h1>-->
			</header>

		<!-- Main -->