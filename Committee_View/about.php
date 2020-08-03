<?php
require_once __DIR__ . '/../../Libs/database.php';
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
                    echo "Hello " . $_SESSION['Username'];
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
      <!-- Content -->
      <article>
        <section class="section background-dark">
        <div class="line">
          <div class="carousel-fade-transition owl-carousel carousel-main carousel-nav-white carousel-wide-arrows">
            <div class="item">
              <div class="s-12 center">
                <img src="img/download.jfif" alt="">
                <div class="carousel-content">
                  <div class="padding-2x">          
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="s-12 center">
                <img src="img/download.jpg" alt="">
                <div class="carousel-content">
                  <div class="padding-2x">                 
                  </div>
                </div>
              </div>
            </div>
          </div>  
        </div>
      </section>
        <div class="section background-white"> 
          <div class="line">
            <h2 class="text-size-30">About iCE-CInno 2019</h2>
            <p>
            2019 marks the 2nd installation of The International Competition and Exhibition on Computing Innovation (iCE-CInno).  iCE-CInno is an international competition which is mainly for computer based innovation. The competition is organised by Universiti Malaysia Pahang. The first iCE-CInno had been held on 2016 and had successfully involved 120 participants from local and international with the theme “Eyeing The Future”. The exhibition reflects upon digital inventions having been the basis for disruptions, especially in the last decade, with the convergence of academia, e-learning and industrial practices with digital technology in the advent of Industry 4.0 that emphasized on Autonomous Robots, Big Data Analytics, Cloud Computing, Internet of Things, Additive Manufacturing (3D Printing), System Integration, Cybersecurity, Augmented Reality and Simulation.
            </p> 
            <br>
            <div class="line">
                  <h2 class="text-size-30">Participants</h2>
            <ul>
              <li>Primary school</li><br>
              <li>Secondary school</li><br>
              <li>Skill-based institution</li><br>
              <li>Universities, colleges and polytechnics</li><br>
              <li>Industry (including Industri Kecil & Sederhana) and Research centre</li>
            </ul>
            </div>
          </div>
        </div> 
      </article>
    </main>
    
    <!-- FOOTER -->
    <footer>
      
      
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