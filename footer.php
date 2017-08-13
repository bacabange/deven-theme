<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Deven_Blog
 */

?>
	
	<div class="page-footer-big">
		<div class="container">
			<p>Sigueme y conoce(me) mi trabajo.</p>
			<a class="btn-floating btn-large waves-effect waves-light btn-light" target="_blank" href="https://twitter.com/bacabange"><i class="fa fa-twitter"></i></a>
			<a class="btn-floating btn-large waves-effect waves-light btn-light" target="_blank" href="https://www.linkedin.com/in/stivncastillo"><i class="fa fa-linkedin"></i></a>
			<a class="btn-floating btn-large waves-effect waves-light btn-light" target="_blank" href="https://github.com/bacabange"><i class="fa fa-github"></i></a>
			<a class="btn-floating btn-large waves-effect waves-light btn-light" target="_blank" href="https://www.behance.net/bacabange"><i class="fa fa-behance"></i></a>
		</div>
	</div>

	<footer class="page-footer">
		<div class="footer-copyright">
			<div class="container">
				Copyright © 2017 - <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'deven-blog' ), 'deven-blog', '<a href="http://stivencastillo.com/">Stiven Castillo</a>' ); ?>
			</div>
		</div>
	</footer>

<script  src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
