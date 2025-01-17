<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="assets/favicon/site.webmanifest">
  <title>Home | ISPSC Tagudin</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@4cac1a6/css/all.css" rel="stylesheet"
    type="text/css" />
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
@import url('fonts/CenturyGothic/font.css');


:root {
  --primary: #007BFF;
  --dark-maroon: #700000;
  --maroon: #800000;
  --yellow: #FFD700;
  --blue: #044586;
  --dark-blue: #00264d;
  --background-color: #0957a5;
}

* {
  box-sizing: border-box;
  margin: 0;
}

html {
  font-family: 'Century Gothic', sans-serif;
}

hr {
  border: 2px solid orange;
  margin: 25px;
}

/* Navbar Styles */
nav {
  display: flex;
  justify-content: flex-end;
  font-family: 'Century Gothic';
  background-color: var(--background-color);
  padding: 10px;
  margin-top: 20px;
}

.bar {
  width: 25px;
  height: 3px;
  background-color: var(--yellow);
  margin: 5px 0;
  transition: 0.4s;
}

.hamburger-menu {
  display: none;
  cursor: pointer;
}

nav li {
  display: inline-block;
  padding: 10px 20px;
  color: var(--yellow);
  text-decoration: none;
  transition: background-color 0.3s ease;
}

nav li:hover {
  background-color: var(--dark-blue);
  padding: 10px 20px;
  color: white;
}

nav a {
  text-decoration: none;
  color: var(--yellow);


}

.active {
  background-color: var(--dark-blue);
  padding: 10px 20px;
  color: white;
}

nav a:hover {
  color: white;
}

nav ul.sub-menu {
  display: none;
  position: absolute;
  background-color: var(--blue);
  list-style-type: none;
  padding: 0;
  z-index: 1000;
  margin: 0;
}

nav li:hover ul.sub-menu {
  display: block;
}

nav ul.sub-menu li {
  display: block;
  padding: 10px 20px;
  color: var(--yellow);
  text-decoration: none;
  transition: background-color 0.3s ease;
}

nav ul.sub-menu li:hover {
  background-color: var(--dark-blue);
  padding: 10px 20px;
  color: white;
}


.masthead {
  display: block;
  background-color: var(--blue);
}


.header-masthead {
  padding-left: 20px;
  padding-right: 20px;
  padding-top: 20px;

}

.logo {
  display: flex;
  /* justify-content: space-evenly; */
}


.text-logo {
  font-family: 'Cinzel';
  display: inline-block;
  margin-top: 12px;
}

.image-logo {
  margin-right: 20px;
}

.image-logo>.logo {
  width: 100px;
}

#agency-heading {
  font-size: 12pt;
  color: var(--yellow);
}

#agency-name {
  font-size: 30px;
  display: block;
  position: relative;
  color: var(--yellow);
  line-height: 1;
  padding-top: 5px;
  border-top: 1px solid var(--yellow);
  margin: 0;
}

#agency-tagline {
  font-size: 12pt;
  color: var(--yellow);
}


/* Style the Philippine Standard Time */
#pst-container {
  float: right;
  font-size: 14px;
  margin-top: 20px;
  color: var(--yellow);
  font-family: 'Century Gothic';
}

#pst-time a {
  text-decoration: none;
  color: var(--yellow);
}


.archive a{
  list-style: none;
  display: block;
  text-decoration: none;
  padding: 8px 10px;
  color: var(--yellow) !important;
  background-color: var(--dark-blue) !important;
}



.year {
  font-weight: bold;
  padding-top: 10px;
}

.toggle-button {
  cursor: pointer;
  float: right;          
  margin-right: 10px;  
}


.months {
  margin-left: 14px;
  list-style: disc;
  display: none;
}

.count {
  font-weight: 100;
  color: var(--yellow);
}



.months li {
  background-color: var(--dark-blue);
  color: white;
  list-style: none;
  margin-top: 5px;
  border-bottom: 1px dotted rgba(0,0,0,.3);
  font-size: 15px;
  position: relative;
  padding: 10px 10px;
}

.pagination {
  list-style: none;
  display: flex;
  justify-content: center;
  margin-top: 20px;
}

