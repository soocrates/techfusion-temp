<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
<!-- Header Start -->
<header class="navigation">
  <div id="navbar">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg px-0 py-4">
            <a class="navbar-brand h3" href="index.php">
              Tech<span>Fusion</span>
            </a>
      
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09"
              aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
              <span class="fa fa-bars"></span>
            </button>
      
            <div class="collapse navbar-collapse text-center" id="navbarsExample09">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php if ($currentPage == 'index.php') { echo 'active'; } ?>"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item <?php if ($currentPage == 'about.php') { echo 'active'; } ?>"><a class="nav-link" href="about.php">About</a></li>
                <li class="nav-item <?php if ($currentPage == 'service.php') { echo 'active'; } ?>"><a class="nav-link" href="service.php">Services</a></li>
                <li class="nav-item <?php if ($currentPage == 'project.php') { echo 'active'; } ?>"><a class="nav-link" href="project.php">Portfolio</a></li>
                <li class="nav-item <?php if ($currentPage == 'contact.php') { echo 'active'; } ?>"><a class="nav-link" href="contact.php">Contact</a></li>
                <!-- You can add more links here following the same pattern -->
            </ul>
      
              <div class="my-2 my-md-0 ml-lg-4 text-center">
                <a href="pricing.php" class="btn btn-solid-border btn-round-full">Get a Quote</a>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Header Close -->