<!DOCTYPE html>
<head>
    <title>Sparks Foundation Bank | WELCOME</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&display=swap');

:root {
  --main-color: #28AF63 ;
}

*{
  padding: 0;
  margin: 0;
  text-decoration: none;
}

body, html {
    height: 100%;
}
/* The navigation bar */
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

/* The hero image */
.hero-image {
  /* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("ales-nesetril-ex_p4AaBxbs-unsplash.jpg");

  /* Set a specific height */
  height: 100%;

  /* Position and center the image to scale nicely on all screens */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Place text in the middle of the image */
.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-family: 'Nunito';
}

</style>
<body>
<div class="hero-image">
  <div class="hero-text">
    <h1><strong>Welcome to Sparks Banking System</strong></h1>
    <p>Let's share without worries</p>
  </div>
</div>

<div class="navbar">
  <a href="index.php">Home</a>
  <a href="customers.php">Customers</a>
  <a href="Mtransfer.php">Fund Transfer</a>
</div>


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