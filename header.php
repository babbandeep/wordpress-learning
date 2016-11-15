<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html <?php language_attributes();?>	>
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title><?php the_title(); echo " | ";  bloginfo('name');?></title>
        <!-- Meta -->
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
		<!-- wordpress main stylesheet -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
		<?php wp_head(); ?>
    </head>
	<body>

        <div id="body-bg">
            <!-- Phone/Email -->
            <div id="pre-header" class="background-gray-lighter">
                <div class="container no-padding">
                    <div class="row hidden-xs">
                        <div class="col-sm-6 padding-vert-5">
                            <strong>Phone: </strong><?php echo get_theme_mod( 'phone_no') ?>
                        </div>
                        <div class="col-sm-6 text-right padding-vert-5">
                            <strong>Email: </strong><?php echo get_theme_mod( 'email' ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Phone/Email -->
            <!-- Header -->
            <div id="header">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html" title="">
                                <img src="<?php echo get_theme_mod('wb_logo'); ?>" alt="Logo" />
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>
                </div>
            </div>
            <!-- End Header -->
            <!-- Top Menu -->
            <div id="hornav" class="bottom-border-shadow">
                <div class="container no-padding border-bottom">
                    <div class="row">
                        <div class="col-md-8 no-padding">
						<?php  wp_nav_menu( array(
												  'theme_location' => 'header-menu',
												  'menu_id' => 'hornavmenu',
												  'menu_class' => 'nav navbar-nav',
												  'container' => 'div',
												  'container_class' => 'visible-lg',
												  'walker' => new T5_Nav_Menu_Walker_Simple()
											)
                    );  ?>

                        </div>
                        <div class="col-md-4 no-padding">
                            <ul class="social-icons pull-right">
                                <li class="social-twitter">
                                    <a href='<?php echo get_theme_mod( "tw_links" ); ?>' target="_blank" title="Twitter"></a>
                                </li>
                                <li class="social-facebook">
                                    <a href='<?php echo get_theme_mod( "fb_links" ); ?>' target="_blank" title="Facebook"></a>
                                </li>
                                <li class="social-googleplus">
                                    <a href='<?php echo get_theme_mod( "gp_links" ); ?>' target="_blank" title="Google+"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php get_search_form(); ?>
            <!-- End Top Menu -->
            <!-- === END HEADER === -->
