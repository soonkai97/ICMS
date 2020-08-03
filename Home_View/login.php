<?php
require_once __DIR__ . '/../../Libs/database.php';
require_once __DIR__ . '/../../BUSS_LAYER/AccountPackagecontroller/index.php';


if (isset($_POST['submit'])) {
  // create controller
  $val = new index();
  // call method dd

  $val->view();
}
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
            <a href="index.php" class="logo"><img src="img/logo.png" alt=""></a>
          </div>
          <div class="top-nav s-12 l-10">
            
            <ul class="right chevron">
              <li><a href="index.php">Home</a></li>
              <li><a href="login.php">Login</a></li>
              <li><a href="register.php">Register</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>



  <body>
  <header class="section background-primary text-center">
            <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">Login</h1>
        </header>
    <?php if(!empty($_GET['err'])){ ?>
      <p class="text-danger">Error! invalid user credentials.</p>
    <?php } ?>

    <form method="post">
      <table align="center">
        <tr>
          <td><font face="comic sans ms" color="blue">Username:</td>
          <td><input type="text" class="form-control" name="username" required></td>

        </tr>
        <tr>
          <td><font face="comic sans ms" color="blue">Password:</td>
          <td><input type="password" class="form-control" name="password" required></td>
        </tr>
        <tr>
          <td><font face="comic sans ms" color="blue">Email:</td>
          <td><input type="email" class="form-control" name="email" required></td>
        </tr>
        <tr>
          <td><font face="comic sans ms" color="blue">
            Select Category: </td>
          <td><select name="category" class="form-control" required>
              <option value="participant">Participant</option>
              <option value="committee">Committee</option>
              <option value="jury">Jury</option>
              <option value="sa">System Administrator</option>
            </select>
          </td>
        </tr>
        <tr>
          <td><button type="submit" id="submit" class="btn btn-primary" name="submit" value="submit"><font face="comic sans ms" color="blue">Login</button></td>
          <td><a href="index.php" class="btn btn-default"><font face="comic sans ms" color="blue">Cancel</a></td>
        </tr>
      </table>
    </form>
    <!-- Start Footer area-->
    <footer>
      
      
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