.page-link {
  text-decoration: none;
  color: var(--yellow);
  background-color: var(--blue);
  padding: 5px 10px;
  margin: 5px;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.page-link:hover {
  background-color: var(--dark-blue);
}

.page-link.active {
  background-color: var(--dark-blue);
}


.m-4 {
  margin: 20px;
}

.carousel {
  margin: 0 auto;
}


ul.slides {
  display: block;
  position: relative;
  height: 600px;
  margin: 0;
  padding: 0;
  overflow: hidden;
  list-style: none;
}

.slides * {
  user-select: none;
  -ms-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -webkit-touch-callout: none;
}

ul.slides input {
  display: none;
}


.slide-container {
  display: block;

}

.slide-image {
  display: block;
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  opacity: 0;
  transition: all .7s ease-in-out;
}

.slide-image img {
  /* width: auto; */
  min-width: 100%;
  height: 100%;
}

.carousel-controls {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  z-index: 999;
  font-size: 100px;
  line-height: 600px;
  color: #fff;
}

.carousel-controls label {
  display: none;
  position: absolute;
  padding: 0 20px;
  opacity: 0;
  transition: opacity .2s;
  cursor: pointer;
}

.slide-image:hover+.carousel-controls label {
  opacity: 0.5;
}

.carousel-controls label:hover {
  opacity: 1;
}

.carousel-controls .prev-slide {
  width: 49%;
  text-align: left;
  left: 0;
}

.carousel-controls .next-slide {
  width: 49%;
  text-align: right;
  right: 0;
}

.carousel-dots {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 20px;
  z-index: 999;
  text-align: center;
}

.carousel-dots .carousel-dot {
  display: inline-block;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  background-color: #fff;
  opacity: 0.5;
  margin: 10px;
}

input:checked+.slide-container .slide-image {
  opacity: 1;
  transform: scale(1);
  transition: opacity 1s ease-in-out;
}

input:checked+.slide-container .carousel-controls label {
  display: block;
}

input#img-1:checked~.carousel-dots label#img-dot-1,
input#img-2:checked~.carousel-dots label#img-dot-2,
input#img-3:checked~.carousel-dots label#img-dot-3,
input#img-4:checked~.carousel-dots label#img-dot-4,
input#img-5:checked~.carousel-dots label#img-dot-5,
input#img-6:checked~.carousel-dots label#img-dot-6 {
  opacity: 1;
}




input:checked+.slide-container .nav label {
  display: block;
}

.blog {
  display: flex;
  flex-direction: column;
  padding: 16px;
  border: 1px solid #ddd;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
  background-color: #fff;
  margin-top: 20px;
}

.blog h4 {
  font-family: 'Century Gothic';
  margin-bottom: 20px;
}

.blog a {
  text-decoration: none;
  color: #000000;
}

.blog-image {
  max-width: 30%;
  display: block;
}


.inline-content {
  display: flex;
  align-items: start;
}

.inline-content .blog-image {
  max-width: 120px;
  margin-right: 10px;
}


.blog-content p {
  font-family: 'Century Gothic', sans-serif;
  font-size: 14px;
  text-align: justify;
  color: #333;
  margin-right: 200px;
}

.section {
  margin-top: 20px;
  border: 1px solid #ddd;
  background-color: #fffff0;
}

.card {
  padding: 15px;
  margin-bottom: 15px;
  width: 100%;
}

.card h3 {
  font-family: 'Century Gothic';
  font-size: 16px;
  background-color: #043f79;
  color: white;
  padding: 8px;
  margin: 0;
  text-align: center;
}


#announcements li {
  font-size: 14px;
  border-bottom: 1px solid var(--blue);
  margin-right: 50px;
  color: var(--dark-blue);
}

.card ul {
  margin-top: 20px;
}

.card li {
  font-family: 'Century Gothic';
  list-style-type: none;
}

.card li a {
  font-size: 16px;
  text-decoration: none;
  color: var(--dark-blue);
}

.card li a:hover {
  color: var(--yellow);
}

.hero {
  padding: 16px !important;
  margin: 20px !important;
}

.hero-content {
  display: flex;
  padding: 20px;
  flex-direction: row;
  background-color: var(--blue);
}

.hero-content .iframe_video {
  max-width: 50%;
  margin-right: 20px;
}


.hero-content p {
  padding: 20px;
  text-align: justify;
  color: white;
}

