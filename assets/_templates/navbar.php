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
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li>
          <a href="#">Residential</a>
          <i class='bx bxs-chevron-down htmlcss-arrow arrow'></i>
          <ul class="htmlCss-sub-menu sub-menu">
            <li><a href="house.php">House</a></li>
            <li><a href="flats.php">Flats</a></li>
            <li><a href="condominium.php">Condominium</a></li>
            <li><a href="duplex.php">Duplex</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Commercial</a>
          <i class='bx bxs-chevron-down tst-arrow arrow'></i>
          <ul class="tst-sub-menu sub-menu">
            <li><a href="hospitals.php">Hospitals / Pharma</a></li>
            <li><a href="shopping.php">Shopping complexes</a></li>
            <li><a href="school-collage.php">School / Collages</a></li>
            <li><a href="office.php">Office</a></li>
            <li><a href="hotel.php">Hotel / Resorts</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Industrial</a>
          <i class='bx bxs-chevron-down js-arrow arrow'></i>
          <ul class="js-sub-menu sub-menu">
            <li><a href="warehouse.php">Warehouse Construction</a></li>
            <li><a href="chimney.php">Chimney</a></li>
            <li><a href="data-center.php">Data Centers</a></li>
            <li><a href="plants.php">Plant Construction</a></li>
            <li><a href="oil.php">Oil & Gas Construction</a></li>
          </ul>
        </li>
        
        <li><a href="contact.php">Contact Us</a></li>
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
              <form id="enquiry">
                <div class="input-group">
                  <input type="text" id="name" name="name" placeholder="Name" required>
                </div>
                <div class="input-group">
                  <input type="text" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                  <input type="text" id="phone" name="phone" placeholder="Phone" required>
                </div>
                <div class="input-group">
                  <input name="msg" id="msg" style="height: 75px" placeholder="Message" required>
                </div>
                <div class="input-group">
                  <div class="g-recaptcha" data-sitekey="6LfZKW0mAAAAAPNeZMvbzHhEBvMs8IS-AJ1WvF0V"></div>
                </div>
                <div class="d-grid">
                  <button type="submit" name="submit" class="enquiry-btn"><span>Send</span></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
</div>
<!-- ---------------- End Side Sticky  -->