	
<?php
include 'dbconnection.php';
		error_reporting(0);
		$result = mysqli_query($db_handler,"SELECT *  FROM bank");
		$resul1 = mysqli_query($db_handler,"SELECT *  FROM bank");
?>
<!DOCTYPE html>
<head>
    <title>Fund Transfer</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&display=swap');

:root {
  --main-color: #020305;
}

*{
  padding: 0;
  margin: 0;
  text-decoration: none;
}
body {
  background-color: #020305;
}
#box{
  margin-top: 25px;
  height: 400px;
  width: 400px;
  color: black;
  font-family: 'Nunito';

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

h1{
  text-align:center;
  margin-top:50px;
  width:80%;
  margin-left:50%;
  margin-right:auto;
  color: white;
}
.transferform{
		width: 800px;
		background-color: #020305;
    margin-top: 20px;
		margin-left: auto;
    margin-right: auto;
		color: #ffffff;
		padding: 10px 0px 10 px 0px;
		text-align: center;
    border-radius: 15px 15px 0px 0px;
}
form {
        padding:5px;
	}
	.From{
	    margin-left: 50%;
	    margin-top: 70px;
	    width: 125px;
	    color: white;
	    font-size: 20px;
    
	}
	.to{
	    margin-left: 50%;
	    margin-top: 10px;
	    width: 125px;
	    color: white;
	    font-size: 20px;
    
	}
	.amount{
	    margin-left: 50%;
	    margin-top: 5px;
	    width: 125px;
	    color: white;
	    font-size: 20px;
    
	}
	.fromuser{
	    position: relative;
      margin-left:50%;
	    left: 250px;
	    top: -27px;
	    width: 300px;
	    height: 40px;
	    line-height: 30px;
	    border-radius: 6px;
	    padding: 0  50px;
	    font-size: 16px;
      background-color: #f2f2f2;
	}
	.touser{
    position: relative;
    margin-left:50%;
    left: 250px;
    top: -27px;
    width: 300px;
    height: 40px;
    line-height: 30px;
    border-radius: 6px;
    padding: 0  50px;
    font-size: 16px;
    background-color: #f2f2f2;
	}
.amounttotransfer{
  position: relative;
  margin-left:50%;
  left: 250px;
  top: -20px;
  width: 200px;
  height: 35px;
  line-height: 30px;
  border-radius: 6px;
  padding: 0  50px;
  font-size: 16px;
  background-color: #f2f2f2;
  border: 1px solid #000;
  outline: 2px #000;
}

#submit{
    position: relative;
    margin-left: 50%;
    margin-top: 25px;
    padding:5px 15px; 
    background-color:#f1d18a;
    color: black;
    border:0 none;
    cursor:pointer;
    border-radius: 5px; 
    width: 180px;
    height: 40px;
    font-family: 'Nunito';
    font-size: 20px;
}
#submit:hover {
   background-color: #fa7f72;
   color: black;
   }



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
  <a href="transfer.php">Fund Transfer</a>
</div>
  <div id="box">
<h1 class='Fund'>Fund Transfer</h1>

<div class='main'>
<form action="" method="GET">
		<h1 class= From>  Name/Source Account  </h1>
		<select  class= fromuser type="text"  name="u1" required value="">
		<option value =""></option>
		<?php
                        while($tname = mysqli_fetch_array($result)) {
                            echo "<option value='" . $tname['name'] . "'>" . $tname['name'] . "</option>";
                        }
                ?>

                </select>
		<h2 class= to>Beneficiary Name</h2>
		<select  class =touser  type="text" name="u2" value="">
	     <option value =""></option>
		<?php
                        while($tname = mysqli_fetch_array($resul1)) {
                            echo "<option value='" . $tname['name'] . "'>" . $tname['name'] . "</option>";
                        }
                ?>

                </select>
		<h2 class= amount>Amount </h2>
		<input class = amounttotransfer type="number" name="amt" value=""><br>
		<input type="submit" id= submit name="submit" value=" Transfer">
	</form>
</div>

	<?php
	
			if($_GET['submit'])
			{
			$u1=$_GET['u1'];
			$u2=$_GET['u2'];
			$amt=$_GET['amt'];


			if($u1!="" && $u2!="" && $amt!="")
			{
				//update transaction changes in database
				$query1= "UPDATE bank  SET balance = balance + '$amt' WHERE name = '$u2' ";
				$data1= mysqli_query($db_handler, $query1);
				$query2= "UPDATE  bank  SET balance = balance  - '$amt' WHERE name = '$u1' ";
				$data2= mysqli_query($db_handler, $query2);
				
				//insert into transaction_history
				    $query1 = "INSERT INTO transfer (sender,reciever,amount) VALUES('$u1','$u2','$amt')";
                                    $res2 = mysqli_query($db_handler,$query1);
				
                                          if($res2){
		                           	 $user1 = "SELECT * FROM bank WHERE  name='$u1' ";
                                                 $res=mysqli_query($db_handler,$user1);
                                                 $row_count=mysqli_num_rows($res);
			                      }
				
            

				     if ($data1 && $data2)
				     {
              echo"<script type='text/javascript'>location.href = 'transition.html';</script>";

				}
				else
				{
					$message="Error While Commiting Transaction ";
          echo "<script type='text/javascript'>alert('$message');
          </script>";
				}

			}

			else
			{
				$message="All Fields are Mandatory";
				echo "<script type='text/javascript'>alert('$message');
                    </script>";
			}
		}
		

  ?>




<!-- FOOTER -->

<footer class="footer">
 
      
  <div class="footer__rights">
    <b>All rights reserved|2020</b>
   
  </div>
</footer>
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