.hero-content span {
  font-size: 18px;
  color: var(--yellow);
}

.hero h3 {
  font-family: 'Century Gothic';
  font-size: 24px;
  margin: 20px;
  text-transform: uppercase;
}


.brief_history {
  font-size: 16px;
  font-family: 'Century Gothic';
}

.lyrics p {
  text-align: center;
  font-family: 'Century Gothic';
}

.lyrics h2 {
  font-family: 'Century Gothic';
  font-size: 24px;
  margin: 20px;
  text-transform: uppercase;
}

.lyrics ul {
  padding-bottom: 14px;
}

.refrain {
  font-weight: bold;
  text-align: center;
}

.bridge {
  font-style: italic;
}

.composer {
  text-align: right;
  font-size: 14px;
  margin-top: 20px;
}


.yt-embed {
  position: relative;
  padding-bottom: 56.25%;
  /* 16:9 */
  padding-top: 25px;
  margin-top: 20px;
  height: 0;
}

.yt-embed iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}


.footer {
  margin-top: 50px;
  background-color: var(--blue);
  width: 100%;
  position: relative;
  overflow: hidden;
  padding: 40px;
  z-index: 0;
}


.footer-logo {
  display: flex;
  margin-bottom: 20px;

}


.footer-logo .footer-logo-image {
  width: 120px;
}


.footer-links h4 {
  font-family: 'Century Gothic';
  color: white;
  font-size: 18px;
}


.footer-links {
  text-decoration: none;
  color: var(--yellow);
  font-family: 'Century Gothic';
}

.footer-links a {
  text-decoration: none;
  color: var(--yellow);
  font-family: 'Century Gothic';
  text-decoration: none;
}

.footer-links li {
  list-style-type: none;
}

.footer-contact h4 {
  font-family: 'Century Gothic';
  color: white;
  font-size: 18px;

}


.copyright {
  font-family: 'Century Gothic';
  border-top: 3px solid var(--dark-blue);
  text-align: center;
  padding-top: 20px;
  font-size: 18px;
  color: white;
}

.marquee-container {
  pointer-events: none;
  position: absolute;
  width: 100%;
  top: 0;
  left: 0;
  z-index: -1;
}

@keyframes marquee {
  0% {
    transform: translateX(100%);
  }

  100% {
    transform: translateX(-100%);
  }
}

.marquee-container {
  overflow: hidden;
}

.marquee-container div {
  white-space: nowrap;
  animation: marquee 10s linear infinite;
}



.marquee-container marquee {
  font-family: 'Roboto', sans-serif;
  position: relative;
  color: var(--dark-blue);
  opacity: .3;
  font-size: 160px;
  font-weight: 500;
  letter-spacing: 0px;
  top: 0px;
  bottom: auto;
}

.footer-logo p {
  color: white;
  margin-top: 25px;
  font-family: 'Century Gothic', serif;
}

.accordion {
  max-width: 600px;
  /* Adjust the maximum width as needed */
  margin: 0 auto;
}

.accordion-item {
  border: 1px solid #ddd;
  margin: 5px 0;
}

.accordion-header {
  background-color: var(--blue);
  padding: 10px;
  cursor: pointer;
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-family: 'Century Gothic', sans-serif;
  font-weight: 500;
  transition: background-color 0.3s ease;
  color: var(--yellow);
}

.accordion-header:hover {
  background-color: var(--dark-blue);
}

.accordion-content {
  padding: 10px;
  display: none;
  font-family: 'Century Gothic', sans-serif;
}

.accordion-header::after {
  content: "+";
  font-size: 20px;
  font-weight: bold;
  transition: transform 0.2s;
}

.accordion.active .accordion-header::after {
  transform: rotate(45deg);
}

.accordion-content li,
p {
  font-family: 'Century Gothic', sans-serif;
  font-size: 14px;
  color: var(--dark-blue);
  margin-right: 50px;
  list-style-type: none;
}

.accordion-content a {
  text-decoration: none;
  color: var(--dark-blue);
  transition: color 0.3s ease;
}

.accordion-content a:hover {
  color: var(--yellow);
}

.hero img {
  width: 100%;
}


.hero p {
  text-align: justify;
  margin: 0;
}

.mission-and-vision {
  padding: 20px;
}

