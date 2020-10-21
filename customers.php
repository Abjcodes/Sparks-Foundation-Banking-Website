<!DOCTYPE html>
<head>
    <title>Customers</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&display=swap');

:root {
  --main-color: #020305 ;
}

*{
  padding: 0;
  margin: 0;
  text-decoration: none;
}
body {
  background-color: #020305;
}
.navbar {
  overflow: hidden;
  background-color: rgba(0, 0, 0, 0.5);
  position: fixed; /* Set the navbar to fixed position */
  top: 0; /* Position the navbar at the top of the page */
  width: 100%; /* Full width */
}

/* Links inside the navbar */
.navbar a {
  font-family: 'Nunito';
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change background on mouse-over */
.navbar a:hover {
  background: #f1d18a;
  color: black;
}
#box{
    margin-top: 100px;
    margin-left: auto;
    margin-right:auto;
    position: center;
    height: 75vh;
    width: 75vw;
    color: black;
    font-family: 'Nunito';

}
#box h1{
  color: black;
  width: 3px;
  margin-left: auto;
  margin-right:auto;
  position: center;

}
table
	{
		border-collapse: collapse;
		width: 100%;
		color: white;
		font-family: 'Nunito';
		font-size: 25px;
		text-align: center;
		position:center;
		margin-top: auto;
    padding:15px;
   
}
th 
{
  background-color: #f1d18a;
  color: black;
}
tr:nth-child(odd) 
{
  background-color: #232931;
}
tr:hover {background-color: #f1d18a;}



/* FOOTER */

.footer{
  position: absolute;
  bottom: 0;
  box-sizing: border-box;
  display: flex;
  justify-content: center;
  align-items: center;

  padding: 10px 0;
  width: 100%;
  background-color: black ;
}

.logo{
  width: 50px;
  height: auto;
  margin-right: 20px;
  transition: 0.3s ease-in;

 }

.logo:hover{
  opacity: 0.5;
}

.footer__rights{
  font-family: 'Nunito';
  color: white;
}

.footer__rights a{
  color: white;
}

.footer__rights a:hover{
  text-decoration: none;
}
</style>
<body>
<div class="navbar">
  <a href="index.php">Home</a>
  <a href="customers.php">Customers</a>
  <a href="Mtransfer.php">Fund Transfer</a>
</div>

  <div id="box">
<h1>Customers</h1>

<table align="center" class="tableus">
		<tr>
			<th>Account. Number</th>
			<th>Name</th>
			<th>Balance(In INR)</th>
    </tr>
		

<?php


$conn = mysqli_connect("localhost", "root", "", "sparkbank");
if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT acc_no,name,balance FROM bank";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
	while($row = $result->fetch_assoc()) 
	{
		echo "<tr><td>" . $row["acc_no"]. "</td><td>" . $row["name"] . "</td><td>". $row["balance"]. "</td> </tr>";
	}
echo "</table>";
} 
else 
{ 
	echo "0 results"; 
}

$conn->close();
?>

  </div>

  <div class="navbar__ham">

  </div>
</nav>

<!-- FOOTER -->

<footer class="footer">
 
    
  <div class="footer__rights">
  <b>All rights reserved|2020  </b>
   
  </div>
</footer>

</table>

</body>

</html>
<script>
$("document").ready(function(){
  $(".navbar__ham").on("click", function(){
    $(".navbar__links").toggleClass("active");
    
  });

  $(".navbar__links a li").on("click", function(){
    $(".navbar__links").removeClass("active");
  });
});




  
</script>