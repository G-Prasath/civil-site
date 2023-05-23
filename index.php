<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Civil Construction</title>
    <link rel="stylesheet" href="assets/css/style.css" />

    <!-- --------- Bottstrap css and Js ---------------  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
    
    <!-- ---------------- Icons --------------------->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
 
    <!-- -------- Light Box ---------- -->
    <link rel="stylesheet" href="assets/css/lightbox.min.css">
    <script type="text/javascript" src="assets/js/lightbox-plus-jquery.min.js"></script>

</head>
<body>
<!--------- Top Header ------------>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
                <div class="top-header">
                    <div class="header-email">
                        <a href="#"><img src="assets/images/header-icons/mail.png" alt="">Exmple@gmail.com</a>
                    </div>
                    <span>|</span>
                    <div class="header-phone">
                        <a href="#"><img src="assets/images/header-icons/phone.png" alt="">+98548 658 125</a>
                    </div>
                    <span>|</span>
                    <div class="header-social">
                        <a href="#"><img src="assets/images/header-icons/twitter.png" alt="" /></a>
                        <a href="#"><img src="assets/images/header-icons/facebook.png" alt="" /></a>
                        <a href="#"><img src="assets/images/header-icons/instagram.png" alt="" /></a>
                        <a href="#"><img src="assets/images/header-icons/whatsapp.png" alt="" /></a>
                        <a href="#"><img src="assets/images/header-icons/youtube.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--------- Top Header ------------>

<!-- ----------- Start Navbar ----------->
<nav>
  <div class="navbar">
    <i class='bx bx-menu'></i>
    <div class="logo"><a href="#"><img src="assets/images/logo-1.png" alt=""></a></div>
    <div class="nav-links">
      <div class="sidebar-logo">
        <div class="logo-name"><a href="#"><img src="assets/images/logo-1.png" alt=""></a></div>
        <i class='bx bx-x' ></i>
      </div>
      <ul class="links">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li>
          <a href="#">Residential</a>
          <i class='bx bxs-chevron-down htmlcss-arrow arrow'></i>
          <ul class="htmlCss-sub-menu sub-menu">
            <li><a href="#">House</a></li>
            <li><a href="#">Flats</a></li>
            <li><a href="#">Condominium</a></li>
            <li><a href="#">Duplex</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Industrial</a>
          <i class='bx bxs-chevron-down js-arrow arrow'></i>
          <ul class="js-sub-menu sub-menu">
            <li><a href="#">Cold Storage Buildings</a></li>
            <li><a href="#">Data Centers</a></li>
            <li><a href="#">Manufacturing Buildings</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Commercial</a>
          <i class='bx bxs-chevron-down tst-arrow arrow'></i>
          <ul class="tst-sub-menu sub-menu">
            <li><a href="#">Hospitals</a></li>
            <li><a href="#">Shopping complexes</a></li>
            <li><a href="#">Office</a></li>
            <li><a href="#">Warehouses</a></li>
          </ul>
        </li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- ------------- side sticky ---------->
<div class="wrapper">
    <div id="main-div">
      <div id="main-button" class="wave open">
        <i class="bx bx-x"></i>
      </div>
     
      <a href="tel:9790924754" class="telegram-color"><i class="bx bx-phone"></i></a>
      <a href="https://wa.me/9790924754" class="whatsapp-color" ><i class="bx bxl-whatsapp"></i></a>
      <a href="javascript:;" class="btn messenger-color" data-bs-toggle="modal" data-bs-target="#myModal"><i class='bx bxs-quote-left'></i></a>

      
      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5 text-center text-primary" id="exampleModalLabel">Get a Estimation Quote</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="#" id="enquiry">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="text" name="name" id="name" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Email</label>
                  <input type="email" name="email" id="email" class="form-control border border-primary" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                  <input type="text" name="phone" id="phone" class="form-control border border-primary" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Message</label>
                  <textarea class="form-control border border-primary" name="msg" id="msg" rows="4"></textarea>
                </div>
                <div class="d-grid gap-2">
                  <button class="btn btn-primary" name="submit" type="button">Send</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- ---------------- End Side Sticky  -->

<!-- ----------- End Navbar ---------- -->

<!-- -------------- Start Hero Slide ----------->

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-interval="2500">
  <div class="carousel-inner">

    <div class="carousel-item active">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
                <div class="bg-img-1">
                    <div class="first-slide">
                        <h1>Dream House</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo dolores pariatur nam esse voluptatem voluptatum non similique corporis?</p>
                        <button class="cover-btn"><a href="#">Read More</a></button>
                        <!-- <a href="https://youtu.be/C1B1Fx3XKOg" data-lightbox="mygallery"><i class='bx bx-play'></i></a> -->
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
                <div class="bg-img-1">
                    <div class="second-slide">
                        <h1>Dream House</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo dolores pariatur nam esse voluptatem voluptatum non similique corporis?</p>
                        <button class="cover-btn"><a href="#">Read More</a></button>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
                <div class="bg-img-1">
                    <div class="thired-slide">
                        <h1>Dream House</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo dolores pariatur nam esse voluptatem voluptatum non similique corporis?</p>
                        <button class="cover-btn"><a href="#">Read More</a></button>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- -------------- End Hero Slide ----------->

