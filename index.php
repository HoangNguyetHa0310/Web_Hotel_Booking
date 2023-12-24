<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MTP Home</title>

    <?php require('inc/links.php') ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <style>
        .availability-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media screen and (max-width: 575px) {
            .availability-form {
                margin-top: 25px;
                padding: 0 35px;
            }
        }
    </style>
</head>

<body class="bg-light">

    <!-- Modal -->

    <?php require('inc/header.php'); ?>

    <!-- home -->

    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/home/1.png" class="w-100 d-blook" />
                </div>

                <div class="swiper-slide">
                    <img src="images/home/2.png" class="w-100 d-blook" />
                </div>

                <div class="swiper-slide">
                    <img src="images/home/3.png" class="w-100 d-blook" />
                </div>

                <div class="swiper-slide">
                    <img src="images/home/4.png" class="w-100 d-blook" />
                </div>

                <div class="swiper-slide">
                    <img src="images/home/5.png" class="w-100 d-blook" />
                </div>

                <div class="swiper-slide">
                    <img src="images/home/6.png" class="w-100 d-blook" />
                </div>
            </div>
        </div>
    </div>

    <!-- check availability form : kiểm tra mẫu sẵn có  -->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check booking </h5>
                <form action="">
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-in</label>
                            <input type="date" class="form-control shadow-none ">
                        </div>

                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-out</label>
                            <input type="date" class="form-control shadow-none ">
                        </div>

                        <!-- nguoi lon -->
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Adult</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <!-- tre con -->
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Children</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <!-- btn submit-->
                        <div class="col-lg-1 mt-2 mb-lg-3 ">
                            <button type="submit" class="btn text-white rounded custom-bg  ">Submit</button>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Our rooms -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font "> Our Rooms</h2>
    <div class="container">
        <div class="row">
            <!-- cột 1 -->
            <div class="col-lg-4 col-md-6 my-3">

                <div class="card border-0 shadow" style="max-width: 350px; margin: auto; ">
                    <img src="images/rooms/1.jpg" class="card-img-top">

                    <div class="card-body">
                        <h5 class="card-title">The room of the wind</h5>
                        <h6 class="mb-4">990.000 VND For Night</h6>

                        <!-- đặc trưng của phòng -->
                        <div class="features mb-4">
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

                        <!-- cơ sở vật chất  -->
                        <div class="facilities mb-4">
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
                        <div class="guests mb-4">
                            <h6 class="mb-1">Gueste</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                5 Adults
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                4 Children
                            </span>
                        </div>

                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span>
                                <i class="bi bi-star-fill text-warning "></i>
                                <i class="bi bi-star-fill text-warning "></i>
                                <i class="bi bi-star-fill text-warning "></i>
                                <i class="bi bi-star-fill text-warning "></i>
                                <i class="bi bi-star-fill text-warning "></i>
                            </span>
                        </div>

                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none rounded">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-success shadow-none ">More Details</a>
                        </div>

                    </div>
                </div>

            </div>

            <!-- cột 2 -->
            <div class="col-lg-4 col-md-6 my-3">

                <div class="card border-0 shadow" style="max-width: 350px; margin: auto; ">
                    <img src="images/rooms/2.png" class="card-img-top">

                    <div class="card-body">
                        <h5 class="card-title">The warmth of home</h5>
                        <h6 class="mb-4">2.309.000 VND For Night</h6>

                        <!-- đặc trưng của phòng -->
                        <div class="features mb-4">
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

                        <!-- cơ sở vật chất  -->
                        <div class="facilities mb-4">
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

                        <div class="guests mb-4">
                            <h6 class="mb-1">Gueste</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                2 Adults
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                2 Children
                            </span>
                        </div>

                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span>
                                <i class="bi bi-star-fill text-warning "></i>
                                <i class="bi bi-star-fill text-warning "></i>
                                <i class="bi bi-star-fill text-warning "></i>
                                <i class="bi bi-star-fill text-warning "></i>
                                <i class="bi bi-star-fill text-warning "></i>
                            </span>
                        </div>

                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none rounded">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-success shadow-none">More Details</a>
                        </div>

                    </div>
                </div>

            </div>

            <!-- cột 3 -->
            <div class="col-lg-4 col-md-6 my-3">

                <div class="card border-0 shadow" style="max-width: 350px; margin: auto; ">
                    <img src="images/rooms/3.png" class="card-img-top">

                    <div class="card-body">
                        <h5 class="card-title">Silent room</h5>
                        <h6 class="mb-4">890.000 VND For Night</h6>

                        <!-- đặc trưng của phòng -->
                        <div class="features mb-4">
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

                        <!-- cơ sở vật chất  -->
                        <div class="facilities mb-4">
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

                        <div class="guests mb-4">
                            <h6 class="mb-1">Gueste</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                2 Adults
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                3 Children
                            </span>
                        </div>

                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span>
                                <i class="bi bi-star-fill text-warning "></i>
                                <i class="bi bi-star-fill text-warning "></i>
                                <i class="bi bi-star-fill text-warning "></i>
                                <i class="bi bi-star-fill text-warning "></i>
                                <i class="bi bi-star-fill text-warning "></i>
                            </span>
                        </div>

                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none rounded">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-success shadow-none">More Details</a>
                        </div>

                    </div>
                </div>

            </div>

            

            <div class="col-lg-12 text-center mt-5">
                <a href="rooms.php" class="btn btn-sm btn-outline-success rounded-0 fw-bold shadow-none">More Rooms >>></a>
            </div>


        </div>
    </div>

    <!-- Our Facilities : Các cơ sở vật chất của chúng tôi -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font "> Our Facilities</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">

            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
                <img src="images/facilities/wifi.svg" alt="" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>

            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
                <img src="images/facilities/messa.svg" alt="" width="80px">
                <h5 class="mt-3">Massage</h5>
            </div>

            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
                <img src="images/facilities/television.svg" alt="" width="80px">
                <h5 class="mt-3">Television</h5>
            </div>

            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
                <img src="images/facilities/air_con.svg" alt="" width="80px">
                <h5 class="mt-3">Air Condisioner</h5>
            </div>

            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
                <img src="images/facilities/IMG_96423.svg" alt="" width="80px">
                <h5 class="mt-3">Heater</h5>
            </div>

            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-success rounded-0 fw-bold shadow-none">More Facilities >>></a>
            </div>

        </div>
    </div>

    <!-- Testimonials : Những lời đánh giá từ khách hàng -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font "> Testimonials</h2>
    <div class="container mt-5">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-content-center p-3">
                        <img src="images/facilities/star.png" width="30px">
                        <h6 class="m-2 ms-2">Son Tung MTP</h6>
                    </div>
                    <p>
                        A great site with large rooms and full amenities.
                        I feel very great when booking a room on this website.
                        Thank you very much admin
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-content-center p-3">
                        <img src="images/facilities/star.png" width="30px">
                        <h6 class="m-2 ms-2">Phan Hoang</h6>
                    </div>
                    <p>
                        The spacious rooms and extensive amenities make this website a fantastic choice for
                        accommodation.
                        Booking a room here always leaves me thoroughly satisfied.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-content-center p-3">
                        <img src="images/facilities/star.png" width="30px">
                        <h6 class="m-2 ms-2">Nguyet Ha</h6>
                    </div>
                    <p>
                        I'm truly grateful to the admin for providing such a wonderful platform.
                        The generous room sizes and comprehensive amenities make my booking experience exceptionally
                        delightful.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                    </div>
                </div>


            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Reach us -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font "> Reach Us </h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59587.94638135149!2d105.79576410131199!3d21.02281475910795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9bd9861ca1%3A0xe7887f7b72ca17a9!2zSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1702097598420!5m2!1svi!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call Us</h5>
                    <a href="tel: +8412345678" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>
                        +8412345678
                    </a>
                    <br>
                    <a href="tel: +8412345678" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-geo-alt-fill"></i>
                        Ký túc xá Mỹ Đình - Mỹ Đình 2 - Nam Từ Liêm - Hà Nội - Việt Nam
                    </a>
                </div>

                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow Us</h5>
                    <a href="#" class="d-inline-block mb-3 ">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook me-1"></i>
                            Facebook
                        </span>
                    </a>
                    <a href="#" class="d-inline-block mb-3 ">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-youtube me-1"></i>
                            Youtube
                        </span>
                    </a>
                    <a href="#" class="d-inline-block mb-3 ">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram me-1"></i>
                            Facebook
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- foot -->
    <?php require('inc/foot.php') ?>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    // js banner : chuyển ảnh slide cho phần banner : hoàn thành 
    var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        }
    });

    // js comment : chuyển cảnh hiệu ứng bình luânj : chưa fix được 1 1 2 3 : để 1 1 1 2 
    // : những con số này là số comment hiển thị trên màn hình  
    var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 1,
            },
            1024: {
                slidesPerView: 2,
            },
        }
    });

</script>

</html>