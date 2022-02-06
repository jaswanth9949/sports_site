<?php
session_start();
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0px;
      border-radius: 0px;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 640px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #add8e6;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #000000;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
  <style>
.button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white;
  color: black;
  border: 2px solid #4CAF50;
border: #808080;
  border-style: solid;
  border-width: 5px;
}

.button1:hover {

  background-color: #add8e6;
  color: white;
}

.button2 {
  background-color: white;
  color: black;
  border: 2px solid #4CAF50;
border: #808080;
  border-style: solid;
  border-width: 5px;
}

.button2:hover {
  background-color: #add8e6;
  color: white;
}
.image {
  background-image: url('Sports1.jpeg');
  
  height: 500px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
</style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar" >
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <li ><a href="#">About Us</a></li>
        <li><a href="#">Products Quality</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">     
<?php
if(isset($_SESSION["email"])) {
?>
<li class="active"><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span><u>LogOut</u></a></li>
<?php
}else
{
?>
<li class="active"><a href="register.php"><span class="glyphicon glyphicon-log-in"></span><u>Register</u></a></li>
<li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span><u>Login</u></a></li>
<?php
}
?>      
	</ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav"><h3>
      “ Sports are such a great teacher. I think of everything they’ve taught me: camaraderie, humility, how to resolve differences.”  — Kobe Bryant
       <br><br><br>“Sports do not build charater. They reveal it.”
    </h3></div>
    <div class="col-sm-8 text-left" > 
	<br>
   <div class="image">
      <table align="center" border="50" >
        <h2 align="center"><b><u>Sports World</u></b></h2>
	<tr>
	<td><a href="buy.php"><button class="button button1">Buy Sport items</button></a></td>
	<td><a href="additems.php"><button class="button button2">Add sport items</button></a></td>
	</tr>
	</table>
</div>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well" >
        <u><b><p>ANR SPORTS</p></b></u>
      </div>
     
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>“Passion first and everything will fall into place.”— Holly Holm</p>
</footer>

</body>
</html>