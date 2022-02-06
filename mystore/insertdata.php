<?php
session_start();
if(isset($_SESSION["email"])) {
}
else{
header("Location:login.php");
}
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
  background-image: url('Sport3.jpeg');
  
  height: 500px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
th{background-color:lightgrey;}
td{background-color:lightgreen;}
</style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span><u>Logout</u></a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav"><h3>
      .“It is not up to me whether I win or lose. Ultimately, this might not be my day. And it is that philosophy towards sports, something that I really truly live by. I am emotional. I want to win. I am hungry. I am a competitor. I have that fire. But 
      deep down, I truly enjoy the art of competing so much more than the result.”
     </h3> </div>
    <div class="col-sm-8 text-left" > 
<div align="center">
	<br><br>
<table border=2>
<form method="post" action="#">
<tr><th>Product details</th><th>Enter the data</th></tr>
<tr><td>Product Name:</td>
<td><input type="text" name="pname" /></td></tr><br>
<tr><td>Company Name:</td>
<td><input type="text" name="company_name"/></td></tr><br>
<tr><td>Prise:</td>
<td><input type="number" name="prise" id="prise" /></td></tr><br>
<tr><td>Offers:</td>
<td><input type="text" name="offers" id="offers" /></td></tr><br>
<tr><td>Number of products:</td>
<td><input type="number" name="num" /></td></tr><br>

<tr><td>Click Here:</td>
<td><input type="submit" name="sub1" value="ADD NOW"/></td>
<a href="additems.php"><-Back</a></tr>
</form>
</table>
</div>
<?php
if(isset($_POST['sub1']))
{
$pname=$_POST['pname'];
$company_name=$_POST['company_name'];
$prise=$_POST['prise'];
$offers=$_POST['offers'];
$num=$_POST['num'];

}
$conn=mysqli_connect("localhost","root","","test");

if($pname!=NULL){
$query="INSERT INTO `sports` (`sid`, `pname`, `company_name`, `prise`, `offers`, `product_no`) values(NULL,'$pname','$company_name','$prise','$offers','$num');";
mysqli_query($conn,$query);
echo "<script>alert('ITEM ADDED SUCCSSFULLY!!!')</script>";
}
?>
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

</body>
</html>