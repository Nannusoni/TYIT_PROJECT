<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">

  <title>WFMC</title>
</head>

<body>
  <!-- Start Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">WFMC</a>
    <span class="navbar-text">WASTE FOOD MANAGEMET CYCLE  ('-')</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
        <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
        <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
		<li class="nav-item"><a href="Admin/login.php" class="nav-link">Admin</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact-US</a></li>
      </ul>

<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search Here.." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
	</div>
	 </nav> <!-- End Navigation -->
  <!-- Start Header Jumbotron-->
  <header class="jumbotron back-image" style="background-image: url(images/Banner11.png);">
    <div class="myclass mainHeading">
      <h1 class="text-uppercase text-danger font-weight-bold">Welcome to WFMC</h1>
      <p class="font-italic">Reduce Food Waste & serve to needy is our Aim</p>
      <div>
      <P class="font-italic"> Introduction: <br>
         Hello Dear Visitor, Our Name is Nandeshwar Soni & Abhishek Yadav.
         We have made together this project "Waste Food Management cycle" We are living in Mumbai.
         Pursuing BSCIT Final year.
         Author Details:
        We are creating Blog post related to th Computer Hardware, Networking and Software, Software Download, Hardware and Networking Notes.<br><br>
       Technology, Mobile App, Online Earning, Social Network Tips and Tricks, YouTube Tips, Online Shopping, Affiliate Marketing, create new account, make money YouTube, website Creation, blogging tips and tricks, online banking, YouTube videos creation, etc We will share on our facebook page and also share on Telegram.
      </P>
      <a href="about.php" class="btn btn-success">visit Us To Know More</a><br><br>
    </div>
      <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
      <a href="#registration" class="btn btn-danger mr-4">Sign Up</a>

    </div>
  </header> <!-- End Header Jumbotron -->

  <div class="container">
    <!--Introduction Section-->
    <div class="jumbotron">
      <h3 class="text-center">WELCOME TO WFMC </h3>
      <p>
		Background/ Problem Statement:<br><br>
				A drastic increase can be seen in food waste. As per data given by Food and Agriculture Organization.
       (http://www.fao.org/food-loss-and-food-waste/flw-data), 1/3rd of food produced for human consumption is wasted globally,<br>
	   
		which accounts for almost 1.3 billion tons per year. On the other hand, also as per WHO 20% of the population face extreme food shortages.<br>
		Hence there is a need to come up with a solution that can avoid food waste & can help feed the needy.<br>

        This web-based Food Waste Management system can assist in collecting the leftover food from hotels & restaurants to distribute among those in need.
		NGOs that are helping poor communities to battle against starvation & malnutrition can raise a request for food supply from restaurants through this application.
		Once the request is accepted, the NGOs can collect the food from the restaurants for its distribution.<br><br>
		
		This way this Web-based food waste management system will help restaurants to reduce food waste and will help in feeding the poor and needy people.
      </p>
    </div>
  </div>
  <!--Introduction Section End-->
  <!-- Start Services -->
  <div class="container text-center border-bottom" id="Services">
    <h2>Other Services </h2>
    <div class="row mt-4">
      <div class="col-sm-4 mb-4">
        <a href="https://wasteventures.com/"><i class="fas fa-recycle fa-8x text- Food Recycle"></i></a>
        <h4 class="mt-4">Food Recycle</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="https://give.do/"><i class="fa fa-medkit fa-8x text-Medkit"></i></a>
        <h4 class="mt-4">Medicine Donation</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="https://sadsindia.org/"><i class="fa fa-users fa-8x text-info"></i></a>
        <h4 class="mt-4">Cloth Donation</h4>
      </div>
    </div>
  </div> <!-- End Services -->

  <!-- Start Registration  -->
  <?php include('userRegistration.php') ?>
  <!-- End Registration  -->

  <!-- Start Happy Donnor  -->
  <div class="jumbotron bg-danger" id="Customer">
    <!-- Start Happy Donor Jumbotron -->
    <div class="container">
      <!-- Start Donor Container -->
      <h2 class="text-center text-white">Happy Donor's</h2>
      <div class="row mt-5">
        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 1st Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/N1.jpg" class="img-fluid" style="border-radius: 130px;">
              <h4 class="card-title">Nandeshwar Soni</h4>
              <p class="card-text">♾️Devops Learner and Cloud Engineering :)
                <br>Add: Thane, Maharashtra, India
              </p>
            </div>
          </div>
        </div> <!-- End Customer 1st Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 2nd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/A2.jpg" class="img-fluid" style="border-radius: 130px;">
              <h4 class="card-title">Abhishek Yadav</h4>
              <p class="card-text"> Student of Vande Matarm Degree Collage :) 
              <br>Add: Thane, Maharashtra, India</p>
            </div>
          </div>
        </div> <!-- End Customer 2nd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 3rd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/A3.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Ayush Mishra</h4>
              <p class="card-text"> Student of Vande Matarm Degree Collage :) 
              <br>Add: Thane, Maharashtra, India</p>
            </div>
          </div>
        </div> <!-- End Customer 3rd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 4th Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/P4.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Pratham Singh</h4>
              <p class="card-text"> Student of Vande Matarm Degree Collage :) 
              <br>Add: Thane, Maharashtra, India</p>
            </div>
          </div>
        </div> <!-- End Customer 4th Column-->
      </div> <!-- End Customer Row-->
    </div> <!-- End Customer Container -->
  </div> <!-- End Customer Jumbotron -->

  <!--Start Contact Us-->
  <div class="container" id="Contact">
    <!--Start Contact Us Container-->
    <h2 class="text-center mb-4">Contact US</h2> <!-- Contact Us Heading -->
    <div class="row">

      <!--Start Contact Us Row-->
      <?php include('contactform.php'); ?>
      <!-- End Contact Us 1st Column -->

      <div class="col-md-4 text-center">
        <!-- Start Contact Us 2nd Column-->
        <strong>Headquarter SPOC (NANDESHWAR SONI)</strong> <br>
        WFMC CENTER, <br>
        Kalwa Thane Mumbai <br>
        Postal Code 400605 <br>
        Phone: +91 7021528447 <br>
        <a href="#" target="_blank">www.wfmc.com</a> <br>

        <br><br>
        <strong>Ghansoli Branch SPOC (ABHISHEK YADAV)</strong> <br>
        WFMC CENTER, <br>
        Arjun Wadi - Ghansoli, <br>
        Navi Mumbai - 400701 <br>
        Phone: +91  <br>
        <a href="#" target="_blank">www.wfmc.com</a> <br>
      </div> <!-- End Contact Us 2nd Column-->
    </div> <!-- End Contact Us Row-->
  </div> <!-- End Contact Us Container-->
  <!-- End Contact Us -->
 <h2 class="text-center">Short Mesage</h2>
        <iframe align="center" width="1366" height="520" src="https://www.youtube.com/embed/P7A_qY9VX10">
