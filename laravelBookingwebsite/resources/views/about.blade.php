@extends('layout.master')

@section('content')
    <title>Hotel Booking Website - About Us</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200&family=Poppins:ital,wght@0,400;0,500;1,400&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Nunito:ital,wght@1,200&family=Poppins:ital,wght@0,400;0,500;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <style>
        .box {
            border-top-color: var(--teal) !important;
        }
    </style>

    </head>

    <body>



        <div class="my-5 px-4">
            <h2 class="fw-bold h-font text-center">ABOUT US</h2>

            <div class="h-line bg-dark"></div>
            <p class="text-center mt-3">

                Welcome to TJ Hotel, where exceptional hospitality meets unforgettable experiences. With a commitment to
                excellence and attention to detail, we curate a collection of exquisite accommodations that provide a home
                away from home. Explore our range of destinations, immerse yourself in the local culture, and create lasting
                memories. As a host, we offer comprehensive support to ensure a seamless hosting experience, taking care of
                the details so you can focus on welcoming guests and creating memorable stays. Join our vibrant community of
                travelers and hosts, where stories are shared, friendships are formed, and cultures are celebrated.
                Experience the warmth, comfort, and genuine hospitality that define TJ Hotel – your gateway to extraordinary
                experiences and cherished memories.
            </p>
        </div>

        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                    <h3 class="mb-3">The Face Behind TJ Hotel</h3>
                    <p>
                        Meet the founder, the visionary behind TJ Hotel. With a passion for travel and a keen eye for
                        exceptional hospitality, they set out to create a platform that connects travelers with
                        unforgettable experiences. Their dedication to curating unique accommodations and fostering a
                        vibrant community has made TJ Hotel a go-to destination for travelers seeking a personalized and
                        memorable stay.
                    </p>
                </div>
                <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                    <img src="images/about/about.jpg" class="w-100">
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                        <img src="images/about/hotel.svg" width="70px">
                        <h4 class="mt-3">100+ ROOMS</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                        <img src="images/about/customers.svg" width="70px">
                        <h4 class="mt-3">200+ CUSTOMERS</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                        <img src="images/about/rating.svg" width="70px">
                        <h4 class="mt-3">150+ REVIEWS</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                        <img src="images/about/staff.svg" width="70px">
                        <h4 class="mt-3">200+ STAFFS</h4>
                    </div>
                </div>

            </div>
        </div>

        <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

        <div class="container px-4">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper mb-5">
                    @foreach ($users as $user)
                        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                            <img src="images/about/about.jpg" class="w-100">
                            <h5 class="mt-2">{{ $user->Name }}</h5>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                spaceBetween: 40,
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
                        slidesPerView: 3,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                }
            });
        </script>
    @endsection