.mission-and-vision>.card h3 {
  padding: 2px;

}

.mission-and-vision>.card p {
  font-family: 'Century Gothic';
  color: #000000;
  line-height: 1.3;
  font-size: 14px;
  margin: 12px;
}

.translation-fil {
  color: var(--blue) !important;
}

.translation-il {
  color: var(--primary) !important;
}

.red {
  color: var(--dark-maroon) !important;
  font-size: 24px !important;
  font-weight: bold;
}

.green {
  color: var(--dark-blue) !important;
  font-size: 24px !important;
  font-weight: bold;
}

.blue {
  color: var(--primary) !important;
  font-size: 24px !important;
  font-weight: bold;
}

.card-list li {
  font-size: 14px;
}

ol li {
  margin: 12px;
}

/* Grid System because they don't want us to use CSS Framework */

.container {
  max-width: 1200px;
  /* Adjust the maximum width as needed */
  margin: 0 auto;
  /* Center the container horizontally */
  padding: 0 15px;
  /* Add optional padding to the container's sides */
  box-sizing: border-box;
  /* Include padding and border in the width */
}

/* For desktop: */
.row {
  display: flex;
  flex-wrap: wrap;
}

.col-1 {
  flex: 0 0 8.33%;
}

.col-2 {
  flex: 0 0 16.66%;
}

.col-3 {
  flex: 0 0 25%;
}

.col-4 {
  flex: 0 0 33.33%;
}

.col-5 {
  flex: 0 0 41.66%;
}

.col-6 {
  flex: 0 0 50%;
}

.col-7 {
  flex: 0 0 58.33%;
}

.col-8 {
  flex: 0 0 66.66%;
}

.col-9 {
  flex: 0 0 75%;
}

.col-10 {
  flex: 0 0 83.33%;
}

.col-11 {
  flex: 0 0 91.66%;
}

.col-12 {
  flex: 0 0 100%;
}

@media only screen and (max-width: 768px) {

  /* For mobile phones: */
  .row {
    flex-direction: column-reverse;
  }

  [class*="col-"] {
    width: 100%;
    flex: 0 0 100%;
  }

  nav {
    flex-direction: column;
    /* Stack menu items vertically */
    /* text-align: center; */
  }

  nav ul {
    display: none;
    padding: 10px 0;
  }

  .slide-image {
    height: 100%;
    width: 100%;

  }


  .navbar-toggled {
    display: block;
  }

  .navbar-toggled li {
    display: block;
  }


  .logo {
    display: block;
    margin: auto;
    text-align: center;
  }

  .footer-logo {
    display: block;
    margin: auto;
    text-align: center;
  }

  .image-logo>.logo {
    width: 100px;
  }

  #pst-container {
    display: none;
  }

  .hamburger-menu {
    display: block;
  }

  .footer-logo .footer-logo-image {
    width: 70px;
  }

  .marquee-container marquee {
    position: relative;
    color: var(--dark-blue);
    opacity: 0;
    font-size: 70px;
    font-weight: 500;
    letter-spacing: 0px;
    top: 0px;
    bottom: auto;
  }

  .copyright {
    font-size: 16px;
  }

  .hero-content {
    display: block;
    padding: 20px;
  }

  #ssc-fb {
    display: none;
  }

  .accordion {
    max-width: 100%;
  }

  .inline-content {
    display: flex;
    flex-direction: column;
    align-items: center;
  }


  .slide-image img {
    max-width: 100%;
    height: auto;
  }

  .carousel {
    display: none;
  }

  .hero-content {
    display: flex;
    flex-direction: column;
    align-items: center;

  }

  .footer-logo p {
    display: none;
  }

  .footer-logo-image {
    width: 120px !important;
    padding: 16px;
  }

  .marquee-container marquee {
    font-size: 250px;

  }
}
    </style>
</head>

