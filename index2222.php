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

<section id="project-area" class="project-area solid-bg">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
        <!-- <h2 class="section-title">การรับเข้าศึกษาต่อ</h2> -->
        <h3 class="section-sub-title">CMU OPENHOUSE 2022</h3>
        <p>💜🔸📣มาแล้วจ้า CMU OPEN HOUSE 
        วันเสาร์-อาทิตย์ ที่ 5-6 พ.ย. 2565 นี้
        ในรูปแบบออนไลน์ 
        .
        💜สามารถติดตามได้ที่ เว็บไซต์ <a href="https://cmu.to/openhouse">https://cmu.to/openhouse</a>
        มีรายละเอียดหลักสูตร ป.ตรี มหาวิทยาลัยเชียงใหม่ครบทุกหลักสูตร 
        .
        💜และ Page Facebook : CMU Open House  : <a href="https://www.facebook.com/CMUopenhouse">https://www.facebook.com/CMUopenhouse</p>
      </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
      <div class="col-12">
        <div class="shuffle-btn-group">
          <label class="active" for="all">
            <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Show All
          </label>
          <label for="ani">
            <input type="radio" name="shuffle-filter" id="ani" value="ani">Animation
          </label>
          <label for="dg">
            <input type="radio" name="shuffle-filter" id="dg" value="dg">Digital game
          </label>
          <label for="mmit">
            <input type="radio" name="shuffle-filter" id="mmit" value="mmit">MMIT
          </label>
          <label for="se">
            <input type="radio" name="shuffle-filter" id="se" value="se">Software engineer
          </label>
          <label for="dii">
            <input type="radio" name="shuffle-filter" id="dii" value="dii">DII
          </label>
          <!-- <label for="test">
            <input type="radio" name="shuffle-filter" id="test" value="test">Healthcare
          </label> -->
        </div><!-- project filter end -->


        <div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;ani&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/ani.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/ani.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">ANI</a>
                  </h3>
                  <p class="project-cat">Animation</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 1 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;dg&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/dg.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/dg.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">DG</a>
                  </h3>
                  <p class="project-cat">Digital game</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 2 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;mmit&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/mmit.png" aria-label="project-img">
                <img class="img-fluid" src="images/projects/mmit.png" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">MMIT</a>
                  </h3>
                  <p class="project-cat">Modern Management Information Technology</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 3 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;se&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/se.png" aria-label="project-img">
                <img class="img-fluid" src="images/projects/se.png" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">SE</a>
                  </h3>
                  <p class="project-cat">Software Engineer</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 4 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;dii&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/dii.png" aria-label="project-img">
                <img class="img-fluid" src="images/projects/dii.png" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">DII</a>
                  </h3>
                  <p class="project-cat">Digital Industry Intigration</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 5 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;residential&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project6.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project6.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Overview</a>
                  </h3>
                  <p class="project-cat">All field of study</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 6 end -->
        </div><!-- shuffle end -->
      </div>

      <div class="col-12">
        <div class="general-btn text-center">
          <a class="btn btn-primary" href="projects.html">View All field of study</a>
        </div>
      </div>

    </div><!-- Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Project area end -->

<?php include("footer.php");?>

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