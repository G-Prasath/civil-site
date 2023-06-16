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

    <!-- ----------- Google Recaptcha -----------------  -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- -------- Light Box ---------- -->
    <link rel="stylesheet" href="assets/css/lightbox.min.css">
    <script type="text/javascript" src="assets/js/lightbox-plus-jquery.min.js"></script>

</head>
<body>

<!-- ----------- Start Navbar ----------->
<?php include_once 'assets/_templates/navbar.php' ?>
<!-- ----------- End Navbar ---------- -->

<div id="residential-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
                <div class="banner">
                    <p>Residential</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="bredcurm">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="bredcurm-cnt">
                    <a href="index.php">Home</a>
                    <span>/</span>
                    <span>Residential Projects</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="main-section">
    <div id="tab-menu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="sec-heading">
                      <div class="sec-main">
                        <img src="assets/images/home/sec-icons/blueprint.gif" alt="">
                        <h2>Our Residential Projects</h2>
                      </div>
                      <small>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt, cupiditate.</small>
                    </div>
                </div>
            </div>
        </div>
            <!-- ----------------- Residential ------------------  -->
        <div class="row">
          <div class="col-md-12">
            <div class="list-services service-show" id="Residential">
              <ul>
                <li>
                  <div class="service-card">
                    <div class="service-img">
                      <img src="assets/images/residential/hole-service/house.jpg" class="img-fluid" alt="">
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
                      <img src="assets/images/residential/hole-service/flat.jpg" class="img-fluid" alt="">
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
                      <img src="assets/images/residential/hole-service/condiminum.jpg" class="img-fluid" alt="">
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
                      <img src="assets/images/residential/hole-service/duplex.jpg" class="img-fluid" alt="">
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






<!-- ============== Start Footer Section ==============-->
<?php include_once 'assets/_templates/footer.php' ?>
<!-- ============== End Footer Section ==============-->

  <!-- ------------- Bootstrap JS CDN --------------------  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- ------------- Jqury CDN --------------------  -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>


  <!-- ---------------- External JS --------------------------->
  <script src="assets/js/script.js"></script>

</body>
</html>