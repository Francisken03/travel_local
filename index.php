<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/85a08f7df8.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="shortcut icon"
      href="assets/creatives/Logo/Travel_Local_Favicon_V2.png"
      type="image/x-icon"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&family=Tilt+Warp&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="assets/css/styles.css" />
    <link
      rel="stylesheet"
      href="assets/css/media(max450).css"
      media="(max-width: 480px)"
    />
    <link
      rel="stylesheet"
      href="assets/css/media(max768).css"
      media="(min-width:481) and (max-width: 768px)"
    />
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <link
      rel="stylesheet"
      href="assets/css/media(max1024).css"
      media="(min-width: 769) and (max-width: 1024px)"
    />

    <title>Mini Project V2</title>
  </head>

  <body>
    <?php include ("includes/nav.php") ?>

    <!-- ==================================================
                      HEADER SECTION
     ================================================== -->
    <header>
      <video playsinline="playsinline" autoplay loop muted class="hero-video">
        <source
          src="assets/creatives/videos/hero_section_montage_overlaymp4.mp4"
          type="video/mp4"
        />
      </video>

      <div class="header-text-container">
        <div class="header-text-inner">
          <div class="header-text text-white">
            <h1 class="fw-bold">Travel <span>Local.Ph</span></h1>
            <h3 class="h3-header">
              Explore Nature, <span>Experience Our Culture</span>
            </h3>
          </div>
        </div>
      </div>

      <div class="cta-outter">
        <div class="cta-container">
          <button class="btn-cta-book">
            <a href="services.html">BOOK NOW</a>
          </button>
        </div>
      </div>
    </header>

    <section class="mobile-heder2">
      <div class="news-container">
        <h3>Travel Advisory</h3>
        <table>
          <thead>
            <tr>
              <th colspan="2"></th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td class="news-left">Updated:</td>
              <td class="news-right">March 5, 2023</td>
            </tr>

            <tr>
              <td class="news-left">Advisory:</td>
              <td class="news-right">
                You can enter the Philippines quarantine free, regardless of
                your vaccination status, provided you meet specific
                requirements. If you're unvaccinated or partially vaccinated,
                you'll need to provide a COVID-19 (RAT) test administered and
                certified by a health care professional within 24 hours before
                departure. Follow the Philippines Department of Tourism for the
                latest advice.
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <!-- ==================================================
                      MAIN SECTION
     ================================================== -->

    <main>
      <hr class="main-hr" id="packages" />
      <div>
      <div class="container-fluid section-cards">
        
        
        <div class="section-cards-inner">
          <div class="cards-header"><h2>Here Are The Top Destinations In 2022</h2></div>

          <div class="cards-row d-flex">
            <div class="card-container col-sm-12">
                <div class="card">
                  <a href="#"><i class="fa-solid fa-heart heart-icon"></i></a>
                  <a href="package.php" class="clickable-card" id="btnBaguio" data-content="baguio.php" onclick="showContent('assets/travel-package/baguio.php')">
                    <!-- <button id="btnBaguio" class="clickable-card" onclick="showContent('baguio.html')"> data-content="baguio.html" -->
                  <img
                    class="img-fluid card-img"
                    src="assets/creatives/images/baguio_friends.jpeg"
                    alt="As a Friend"
                  /></a>
                <!-- </button> -->
                </div>
                
                <div class="card-text">
                  <h4>Baguio City</h4>
                  <p class="card-text-inner">
                    Experience the cold breeze of Baguio as a friend.
                  </p>
                </div>
              
            </div>

            <div class="card-container col-sm-12">
              <div class="card">
                <a href="#"><i class="fa-solid fa-heart heart-icon"></i></a>
                <a href="package.html" class="clickable-card">
                <img
                  class="img-fluid card-img"
                  src="assets/creatives/images/tagaytay_taal.jpeg"
                  alt="As a Friend"
                /></a>
              </div>
              <div class="card-text">
                <h4>Tagaytay City</h4>
                <p class="card-text-inner">
                  Have a feast while enjoying the view of Taal Lake.
                </p>
              </div>
            </div>

            <div class="card-container col-sm-12">
              <div class="card">
                <a href="#"><i class="fa-solid fa-heart heart-icon"></i></a>
                <a href="package.html" class="clickable-card">
                <img
                  class="img-fluid card-img"
                  src="assets/creatives/images/boracay.jpg"
                  alt="As a Friend"
                /></a>
              </div>
              <div class="card-text">
                <h4>Boracay Island</h4>
                <p class="card-text-inner">
                  <!-- World famous white sand beaches and a stunning sunset. -->
                  Witness the world-famous sunset in Boracay.
                </p>
              </div>
            </div>

            <div class="card-container col-sm-12">
              <div class="card">
                <a href="#"><i class="fa-solid fa-heart heart-icon"></i></a>
                <a href="package.html" class="clickable-card">
                <img
                  class="img-fluid card-img"
                  src="assets/creatives/images/chinatown.webp"
                  alt="As a Friend"
                /></a>
              </div>
              <div class="card-text">
                <h4>China Town</h4>
                <p class="card-text-inner">
                  Experience food trip in the oldest Chinatown in the world.
                </p>
              </div>
            </div>

            <div class="card-container col-sm-12">
              <div class="card">
                <a href="#"><i class="fa-solid fa-heart heart-icon"></i></a>
                <a href="package.html" class="clickable-card">
                <img
                  class="img-fluid card-img"
                  src="assets/creatives/images/intramurosjpg.jpg"
                  alt="As a Friend"
                /></a>
              </div>
              <div class="card-text">
                <h4>Intramuros</h4>
                <p class="card-text-inner">
                  Walk around the walled city of Manila.
                </p>
              </div>
            </div>

            <div class="card-container col-sm-12">
              <div class="card">
                <a href="#"><i class="fa-solid fa-heart heart-icon"></i></a>
                <a href="package.html" class="clickable-card">
                <img
                  class="img-fluid card-img"
                  src="assets/creatives/images/subic.jpg"
                  alt="As a Friend"
                /></a>
              </div>
              <div class="card-text">
                <h4>Subic, Zambales</h4>
                <p class="card-text-inner">Enjoy nature in Subic, Zambales.</p>
              </div>
            </div>

            <div class="card-container col-sm-12">
              <div class="card">
                <a href="#"><i class="fa-solid fa-heart heart-icon"></i></a>
                <a href="package.html" class="clickable-card">
                <img
                  class="img-fluid card-img"
                  src="assets/creatives/images/aguinaldo_cavite.webp"
                  alt="A Picture of Emilio Aguinaldo's Ancestral House"
                /></a>
              </div>
              <div class="card-text">
                <h4>Kawit, Cavite</h4>
                <p class="card-text-inner">
                  Visit the former president Emilio Aguinaldo's house.
                </p>
              </div>
            </div>

            <div class="card-container col-sm-12">
              <div class="card">
                <a href="#"><i class="fa-solid fa-heart heart-icon"></i></a>
                <a href="package.html" class="clickable-card">
                <img
                  class="img-fluid card-img"
                  src="assets/creatives/images/baras_rizal.webp"
                  alt="Masungi Georeserve"
                /></a>
              </div>
              <div class="card-text">
                <h4>Baras, Rizal</h4>
                <p class="card-text-inner">
                  Let out the inner child in you and enjoy outdoor activities in
                  Rizal.
                </p>
              </div>
            </div>

            <div class="card-container col-sm-12">
              <div class="card">
                <a href="#"><i class="fa-solid fa-heart heart-icon"></i></a>
                <a href="package.html" class="clickable-card">
                <img
                  class="img-fluid card-img"
                  src="assets/creatives/images/vigan.jpg"
                  alt="As a Friend"
                /></a>
              </div>
              <div class="card-text">
                <h4>Calle Crisologo</h4>
                <p class="card-text-inner">Walk back in time in Vigan.</p>
              </div>
            </div>

            <div class="card-container col-sm-12">
              <div class="card">
                <a href="#"><i class="fa-solid fa-heart heart-icon"></i></a>
                <a href="package.html" class="clickable-card">
                <img
                  class="img-fluid card-img"
                  src="assets/creatives/images/batanes_house.avif"
                  alt="As a Friend"
                /></a>
              </div>
              <div class="card-text">
                <h4>Batanes</h4>
                <p class="card-text-inner">
                  Fill your heart with scenic terrain and clean air.
                </p>
              </div>
            </div>

            <div class="card-container col-sm-12">
              <div class="card">
                <a href="#"><i class="fa-solid fa-heart heart-icon"></i></a>
                <a href="package.html" class="clickable-card">
                <img
                  class="img-fluid card-img"
                  src="assets/creatives/images/bohol_chocolate.avif"
                  alt="As a Friend"
                /></a>
              </div>
              <div class="card-text">
                <h4>Chocolate Hills</h4>
                <p class="card-text-inner">
                  Surround yoursel with hundreds of small mountains.
                </p>
              </div>
            </div>

            <div class="card-container col-sm-12">
              <div class="card">
                <a href="#"><i class="fa-solid fa-heart heart-icon"></i></a>
                <a href="package.html" class="clickable-card">
                <img
                  class="img-fluid card-img"
                  src="assets/creatives/images/palawan_coron.avif"
                  alt="As a Friend"
                /></a>
              </div>
              <div class="card-text">
                <h4>Palawan</h4>
                <p class="card-text-inner">
                  Jump from island to island on your own private boat.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer class="fixed-bottom">Mini Project 1 - Francis Ventura&copy; 2023</footer>
  </body>
</html>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
  crossorigin="anonymous"
></script>
<script src="assets/js/scripts.js"></script>
