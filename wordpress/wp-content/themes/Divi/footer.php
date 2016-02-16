<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
			<div class="bg2-with-mask">
			<span class="black-mask color-mask"></span>
				<?php get_sidebar( 'footer' ); ?>

				<div class="container">
					<p id="footer-info">
						<a href="http://showy.com.br" title="By Showy">By Showy</a>
					</p>
				</div>	

		
			</div>

				
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>
</body>
</html>