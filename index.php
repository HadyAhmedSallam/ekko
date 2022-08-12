<?php
//  check if user coming from a request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  //filter and define varibles

  $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
  $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

  // creating array of errors
  $formErrors = array();

  // validate 
  if (strlen($name) < 3) {
    $formErrors[] = 'name must be larger than 3 characters';
  }

  if (strlen($subject) < 14) {
    $formErrors[] = 'subject must be larger than 14 characters';
  }

  if (strlen($message) < 35) {
    $formErrors[] = 'message must be larger than 35 characters';
  }

  // if no errors send the mail 
  $to = 'hadysallam02@gmail.com';
  $headers = 'From:' . $email  . "\r\n" .
    'Reply-To:' . $email  .  "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  if (empty($formErrors)) {
    mail($to, $subject, $message, $headers);

    $name = "";
    $email = "";
    $subject = "";
    $message = "";

    $success = ' <div class="alert alert-success ">We Have Recieved Your Message </div> ';
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>EKKO Web Portfolio</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />
  <!-- Favicons -->
  <link href="assets/img/ekko-logo.png" rel="icon" />
  <link href="assets/img/ekko-logo.png rel=" apple-touch-icon" />
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/@media.css" rel="stylesheet" />
 <!-- Template animation CSS File -->
 <link href="assets/css/animate.css" rel="stylesheet" />
 <link href="assets/css/animate.min.css" rel="stylesheet" />
  <!-- Template hover CSS File -->
 <link href="assets/css/hover.css" rel="stylesheet" />
 <link href="assets/css/hover-min.css" rel="stylesheet" />
</head>
<!-- start body -->

