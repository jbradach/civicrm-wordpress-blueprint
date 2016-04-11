<header class="navbar navbar-primary navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><strong><?php bloginfo('name'); ?></strong></a>
    </div>
    <nav class="collapse navbar-collapse navbar-responsive-collapse" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control col-md-8" placeholder="Search">
        </div>
      </form>
    </nav>
  </div>
</header>
