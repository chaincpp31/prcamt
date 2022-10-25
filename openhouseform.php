<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<!-- 
THEME: Constra - Construction Html5 Template
VERSION: 1.0.0
AUTHOR: Themefisher

HOMEPAGE: https://themefisher.com/products/constra-construction-template/
DEMO: https://demo.themefisher.com/constra/
GITHUB: https://github.com/themefisher/Constra-Bootstrap-Construction-Template

WEBSITE: https://themefisher.com
TWITTER: https://twitter.com/themefisher
FACEBOOK: https://www.facebook.com/themefisher
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <style>
      input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

form {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.containerhead {
  display: block;
  position:relative;
  overflow: hidden;
  width: 100%;
  padding-top: 78%; /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
}

/* Then style the iframe to fit in the container div with full height and width */
.responsive-iframe {
  position:absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  /* height: 1900px; */
  height: 100%;
}
  </style>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>CAMT CMU</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name=author content="Themefisher">
  <meta name=generator content="Themefisher Constra HTML Template v1.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="body-inner">
  <?php include("navbar.php");?>
    

<section id="ts-features" class="ts-features">
  <div class="container">
    <div class="row">

        <div class="col-lg-6 mt-4 mt-lg-0">
          <h3 class="into-sub-title">CAMT OPENHOUSE 2022</h3>
          <!-- <p>กิจกรรม บลาๆๆๆๆๆ<br>บลาๆๆๆๆๆ</p> -->

          <div class="accordion accordion-group" id="our-values-accordion">
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          ลงทะเบียนเข้าร่วม workshop
                      </button>
                    </h2>
                </div>
              
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#our-values-accordion">
                    <div class="card-body">
                    <div class="ts-intro">
              <h2 class="into-title">register</h2>
              <!-- <h3 class="into-sub-title">CAMT OPENHOUSE 2022</h3> -->
              <form name="form1" method="post" action="insert.php">
                  <div id="invite" class="w3-container w3-white w3-padding-16 myLink">
                  <div class="w3-row-padding" style="margin:0 -16px;">
                      <div class="w3-half">
                      <h2 class="into-title">สถานะผู้เข้าร่วม</h2><br>
                      <input type="radio" name="position" <?php if (isset($position) && $position=="teacher") echo "checked";?> value="teacher">ครู/อาจารย์<br>
                      <input type="radio" name="position" <?php if (isset($position) && $position=="student") echo "checked";?> value="student">นักเรียน/นักศึกษา<br>
                      <input type="radio" name="position" <?php if (isset($position) && $position=="visitor") echo "checked";?> value="visitor">ผู้ปกครอง/บุคคลทั่วไป<br><br>
                      <label>ชื่อ-นามสกุล</label>
                      <input name="name" class="w3-input w3-border" type="text" placeholder="ชื่อ-นามสกุล" required>
                      <label>ระดับชั้น</label>
                      <input name="degree" class="w3-input w3-border" type="text" placeholder="มัธยมศึกษา">
                      <lable>โรงเรียน</lable>
                      <input name="school" class="w3-input w3-border" type="text" placeholder="โรงเรียน" required>
                      <lable>เบอร์โทรศัพท์</lable>
                      <input name="phone" class="w3-input w3-border" type="text" placeholder="เบอร์โทรศัพท์" required>
                      <lable>email</lable>
                      <input name="email" class="w3-input w3-border" type="text" placeholder="email">
                      <lable>Facebook</lable>
                      <input name="facebook" class="w3-input w3-border" type="text" placeholder="facebook">
                      

                  </div>
                  </div>
                  <h2>workshop ช่วงเช้า</h2>
                      <input type="radio" name="morning" <?php if (isset($morning) && $morning=="ani") echo "checked";?> value="ani">Animation<br>
                      <input type="radio" name="morning" <?php if (isset($morning) && $morning=="dg") echo "checked";?> value="dg">Digital Game<br>
                      <input type="radio" name="morning" <?php if (isset($morning) && $morning=="mmit") echo "checked";?> value="mmit">Modern Management Information Technology<br>
                      <input type="radio" name="morning" <?php if (isset($morning) && $morning=="se") echo "checked";?> value="se">Software Engineer<br>
                      <input type="radio" name="morning" <?php if (isset($morning) && $morning=="dii") echo "checked";?> value="dii">Digital Industry Intigration<br>
                  <h2>workshop ช่วงบ่าย</h2>
                      <input type="radio" name="affternoon" <?php if (isset($affternoon) && $affternoon=="ani") echo "checked";?> value="ani">Animation<br>
                      <input type="radio" name="affternoon" <?php if (isset($affternoon) && $affternoon=="dg") echo "checked";?> value="dg">Digital Game<br>
                      <input type="radio" name="affternoon" <?php if (isset($affternoon) && $affternoon=="mmit") echo "checked";?> value="mmit">Modern Management Information Technology<br>
                      <input type="radio" name="affternoon" <?php if (isset($affternoon) && $affternoon=="se") echo "checked";?> value="se">Software Engineer<br>
                      <input type="radio" name="affternoon" <?php if (isset($affternoon) && $affternoon=="dii") echo "checked";?> value="dii">Digital Industry Intigration<br><br>
                  <p><button type="submit" name="Submit" class="w3-button w3-dark-grey">ลงทะเบียน</button></p>
                  </div>
              </form>
          </div><!-- Intro box end -->
                    </div>
                </div>
              </div>
              
          </div>
          <!--/ Accordion end -->

        </div><!-- Col end -->
    </div><!-- Row end -->
  </div><!-- Container end -->
</section><!-- Feature are end -->

<!-- <section class="content">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <h3 class="column-title">Testimonials</h3>

          <div id="testimonial-slide" class="testimonial-slide">
              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      Question ran over her cheek When she reached the first hills of the Italic Mountains, she had a last
                      view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the
                      subline of her own road.
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial1.png" alt="testimonial">
                      <div class="quote-item-info">
                          <h3 class="quote-author">Gabriel Denis</h3>
                          <span class="quote-subtext">Chairman, OKT</span>
                      </div>
                    </div> -->
                <!-- </div> -->
                <!-- Quote item end -->
              <!-- </div> -->
              <!--/ Item 1 end -->

              <!-- <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris
                      nisi aliquip consequat.
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial2.png" alt="testimonial">
                      <div class="quote-item-info">
                          <h3 class="quote-author">Weldon Cash</h3>
                          <span class="quote-subtext">CFO, First Choice</span>
                      </div>
                    </div> -->
                <!-- </div> -->
                <!-- Quote item end -->
              <!-- </div> -->
              <!--/ Item 2 end -->

              <!-- <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris
                      nisi ut commodo consequat.
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial3.png" alt="testimonial">
                      <div class="quote-item-info">
                          <h3 class="quote-author">Minter Puchan</h3>
                          <span class="quote-subtext">Director, AKT</span>
                      </div>
                    </div> -->
                <!-- </div> -->
                <!-- Quote item end -->
              <!-- </div> -->
              <!--/ Item 3 end -->

          <!-- </div> -->
          <!--/ Testimonial carousel end-->
        <!-- </div> -->
        <!-- Col end -->

        <!-- <div class="col-lg-6 mt-5 mt-lg-0">

          <h3 class="column-title">Happy Clients</h3>

          <div class="row all-clients">
              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client1.png" alt="clients-logo" /></a>
                </figure> -->
              <!-- </div> -->
              <!-- Client 1 end -->

              <!-- <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client2.png" alt="clients-logo" /></a>
                </figure> -->
              <!-- </div> -->
              <!-- Client 2 end -->

              <!-- <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client3.png" alt="clients-logo" /></a>
                </figure> -->
              <!-- </div> -->
              <!-- Client 3 end -->

              <!-- <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client4.png" alt="clients-logo" /></a>
                </figure> -->
              <!-- </div> -->
              <!-- Client 4 end -->

              <!-- <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client5.png" alt="clients-logo" /></a>
                </figure> -->
              <!-- </div> -->
              <!-- Client 5 end -->

              <!-- <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client6.png" alt="clients-logo" /></a>
                </figure> -->
              <!-- </div> -->
              <!-- Client 6 end -->

          <!-- </div> -->
          <!-- Clients row end -->

        <!-- </div> -->
        <!-- Col end -->

    <!-- </div> -->
    <!--/ Content row end -->
  <!-- </div> -->
  <!--/ Container end -->
<!-- </section> -->
<!-- Content end -->

<section class="subscribe no-padding">
  <div class="container">
    <div class="row">
        <div class="col-lg-4">
          <div class="subscribe-call-to-acton">
              <h3>Can We Help?</h3>
              <h4>053 920 299</h4>
          </div>
        </div><!-- Col end -->

        <div class="col-lg-8">
          <div class="ts-newsletter row align-items-center">
              <div class="col-md-5 newsletter-introtext">
                <h4 class="text-white mb-0">Newsletter Sign-up</h4>
                <p class="text-white">Latest updates and news</p>
              </div>

              <div class="col-md-7 newsletter-form">
                <form action="#" method="post">
                    <div class="form-group">
                      <label for="newsletter-email" class="content-hidden">Newsletter Email</label>
                      <input type="email" name="email" id="newsletter-email" class="form-control form-control-lg" placeholder="Your your email and hit enter" autocomplete="off">
                    </div>
                </form>
              </div>
          </div><!-- Newsletter end -->
        </div><!-- Col end -->

    </div><!-- Content row end -->
  </div>
  <!--/ Container end -->
</section>
<!--/ subscribe end -->

<!-- <section id="news" class="news">
  <div class="container">
    <div class="row text-center">
        <div class="col-12">
          <h2 class="section-title">Work of Excellence</h2>
          <h3 class="section-sub-title">Recent Projects</h3>
        </div>
    </div> -->
    <!--/ Title row end -->

    <!-- <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="latest-post">
              <div class="latest-post-media">
                <a href="news-single.html" class="latest-post-img">
                    <img loading="lazy" class="img-fluid" src="images/news/news1.jpg" alt="img">
                </a>
              </div>
              <div class="post-body">
                <h4 class="post-title">
                    <a href="news-single.html" class="d-inline-block">We Just Completes $17.6 million Medical Clinic in Mid-Missouri</a>
                </h4>
                <div class="latest-post-meta">
                    <span class="post-item-date">
                      <i class="fa fa-clock-o"></i> July 20, 2017
                    </span>
                </div>
              </div> -->
          <!-- </div> -->
          <!-- Latest post end -->
        <!-- </div> -->
        <!-- 1st post col end -->

        <!-- <div class="col-lg-4 col-md-6 mb-4">
          <div class="latest-post">
              <div class="latest-post-media">
                <a href="news-single.html" class="latest-post-img">
                    <img loading="lazy" class="img-fluid" src="images/news/news2.jpg" alt="img">
                </a>
              </div>
              <div class="post-body">
                <h4 class="post-title">
                    <a href="news-single.html" class="d-inline-block">Thandler Airport Water Reclamation Facility Expansion Project Named</a>
                </h4>
                <div class="latest-post-meta">
                    <span class="post-item-date">
                      <i class="fa fa-clock-o"></i> June 17, 2017
                    </span>
                </div>
              </div> -->
          <!-- </div> -->
          <!-- Latest post end -->
        <!-- </div> -->
        <!-- 2nd post col end -->

        <!-- <div class="col-lg-4 col-md-6 mb-4">
          <div class="latest-post">
              <div class="latest-post-media">
                <a href="news-single.html" class="latest-post-img">
                    <img loading="lazy" class="img-fluid" src="images/news/news3.jpg" alt="img">
                </a>
              </div>
              <div class="post-body">
                <h4 class="post-title">
                    <a href="news-single.html" class="d-inline-block">Silicon Bench and Cornike Begin Construction Solar Facilities</a>
                </h4>
                <div class="latest-post-meta">
                    <span class="post-item-date">
                      <i class="fa fa-clock-o"></i> Aug 13, 2017
                    </span>
                </div>
              </div> -->
          <!-- </div> -->
          <!-- Latest post end -->
        <!-- </div> -->
        <!-- 3rd post col end -->
    <!-- </div> -->
    <!--/ Content row end -->

    <!-- <div class="general-btn text-center mt-4">
        <a class="btn btn-primary" href="news-left-sidebar.html">See All Posts</a>
    </div>

  </div> -->
  <!--/ Container end -->
<!-- </section> -->
<!--/ News end -->

  <footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-4 col-md-6 footer-widget footer-about">
            <h3 class="widget-title">About Us</h3>
            <img loading="lazy" width="200px" class="footer-logo" src="images/camt_horizontal.jpg" alt="Constra">
            <p>อาคารวิทยาลัยศิลปะ สื่อ และเทคโนโลยี
              College of Arts, Media and Technology
              ที่อยู่ /Address :
              239 ถ.ห้วยแก้ว ต.สุเทพ อ.เมือง จ.เชียงใหม่ 50200
              239 Huaykaew Rd., Suthep, Muang, Chiang Mai 50200 
              </p>
              <p>
              โทร/Tel. : 053-920299
              โทรสาร/Fax. : 053-941803
              Website : <a href = "http://www.camt.cmu.ac.th">www.camt.cmu.ac.th</a>
            </p>
            <div class="footer-social">
              <ul>
                <li><a href="https://facebook.com/themefisher" aria-label="Facebook"><i
                      class="fab fa-facebook-f"></i></a></li>
                <!-- <li><a href="https://twitter.com/themefisher" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                </li>
                <li><a href="https://instagram.com/themefisher" aria-label="Instagram"><i
                      class="fab fa-instagram"></i></a></li>
                <li><a href="https://github.com/themefisher" aria-label="Github"><i class="fab fa-github"></i></a></li> -->
              </ul>
            </div><!-- Footer social end -->
          </div><!-- Col end -->

          <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
            <h3 class="widget-title">Working Hours</h3>
            <div class="working-hours">
              We work 5 days a week. Contact us if you have an question, with our
              Hotline and Facebook fanpage.
              <br><br> Monday - Friday: <span class="text-right">08:30 - 16:30 </span>
              <!-- <br> Saturday: <span class="text-right">12:00 - 15:00</span>
              <br> Sunday and holidays: <span class="text-right">09:00 - 12:00</span> -->
            </div>
          </div><!-- Col end -->

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
            <h3 class="widget-title">Services</h3>
            <ul class="list-arrow">
              <li><a href="service-single.html">Pre-Construction</a></li>
              <li><a href="service-single.html">General Contracting</a></li>
              <li><a href="service-single.html">Construction Management</a></li>
              <li><a href="service-single.html">Design and Build</a></li>
              <li><a href="service-single.html">Self-Perform Construction</a></li>
            </ul>
          </div><!-- Col end -->
        </div><!-- Row end -->
      </div><!-- Container end -->
    </div><!-- Footer main end -->

    <div class="copyright">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="copyright-info">
              <span>Copyright &copy; <script>
                  document.write(new Date().getFullYear())
                </script>, Designed &amp; Developed by <a href="https://themefisher.com">chain_ponlawat</a></span>
            </div>
          </div>

          <div class="col-md-6">
            <div class="footer-menu text-center text-md-right">
              <ul class="list-unstyled">
                <li><a href="about.html">About</a></li>
                <li><a href="team.html">Our people</a></li>
                <li><a href="faq.html">Faq</a></li>
                <li><a href="news-left-sidebar.html">Blog</a></li>
                <li><a href="pricing.html">Pricing</a></li>
              </ul>
            </div>
          </div>
        </div><!-- Row end -->

        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
          <button class="btn btn-primary" title="Back to Top">
            <i class="fa fa-angle-double-up"></i>
          </button>
        </div>

      </div><!-- Container end -->
    </div><!-- Copyright end -->
  </footer><!-- Footer end -->


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="plugins/colorbox/jquery.colorbox.js"></script>
  <!-- shuffle -->
  <script src="plugins/shuffle/shuffle.min.js" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="plugins/google-map/map.js" defer></script>

  <!-- Template custom -->
  <script src="js/script.js"></script>

  </div><!-- Body inner end -->
  </body>

  </html>