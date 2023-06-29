<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mekark Construction Builders Career</title>
    <meta name="description" content="Get in touch with us NOW!. Join our Team. " />
    <meta name="keywords" content=" Mekark, Construction, Builders, Career, Join our team " />
    <link rel="canonical" href="https://www.mekarkbuilders.com/career/" />


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

<div id="career-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
                <div class="banner">
                    <p>Career</p>
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
                    <span>Career</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="main-section">
<div class="container my-4">
  <div class="row justify-content-center">
    <div class="col-lg-9">
      <h1 class="mb-3">Career Form</h1>
      <form method="post" action="PHP_Mail/submit_attached.php" enctype="multipart/form-data" id="career-form">
        <div class="row g-3">
          <div class="col-md-6">
            <input type="text" class="form-control" name="name" placeholder="Name" required>
          </div>
          <div class="col-md-6">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" name="phone" placeholder="Phone" required >
          </div>
          <div class="col-md-6">
            <select name="role" class="form-control x" id="role" required>
                <option disabled="disabled" class="starting" selected>Choose Designation</option>
                <option value="SEO">SEO</option>
                <option value="Web Developer">Web Developer</option>
                <option value="Sales Excutive">Sales Excutive</option>
                <option value="Sales Manager">Sales Manager</option>
                <option value="Design Engineer">Design Engineer</option>
                <option value="Civil Site Engineer">Civil Site Engineer</option>
                <option value="Quality Surveyor">Quality Surveyor</option>
                <option value="HR">HR</option>
                <option value="Sales Excutive">Sales Excutive</option>
                <option value="Graphic Designer">Graphic Designer</option>
                <option value="Telecaller">Telecaller</option>
                <option value="others">Other</option>
            </select>
          </div>
          <div class="col-12">
            <input type="text" id="others" class="form-control other" name="other" placeholder="Enter Your Designation" style="margin:10px 0px" required autocomplete="off" />  
          </div>
          <div class="col-12">
            <textarea class="form-control" id="your-message" name="msg" rows="3" placeholder="Message" required></textarea>
          </div>
          <div class="col-12">
            <div class="row">
              <div class="col-md-4 my-3">
                 <input type="file" name="resume" accept="application/pdf" id="resume" autocomplete="off" required />
              </div>
              <div class="col-md-4">
                <div class="g-recaptcha" data-sitekey="6LfZKW0mAAAAAPNeZMvbzHhEBvMs8IS-AJ1WvF0V"></div>
              </div>
              <div class="col-md-4 mt-3">
                <button type="submit" name="submit" class="btn btn-success w-100 fw-bold" >Send</button>
              </div>
            </div>
          </div>
        </div>
      </form>
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