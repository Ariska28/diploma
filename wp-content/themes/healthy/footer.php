<footer class="c-footer" id="contacts">
	<div class="c-footer__container">
		<a class="c-footer__link" href="tel:+<?php the_field('footer-phone') ?>">+<?php the_field('footer-phone') ?></a>
		<a class="c-footer__link" href="mailto:<?php the_field('footer-mail')?>"> <?php the_field('footer-mail') ?></a>
		<div class="c-footer__logo">
			<a class="c-footer__logo-link" target="_blank" href="<?php the_field('footer-facebook') ?>">
				<svg class="el-icon c-footer__logo-svg">
					<use xmlns:xlink="http://www.w3.org/1999/xlink"
						xlink:href="<?php bloginfo( 'template_url' ); ?>/builder/public/images/svg_sprite_inline/sprite_inline.svg#ic-facebook"></use>
				</svg>

			</a>
			<a class="c-footer__logo-link" target="_blank" href="<?php the_field('footer-instagram') ?>">
				<svg class="el-icon c-footer__logo-svg">
					<use xmlns:xlink="http://www.w3.org/1999/xlink"
						xlink:href="<?php bloginfo( 'template_url' ); ?>/builder/public/images/svg_sprite_inline/sprite_inline.svg#ic-instagram"></use>
				</svg>

			</a>
			<a class="c-footer__logo-link" target="_blank" href="<?php the_field('footer-telegram') ?>">
				<svg class="el-icon c-footer__logo-svg">
					<use xmlns:xlink="http://www.w3.org/1999/xlink"
						xlink:href="<?php bloginfo( 'template_url' ); ?>/builder/public/images/svg_sprite_inline/sprite_inline.svg#ic-telegram"></use>
				</svg>
			</a>
		</div>
	</div>
</footer>
	<?php wp_footer(); ?>
</body>
</html>