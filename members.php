<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://kit.fontawesome.com/85a08f7df8.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"
            integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
        <link rel="shortcut icon" href="assets/creatives/Logo/Travel_Local_Favicon_V2.png" type="image/x-icon" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&family=Tilt+Warp&display=swap"
            rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
            crossorigin="anonymous" />

        <link rel="stylesheet" href="assets/css/styles.css" />
        <link rel="stylesheet" href="assets/css/media(max450).css" media="(max-width: 480px)" />
        <link rel="stylesheet" href="assets/css/media(max768).css" media="(min-width:481) and (max-width: 768px)" />

        <link rel="stylesheet" href="assets/css/media(max1024).css" media="(min-width: 769) and (max-width: 1024px)" />

        <title>Mini Project V2</title>
    </head>

    <body>
        <?php include("includes/nav.php") ?>

        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Member List</h3>

                            <div class="card" id="memberList"></div>


                        </div>

                        <!-- EDIT MODAL -->
                        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Edit User Info</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="row">
                                        <input type="hidden" id="txtId">
                                            <div class="col-md-6 mb-4">

                                                <div class="form-outline">
                                                    <input type="text" id="firstName" name="firstName"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="firstName">First Name</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4">

                                                <div class="form-outline">
                                                    <input type="text" id="lastName" name="lastName"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="lastName">Last Name</label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div class="form-outline">
                                                    <input type="email" id="email" name="email"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="emailAddress">Email</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div class="form-outline">
                                                    <input type="tel" id="cellNum" name="cellNum"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="phoneNumber">Phone Number</label>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <button type="button" class="btn btn-primary" id="btnSave">Save</button>
                                </div>

                            </div>

                        </div>
                        <!-- END OF MODAL -->


                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
<!-- <script src="assets/js/scripts.js"></script> -->
<!-- <script src="assets/js/reg.js"></script> -->
<script src="assets/js/fetch.js"></script>