</iframe>
  <!-- Start Footer-->
  <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">
    <div class="container">
      <!-- Start Footer Container -->
      <div class="row py-3">
        <!-- Start Footer Row -->
        <div class="col-md-6">
          <!-- Start Footer 1st Column -->
          <span class="pr-2">Follow Us: </span>
          <a href="https://www.facebook.com/deepakpoint11" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"style='font-size: 24px'></i></a>
          <a href="https://twitter.com/deepaksoni9517" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"style='font-size: 24px'></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"style='font-size: 24px'></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g" style='font-size: 24px'></i></a>
          <a href="https://www.instagram.com/deepaksoni9517/" target="_blank" class="pr-2 fi-color"><i class='fab fa-instagram' style='font-size:24px'></i></a>
        </div> <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">
          <!-- Start Footer 2nd Column -->
          <div class="credit">Made with<span style="color:tomato">❤</span> by 
    <a href="https://www.instagram.com/deepaksoni9517/"</a><br>Nandeshwar Soni</a> &
    <a href="https://www.instagram.com/official_abhishek__24/"</a> Abhishek Yadav</br>
    </div>
         <!-- <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>-->
        </div> <!-- End Footer 2nd Column -->
      </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
  </footer> <!-- End Footer -->

  <!-- Boostrap JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
</body>

</html>