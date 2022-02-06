<?php
session_start();
if(count($_POST)>0) {
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender=$_POST['gender'];

$con = mysqli_connect('127.0.0.1','root','','test') or die('Unable To connect');
$query="INSERT INTO sportsregister (`name`, `email`, `password`, `gender`) values('$name','$email','$password','$gender');";
mysqli_query($con,$query);
echo "<script>alert('REGISTRED SUCCSSFULLY!!!')</script>";
}
if(isset($_SESSION["id"])) {
header("Location:login.php");
}
?>
<html>
<head>
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
  padding: 20px;
  background-color: dodgerblue;
  color: white;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
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


<h3><b><u>Register</u></b></h3>

<table border="2" cellpadding="5" cellspacing="0">
<div class="container">
  <form action="#" method="post">

	<tr><td><label for="name">Name</label>
	<i class="fa fa-user icon"></i>
    <input type="text" id="name" name="name" required></td></tr>


    <tr><td><label for="usrname">Email</label>
	<i class="fa fa-envelope icon"></i>
    <input type="text" id="email" name="email" required></td>
    </tr>

<tr><td>
	<label for="psw">Password</label>
	
    <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required></td>
    </tr>

    <tr><td><p>Please select your gender:</p>
    <input type="radio" id="male" name="gender" value="male"><label for="male">Male</label>
    
    <input type="radio" id="female" name="gender" value="female"><label for="female">Female</label>
    
    <input type="radio" id="other" name="gender" value="other"><label for="other">Other</label>
    </td></tr>
    <tr>
   <td> <input type="submit" value="Register" name="done"></td>
    </tr>
	<tr>If Alredy register:<a href="login.php">LOGIN</a></tr>
  </form>
</div>
</table>
	
<script>
var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}
// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

</script>
			
</div>	
</body>
</html>
