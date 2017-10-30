<nav>
    <div class="nav-wrapper">
      <a href="<?php echo $_ENV['root_path']; ?>" class="brand-logo"><img src='<?php echo path("public/assets/images/logo-white.png"); ?>'></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">

        <?php
          // Show when user is logged in
          if (user_signed_in()) {
            echo "<li><a href='#'>Search</a></li>";
            echo "<li><a href='#'>My Reservations</a></li>";
            echo "<li><a href='" . path('user/destroy_session') . "'>Logout</a></li>";
          } else {
            echo "<li><a href='" . $_ENV['root_path'] . "'>Home</a></li>";
            echo "<li><a href='#'>Login</a></li>";
            echo "<li><a href='#'>Sign Up</a></li>";
          }
        ?>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <?php
          // Show when user is logged in
          if (user_signed_in()) {
            echo "<li><a href='#'>Search</a></li>";
            echo "<li><a href='#'>My Reservations</a></li>";
            echo "<li><a href='#'>" . path('user/destroy_session') . "</a></li>";
          } else {
            echo "<li><a href='" . $_ENV['root_path'] . "'>Home</a></li>";
            echo "<li><a href='#'>Login</a></li>";
            echo "<li><a href='#'>Sign Up</a></li>";
          }
        ?>
      </ul>
    </div>
  </nav>
