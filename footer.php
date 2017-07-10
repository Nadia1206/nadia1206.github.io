<footer id="footer">

	<?php dynamic_sidebar('Sidebar-1');?>
	
				<div class="inner">
					<h4> <?php echo get_theme_mod('header_social') ?></h4>
					<ul class="icons">
						<li><a href="<?php echo get_theme_mod('twitter_social');?>" class="icon round fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="<?php echo get_theme_mod('facebook_social');?>" class="icon round fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="<?php echo get_theme_mod('instagram_social');?>" class="icon round fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>

					<div class="copyright">
						&copy; Че не Гевара: <a href="https://templated.co">Че не кастро</a>.
					</div>

				<!-- </div> -->
			</footer>

		<!-- Scripts -->
			

	</body>
	<?php wp_footer();?>
</html>