			<footer id="site-footer" role="contentinfo">

				<?php if ( is_active_sidebar( 'footer-one' ) || is_active_sidebar( 'footer-two' ) || is_active_sidebar( 'footer-three' ) ) : ?>

					<div class="footer-widgets-outer-wrapper section-inner">

						<div class="footer-widgets-wrapper">

							<div class="footer-widgets">
								<?php dynamic_sidebar( 'footer-one' ); ?>
							</div>

							<div class="footer-widgets">
								<?php dynamic_sidebar( 'footer-two' ); ?>
							</div>

							<div class="footer-widgets">
								<?php dynamic_sidebar( 'footer-three' ); ?>
							</div>

						</div><!-- .footer-widgets-wrapper -->

					</div><!-- .footer-widgets-outer-wrapper.section-inner -->

				<?php endif; ?>

				<p class="credits">
					<?php
					/* Translators: $s = name of the theme developer */
                    printf('Powered by <a href="https://wordpress.org/" target="_blank">WordPress</a><br>Theme by <a href="https://wordpress.org/themes/koji/" target="_blank">Koji</a>'); ?>
				</p><!-- .credits -->

			</footer><!-- #site-footer -->
			
			<?php wp_footer(); ?>

		</div><!-- #site-wrapper -->

	</body>
</html>
