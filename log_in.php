<?php 
include('includes/header.php'); 
 
 ?>
<div class="maincontainer">
   <!-- <div class="row ">
       <div class="leftside bg-primary">
            <image src="background.jpg">
        </div> -->
        <div class="login text-white">
            <div class="card">
                <div class="card-header">
                  <h4>Login Form</h4>
                  <span class="line"></span>
                </div>
                <div class="card-body">
                <form action="logincheck.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                            <input type="email"  name="username" class="form-control" placeholder= "Enter your Email" autocomplete="off">   
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Password</label>
                            <input type="password"  name="password" class="form-control" placeholder= "Enter your Password" autocomplete="off">
                    </div>
                    <button type="submit" name= "submit" value="Login" class="btn-login btn-primary">Login</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>



 <?php include('includes/footer.php'); ?>  


