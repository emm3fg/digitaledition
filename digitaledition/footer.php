<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->	<div class="site-content">
		<footer id="colophon" class="hentry" role="contentinfo">
			<div class="site-info">
				<?php
					/**
					 * Fires before the Twenty Fifteen footer text for footer customization.
					 *
					 * @since Twenty Fifteen 1.0
					 */
					do_action( 'twentyfifteen_credits' );
				?>
				Designed and maintained by <a href="https://www.twitter.com/ericmmcd">Eric McDaniel</a>, a graduate student at the <a href="http://www.virginia.edu">University of Virginia.</a>
				<br>Built on the <a href="http://www.ericmcdaniel.co/digitaledition/">Digital Edition</a> platform, adapted from Wordpress <a href="https://wordpress.org/themes/twentyfifteen/">Twenty Fifteen</a> theme.
			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div>
</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>