<!doctype HTML>
<!--
====================================================================================== 
  If you're really a mean person you're going to come back as a fly and eat poop.
======================================================================================
-->
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="google-site-verification" content="vE6Hf8Gkyu13s6yatjVXV9bH26K5ArIp3C6QUxxtnLw" />
<title>
<?php bloginfo('name'); ?> | <?php if( is_home() ) : echo bloginfo( 'description' ); endif; ?><?php wp_title( '', true ); ?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<meta name="description" content="Abhimanyu Rana Design Studio">
<meta name="author" content="Abhimanyu Rana">
          
<!--[if lt IE 9]>
   <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->  
<!--css3-mediaqueries-js - http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="masthead" class="site-header" role="banner">
	<div class="container">
		
		<div class="gravatar">
			<?php 
				// grab admin email and their photo
				$admin_email = get_option('admin_email');
				echo get_avatar( $admin_email, 100 ); 
			?>
		</div>
	
		<nav role="navigation" class="site-navigation main-navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>
		
		<div class="clear"></div>
	</div>
		
</header>

<div class="container">

	<div id="primary">
		<div id="content" role="main">


<?php
	
	if( is_home() || is_archive() ) {
	
?>
			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post">
					
						<h1 class="title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_title() ?>
							</a>
						</h1>
						<div class="post-meta">
							<?php if( comments_open() ) : ?>
								<span class="comments-link">
									<?php comments_popup_link( __( 'Comment', 'break' ), __( '1 Comment', 'break' ), __( '% Comments', 'break' ) ); ?>
								</span>
							<?php endif; ?>
						
						</div><!--/post-meta -->
						
						<div class="the-content">
							<?php the_content( 'Continue...' ); ?>
							
							<?php wp_link_pages(); ?>
						</div><!-- the-content -->
						
						<div class="category clearfix">
							<?php echo get_the_category_list(); ?>
						</div>
						
					</article>

				<?php endwhile; ?>
				
				<!-- pagintation -->
				<div id="pagination" class="clearfix">
					<div class="past-page"><?php previous_posts_link( 'Newer &raquo;' ); ?></div>
					<div class="next-page"><?php next_posts_link( ' &laquo; Older' ); ?></div>
				</div><!-- pagination -->


			<?php else : ?>
				
				<article class="post error">
					<h1 class="404">Nothing posted yet</h1>
				</article>

			<?php endif; ?>

		
	<?php } //end is_home(); ?>

<?php	
	if( is_single() ) {
?>


			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post">
					
						<h1 class="title"><?php the_title() ?></h1>
						<div class="post-meta">
							<?php if( comments_open() ) : ?>
								<span class="comments-link">
									<?php comments_popup_link( __( 'Comment', 'less' ), __( '1 Comment', 'less' ), __( '% Comments', 'less' ) ); ?>
								</span>
							<?php endif; ?>
						
						</div>
						
						<div class="the-content">
							<?php the_content( 'Continue...' ); ?>
							
							<?php wp_link_pages(); ?>
						</div>
						
					</article>

				<?php endwhile; ?>
				
				<?php
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>


			<?php else : ?>
				
				<article class="post error">
					<h1 class="404">Nothing found :p</h1>
				</article>

			<?php endif; ?>


	<?php } ?>
	
<?php	
if( is_page()) {
?>

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post">
					
						<h1 class="title"><?php the_title() ?></h1>
						
						<div class="the-content">
							<?php the_content(); ?>
							
							<?php wp_link_pages(); ?>
						</div>
						
					</article>

				<?php endwhile; ?>

			<?php else : ?>
				
				<article class="post error">
					<h1 class="404">Nothing found :p</h1>
				</article>

			<?php endif; ?>

	<?php } ?>

		</div>
	</div>

</div>

<footer class="site-footer" role="contentinfo">
	<div class="site-info container">
		<?php do_action( 'break_credits' ); ?>
		Powered by <a href="http://wordpress.org/" title="A Semantic Personal Publishing Platform" rel="generator">WordPress</a>   &middot;   Made by <a href="http://planetabhi.com/" title="Abhimanyu Rana Designs" rel="generator">Abhimanyu Rana</a>

	</div>
</footer>

<?php wp_footer(); ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-12664170-7']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
