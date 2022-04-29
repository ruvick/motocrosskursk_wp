<footer id="footer" class="footer">
	<div class="footer__container _container">

		<div class="footer__row d-flex">

			<?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'menu-list footer__menu d-flex',
				'container_class' => 'menu-list footer__menu d-flex','container' => false )); ?> 

			<div class="footer__contacts contacts d-flex">
				<? $tel = carbon_get_theme_option("as_phones_1"); 
					if (!empty($tel)){?><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="contacts__phone footer__phone"><? echo $tel; ?></a><?}?>
				<? $mail = carbon_get_theme_option("as_email");
					if (!empty($mail)) { ?><a href="mailto:<? echo $mail; ?>" class="contacts__mail footer__mail"><? echo $mail; ?></a><? } ?>
			</div>

			<div class="footer__social-block social-block d-flex">
				<a href="<?php echo carbon_get_theme_option('as_vk'); ?>" class="footer__social-icon social-block-icon social-block-icon-01"></a>
				<a href="<?php echo carbon_get_theme_option('as_insta'); ?>" class="footer__social-icon social-block-icon social-block-icon-02"></a>
			</div>

		</div>

	</div>
</footer>
</div> 

<?php wp_footer(); ?>
</body>
</html>