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

<div id="contact-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
                <div class="banner">
                    <p>Contact Us</p>
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
                    <span>Contact Us</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="main-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-card">
                    <ul>
                        <li>
                           <div class="contact-form">
                            <h2>Contact With Us</h2>
                            <h3>Call Us Or Fill The Form</h3>
                                <form id="contact-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                                    </div>
                                    <div class="form-group">
                                      <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" id="msg" name="msg" rows="3" placeholder="Enter Your Message" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="g-recaptcha" data-sitekey="6LfZKW0mAAAAAPNeZMvbzHhEBvMs8IS-AJ1WvF0V"></div>
                                    </div>
                                    <button type="submit" name="submit" class="contact-form-btn">Submit</button>
                                </form>
                           </div>
                        </li>
                        <li>
                           <div class="contact-info">
                                <ul>
                                    <li><i class='bx bx-phone-call'></i><a href="tel:9790924754">+91 97909 24754</a></li>
                                    <li><i class='bx bx-envelope' style='color:#ffffff'></i><a href="mailto:admin@mekark.com">admin@mekark.com</a></li>
                                    <li><i class='bx bx-location-plus' style='color:#ffffff'></i>15,62nd street, Ashok Nagar, Chennai-600083</li>
                                </ul>
                           </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

    <section class="map_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="map_inner">
                        <h4>Find Us on Google Map</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quo beatae quasi assumenda, expedita aliquam minima tenetur maiores neque incidunt repellat aut voluptas hic dolorem sequi ab porro, quia error.</p>
                        <div class="map_bind">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15547.970640198237!2d80.204011!3d13.036139!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5266d8cdb1dea1%3A0xc668c3dbe18503b1!2sSmart%20Roofs%20and%20Fabs!5e0!3m2!1sen!2sin!4v1685434676867!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



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