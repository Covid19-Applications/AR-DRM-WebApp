<style type="text/css">
    
    form #logout{
  margin-top: 6px;
  margin-left: 15px;
}

</style>


<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="../index.php"><b>Apna Arunachal Pradesh</a></b> </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" >
               
              <li><a class="active" href="../index.php" >Home</a></li>
                <li><a href="../covid-dashboard.php">Covid19 Dashboard</a></li>
                <li><a href="../covid-centers.php">Services</a></li>
                <li><a href="../contact.php">Contact</a></li>


                <?php
                if(isset($_SESSION['user_role'])){
                    $user_role = $_SESSION['user_role'];
                    if($user_role == 'admin') {
                        echo "<li><a href='admin/index.php'>Admin panel</a></li>";
                    } elseif(isset($_SESSION['user_role'])){
                        $user_role = $_SESSION['user_role'];
                            if($user_role == 'subscriber') {

                                echo "<li><a href='users/index.php'>User's Dashboard</a></li>";
                            } }
                   } 
                ?>

               <li class="get-started">
            <form action="../logout.php" method="POST"> 
            <button type="submit" name="user_logout_btn" class="btn btn-primary" id="logout">Logout</button>
          </form></li>
              
            </ul>
        <!--     <form class="navbar-form navbar-right" action="search.php" method="post">
                    <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Search">
                    <div class="input-group-btn">
                    <button class="btn btn-default" type="submit" name="search_submit">
                        <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form> -->
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

