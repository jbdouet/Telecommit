<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ContactUs</title>

<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <script type="text/javascript" src="js/test.js"></script>
</head>

<body>

 <header id="header">
<nav class="navbar navbar-inverse" role="banner">
      <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <a class="navbar-brand" href="index.html"><img src="Images/logo.jpg" width="100" height="70" alt=""/></a> </div>
            <div class="collapse navbar-collapse navbar-right">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.html">Home</a></li>
                
                 <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <i class="fa fa-angle-down"></i></a>
                  <ul class="dropdown-menu">
                    <li><a href="SmartphonesAndPhones.html">Smartphones and Phones</a></li>
                    <li><a href="TabletsAndComputers.html">Tablets and computers</a></li>
                    <li><a href="ModemsAndNetworking.html">Modems and Networking</a></li>
                   </ul>
                </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Smart Life <i class="fa fa-angle-down"></i></a>
                  <ul class="dropdown-menu">
                    <li><a href="TvAndEntertainment.html">Tv and Entertainment</a></li>
                    <li><a href="HomeAndFamily.html">Home and Family</a></li>
                    <li><a href="Health.html">Health</a></li>
                    <li><a href="Personal.html">Personal</a></li>
                  </ul>
                </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Assistance Services <i class="fa fa-angle-down"></i></a>
                  <ul class="dropdown-menu">
                    <li><a href="LineManagment.html">Line managment</a></li>
                    <li><a href="MonitoringCost.html">Monitoring Cost</a></li>
                    <li><a href="TechnicalSupport.html">Technical Support</a></li>
                    <li><a href="SmartLife.html">Smart Life</a></li>
                  </ul>
                </li>
                                
                <li><a href="contactUs.php">Contact</a></li>
              </ul>
            </div>
    </div>
          <!--/.container-->
        </nav>
        <!--/.top-bar-->        <!--/nav-->
		
    </header><!--/header-->
    
     <section id="main-slider" class="no-margin">
        <div class="carousel slide">
           
          <div class="carousel-inner">
 			<div class="item active" style="background-image: url(Images/slider/PS-Vue-Screenfill-X850D-TV_1276x500_v1.jpg)">
                    
             </div><!--/.item-->
		</div>
	</div>
	</section>
    
    <section>
  <div class="contact-form"> 
  <form action="php/test.php" id="contactForm" role="form">
  <div class="row">
            <div class="form-group col-sm-6">
                <label for="name" class="h4">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" required>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-sm-6">
                <label for="email" class="h4">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="form-group">
            <label for="message" class="h4 ">Message</label>
            <textarea id="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
        </div>
        
        <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right " onClick="submitForm()">Submit</button>
			<div id="msgSubmit" class="h3 text-center hidden" ></div>
  
    </form>
   <!-- <form id="contactForm" class="form-horizontal" role="form" method="post" action="Php/Contact.php">
	<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
			<?php echo "<p class='text-danger'>$errName</p>";?>
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-sm-2 control-label">Email</label>
		<div class="col-sm-10">
			<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
			<?php echo "<p class='text-danger'>$errEmail</p>";?>
		</div>
	</div>
	<div class="form-group">
		<label for="message" class="col-sm-2 control-label">Message</label>
		<div class="col-sm-10">
			<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
			<?php echo "<p class='text-danger'>$errMessage</p>";?>
		</div>
	</div>
	<div class="form-group">
		<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
			<?php echo "<p class='text-danger'>$errHuman</p>";?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<?php echo $result; ?>	
		</div>
	</div>
</form> -->
    </div>
   </section>
   
    


</body>


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>

</html>
