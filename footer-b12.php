                <div class="row">
                  <div class="col-md-12">
                    <footer>
                      <div class="row footer-b">
                        <div class="col-xs-12 col-s-12 col-md-6 col-lg-6">
                          <?php dynamic_sidebar('footer-b1') ?>
                        </div>
                        <div class="col-xs-12 col-s-12 col-md-6 col-lg-6">
                          <?php dynamic_sidebar('footer-b2') ?>
                        </div>
                      </div>
                      <div class="row copyright">
                        <div class="col-md-12">
                          <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?> | <a href="/sitemap/" title="sitemap">Sitemap</a></p>
                        </div>
                      </div>
                      <?php wp_footer(); ?>
                    </footer>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
