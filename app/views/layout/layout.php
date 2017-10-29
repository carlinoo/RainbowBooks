<nav>
    <div class="nav-wrapper">
      <a href="<?php echo $_ENV['root_path']; ?>" class="brand-logo"><img src='public/assets/images/logo-white.png'></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html">Login</a></li>
        <li><a href="badges.html">Register</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Login</a></li>
        <li><a href="badges.html">Register</a></li>
        <li><a href="collapsible.html">Find Books</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
  </nav>

<?php render(); ?>
