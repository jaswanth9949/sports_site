<?php
session_start();
$message="";
if(count($_POST)>0) {
$con = mysqli_connect('127.0.0.1','root','','test') or die('Unable To connect');
$result = mysqli_query($con,"SELECT * FROM sportsregister WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {

$_SESSION["email"] = $row['email'];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["email"])) {
header("Location:home.php");
}
?>
<html>
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

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Style all input fields */
input {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}
/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
}
/*Style the container for inputs */
.container {
  background-color:#f1f1f1;
  padding: 20px;
}
/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}
#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}
.valid:before {
  position: relative;
  left: -35px;
  content: "YES";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "NO";
}
</style>
</head>
<body><div align="center">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
      
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="register.php"><span class="glyphicon glyphicon-register"></span><b><u>Register</u></b></a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav"><h3>
      “It is not up to me whether I win or lose. Ultimately, this might not be my day. And it is that philosophy towards sports, something that I really truly live by. I am emotional. I want to win. I am hungry. I am a competitor. I have that fire. But 
      deep down, I truly enjoy the art of competing so much more than the result.”
     </h3> </div>
    <div class="col-sm-8 text-left" > 
	
	
<div align="center">
<h3><b><u>Login</u></b></h3>
<p>Try to submit the form.</p>
<table border="2" cellpadding="5" cellspacing="0">
<div class="container">
  <form action="#" method="post">
    <tr><td><label for="usrname">Email</label>
    <input type="text" id="usrname" name="email" required></td>
    </tr><tr>
    <td><label for="psw">Password</label>
    <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required></td>
    </tr><tr>
   <td> <input type="submit" value="Submit" name="done"></td>
    </tr>
	<tr>If not registred:<a href="register.php">REGISTER</a></tr>
  </form>
</div>
</table>

</div>
</div>	
</div>
<div class="col-sm-2 sidenav">
      <div class="well">
        <p>ANR SPORTS</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>“Winners never quit and quitters never win.”— Vince Lombardi</p>
</footer>			
</div>
</body>
</html>