<!-- ------------- Start Home Content ------------->
<div id="main-section">
  <!-- ------------ Home About ----------------  -->
  <div id="about">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="sec-heading">
            <div class="sec-main">
            <!-- <i class="bx bx-building-house"></i> -->
            <img src="assets/images/home/sec-icons/crane.gif" alt="">
            <h2>About</h2>
            <!-- <i class="bx bx-building-house"></i> -->
            </div>
            <small>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt, cupiditate.</small>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="about-img">
            <img src="assets/images/home/about.jpg" class="img-fluid" alt="">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti, unde ratione! Dolorem nihil architecto, odit laudantium, dolorum labore atque magni, dignissimos cumque quas deleniti id neque facere velit cupiditate animi rerum beatae mollitia numquam quidem est possimus vero. Rem, dolores. Officiis illum in cupiditate similique error laboriosam dignissimos earum ab.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque tenetur assumenda eligendi. Laborum iste saepe fugit, odio debitis ipsa, officiis, corrupti exercitationem illo culpa doloribus beatae aspernatur porro. Facilis et placeat inventore similique, repudiandae ipsam consequuntur totam eius nihil voluptatum sed iure at eveniet exercitationem. Obcaecati perferendis porro temporibus reprehenderit, ut rem possimus perspiciatis eligendi quidem maiores, modi sapiente facere, odit debitis qui sunt. Rerum, nam fuga eaque illum obcaecati quae molestias. Natus aspernatur sint similique quibusdam molestias autem iure, minus inventore? Unde, dignissimos porro vero harum dolor earum nisi blanditiis repudiandae officia itaque veniam!</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque tenetur assumenda eligendi. Laborum iste saepe fugit, odio debitis ipsa, officiis, corrupti exercitationem illo culpa doloribus beatae aspernatur porro. Facilis et placeat inventore similique, repudiandae ipsam consequuntur totam eius nihil voluptatum sed iure at eveniet exercitationem. Obcaecati perferendis porro temporibus reprehenderit, ut rem possimus perspiciatis eligendi quidem maiores, modi sapiente facere, odit debitis qui sunt. Rerum, nam fuga eaque illum obcaecati quae molestias. Natus aspernatur sint similique quibusdam molestias autem iure, minus inventore? Unde, dignissimos porro vero harum dolor earum nisi blanditiis magnam aliquid reprehenderit esse iure repudiandae officia itaque veniam!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- ------------- End Home About -------------->

<!-- ------------- start Tab-Menu -------------->
<div id="tab-menu">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="sec-heading">
            <div class="sec-main">
              <img src="assets/images/home/sec-icons/blueprint.gif" alt="">
              <h2>Our Industry Projects</h2>
            </div>
            <small>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt, cupiditate.</small>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tab-menu-btn">
          <ul>
            <li class="tab-active">Residential</li>
            <li>Industrial</li>
            <li>Commercial</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="list-services">
          <ul>
            <li>
              <div class="service-card">
                <div class="service-img">
                  <img src="assets/images/home/services/sample.jpg" class="img-fluid" alt="">
                </div>
                <div class="service-cnt">
                    <h3>House</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, vero?</p>
                </div>
                <div class="service-btn">
                  <a href="#">Read More</a>
                </div>
              </div>
            </li>
            <li>
              <div class="service-card">
                <div class="service-img">
                  <img src="assets/images/home/services/sample-2.jpg" class="img-fluid" alt="">
                </div>
                <div class="service-cnt">
                    <h3>Flats</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, vero?</p>
                </div>
                <div class="service-btn">
                  <a href="#">Read More</a>
                </div>
              </div>
            </li>
            <li><div class="service-card">
                <div class="service-img">
                  <img src="assets/images/home/services/sample-3.jpg" class="img-fluid" alt="">
                </div>
                <div class="service-cnt">
                    <h3>Condominium</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, vero?</p>
                </div>
                <div class="service-btn">
                  <a href="#">Read More</a>
                </div>
              </div></li>
            <li><div class="service-card">
                <div class="service-img">
                  <img src="assets/images/home/services/sample-4.jpg" class="img-fluid" alt="">
                </div>
                <div class="service-cnt">
                    <h3>Duplex</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, vero?</p>
                </div>
                <div class="service-btn">
                  <a href="#">Read More</a>
                </div>
              </div></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ------------- End Tab-Menu -------------->


</div>








  <!-- ------------- Bootstrap JS CDN --------------------  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- ------------- Jqury CDN --------------------  -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  <script src="assets/js/script.js"></script>

</body>
</html>