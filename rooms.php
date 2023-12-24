<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"> -->

    <?php require('inc/links.php') ?>



</head>

<body class="bg-light">

    <!-- Header -->

    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Our Room</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Need assistance or have inquiries? Contact us anytime. Our dedicated team is ready to provide prompt and helpful support.
        </p>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="h-2">Filters</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="flterDropdown">
                            <div class="border lg-light p-3 rounded mb-3">
                                <!-- Sẵn sàng kiểm tra -->
                                <h5 class="mb-3" style="font-size: 18px;">Check Availability</h5>
                                <label class="form-label">Check-in</label>
                                <input type="date" class="form-control shadow-none mb-3">

                                <label class="form-label">Check-out</label>
                                <input type="date" class="form-control shadow-none ">

                            </div>

                            <div class="border lg-light p-3 rounded mb-3">
                                <!-- Sẵn sàng kiểm tra -->
                                <h5 class="mb-3" style="font-size: 18px;">Facilities</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-lable" for="f1">Facility One</label>
                                </div>

                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-check-lable" for="f2">Facility Two</label>
                                </div>

                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-check-lable" for="f3">Facility Three</label>
                                </div>

                            </div>

                            <div class="border lg-light p-3 rounded mb-3">
                                <!-- Khach moi -->
                                <h5 class="mb-3" style="font-size: 18px;">Guestes</h5>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <lable class="form-lable">Adults</lable>
                                        <input type="number" class="form-control shadow-none">
                                    </div>

                                    <div>
                                        <lable class="form-lable">Children</lable>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-lg-9 col-md-12 px-4">
                <!-- phong 1 -->
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded">
                        </div>

                        <div class="col-md-5 px-lg-3 px-md-3 px-0">

                            <h5 class="mb-3">The room of the wind</h5>
                            <!-- Những căn phòng có trong phòng : đặc trưng-->
                            <div class="features">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    2 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    1 Bathrooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    1 Balcony
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    3 Sofa
                                </span>
                            </div>

                            <!-- cơ sở trong phòng  -->
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Wifi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Televisions
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Air condisioners
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Room heaters
                                </span>
                            </div>

                            <!-- Khachs -->
                            <div class="guests">
                                <h6 class="mb-1">Gueste</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    5 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    4 Children
                                </span>
                            </div>

                        </div>

                        <div class="col-md-2 text-center mt-lg-0 mt-md-0 mt-4">
                            <h6 class="mb-4" style="font-weight: 500;">990.000 VND </h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none rounded mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-success shadow-none ">More Details</a>
                        </div>
                    </div>
                </div>

                <!-- phong 2 -->
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/2.png" class="img-fluid rounded">
                        </div>

                        <div class="col-md-5 px-lg-3 px-md-3 px-0">

                            <h5 class="mb-3">The warmth of home</h5>
                            <!-- Những căn phòng có trong phòng : đặc trưng-->
                            <div class="features">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    2 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    1 Bathrooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    1 Balcony
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    3 Sofa
                                </span>
                            </div>

                            <!-- cơ sở trong phòng  -->
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Wifi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Televisions
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Air condisioners
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Room heaters
                                </span>
                            </div>

                            <!-- Khachs -->
                            <div class="guests">
                                <h6 class="mb-1">Gueste</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    2 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    2 Children
                                </span>
                            </div>

                        </div>

                        <div class="col-md-2 text-center mt-lg-0 mt-md-0 mt-4">
                            <h6 class="mb-4" style="font-weight: 500;">2.309.000 VND </h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none rounded mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-success shadow-none ">More Details</a>
                        </div>
                    </div>
                </div>

                <!-- phong 3 -->
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/3.png" class="img-fluid rounded">
                        </div>

                        <div class="col-md-5 px-lg-3 px-md-3 px-0">

                            <h5 class="mb-3">Silent room</h5>
                            <!-- Những căn phòng có trong phòng : đặc trưng-->
                            <div class="features">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    2 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    1 Bathrooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    1 Balcony
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    3 Sofa
                                </span>
                            </div>

                            <!-- cơ sở trong phòng  -->
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Wifi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Televisions
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Air condisioners
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Room heaters
                                </span>
                            </div>

                            <!-- Khachs -->
                            <div class="guests">
                                <h6 class="mb-1">Gueste</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    2 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    3 Children
                                </span>
                            </div>

                        </div>

                        <div class="col-md-2 text-center mt-lg-0 mt-md-0 mt-4">
                            <h6 class="mb-4" style="font-weight: 500;">890.000 VND </h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none rounded mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-success shadow-none ">More Details</a>
                        </div>
                    </div>
                </div>

                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/3.png" class="img-fluid rounded">
                        </div>

                        <div class="col-md-5 px-lg-3 px-md-3 px-0">

                            <h5 class="mb-3">Silent room</h5>
                            <!-- Những căn phòng có trong phòng : đặc trưng-->
                            <div class="features">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    2 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    1 Bathrooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    1 Balcony
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    3 Sofa
                                </span>
                            </div>

                            <!-- cơ sở trong phòng  -->
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Wifi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Televisions
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Air condisioners
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Room heaters
                                </span>
                            </div>

                            <!-- Khachs -->
                            <div class="guests">
                                <h6 class="mb-1">Gueste</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    2 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    3 Children
                                </span>
                            </div>

                        </div>

                        <div class="col-md-2 text-center mt-lg-0 mt-md-0 mt-4">
                            <h6 class="mb-4" style="font-weight: 500;">890.000 VND </h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none rounded mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-success shadow-none ">More Details</a>
                        </div>
                    </div>
                </div>

                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/3.png" class="img-fluid rounded">
                        </div>

                        <div class="col-md-5 px-lg-3 px-md-3 px-0">

                            <h5 class="mb-3">Silent room</h5>
                            <!-- Những căn phòng có trong phòng : đặc trưng-->
                            <div class="features">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    2 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    1 Bathrooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    1 Balcony
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    3 Sofa
                                </span>
                            </div>

                            <!-- cơ sở trong phòng  -->
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Wifi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Televisions
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Air condisioners
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Room heaters
                                </span>
                            </div>

                            <!-- Khachs -->
                            <div class="guests">
                                <h6 class="mb-1">Gueste</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    2 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    3 Children
                                </span>
                            </div>

                        </div>

                        <div class="col-md-2 text-center mt-lg-0 mt-md-0 mt-4">
                            <h6 class="mb-4" style="font-weight: 500;">890.000 VND </h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none rounded mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-success shadow-none ">More Details</a>
                        </div>
                    </div>
                </div>

                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/3.png" class="img-fluid rounded">
                        </div>

                        <div class="col-md-5 px-lg-3 px-md-3 px-0">

                            <h5 class="mb-3">Silent room</h5>
                            <!-- Những căn phòng có trong phòng : đặc trưng-->
                            <div class="features">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    2 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    1 Bathrooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    1 Balcony
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    3 Sofa
                                </span>
                            </div>

                            <!-- cơ sở trong phòng  -->
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Wifi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Televisions
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Air condisioners
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    Room heaters
                                </span>
                            </div>

                            <!-- Khachs -->
                            <div class="guests">
                                <h6 class="mb-1">Gueste</h6>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    2 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                    3 Children
                                </span>
                            </div>

                        </div>

                        <div class="col-md-2 text-center mt-lg-0 mt-md-0 mt-4">
                            <h6 class="mb-4" style="font-weight: 500;">890.000 VND </h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none rounded mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-success shadow-none ">More Details</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <!-- foot -->
    <?php require('inc/foot.php') ?>


</body>

</html>