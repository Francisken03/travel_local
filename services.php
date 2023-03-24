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
    <div class="html-page">
    <?php include ("includes/nav.php") ?>


      <!-- ==================================================
                       Travel Package
     ================================================== -->

      <div class="buffer"></div>
      <!--This will serve as buffer for the nav section-->

      <main class="main-service">
        <section class="featured-services">
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

          <div class="pass-visa-container" id="passVisa">
            <div class="passport">
              <h3>Passport Application</h3>

              <p>
                We offer assistance in passport application for both new
                applicants and passport renewal for a minimal fee of
                <strong>Php 1,500.00</strong>.
              </p>

              <div class="cta-passport">
              <button
                id="learnMorePassport"
                class="learn-more"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapsePassport"
                aria-expanded="false"
                aria-controls="collapsePassport"
              >
                Learn More
              </button>
              <button id="btnVisa" class="learn-more">Call Now!</button>
            </div>
            </div>

            <div class="visa">
              <h3>Visa Processing</h3>

              <p>
                We can help you in getting your tourist or student visa. Call
                now so we'll know how to help you!

                <button id="btnVisa" class="learn-more">Call Now!</button>
              </p>
            </div>
          </div>

          <div
            class="pass-visa-result-container collapse collapse-passport"
            id="collapsePassport"
          >
            <iframe
              class="iframe-services"
              id="iframePassport"
              src="assets/iframe/passport.html"
              frameborder="0"
              title="passport"
             
            ></iframe>
          </div>

          <div class="sim-text" id="sim">
            <div class="sim-text-content">
              <h3>Buy And Claim A Sim</h3>
              <p>
                Purchase a sim online so you don't have to get in line. All you
                need to do is pick up the item in any of our 500 partner stores
                nationwide.
              </p>
            </div>
          </div>
          <div class="sim">
            <a href=""
              ><img
                class="img-fluid sim-img"
                src="assets/creatives/images/smart.png"
                alt="Smart Telco"
            /></a>
            <a href=""
              ><img
                class="img-fluid sim-img"
                src="assets/creatives/images/globe.jfif"
                alt="Globe Telco"
            /></a>
            <a href=""
              ><img
                class="img-fluid sim-img"
                src="assets/creatives/images/gomo.png"
                alt="Gomo Telco"
            /></a>
            <a href=""
              ><img
                class="img-fluid sim-img"
                src="assets/creatives/images/tnt.jfif"
                alt="TNT Telco"
            /></a>
            <a href=""
              ><img
                class="img-fluid sim-img"
                src="assets/creatives/images/tm.jfif"
                alt="TM Telco"
            /></a>
          </div>
        </section>
      </main>
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
