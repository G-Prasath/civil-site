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
        <li><a href="#">Home</a></li>
        <li><a href="about.php">About</a></li>
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
                <div class="input-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" name="name">
                  <div class="error"></div>
                </div>
                <div class="input-group">
                  <label for="email">Email</label>
                  <input type="text" id="email" name="email">
                  <div class="error"></div>
                </div>
                <div class="input-group">
                  <label for="phone">Phone</label>
                  <input type="text" id="phone" name="phone">
                  <div class="error"></div>
                </div>
                <div class="input-group">
                  <label for="msg">Message</label>
                  <input name="msg" id="msg" style="height: 75px">
                  <div class="error"></div>
                </div>
                <div class="d-grid gap-2">
                  <button class="enquiry-btn" name="submit" type="submit"><span>Send</span></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
</div>
<!-- ---------------- End Side Sticky  -->