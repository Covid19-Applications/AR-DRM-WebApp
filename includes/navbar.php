<style type="text/css">

.icofont-navigation-menu:before {
    content: "\efa2";
    color: black;
}

#header.header-scrolled, #header.header-inner-pages {
    background:#aef359;
}

#header .logo a {
    color: #000;
}

.nav-menu a {
    display: block;
    position: relative;
    color: #000;
    transition: 0.3s;
    font-size: 15px;
    font-family: "Open Sans", sans-serif;
    font-weight: 600;
}
.nav-menu a:hover, .nav-menu .active > a, .nav-menu li:hover > a {
    color: black;
}

  
form #logout{
  margin-top: 15px;
  margin-left: 15px;
}
</style>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-between">
          <h1 class="logo"><a href="index.php">Apna Arunachal</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

       <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="covid-dashboard.php">Covid19 Dashboard</a></li>
          <li class="drop-down"><a href="">Services</a>
            <ul>
              <li class="drop-down"><a href="#">Health Care</a>
                <ul>
                  <li><a href="covid-centers.php">Public Health Care</a></li>
                  <li><a href="medical.php">Medical</a></li>
                  <li><a href="blood-donate.php">Blood Bank</a></li>
                  <li><a href="msme.php">MSME</a></li>
                </ul>
              </li>
              <li class="drop-down"><a href="#">Disaster Management</a>
                <ul>
                 <li><a href="donate-equipment.php">Donations</a></li>
                  <li><a href="govt.php">Government Services</a></li>
                  <li><a href="epass.php">Movement Pass</a></li>
                  <li><a href="volunteer.php">Volunteers</a></li>
                  <li><a href="clusters.php">Cluster Geofencing</a></li>
                </ul>
              </li>
              <li class="drop-down"><a href="#">Education & Skilling</a>
                <ul>
                  <li><a href="hr.php">HR Recruitment</a></li>
                  <li><a href="courses.php">Online Vocational Courses</a></li>
                  <li><a href="blog">Man Power</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="contact.php">Contact</a></li>
           <li class="get-started">
            <form action="logout.php" method="POST"> 
            <button type="submit" name="user_logout_btn" class="btn btn-primary" id="logout">Logout</button>
          </form></li>

        </ul>
      </nav><!-- .nav-menu  class="get-started-btn scrollto"-->
        </div>
      </div>

    </div>
  </header><!-- End Header -->