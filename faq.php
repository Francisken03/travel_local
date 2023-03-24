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

    <title>Mini Project V2</title>
  </head>

  <body>
  <?php include ("includes/nav.php") ?>


    <!-- ==================================================
                      FAQs SECTION
     ================================================== -->
    <section class="faqs-section-container">
      <div class="faq-container">
        <div class="faq-heading-container">
          <div class="sections-heading">
            <h2>FA<span>Q</span><span class="span-small">s</span></h2>
            <h5>Here are some of the most common questions in our inbox.</h5>
          </div>
        </div>

        <!-- Accordion collapse -->
        <div class="collapse-container container row" id="expanded-group">
          <div class="col-lg-4 text-start">
            <div>
              <button
                class="btn faq-btn col-lg-12 col-md-12 col-sm-12 text-start fw-bold"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapse-legit"
                aria-expanded="false"
                aria-controls="collapse-legit"
              >
                Are we a legitimate company?
              </button>

              <div
                class="collapse sm-screen-collapse"
                id="collapse-legit"
                data-bs-parent="#expanded-group"
              >
                <div class="card card-body">
                  Yes we are! We provide business permit and license to operate
                  upon request of our customers. You may also visit our social
                  media pages for client reviews.
                  <!-- No. This is a demo website created by Junior Developer Francis Ventura for KodeGo MiniProject 1 under the supervision of instructor Jesthony Morales - class WD49P.  -->
                </div>
              </div>
            </div>

            <div>
              <button
                class="btn faq-btn col-lg-12 col-md-12 col-sm-12 text-start fw-bold"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapse-location"
                aria-expanded="false"
                aria-controls="collapse-location"
              >
                Where are we located?
              </button>

              <div
                class="collapse sm-screen-collapse"
                id="collapse-location"
                data-bs-parent="#expanded-group"
              >
                <div class="card card-body">
                  You may visit us at 1 Rizal Park, Ermita, Manila, Metro
                  Manila, 0913.
                  <!-- The address listed on our contacts page is a pseduo location pinned at kilometer 0 in Luneta Park. Since this is a demo website, we do not have a valid address. -->
                </div>
              </div>
            </div>

            <div>
              <button
                class="btn faq-btn col-lg-12 col-md-12 col-sm-12 text-start fw-bold"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapse-hours"
                aria-expanded="false"
                aria-controls="collapse-hours"
              >
                What is our office hours?
              </button>

              <div
                class="collapse sm-screen-collapse"
                id="collapse-hours"
                data-bs-parent="#expanded-group"
              >
                <div class="card card-body">
                  <strong>Our regular Business hours is: </strong><br />
                  Mon - Fri (8:00AM - 5:00PM) <br />
                  Saturday, Sunday, & Holidays (8:00AM - 1200PM)
                </div>
              </div>
            </div>

            <div>
              <button
                class="btn faq-btn col-lg-12 col-md-12 col-sm-12 text-start fw-bold"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapse-discounts"
                aria-expanded="false"
                aria-controls="collapse-discounts"
              >
                Do we have promotions and discount?
              </button>

              <div
                class="collapse sm-screen-collapse"
                id="collapse-discounts"
                data-bs-parent="#expanded-group"
              >
                <div class="card card-body">
                  Definitely! We boast for having the lowest rate in the market.
                  Aside from that, we also offer monhtly, quarterly, and yearly
                  promotions that you may check on the promotions page
                  <a href="promo.html">here</a>
                </div>
              </div>
            </div>
          </div>

          <!-- accordion expanded large screens -->
          <div class="col-lg-8 lg-screen-collapse">
            <div
              class="collapse"
              id="collapse-legit"
              data-bs-parent="#expanded-group"
            >
              <div class="card card-body">
                Yes we are! We provide business permit and license to operate
                upon request of our customers. You may also visit our social
                media pages for client reviews.
                <!-- No. This is a demo website created by Junior Developer Francis Ventura for KodeGo MiniProject 1 under the supervision of instructor Jesthony Morales - class WD49P. -->
              </div>
            </div>

            <div
              class="collapse"
              id="collapse-location"
              data-bs-parent="#expanded-group"
            >
              <div class="card card-body">
                You may visit us at 1 Rizal Park, Ermita, Manila, Metro Manila,
                0913.
                <!-- The address listed on our contacts page is a pseduo location pinned at kilometer 0 in Luneta Park. Since this is a demo website, we do not have a valid address. -->
              </div>
            </div>

            <div
              class="collapse"
              id="collapse-hours"
              data-bs-parent="#expanded-group"
            >
              <div class="card card-body">
                <strong>Our regular Business hours is: </strong><br />
                Mon - Fri (8:00AM - 5:00PM) <br />
                Saturday, Sunday, & Holidays (8:00AM - 1200PM)
              </div>
            </div>

            <div
              class="collapse"
              id="collapse-discounts"
              data-bs-parent="#expanded-group"
            >
              <div class="card card-body">
                Definitely! We boast for having the lowest rate in the market.
                Aside from that, we also offer monhtly, quarterly, and yearly
                promotions that you may check on the promotions page
                <a href="assets/travel-package/baguio.html">here</a>
              </div>
            </div>
          </div>
        </div>

        <div class="push"></div>
      </div>
    </section>

    <!-- ==================================================
                      CONTACT US SECTION
     ================================================== -->
    <section class="section-contact">
      <div class="contact-container">
        <form action="contact-form row">
          <div class="contact-container-inner row">
            <div class="col-lg-8 text-start">
              <div class="row">
                <div class="col-lg-6 mb 3">
                  <label for="name" class="form-label" id="name">Name</label>
                  <input
                    type="text"
                    id="input-name"
                    class="form-control"
                    placeholder="Name or Nickname"
                    required
                  />
                </div>

                <div class="col-lg-6 mb-3">
                  <label for="email-adress" class="form-label">E-mal</label>
                  <input
                    type="email"
                    id="input-email"
                    class="form-control"
                    placeholder="Email Adress"
                    reqired
                  />
                </div>
              </div>

              <div class="row">
                <div class="col-lg-6 mb-3">
                  <label class="form-label" for="phone"
                    >Phone Number(+00 000 000 0000)</label
                  >
                  <input
                    class="form-control"
                    id="phone"
                    type="tel"
                    placeholder="12-Digits Mobile Number"
                    pattern="{0-9}{3}-[0-9]{3}-[0-9]{4}"
                    required
                  />
                </div>

                <div class="col-lg-6 mb-3">
                  <label class="form-label" for="msg-category"
                    >Brief Description</label
                  >
                  <input
                    class="form-control"
                    id="message-category"
                    type="text"
                    placeholder="Brief Description"
                    email
                    required
                  />
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label" for="message"></label>
                <textarea
                  class="form-control"
                  id="message"
                  type="text"
                  placeholder="Message"
                  style="height: 10rem"
                  required
                ></textarea>
              </div>

              <div class="d-grid">
                <button
                  class="contact-btn-sub btn btn-primary btn-lg"
                  type="submit"
                >
                  Submit
                </button>
              </div>
            </div>

            <div class="col-lg-4 office-details text-start">
              <ul class="ul">
                <li>
                  &#128222;
                  <span id="call"
                    ><a href="  " class="contact-link"
                      >+63-901-234-5678</a
                    ></span
                  >
                </li>

                <li>
                  &#128231;<a
                    href="mailto:support@hydrofarm.com"
                    class="contact-link"
                    >support@travellocal.com.ph</a
                  >
                </li>

                <li>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>1 Rizal
                  Park, Ermita, Manila, Metro Manila, 0913

                  <div class="map-container">
                  <iframe
                  class="map-iframe"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.2743704944355!2d120.97192091527886!3d14.583435581405704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ca1cd1819401%3A0x1fcf5e00dfe8decc!2sThe%20Manila%20Hotel!5e0!3m2!1sen!2sph!4v1663767098612!5m2!1sen!2sph"
                    width="400"
                    height="300"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                  ></iframe>
                </div>
                </li>
              </ul>
            </div>
          </div>
        </form>
      </div>
    </section>

    <footer>Mini Project 1 - Francis Ventura&copy; 2023</footer>
  </body>
  
</html>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
  crossorigin="anonymous"
></script>
<!-- <script src="assets/js/scripts.js"></script> -->
