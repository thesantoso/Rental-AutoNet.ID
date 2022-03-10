<header id="header">
  <div class="container">

    <div id="logo" class="pull-left">
      <h1><a href="index.html" id="body" class="scrollto">
          <!-- <span style="color: Red;">Rental</span> -->
          Rental AutoNet.ID
        </a></h1>
      <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
    </div>
    <div class="pull-left ml-4">
      <!-- SEARCH FORM -->
      <form class="form-inline " action="search.php" method="post">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="text" name="searchdata" placeholder="Search Car" aria-label="Search" required="true">
          <div class="input-group-append">
            <button class="btn btn-navbar" style="background-color: #49a3ff;" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
      </form>
    </div>


    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active"><a href="index.php">Beranda</a></li>
        <li><a href="about.php">Tentang Kami</a></li>
        <li><a href="car_list.php">Sewa Mobil</a></li>
        <li><a href="contact.php">Kontak</a></li>
        <li><a href="portfolio.php">Galeri</a></li>
        <li><a href="admin">Admin</a></li>
        <?php if (strlen($_SESSION['login']) != 0) {
        ?>
          <?php
          $email = $_SESSION['login'];
          $sql = "SELECT FullName FROM tblusers WHERE EmailId=:email ";
          $query = $dbh->prepare($sql);
          $query->bindParam(':email', $email, PDO::PARAM_STR);
          $query->execute();
          $results = $query->fetchAll(PDO::FETCH_OBJ);
          if ($query->rowCount() > 0) {
            foreach ($results as $result) {
          ?>
              <li class="menu-has-children"><a href=""><?php echo htmlentities($result->FullName); ?></a>
                <ul>
                  <li><a href="profile.php">Pengaturan Profil</a></li>
                  <li><a href="update_password.php">Ubah Password</a></li>
                  <li><a href="my_booking.php">Daftar Sewa Saya</a></li>
                  <li><a href="logout.php">Keluar</a></li>
                </ul>
              </li>
        <?php
            }
          }
        } ?>
      </ul>
    </nav><!-- #nav-menu-container -->
  </div>
</header><!-- #header -->