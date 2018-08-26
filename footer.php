<footer class="footer">
  <div class="container container--footer">
    <?php wp_nav_menu( array(
            'theme_location' => 'footer-nav',
            'container' => 'nav',
            'container_class' => 'footer__nav',
            'container_id' => 'footer__nav',
            'fallback_cb' => ''
      )); ?>
    <section class="copyright">
      <p class="desc desc--copyright">copyright ©
        <?php bloginfo('name'); ?> All Rights Reserved.</p>
    </section>
  </div>
</footer>
<!-- システム・プラグイン連携用 -->
<?php wp_footer(); ?>
</body>

</html>