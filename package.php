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

    <link
      rel="stylesheet"
      href="assets/css/media(max1024).css"
      media="(min-width: 769) and (max-width: 1024px)"
    />

    <title>Mini Project V2</title>
  </head>

  <body>
    
  <?php include ("includes/nav.php") ?>


    <div class="buffer"></div>
    <div id="bookingModal" class="booking-modal">
      <div class="booking-modal-content">
        <span class="close-booking-modal" id="close">&times;</span>
        <form>
          <div class="modal-inner-div">
            <label for="card-number">Card Number</label>
            <input type="number" placeholder="Card Number" required />
          </div>

          <div class="modal-inner-div cvv-exp-div d-flex">
            <div class="cvv-exp-inner">
              <label for="number">CVV</label>
              <input pattern="{0-9}{4}" placeholder="CVV" required />
            </div>
            <div class="cvv-exp-inner">
              <label for="exp">Exp</label>
              <input id="card-month" type="month" />
            </div>
          </div>
        </form>

        <button type="submit" id="booking-modal-submit">Pay Now</button>
      </div>
    </div>
    <!--This will serve as buffer for the nav section-->


    <div class="booking" id="flight-plus">
      <div class="booking-info">
        <form action="">
          <div>
            <label for="from">From:</label>
            <input type="text" placeholder="Pick Up Point" required />
          </div>

          <div>
            <label for="destination">To:</label>
            <select name="destination" id="destination" required>
              <option value="baguio">Baguio</option>
              <option value="tagaytay">Tagaytay</option>
              <option value="boracay">Boracay</option>
              <option value="china-town">China Town</option>
              <option value="intramuros">Intramuros</option>
              <option value="subic">Subic</option>
            </select>
          </div>
          <div>
            <label for="departure">Departure:</label>
            <input type="date" required />
          </div>
          <div>
            <label for="arrival">Arrival:</label>
            <input type="date" required />
          </div>

          <div>
            <label for="pax">Pax</label>
            <input
              type="number"
              name=""
              id=""
              class="pax-count"
              required
            />
          </div>
          <button type="submit" class="booking-btn" id="btnBooking">
            Submit
          </button>
        </form>
      </div>
    </div>

    <!-- ==================================================
                      LOCATION AND SEARCH DIV
     ================================================== -->
    <div class="div-search">
    
      <div class="searchbox">
        <form action="">
          <input type="text" placeholder="Search.." name="search" />
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>

    <!-- ==================================================
                      IFRAME DIV SECTION
     ================================================== -->

     <div class="package-iframe-loader">
     <iframe src="assets/travel-package/baguio.html" id="iframeContentLoader" frameborder="0" name="testFrame"></iframe>
    </div>

    
  

    <!-- ==================================================
                      OTHERS SECTION
     ================================================== -->

    <div class="options">
      <h3>Not your type? Explore other options:</h3>

      <div class="cities">
        <ul>
          <li><a href="">Tagaytay</a></li>
          <li><a href="">Boracay</a></li>
          <li><a href="">China Town</a></li>
          <li><a href="">Intramuros</a></li>
          <li><a href="">Subic Zambales</a></li>
          <li><a href="">Kawit Cavite</a></li>
          <li><a href="">Baras, Rizal</a></li>
          <li><a href="">Calle Crisologo</a></li>
          <li><a href="">Batanes</a></li>
          <li><a href="">Chocolate Hills</a></li>
          <li><a href="">Palawan</a></li>
        </ul>
      </div>
    </div>

    <footer class="fixed-bottom">Mini Project 1 - Francis Ventura&copy; 2023</footer>
  </body>
</html>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
  crossorigin="anonymous"
></script>
<script src="assets/js/scripts.js"></script>
