<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facility (Cơ sở)</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"> -->

    <?php require('inc/links.php') ?>

    <style>
        .pop:hover {
            border-top-color: green !important;
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>

</head>

<body class="bg-light">

    <!-- Header -->

    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Our Facilities</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">       
            Modern facilities ensure a seamless stay—high-speed Wi-Fi, rejuvenating spa, and well-appointed rooms combine for a truly comfortable and memorable experience.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/facilities/wifi.svg" width="40px">
                        <h5 class="m-0 ms-3">Wifi</h5>
                    </div>
                    <p>
                        Experience seamless connectivity with our high-speed Wi-Fi services.
                        Whether you're here for business or leisure, our robust network ensures a smooth online experience.
                        Stay connected effortlessly, stream your favorite content, or handle work tasks with ease.
                        Enjoy the convenience of reliable and fast Wi-Fi throughout your stay, enhancing your overall satisfaction.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/facilities/air_con.svg" width="40px">
                        <h5 class="m-0 ms-3">Air conditioners</h5>
                    </div>
                    <p>
                        Indulge in a comfortable stay with our efficient air conditioning systems.
                        Designed to provide optimal climate control, our air conditioners ensure a refreshing ambiance throughout your visit.
                        Whether escaping the heat after a day of exploration or seeking a cozy environment for work, our modern and reliable air conditioning units are tailored to meet your comfort needs.
                        Experience the perfect balance of temperature and tranquility, enhancing your overall relaxation during your stay.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/facilities/messa.svg" width="40px">
                        <h5 class="m-0 ms-3">Massage</h5>
                    </div>
                    <p>
                        Embark on a journey of relaxation and rejuvenation with our luxurious massage services. 
                        Indulge in a tranquil oasis where skilled therapists employ soothing techniques to alleviate stress and tension. 
                        Whether opting for a traditional massage or a specialized treatment, our spa services promise a blissful escape. 
                        Unwind in the serene ambiance, and let the healing hands of our therapists transport you to a realm of tranquility. 
                        Elevate your stay with our massage offerings, ensuring a harmonious blend of comfort and well-being.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/facilities/television.svg" width="40px">
                        <h5 class="m-0 ms-3">Televisions</h5>
                    </div>
                    <p>
                        Enhance your downtime with our cutting-edge television systems, offering a plethora of entertainment options.
                        Whether unwinding after a day of activities or catching up on the latest news, our state-of-the-art TVs provide a vivid and immersive viewing experience.
                        Navigate through a variety of channels and streaming services to personalize your entertainment.
                        With crisp displays and advanced features, our televisions ensure that you can unwind in style, adding an extra layer of enjoyment to your stay.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/facilities/generator.svg" width="40px">
                        <h5 class="m-0 ms-3">Generator</h5> 
                        <!-- máy phát điện  -->
                    </div>
                    <p>
                    Experience uninterrupted comfort with our reliable generator system. 
                    In the event of unforeseen power disruptions, our state-of-the-art generators seamlessly kick in, ensuring a continuous and undisrupted power supply. 
                    Rest easy knowing that your stay is safeguarded against any inconvenience, and enjoy the peace of mind that comes with our backup power solutions. 
                    Whether you're here for business or leisure, our commitment to providing a seamless experience extends to every aspect, including a reliable and efficient generator system.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/facilities/balcony.png" width="40px">
                        <h5 class="m-0 ms-3">Balcony</h5>
                    </div>
                    <p>
                    Elevate your stay with the luxury of a private balcony, offering breathtaking views and a refreshing outdoor retreat. 
                    Step outside and bask in the beauty of the surroundings, whether it's a bustling cityscape or serene natural landscapes. 
                    Our thoughtfully designed balconies provide a perfect spot to unwind, enjoy a morning coffee, or simply immerse yourself in the charm of the surroundings. 
                    Immerse in the open-air experience, adding an extra layer of relaxation and connection with the environment to your stay.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!-- foot -->
    <?php require('inc/foot.php') ?>


</body>

</html>