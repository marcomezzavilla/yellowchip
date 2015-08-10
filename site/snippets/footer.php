  <footer class="footer" role="contentinfo">
  <?php if ($page->template() == "contact"): ?>
    <div class="copyright">
      <?php echo $site->copyright()->kirbytext() ?>
    </div>
    <div class="cfpiva">
      <?php echo $site->CFPIVA()->kirbytext() ?>
    </div>
  <?php endif ?>
  </footer>

  <?php echo js('assets/js/main.js') ?>

</body>
</html>