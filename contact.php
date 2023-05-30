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

    -------- Light Box ----------
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
                    <h1>Contact Us</h1>
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
                            <form method="post" action="javascript:;" id="contact-enquiry">
                              <div class="input-group col-md-6">
                                <input type="text" id="name" name="name" placeholder="Name">
                                <div class="error"></div>
                              </div>
                              <div class="input-group col-md-6">
                                <input type="text" id="email" name="email" placeholder="Email">
                                <div class="error"></div>
                              </div>
                              <div class="input-group">
                                <input type="text" id="phone" name="phone" placeholder="Phone">
                                <div class="error"></div>
                              </div>
                              <div class="input-group">
                                <input name="msg" id="msg" style="height: 75px" placeholder="Message">
                                <div class="error"></div>
                              </div>
                              <div class="d-grid gap-2">
                              <button class="enquiry-btn" name="submit" type="submit"><span>Send</span></button>
                                
                              </div>
                            </form>
                           </div>
                        </li>
                        <li>
                            2
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

  <!-- ---------------- External JS --------------------------->
  <script src="assets/js/script.js"></script>


</body>
</html>