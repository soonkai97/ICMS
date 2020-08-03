<?php
require_once __DIR__ . '/../../Libs/database.php';
require_once 'C:/xampp/htdocs/ICMS/Libs/connect.php';
 
set_include_path('C:/Xampp/htdocs/ICMS/BUSS_LAYER/EventController/EventController.php');
include ('C:/Xampp/htdocs/ICMS/BUSS_LAYER/EventController/EventController.php');


?>
<!doctype html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ICMS</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="css/template-style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
    <script type="text/javascript" src="js/validation.js"></script> 
  </head>  
  
  <body class="size-1140">
    <!-- HEADER -->
    <header role="banner">    
      <!-- Top Navigation -->
      <nav class="background-white background-primary-hightlight">
        <div class="line">
          <div class="s-12 l-2">
            <a href="committee.php" class="logo"><img src="img/logo.png" alt=""></a>
          </div>
          <div class="top-nav s-12 l-10">
            <ul class="right chevron">
              <li><a href="committee.php">Home</a></li>
              <li><a href="EventList.php">Events</a></li>
              <li><a href="JuryListView.php">Jury List</a></li>
              <li><a href="Result.php">Result</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>
              <b>
                <label>
                  <?php
                  // Echo session variables that were set on previous page
                  if(isset($_SESSION['Username'])){
                    echo "Hello " . "&nbsp;" ,$_SESSION['Username'];

                    echo "&nbsp;","&nbsp;","&nbsp;","ID:" . "&nbsp;" ,$_SESSION['User_Id'];
                  }
                  ?> </label>
              </b>
              <li><a href="<?php echo logout_url(); ?>">Logout </a></li>
            </ul>

          </div>
        </div>

      </nav>
    </header>
    
    <!-- MAIN -->
    <main role="main">
      <!-- Main Carousel -->
      <section class="section background-dark">
      	<p align="middle";><font size="+3"><b>Update Event Form</b></font></p><br>

      	<form action="/ICMS/BUSS_LAYER/EventController/EventController.php" method="POST">
      		<table border="0" align="center">

             <div class="row">
              <br><div class="col-sm-6" align="center"><label>Event ID:&nbsp</label><input class="form-control" type="text" name="EventID" required>
                </div></div>

                <div class="row">
              <br><div class="col-sm-6" align="center"><label>Event Category:&nbsp</label>
                <select name="Categories" required>
            <option value="Primary School">Primary School</option>
            <option value="Secondary School">Secondary School</option>
            <option value="Skill-Based Institution">Skill-Based Institution</option>
            <option value="Universities, Colleges and Polytechnics">Universities, Colleges and Polytechnics</option>
            <option value="Industry (Including Industri Kecil & Sederhana) and Research Centre">Industry (Including Industri Kecil & Sederhana) and Research Centre</option>
          </select>
        </div></div>

					  <div class="row">
              <br><div class="col-sm-6" align="center"><label>Event Location:&nbsp</label>
                <select name="EventLocation" required>
            <option value="Astaka UMP">Astaka</option>
            <option value="KSU">KSU</option>
            <option value="BLOK W">Block W</option>
            <option value="BLOK X,Y,Z">Block X,Y,Z</option>
            <option value="Library">Mini Theatre</option>
            
          </select>
					  </div></div>
					  <div class="row">
				      <br><div class="col-sm-6" align="center"><label>Event Date:&nbsp</label><input class="form-control" type="text" name="EventDate" required>
					  </div></div>
					  					  <div class="row">
				      <br><div class="col-sm-6" align="center"><label>Event Time:&nbsp</label><input class="form-control" type="text" name="EventTime" required>
					  </div></div>
					  <div class="row">
				    	<div class="col-sm-12" align="center"><br>

						<input type="text" hidden value="update" name="method">
						<input type="submit" name="update()" class="btn btn-success"  value="Submit">
						<input type="button" class="btn btn-success" onclick="window.location.replace('EventList.php')" value="Cancel" />


						
				    </div></div>

					</table>  
			</form>
      	
      
      
      <!-- Main Footer -->
      <section class="section background-dark">
        <div class="line">
          <div class="margin">
            <!-- Collumn 1 -->
            <div class="s-12 m-12 l-4 margin-m-bottom-2x">
              <div class="line">
                <h4 class="text-uppercase text-strong margin-top-30">About Our Event</h4>
                <div class="margin">
                  <div class="s-12 m-12 l-4 margin-m-bottom">
                    <a class="image-hover-zoom"><img src="img/logo.png" alt=""></a>
                  </div>
                  <div class="s-12 m-12 l-8 margin-m-bottom">
                    <p>iCE-CInno is an international competition which is mainly for computer based innovation. The competition is organised by Universiti Malaysia Pahang.</p>
                    <a class="text-more-info text-primary-hover" href="about.php">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Collumn 2 -->
            <div class="s-12 m-12 l-4 margin-m-bottom-2x">
              <h4 class="text-uppercase text-strong">Contact Us</h4>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-placepin text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><b>Adress:</b> International Competition & Exhibition on Computing Innovation
Faculty of Computing,
Universiti Malaysia Pahang,
Lebuhraya Tun Razak,
26300 Gambang,
Kuantan, Pahang Darul Makmur.</p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-mail text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><a href="/" class="text-primary-hover"><b>E-mail:</b> icecinno@ump.edu.my</a></p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-smartphone text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><b>Phone:</b> +6 09 549 2133/2145</p>
                </div>
              </div>
              
            </div>
            
            <!-- Collumn 3 -->
            <div class="s-12 m-12 l-4">
              <h4 class="text-uppercase text-strong">Leave a Message</h4>
              <form class="customform text-white">
                <div class="line">
                  <div class="margin">
                    <div class="s-12 m-12 l-6">
                      <input name="email" class="required email border-radius" placeholder="Your e-mail" title="Your e-mail" type="text" />
                    </div>
                    <div class="s-12 m-12 l-6">
                      <input name="name" class="name border-radius" placeholder="Your name" title="Your name" type="text" />
                    </div>
                  </div>
                </div>
                <div class="s-12">
                  <textarea name="message" class="required message border-radius" placeholder="Your message" rows="3"></textarea>
                </div>
                <div class="s-12"><button class="submit-form button background-primary border-radius text-white" type="submit">Submit Button</button></div> 
              </form>
            </div>
          </div>
        </div>
      </section>
      <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 38, 51, 0.80);">
      
      <!-- Bottom Footer -->
      <section class="padding background-dark">
        <div class="line">
          <div class="s-12 l-6">
            <p class="text-size-12">Copyright 2020, ICMS</p>
        </div>
      </section>
    </footer> 
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>   
   </body>
</html>