<body style="
      background-image: url('assets/img/bg_body.jpg');
      background-repeat: repeat-y;
    ">
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo">
        <a href="EKKO.php">
          <img src="assets/img/ekko-logo-w.png" alt="ekko-webdevelopments-logo" />
        </a>
      </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#work">Work</a></li>
          <!-- <li><a class="nav-link scrollto" href="#blog">Blog</a></li> -->
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image hero_bg" style="
        background-image: url(assets/img/1687.jpg);
      ">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->

          <h1 class="hero-title mb-4 firsttxt1">I'm Hady Sallam</h1>
          <p class="hero-subtitle firsttxt2">
            <span class="typed" data-typed-items="Developer..., Designer..., Freelancer..."></span>
          </p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Click Down</a></p> -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Hero Section -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full aboutMe">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="assets/img/hady-img.jpg" class="img-fluid rounded b-shadow-a" alt="hadysallam-img" />
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7 animate__fadeIn animate__animated wow">
                      <div class="about-info">
                        <p>
                          <span class="title-s text-light">Name: </span>
                          <span>Hady Sallam</span>
                        </p>
                        <p>
                          <span class="title-s text-light">Profile: </span>
                          <span>full stack developer</span>
                        </p>
                        <p>
                          <span class="title-s text-light">Email: </span>
                          <span>hadysallam02@gmail.com</span>
                        </p>
                        <p>
                          <span class="title-s text-light">Phone: </span>
                          <span>+20 1005001674</span>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="skill-mf">
                    <p class="title-s text-light">Skill</p>
                    <span class="text-light">HTML-CSS-JavaScript</span>
                    <p  data-purecounter-start="0" data-purecounter-end="95" data-purecounter-duration="1" class="counter purecounter pull-right text-light d-inline"></p>
                    <span class="text-light">%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="text-light">Bootstrap-Vue.js</span>
                    <p  data-purecounter-start="0" data-purecounter-end="80" data-purecounter-duration="1" class="counter purecounter pull-right text-light d-inline"></p>
                    <span class="text-light">%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="text-light">PHP-Laravel</span>
                    <p  data-purecounter-start="0" data-purecounter-end="75" data-purecounter-duration="1" class="counter purecounter pull-right text-light d-inline"></p>
                    <span class="text-light">%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="text-light">Wordpress</span>
                    <p  data-purecounter-start="0" data-purecounter-end="90" data-purecounter-duration="1" class="counter purecounter pull-right text-light d-inline"></p>
                    <span class="text-light">%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0 animate__fadeIn animate__animated wow">
                    <div class="title-box-2">
                      <h5 class="title-left text-light">About me</h5>
                    </div>
                    <p class="lead">
                      I'm certified php full Stack web development<br />
                      from <b>Russia culture center</b> (RCC),<br />
                      <b> more than 2 years experience </b>
                      <br />
                      of Web Development and Design
                    </p>
                    <a class="cv-link" href="assets/cv/new-CV.pdf" download="cv">
                      <button class="btn-9 hvr-bounce-out">Download CV</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a text-light">Services</h3>
              <p class="subtitle-a text-light ">
                RESPONSIVE DESIGN WEB DEVELOPMENT
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="service-box cards">
              <div class="service-ico">
                <span class="ico-circle animate__fadeIn animate__animated wow"><i class="bi bi-briefcase text-light"></i></span>
              </div>
              <div class="service-content animate__fadeIn animate__animated wow">
                <h2 class="s-title text-light ">Web Design</h2>
                <p class="s-description text-center text-light">
                  Web Designers create and build websites and web pages by
                  combining any number of visual design elements including
                  text, photos, graphics, animations and videos. A Web
                  Designer could create a brand new website or simply make
                  updates to the design and layout of existing pages.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box cards">
              <div class="service-ico text-light">
                <span class="ico-circle animate__fadeIn animate__animated wow"><i class="bi bi-card-checklist"></i></span>
              </div>
              <div class="service-content animate__fadeIn animate__animated wow">
                <h2 class="s-title text-light">Web Development</h2>
                <p class="s-description text-light text-center">
                  Web developers create and maintain websites. They are also
                  responsible for the site's technical aspects, such as its
                  performance and capacity, which are measures of a website's
                  speed and how much traffic the site can handle. In addition,
                  developers may create content for the site
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box cards">
              <div class="service-ico">
                <span class="ico-circle animate__fadeIn animate__animated wow"><i class="bi bi-bar-chart text-light"></i></span>
              </div>
              <div class="service-content animate__fadeIn animate__animated wow">
                <h2 class="s-title text-light">Photography</h2>
                <p class="s-description text-light text-center">
                  Using a photo as a background can give your website an added
                  visual element, as well as depth and space. On the other
                  side of things, if the photo is poor quality or unappealing,
                  it can bring down the entire look of the web page, You have
                  all rights and licenses to display images
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box cards">
              <div class="service-ico">
                <span class="ico-circle animate__fadeIn animate__animated wow"><i class="bi bi-binoculars text-light"></i></span>
              </div>
              <div class="service-content animate__fadeIn animate__animated wow">
                <h2 class="s-title text-light">Responsive Design</h2>
                <p class="s-description text-light text-center">
                  Having a responsive website design means the site is able to
                  adapt to whatever device it is being viewed on. This is
                  important as it helps cater to site visitors on a variety of
                  devices and help improve your overall quality score
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box cards">
              <div class="service-ico text-light">
                <span class="ico-circle animate__fadeIn animate__animated wow"><i class="bi bi-brightness-high text-light"></i></span>
              </div>
              <div class="service-content animate__fadeIn animate__animated wow">
                <h2 class="s-title text-light">Graphic Design</h2>
                <p class="s-description text-center text-light">
                  Graphic design is essential to communicating with existing
                  and future clients. It provides the visual assets that can
                  be used for all of your marketing campaigns. These include
                  your brand's logo, user interface, images, typography,
                  navigation, and other elements.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box cards">
              <div class="service-ico text-light">
                <span class="ico-circle animate__fadeIn animate__animated wow"><i class="bi bi-calendar4-week"></i></span>
              </div>
              <div class="service-content animate__fadeIn animate__animated wow">
                <h2 class="s-title text-light">Wordpress (cms)</h2>
                <p class="s-description text-center text-light">
                  WordPress is a content management system (CMS) that allows
                  you to host and build websites. WordPress contains plugin
                  architecture and a template system, so you can customize any
                  website to fit your business, blog, portfolio, or online
                  store
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Counter Section ======= -->
    <div class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/counters-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-check"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">WORKS COMPLETED</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-journal-richtext"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">YEARS OF EXPERIENCE</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-people"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="19" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">TOTAL CLIENTS</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-award"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">AWARD WON</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Counter Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a text-light">Projects</h3>
              <p class="subtitle-a text-light">Last Projects</p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/a-1.png" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img ">
                  <img src="assets/img/a-1.png" style="width: 100%" alt="project-1" class="img-fluid" />
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Online Store</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Ecommerce Website</span> /
                      <span class="w-date">18 Sep. 2021</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="bi bi-plus-circle"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/t-7.png" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="assets/img/t-7.png" style="width: 100%" alt="project-2" class="img-fluid" />
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Photography</h2>
                    <div class="w-more">
                      <span class="w-ctegory">photographer website</span> /
                      <span class="w-date">12 oct. 2021</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="bi bi-plus-circle"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/t-2.png" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="assets/img/t-2.png" style="width: 100%" alt="project-3" class="img-fluid" />
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Online Training</h2>
                    <div class="w-more">
                      <span class="w-ctegory">GYM Website</span> /
                      <span class="w-date">5 nov. 2021</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="bi bi-plus-circle"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/t-9.png" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="assets/img/t-9.png" style="width: 100%" alt="project-4" class="img-fluid" />
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">For Clients</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Portfolio Website</span> /
                      <span class="w-date">18 Mar. 2022</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="bi bi-plus-circle"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/t-10.png" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="assets/img/t-10.png" style="width: 100%" alt="project-5" class="img-fluid" />
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Business</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Company Website</span> /
                      <span class="w-date">26 Des. 2020</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="bi bi-plus-circle"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/t-5.png" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="assets/img/t-5.png" style="width: 100%" alt="project-6" class="img-fluid" />
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Blogs</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Blog Website</span> /
                      <span class="w-date">12 Sep. 2021</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="bi bi-plus-circle"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">Contact Us</h5>
                    </div>
                    <div>


                      <!-- start form -->
                      <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" class="php-email-form">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" value="<?php if (isset($name)) {
                                                                                                      echo $name;
                                                                                                    } ?>" placeholder="Your Name" required />
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" value="<?php if (isset($email)) {

                                                                                                        echo $email;
                                                                                                      } ?>" placeholder="Your Email" required />
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" value="<?php if (isset($subject)) {
                                                                                                            echo $subject;
                                                                                                          } ?>" placeholder="Subject" required />
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="message" id="message" rows="5" value="<?php if (isset($message)) {
                                                                                                            echo $message;
                                                                                                          } ?>" placeholder="Message" required></textarea>
                            </div>
                          </div>
                          <div class="col-md-12 text-center my-3">
                            <div class="loading">Loading</div>

                            <?php if (!empty($formErrors)) {   ?>
                              <div class="error_message alert alert-danger  fade show" role="alert">
                                <?php
                                foreach ($formErrors as $error) {
                                  echo $error . "<br>";
                                }
                                ?>
                              </div>
                            <?php } ?>

                            <?php if (isset($success)) {
                              echo $success;
                            } ?>

                            <div class="sent-message">
                              Your message has been sent. Thank you!
                            </div>
                          </div>
                          <div class="col-md-12 text-center">
                            <input type="submit" class="button button-a button-big button-rouded">
                          </div>
                        </div>
                      </form>
                      <!-- end form -->


                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left logoForSm">
                        <img class="" style="
                              width: 100px;
                              height: 100px;
                              margin-top: -30px;
                            " src="assets/img/ekko-logo.png" alt="ekko-webdevelopments-logo" />
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                        Ekko Development has the capability and experience to
                        design, and evolve integrated websites that meet the
                        diversity requirements of different market segments,
                        <br />
                        You Can Easily send your project details,<br />
                        we will replay back in 24 hrs
                      </p>
                      <ul class="list-ico">
                        <li>
                          <span class="bi bi-geo-alt"></span> El Maadi, Cairo,
                          Egypt
                        </li>
                        <li>
                          <span class="bi bi-phone"></span> +20 1005001674
                        </li>
                        <li>
                          <span class="bi bi-envelope"></span>
                          hadysallam02@gmail.com
                        </li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        <li>
                          <a href="https://www.facebook.com/hady.sallam.7" target="_blank"><span class="ico-circle"><i class="bi bi-facebook "></i></span></a>
                        </li>
                        <li>
                          <a href="https://instagram.com/hady_sallllllam?utm_medium=copy_link" target="_blank"><span class="ico-circle"><i class="bi bi-instagram"></i></span></a>
                        </li>
                        <li>
                          <a href="https://github.com/HadyAhmedSallam" target="_blank"><span class="ico-circle" target="_blank"><i class="bi bi-github"></i></span></a>
                        </li>
                        <li>
                          <a href="https://www.linkedin.com/in/hady-sallam-b19075222" target="_blank"><span class="ico-circle"><i class="bi bi-linkedin"></i></span></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->
  </main>
  <!-- End #main -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script>
  new WOW().init();
  </script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/new.js"></script>
</body>

</html>