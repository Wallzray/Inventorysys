<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />

    <title>Login</title>

	  <link rel="icon" type="image/x-icon" href="assets/favicon.png">
	  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	  <link rel="stylesheet" href="assets/css/style.css">
    <style>
      html, body{
        height:100%;
        width:100%;
      }
      body{
        display:flex;
        flex-direction:column;
      }
      #main{
        flex-grow: 2;
        /* flex-shrink: 1; */
        margin-bottom: 7em;
        display:flex;
        align-items:center;
        justify-content:center;
}

.open-button {
  background-color: red;
  color: white;
  /* padding: 16px 20px; */
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  /* bottom: 23px;*/
  margin-right: 42.5%; 
  width: 150px;
}
.form-popup {
  display: none;
  min-width: 70%;
  position: absolute;
  top: 50%;
  /* right: 50%; */
  border: 3px solid #f1f1f1;
  transform: translate(-50%,-50%);
}
.form-container {
  min-width: 70%;
  padding: 10px;
  background-color: white;
}
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}
.form-container .cancel {
  background-color: red;
}
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

    </style>
  </head>

  <body>
    <nav class="navbar navbar-inverse">
      <div class="container">
        
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li  style="align-self: center;">M-KAY PHARMACY INVENTORY MANAGEMENT SYSTEM</li>
          </ul>
          
        </div>
        
      </div>
    </nav>
    
    <header id="header">
      <div class="container">
        <div class="col-md-10">
          <h2 class="text-center">
          Pharmacy Inventory Management System - Admin Login
          </h2>
        </div>
       </div>
      </div>
    </header>

<section id="main">
        <div class="col-lg-4 col-md-4 col-sm-11 col-xs-12">
           <form method="post" cl action="authModel.php">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="username" name="username" class="form-control"/>
            </div>

            <div class="form-group">
              <label for="password">Password</label>        
              <input class="form-control" name="password" id="password" type="password"/>
            </div>
              
            <div class="text-center">
            <button type="submit" name="admin_login" value="Login" class="btn btn-primary btn-sm rounded-0">Login</button>
            <button class="btn btn-info btn-sm rounded-0"><a href="staff_login.php" style="color:white; text-decoration:none;">Staff Login</a></button>
            </div>
            </form> <br>
    
              <button class="open-button" style="right: 20px;" onclick= "openForm()">New User?</button>
              <div class= "form-popup" id= "myForm">
              <form action="authModel.php" method="post" class="form-container">
                <h4>Register Account</h4>
              <div class="form-group">
                <label for="username">Username</label>
                <input type="username" name="username" class="form-control"/>
              </div>
            <div class="form-group">
              <label for="password">Password</label>        
              <input class="form-control" name="password" id="password" type="password" required/>
            </div>
            
            <button type="submit" name="admin_register" class="btn">Register</button>
            <button class="btn-cancel" onclick="closeForm()">Close</button>
          </form>
        </div>
        
    </div>   
        
   </section>
    

	<footer id="footer" class="navbar navbar-fixed-bottom">
      <span>M-KAY PHARMACY INC</span>
	</footer>

    <script>
      function openForm(){
        document.getElementById("myForm").style.display= "block";
      }
      function closeForm(){
        document.getElementById("myForm").style.display= "none";
      }
    </script>
  </body>
</html>
