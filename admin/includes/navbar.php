   <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">

  <div class="sidebar-brand-text mx-3">Apna Arunachal Pradesh</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="index.php">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
   Admin Pages
</div>



<li class="nav-item">
  <a class="nav-link" href="register.php">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Admin Profile</span></a>
</li>

<!-- <li class="nav-item">
  <a class="nav-link" href="doctors.php">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Doctors</span></a>
</li> -->
<!-- Nav Item - Utilities Collapse Menu -->

<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMed" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Health Care</span>
  </a>
  <div id="collapseMed" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded"><!-- 
      <h6 class="collapse-header">Custom Utilities:</h6> -->

      <a class="collapse-item" href="doctors.php">Doctors Lists</a>
      <a class="collapse-item" href="patients.php">Patients Appointments</a>
      <a class="collapse-item" href="doc-reg.php">Doctors Registration</a>
      <a class="collapse-item" href="covid-centers.php">Covid Centers</a>
      <a class="collapse-item" href="medstore.php">Medstore</a>
      <a class="collapse-item" href="hospitals.php">Hospitals</a>
      <a class="collapse-item" href="hospital_admission.php">Hospitals Admission</a>
      <a class="collapse-item" href="emergency.php">Emergency</a>
  </div>
</li>

<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDM" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Disaster Management</span>
  </a>
  <div id="collapseDM" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded"><!-- 
      <h6 class="collapse-header">Custom Utilities:</h6> -->
      <a class="collapse-item" href="orphan.php">Orphanage Details</a>
      <a class="collapse-item" href="orphan-registration.php">Orphanage Requests</a>
      <a class="collapse-item" href="donate-equipment.php">Donate Equipment</a>
      <a class="collapse-item" href="volunteer.php">Volunteer</a>
      <a class="collapse-item" href="ecommerce.php">Ecommerce Products</a>
  </div>
</li>

<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHR" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Education & Skilling</span>
  </a>
  <div id="collapseHR" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded"><!-- 
      <h6 class="collapse-header">Custom Utilities:</h6> -->
      <a class="collapse-item" href="employee.php">Employee</a>
      <a class="collapse-item" href="companies-details.php">Companies Details</a>
  </div>
</li>



<li class="nav-item">
  <a class="nav-link" href="contactusform.php">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Contact Us</span></a>
</li>




<!-- Divider -->
<hr class="sidebar-divider">





<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

     

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  
               ADMIN
                  
                </span>
                <img class="img-profile rounded-circle" src="https://cdn2.iconfinder.com/data/icons/mobile-banking-ver-1a/100/1-11-512.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

          <form action="logout.php" method="POST"> 
          
            <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>

          </form>
          


        </div>
      </div>
    </div>
  </div>