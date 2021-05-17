<div class="col-md-4">
	<?php

                            if(isset($_SESSION['user_role'])){
                            $user_role = $_SESSION['user_role'];
                            $user_name = $_SESSION['username'];
                            if($user_role == 'admin') {
                                echo "<div class='well'><h4>Hi, $user_name</h4><br><li><a href='admin/index.php'>Admin Panel</a></li><li><a href='users'>Control Panel</a></li><li><a href='admin/users.php?source=change_password'>Change Password</a></li><br><center><a class='btn btn-danger' href='logout.php'>Logout</a></center></div>";
                            }
                           } 
                           else { //message request
                                    if(isset($_GET['msg'])){
                                        $msg = $_GET['msg'];
                                        $msg2 = $_GET['msg2'];
                                        msg_show($msg, $msg2);
                                    } else {
                                        $msg = '';
                                        $msg2 = '';
                                    }
                                
                            echo "<div class='well'>
                                <h4>Login</h4>
                                <form action='includes/login.php' method='post'>
                                <div class='input-group'>
                                <label for='username'><i class='fa fa-fw fa-user'></i>Username:</label>
                                <input name='username' type='text' class='form-control' placeholder='Enter Username'>
                                </div>
                                <div class='input-group'>
                                <label for='password'><i class='fa fa-fw fa-key'></i>Password:</label>
                                <input name='password' type='password' class='form-control' placeholder='Enter Password'>
                                </div><br>
                                <div class='input-group'>
                                <button name='login' class='btn btn-default' type='submit'>Login</button><br>
                                ";?>
                                <span style="font-size: 12px;">Want to Blog?  </span style="font-size: 12px;"> <a href="registration.php">Register</a>
                                <?php
                                "
                                </div>
                                </form>
                                </div>
                                "; } ?>
	

                     </div>    
                     </div>       
		<!-- Blog Categories Well -->
		<div class="well">
			<h4>Blog Categories</h4>
			<div class="row">
				<div class="col-lg-6">
					<ul class="list-unstyled">
						<?php
                    $query = "SELECT * FROM categories";
                    $select_all_categories_query = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($select_all_categories_query)){
                        $cat_id = $row['cat_id'];
                        $cat_title = $row['cat_title'];
                        echo "<li><i class='fa fa-fw fa-arrow-right'></i><a href='category.php?category={$cat_id}'>{$cat_title}</a></li>";
                    }
                    ?>
					</ul>
				</div>
				<!-- /.col-lg-6 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- Side Widget Well -->

