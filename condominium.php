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

<!-- ----------- Start Navbar ----------->
<?php include_once 'assets/_templates/navbar.php' ?>
<!-- ----------- End Navbar ---------- -->

<div id="condominium-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
                <div class="banner">
                    <h1>Condominium</h1>
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
                    <a href="index.php">Residential</a>
                    <span>/</span>
                    <span>Condominium</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="main-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="house-cnt">
                    <img src="assets/images/residential/condominium/condominium-scroll.jpg" class="img-fluid" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis beatae repellat amet nemo veritatis at dolorem eveniet. Non amet repudiandae harum velit laboriosam facere quisquam quos, provident nemo veritatis voluptatem.</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum, nisi ex vitae asperiores cupiditate similique vel quidem veniam eius repellendus repudiandae tenetur! Deserunt architecto a alias doloremque ut dolore perferendis?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem laborum laudantium iure ab, eos quas tempora quibusdam pariatur, quod obcaecati optio voluptates explicabo enim esse. Quis optio qui dolorem ipsam libero quod fuga consectetur velit officia quam, sint aperiam excepturi deserunt animi nihil corrupti. Praesentium exercitationem quidem repudiandae unde sint?</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="page-cnt">
                    <ul>
                        <li><span><span></span></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptas, reiciendis voluptate eaque ad doloremque porro impedit voluptatibus facilis magnam minus quasi. Odio obcaecati corporis quidem cum repudiandae expedita optio!</li>
                        <li><span><span></span></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptas, reiciendis voluptate eaque ad doloremque porro impedit voluptatibus facilis magnam minus quasi. Odio obcaecati corporis quidem cum repudiandae expedita optio!</li>
                        <li><span><span></span></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptas, reiciendis voluptate eaque ad doloremque porro impedit voluptatibus facilis magnam minus quasi. Odio obcaecati corporis quidem cum repudiandae expedita optio!</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="gallery">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="sec-heading">
                        <div class="sec-main">
                          <img src="assets/images/home/sec-icons/gallery.gif" alt="">
                          <h2>Projects Gallery</h2>
                        </div>
                        <small>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt, cupiditate.</small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="gallery">
                        <ul>
                            <?php

                            $images = glob("assets/images/residential/house/gallery" . "/*.png");
                            foreach($images as $image)
                            {?>
                            <li>
                                <div class="item">
                                    <a href=<?php echo $image ?> data-lightbox="mygallery" data-title="First-Image">
                                        <img src=<?php echo $image ?> class="img-fluid" alt=" ">
                                    </a>
                                </div>
                            </li>

                            <?php
                            }
                        ?>
                        </ul>
                    </div>
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

  <!-- ---------------- External JS --------------------------->
  <script src="assets/js/script.js"></script>

</body>
</html>