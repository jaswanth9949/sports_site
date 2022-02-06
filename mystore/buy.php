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
.th{background-color:#c0c0c0;}

.button2:hover {
  background-color: #add8e6;
  color: white;
}
.image {
  background-image: url('Sports2.jpeg');
  
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
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span><u>Logout</u></a></li>
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
	<br><br>
	<?php
        $conn=mysqli_connect("localhost","root","","test");
	$query="select * from sports;";
	mysqli_query($conn,$query);
	$result=mysqli_query($conn, $query);
	if(mysqli_num_rows($result)>0){
		echo "<table border='2' align='center'><tr><th class='th'>Product Id</th><th class='th'>Product name</th><th class='th'>Company name</th>
<th class='th'>Product prise</th><th class='th'>Offers</th><th class='th'>Num of products<br> availble</th><th class='th' colspan='2'>Select Your Option</th></tr>";

		while($row=mysqli_fetch_row($result)){
	/*echo "<form method='GET' action='delete.php?sid=$row[0]' >";*/
		echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><form method='post'><td>
  <a href='updatebuy.php?sid=$row[0]& nump=$row[5]'><input type='button' style='width:150px' value='Buy'/></a></td></tr>";
 /* <td><a href='delete.php?sid=$row[0]'><input type='button' value='Delete' style='width:100px'/></a></td></tr>"; */
	}
	echo "</table>";
}
	else{
	echo "<script>alert('sorry:-(  NO Stock!!!!!')</script>";
}
      	
        ?>
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