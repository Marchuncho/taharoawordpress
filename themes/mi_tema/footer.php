<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer-menu' ) ); ?>
<?php } ?>
<footer class="footer">
  <div class="footer__icon">
    <a href="https://www.instagram.com/taharoa_/" target="_blank"><i class="fab fa-instagram fa-3x footer__icon--color "></i></a>
    <p>Visita nuestro Insta</p>
  </div>

</footer>
<?php wp_footer() ?>
</body>
</html>
