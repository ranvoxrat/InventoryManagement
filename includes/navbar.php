<nav class="navbar navbar-expand-lg navbar-dark  bg-dark ">
  <div class="container">
    <a class="navbar-brand" href="#">INFOMAX NORTH EDSA BRANCH</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>

       <?php 
       if(isset($_SESSION['auth']))
       {
         ?>
        <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   <?= $_SESSION['auth_user']['name']; ?>
         </a>
         <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
        </li>
        <?php
       }
       else{
        ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="log_in.php">Login</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="register.php">Contact Us</a>
        </li>

        <?php
       }
       
       ?>
       
      </ul>
    </div>
  </div>
</nav>