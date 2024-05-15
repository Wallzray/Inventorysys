<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />

    <title>PMS|Login</title>

	  <link rel="icon"  type="image/png" href="assets/icon.png">
    
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
        flex-grow: 1;
        flex-shrink: 1;
        margin-bottom: 7em;
        display:flex;
        align-items:center;
        justify-content:center;
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
          Pharmacy Management System - Staff Login
          </h2>
        </div>
       </div>
      </div>
    </header>

 
   <section id="main">
        <div class="col-lg-4 col-md-4 col-sm-11 col-xs-12">
         <form method="post" class="well" action="authModel.php">
             <div class="form-group">
               <label for="username">Username</label>
               <input type="username" name="username" class="form-control"/>
             </div>
             
             <div class="form-group">
               <label for="password">Password:</label>
               <input class="form-control" name="password" id="password" type="password"/>
             </div>
                     
           <div class="text-center">
           <button type="submit" name="staff_login" value="Login" class="btn btn-primary btn-sm rounded-0">Submit</button>
           <button class="btn btn-info btn-sm rounded-0 text-light"><a href="login.php" style="text-decoration:none;color:white">Admin Login</a></button>
           </div>
    
         </form>
        </div>
   </section>
    
    <!-- /.Footer -->
	<footer id="footer" class="navbar navbar-fixed-bottom">
    <span> M-KAY PHARMACY INC </span>

	</footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