<body>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v17.0"
    nonce="JtPIZXCo"></script>

  <header class="masthead">

    <div class="header-masthead">
      <div class="row">

        <div class="col-8">
          <div class="logo">
            <div class="image-logo">
              <img src="assets/img/ispsc_logo.png" class="logo">
            </div>

            <div class="text-logo">
              <div id="agency-heading">Republic of the Philippines</div>
              <div id="agency-name">Ilocos Sur Polytechnic State College</div>
              <div id="agency-tagline">Tagudin Campus | Tagudin, Ilocos Sur</div>
            </div>
          </div>
        </div>


        <div class="col-4">
          <div id="pst-container">
            <div>Philippine Standard Time:</div>
            <div id="pst-time">
              <a href="#" style="text-decoration: none; color: inherit !important;"></a>
            </div>
          </div>
        </div>
      </div>

    </div>


    <nav>
      <div id="hamburger" class="hamburger-menu">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
      <ul class="nav-link">
        <li><a href="index.php">Home</a></li>
        <li>About ISPSC
          <ul class="sub-menu">
            <li><a href="about.html">About</a></li>
            <li><a href="mission-and-vision.html">Mission & Vision</a></li>
            <li><a href="hymn.html">Hymn</a></li>
          </ul>
        </li>
        <li><a href="course-offered.html">What We Offer</a</li>
        <li>Be an ISPSCian
          <ul class="sub-menu">
            <li><a href="admission.html">Admission Requirements</a></li>
            <li><a href="procedure-for-enrollment.html">Procedure for Enrollment</a></li>

          </ul>
        </li>
        <li><a href="contacts.html">Contacts</a></li>
      </ul>
    </nav>

  </header>



  <div class="row">

    <div class="col-12">

      <div class="carousel">
        <ul class="slides">
          <input type="radio" name="radio-buttons" id="img-1" checked />
          <li class="slide-container">
            <div class="slide-image">
              <img src="assets/img/banner/1.png">
            </div>
            <div class="carousel-controls">
              <label for="img-3" class="prev-slide">
                <span>&lsaquo;</span>
              </label>
              <label for="img-2" class="next-slide">
                <span>&rsaquo;</span>
              </label>
            </div>
          </li>
          <input type="radio" name="radio-buttons" id="img-2" />
          <li class="slide-container">
            <div class="slide-image">
              <img src="assets/img/banner/2.png">
            </div>
            <div class="carousel-controls">
              <label for="img-1" class="prev-slide">
                <span>&lsaquo;</span>
              </label>
              <label for="img-3" class="next-slide">
                <span>&rsaquo;</span>
              </label>
            </div>
          </li>
          <input type="radio" name="radio-buttons" id="img-3" />
          <li class="slide-container">
            <div class="slide-image">
              <img src="assets/img/banner/3.png">
            </div>
            <div class="carousel-controls">
              <label for="img-2" class="prev-slide">
                <span>&lsaquo;</span>
              </label>
              <label for="img-1" class="next-slide">
                <span>&rsaquo;</span>
              </label>
            </div>
          </li>
        </ul>
      </div>
      

    </div>
  </div>


  <div class="container">
    <div class="row">

        <div class="col-4">
          <div class="section">
            <div class="card">
              <h3>Announcements</h3>
              <ul id="announcements">
              </ul>
            </div>
  
            <div class="card">
              <h3>Quick Links</h3>
              <ul>
                <li><a target="_blank" href="https://www.ispsctagudin.info/student-portal/"><i class="far fa-browser"></i>
                  Student Portal</a></li>
                <li><a target="_blank" href="https://www.ispsctagudin.info/library/"><i class="far fa-books"></i>
                    eLibrary</a></li>
              </ul>
            </div>
  
            <div class="card">
              <h3>School Calendar</h3>
              <div class="yt-embed">
                <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=UTC&showNav=1&showTitle=0&src=OWRmYmVmZDAwY2JhMTM3MTJjNGQ3NzA3ZDA4YjE0ZGU1MDU4ZTI3OTk5NjQ2YWIyOWY5OTg0MTc2OTdlODExNUBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%234285F4" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
              </div>
            </div>
  
  
            <div class="card" id="ssc-fb">
              <h3>Ammuyo: SSC FB Page</h3>
              <div class="fb-page" data-href="https://www.facebook.com/ssctagudin" data-tabs="timeline" data-width="500"
                data-adapt-container-width="true" data-height="" data-small-header="false"
                data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/ssctagudin" class="fb-xfbml-parse-ignore">
                  <a href="https://www.facebook.com/ssctagudin"></a>
                </blockquote>
              </div>
            </div>
          </div>
        </div>


        

      <div class="col-8">
        <div class="container hero">
          <h3>Welcome to <span style="color: var(--maroon);">Ilocos Sur Polytechnic State College</span></h3>
          <div class="hero-content">
            <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fssctagudin%2Fvideos%2F1366186200979346%2F&show_text=false&width=560&t=0"  style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
              <p><span>Welcome Back, Panthers!</span> <br>
                “𝐓𝐡𝐞 𝐬𝐭𝐚𝐫𝐭 𝐨𝐟 𝐬𝐨𝐦𝐞𝐭𝐡𝐢𝐧𝐠 𝐧𝐞𝐰 𝐛𝐫𝐢𝐧𝐠𝐬 "The vacay era has finally ended as we welcome the fresh start of our learning journey. Welcome back, ISPSCians!" The vacay era has finally ended as we welcome the fresh start of our learning journey. Welcome back, ISPSCians! oray for another academic year that awaits to showcase our wit and perseverance.

              </p>
          </div>      
        </div>
        <div class="container">
          <div class="row">

              <div class="col-12">
                
              </div>
              <div class="container hero">
                <h3>School News</h3>


                <div class="blog">
                  <div class="blog-content">
                    <h4><a target="_blank" href="https://www.facebook.com/OfficialISPSCPage/videos/170069916139824">World University Ranking for Innovation, ISO & Civil Service Awards
                    </a> 
                    </h4>
                  <div class="yt-embed">
                    <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FOfficialISPSCPage%2Fvideos%2F170069916139824%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                  </div>
                  <p>Date posted: September 27, 2023</p>
                  </div>
                </div>


                <div class="blog">
                  <div class="blog-content">
                    <h4><a target="_blank" href="https://www.facebook.com/photo?fbid=636280148522895&set=a.476654301152148">ISPSC ranks in 2023 Global Top Innovative Universities</a> 
                    </h4>
                  <p class="inline-content"> 
                    <img class="blog-image" src="assets/img/ranked_ispsc.jpg" alt="">
                    With its innovative programs on student mobility and openness, crisis management, and the fourth industrial revolution, the Ilocos Sur Polytechnic State College (ISPSC) was ranked as one of the Global Top Innovative Universities in the May 2023 ranking of The World University Rankings for Innovation (WURI). 
                   </p>
                   <p>Date posted: May 19, 2023</p>

                  </div>
                </div>


                <div class="container">
                  <ul class="pagination">
                    <li><a href="#" class="page-link">Prev</a></li>
                    <li><a href="#" class="page-link">1</a></li>
                    <li><a href="#" class="page-link">2</a></li>
                    <li><a href="#" class="page-link active">3</a></li>
                    <li><a href="#" class="page-link">4</a></li>
                    <li><a href="#" class="page-link">5</a></li>
                    <li><a href="#" class="page-link">Next</a></li>
                  </ul>
                </div>


            </div>
            
          </div>
        </div>

      </div>


    </div>
  </div>


  <footer class="footer">
   
  
    <div class="row">
      <div class="col-4">
        <div class="footer-logo">
          <img src="assets/img/ispsc_logo.png" class="footer-logo-image" alt="ISPSC Logo">
          <p>Ilocos Sur Polytechnic State College <br>Tagudin Campus</p>
        </div>
      </div>
  
      <div class="col-4">
        <div class="footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="course-offered.html">Programs</a></li>
            <li><a href="admission.html">Admissions</a></li>
            <li><a href="contacts.html">Contact Us</a></li>
          </ul>
        </div>
      </div>
  
      <div class="col-4">
        <div class="footer-links">
          <h4>Contact Us</h4>
          <ul>
            <li>Email: <a href="mailto:ispsctagudin@yahoo.com">ispsctagudin@yahoo.com</a></li>
            <li>Phone: 077-674-1474</li>
            <li>Address: Quirino, Tagudin, Ilocos Sur</li>
          </ul>
        
        </div>
      </div>
    </div>


    <div class="marquee-container">
      <marquee id="footer-marquee" width="100%" behavior="right" scrollamount="10">Imagine studying at ISPSC</marquee>
    </div>
  
    <div class="copyright">
      &copy; 2023 Ilocos Sur Polytechnic State College
    </div>

  </footer>
  

  <script src="assets/js/index.js"></script>

</body>

</html>