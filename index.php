<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<link rel="icon" type="text/css" href="favoicon.png">
  <style >
  	a{
  	text-decoration: none;
  	margin-right:20px; 	
  	}
  	img{
  	margin-right:200px; 	
  	}
  	p{
  	font-size: 150%;
  
  	}
  	body{
/*background-image: url(cima.png);*/
  height: 200px;
background-image: radial-gradient(red, blue,yellow);
  	}
  </style>
</head>
<body>
	<!-- thi is first part -->
<nav class="navbar navbar-expand-sm bg-success navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
       <a class="navbar-brand" href="" > <img src="favoicon.png" width="100" height="80"></a>
      </li>	
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/myproject/home.php"><h2>home</h2></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php"><h2>about</h2></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><h2>investors</h2></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><h2>product</h2></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><h2>register</h2></a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#"><h2>login</h2></a>
      </li>
         <li class="nav-item">
        <input type="text" name="search" placeholder="Search" class="form-control">
        
      </li>
        <li class="nav-item">
        <button type="submit" name="sub" value="" class="bg-danger form-control">Search</button>
      </li>
    </ul>
  </div>
</nav>
<!-- thi is second part -->
<nav class="row navbar navbar-expand-sm  navbar-dark">
	<div class="container-fluid">
	<div class="  col p-3 mb-6 bg-primary "><a href="home.php" class="text-white"> home</a></div>
    <div class="col p-3 bg-dark "><a href="about.php" class="text-white"> house</a></div>
    <div class="col p-3 bg-primary"><a href="about.php" class="text-white"> price</a></div>

</div>
  </nav>
<!-- thi is third part -->
<nav class="navbar navbar-expand-sm  navbar-dark"">
<div class="container-fluid">
	<div class="nav-item bg-primary col p-3">
<p> Cement is a grey powder which is mixed with sand and water in order to make concrete.
	cement is a great tool that helps us build beautiful homes with experience and immunity like infrastructure.we producing different product of ciment if you want buy or learn more click here
	<a href="about.php"><button type="submit" class="btn bg-info">learnmore</button></a>
	<a href="price.php"><button type="submit" class="btn bg-danger">buy</button></a>
</p>
</div>
<div class="nav-item ">
<img src="home2.png">	
</div>
</div></nav>
<!-- thi is fourth part -->
 <nav class="navbar navbar-expand-sm bg-light navbar-dark">
 <div class="container-fluid">	

	<div class="nav-item bg-primary">
 <h1>About SURECIM</h1>
  	 <img src="c2.png" class="float-start" width="360" height="345">
<p>SURECEM 32.5 N is a general purpose cement with broad
application range from domestic concrete to large building
projects, concrete, bricks, mortar and plaster. SURECEM is
your proudly Rwandan quality intended for general use.
<a href="about.php"><button type="submit" class="btn bg-light">learn more</button></a>
</p>
</div>
 <div class="nav-item bg-warning">
  	<h1>About SUREWALL</h1>
  <img src="cimerwa.png" >
  <p> SUREWALL 22.5X is a masonry cement made from high-quality raw materials for hardening plaster, reducing cracking and crazing and improving the surface finish but also a cost-effective cement
  <a href="about.php"><button type="submit" class="btn bg-light">learnmore</button></p></a>	
  </div>
   <div class="nav-item bg-danger">
  	<h1>About SUREBUILD</h1>
 <img src="c3.png " >
 <p>SUREBUILD 42.5 N is an advanced formulation cement
with applications ranging from domestic mortar and
concrete to large building projects.
SUREBUILD is your proudly Rwandan premium cement,
tried and tested product that has been engineered to
achieve a consistent and appropriate performance in civil
works and general building.	
<a href="about.php"><button type="submit" class="btn bg-light">learnmore</button></p></a>
  </div>
  </div>
</nav>
<!-- thi is fiveth part -->

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="c1.png" alt="Los Angeles" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="c2.png" alt="Chicago" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="c3.png" alt="New York" class="d-block" style="width:100%">
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<div class="container-fluid mt-3 text-center">
  <h1>CAPACITY</h1>
  <p ">we have Ability to produce 100.000tones per mouth</p>
</div>
	
</div>	
</nav>

<!-- thi is sixth part -->
<nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link " href="#">
<h1>Strengthening <br>Rwanda<br>
since 1984</h1></a>
      </li>
      <li class="nav-item">
      	    <a class="nav-link " href="#">
      	<H1>KIGALI OFFICE</H1>
        <h5>CIMERWA House, Kimihurura Sector,<br>
         P.O Box 644, Kigali-Rwanda</h5></a>
          <a class="nav-link" href="#"><h4>sales@cimerwa.rw</h4></a>
           <a class="nav-link" href="#"><h4>info@cimerwa.rw</h4></a>
       </li>
          <li class="nav-item">
          <a class="nav-link " href="#">
      	 <h1>RUSIZI OFFICE</h1>
      	 <H2>P.O Box 21, Rusizi-Rwanda</H2></a>
        <a class="nav-link" href="#"><h2> Info@cimerwa.rw</h2></a>
        <a class="nav-link" href="#"><h2>Sales@cimerwa.rw</h2></a>
      </li>
      <li class="nav-item">
      	    <a class="nav-link " href="#">
        <h1>Contact us</h1>
Dial: +250 788 381 134/3222</a>
      </li>
            <li class="nav-item">
         <a class="nav-link " href="#"></a>

      </li>
    </ul>
  </div>
</nav>	



</body>
</html>