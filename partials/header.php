<?php 

  require 'database.php'

?>

<header>
  <ul class="nav">
    <?php if(!empty($inicio)): ?>
      <li class="nav-item">
        <a href="./courses.php" class="nav-link active" href="#">Mis Cursos</a>
      </li>
      <li class="nav-item">
        <a href="./player.php" class="nav-link" href="#">Reproductor</a>
      </li>
      <li class="nav-item">
        <a href="logout.php" class="nav-link">Logout</a>
      </li>
    <?php endif; ?>
      <li  class="nav-item">
        <a href="login.php" class="nav-link">Login</a>
      </li>
      <li  class="nav-item">
        <a href="signup.php" class="nav-link">SignUp</a>
      </li>
  </ul>
</header>

