<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"> -->

    <?php require('inc/links.php') ?>



</head>

<body class="bg-light">

    <!-- Header -->

    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Contact Us</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Need assistance or have inquiries? Contact us anytime. Our dedicated team is ready to provide prompt and helpful support.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">

                <div class="bg-white rounded shadow p-4 ">
                    <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59587.94638135149!2d105.79576410131199!3d21.02281475910795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9bd9861ca1%3A0xe7887f7b72ca17a9!2zSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1702097598420!5m2!1svi!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Address</h5>
                    <!-- target="_blank" : chuyển qua tab mới mà không ảnh hưởng đến tab hiện tại  -->
                    <a href="https://maps.app.goo.gl/hVKVFonZr7zF5ros7" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt-fill"></i>
                        Kí túc xá Mỹ Đình - Mỹ Đình 2 - Nam Từ Liêm - Hà Nội
                    </a>

                    <br>

                    <h5 class="mt-3">Call Us</h5>
                    <a href="tel: +8412345678" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>
                        +8412345678
                    </a>
                    <br>

                    <h5 class="mt-3">Email</h5>
                    <a href="email: z3murad3z@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i>
                        z3murad3z@gmail.com
                    </a>

                    <h5 class="mt-4">Follow Us</h5>
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
                            Instagram
                        </span>
                    </a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6  px-4">
                <div class="bg-white rounded shadow p-4 ">
                    <form action="">
                        <h5>Send a message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Name</label>
                            <input type="text" class="form-control shadow-none ">
                        </div>

                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Email</label>
                            <input type="email" class="form-control shadow-none ">
                        </div>

                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Subject</label>
                            <input type="text" class="form-control shadow-none ">
                        </div>

                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Message</label>
                            <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                        </div>
                        <button type="submit" class="btn custom-bg text-white mt-3 rounded">Send</button>
                    </form>
                </div>
            </div>

        </div>
    </div>


    <!-- foot -->
    <?php require('inc/foot.php') ?>


</body>

</html>