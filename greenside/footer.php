<?php 
// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;
?>
		<footer>

			<nav class="menu" id="social">

				<ul class="social">

					<li class="menu-item facebook">
						<a href="<?php the_field( 'facebook' ); ?>">
							<i class="fa fa-facebook"></i>
						</a>
					</li>

					<li class="menu-item twitter">
						<a href="<?php the_field( 'twitter' ); ?>">
							<i class="fa fa-twitter"></i>
						</a>
					</li>

					<li class="menu-item google">
						<a href="<?php the_field( 'google' ); ?>">
							<i class="fa fa-google-plus"></i>
						</a>
					</li>

				</ul>

			</nav>

			<p id="copyright"><?php echo workpower_copyright(); ?></p>

		</footer>

	</div><!-- site -->

<?php wp_footer(); ?>

</body>

</html>