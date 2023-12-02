@extends('layout.master')

@section('content')














<div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/carousel/1.png" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/2.png" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/3.png" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/4.png" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/5.png" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/6.png" class="w-100 d-block" />
      </div>

    </div>

  </div>
</div>

<!-- check avilability form-->


<!-- Our Rooms -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
<div class="container">
   <div class="row">

       <div class="col-lg-4 col-md-6 my-3">
           <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="images/The Lush and Luxurious Sanya EDITION on Hainan Island.jpg" class="card-img-top" height="250px" alt="...">
            <div class="card-body">
              <h5 class="card-title">Tranquil Garden Hideaway</h5>
              <h6 class="mb-4">Ꝛ2000 per night </h6>
              <div class="features mb-4">
                  <h6 class="mb-1">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      2 Rooms
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      1 Bathroom
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      1 Balcony
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      3 Sofa
                  </span>
              </div>
              <div class="Facilities mb-4">
                  <h6 class="mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      Television
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      AC
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      Room Heater
                  </span>
              </div>

              <div class="guests mb-4">
                  <h6 class="mb-1">Guests</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      5 Adults
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      4 Children
                  </span>
              </div>
                  <div class="rating mb-4">

                      <h6 class="mb-1">Rating</h6>
                      <span class="badge rounded-pill bg-light">
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                      </span>
                  </div>
                  <div class="d-flex justify-content-evenly mb-2">
                    <a href="{{ route('rooms') }}" class="btn btn-sm btn-outline-dark shadow-none">check Now</a>

                  </div>
            </div>
          </div>
       </div>

       <div class="col-lg-4 col-md-6 my-3">
           <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="images/pre2.jpg" class="card-img-top" alt="..." height="250px">
            <div class="card-body">
              <h5 class="card-title">Elegant Oasis Suite</h5>
              <h6 class="mb-4">Ꝛ2500 per night </h6>
              <div class="features mb-4">
                  <h6 class="mb-1">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      2 Rooms
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      3 Bathroom
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      5 Balcony
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      3 Sofa
                  </span>
              </div>
              <div class="Facilities mb-4">
                  <h6 class="mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      Television
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      AC
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      Room Heater
                  </span>
                  <div class="guests mb-4">
                  <h6 class="mb-1">Guests</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      5 Adults
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      4 Children
                  </span>

                  </div>
                  <div class="rating mb-4">

                      <h6 class="mb-1">Rating</h6>
                      <span class="badge rounded-pill bg-light">
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                      </span>
                  </div>
                  <div class="d-flex justify-content-evenly mb-2">
                    <a href="{{ route('rooms') }}" class="btn btn-sm btn-outline-dark shadow-none">check Now</a>

                  </div>
              </div>
            </div>
          </div>
       </div>

       <div class="col-lg-4 col-md-6 my-3">
           <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="images/Hotel Bodrog Wellness & Elix Spa ____ Sárospatak.jpg" class="card-img-top" height="250px" alt="...">
            <div class="card-body">
              <h5 class="card-title">Deluxe Seaview Retreat</h5>
              <h6 class="mb-4">Ꝛ2000 per night </h6>
              <div class="features mb-4">
                  <h6 class="mb-1">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      2 Rooms
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      1 Bathroom
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      1 Balcony
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      3 Sofa
                  </span>
              </div>
              <div class="Facilities mb-4">
                  <h6 class="mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      Television
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      AC
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      Room Heater
                  </span>

                  <div class="guests mb-4">
                  <h6 class="mb-1">Guests</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      5 Adults
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      4 Children
                  </span>
                  </div>

                  <div class="rating mb-4">

                      <h6 class="mb-1">Rating</h6>
                      <span class="badge rounded-pill bg-light">
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                      </span>
                  </div>
                  <div class="d-flex justify-content-evenly mb-2">
                      <a href="{{ route('rooms') }}" class="btn btn-sm btn-outline-dark shadow-none">check Now</a>
                  </div>
              </div>
            </div>
          </div>
       </div>


       <div class="col-lg-12 text-center mt-5">
           <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms</a>
       </div>
   </div>
</div>

<!-- Our Facilities-->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

<div class="container">
   <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
       <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
           <img src="images/reception.gif" width="80px">
           <h5 class="mt-3">reception</h5>
       </div>
       <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
           <img src="images/free-wifi.gif" width="80px">
           <h5 class="mt-3">free wifi</h5>
       </div>
       <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
           <img src="images/booking.gif" width="80px">
           <h5 class="mt-3">Booking</h5>
       </div>
       <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
           <img src="images/bellboy.gif" width="80px">
           <h5 class="mt-3">Bellboy</h5>
       </div>
       <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
           <img src="images/keys.gif" width="80px">
           <h5 class="mt-3">keys</h5>
       </div>
       <div class="col-lg-12 text-center mt-5">
           <a href="#" class="btn btn-sm btn-outline-dark rounded rounded-0 fw-bold shadow-none">More Facilities >>></a>
       </div>
   </div>
</div>

<!-- Testimonials -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>

<div class="container mt-5">
    <!-- Swiper -->
    <div class="swiper swiper-testimonials">
        <div class="swiper-wrapper mb-5">

            @foreach ($reviews as $review)
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        @if ($review->user)
                            <img src="images/facilities/stars.png" width="30px">
                            <h6 class="m-0 ms-2">{{ $review->user->name }}</h6>
                        @else
                            <p>Anonymous User</p>
                        @endif
                    </div>
                    <p>{{ $review->Opinion }}</p>
                    @if ($review->house)
                        <p>House: {{ $review->house->Location ?? 'Unknown Location' }}</p>
                    @else
                        <p>House: Unknown House</p>
                    @endif
                    <div class="rating">
                        @for ($i = 0; $i < $review->Rate; $i++)
                            <i class="bi bi-star-fill text-warning"></i>
                        @endfor
                    </div>
                </div>
            @endforeach

        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>


<!-- REach us-->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

<div class="container">
   <div class="row">
       <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
       <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63225.996807740055!2d80.97815907936754!3d7.934196847392783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afb456e05e5a4c9%3A0x72cd1cfea9d4d0a9!2sPolonnaruwa%20Ancient%20City!5e0!3m2!1sen!2slk!4v1659525623039!5m2!1sen!2slk" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>
       <div class="col-lg-4 col-md-4 ">
           <div class="bg-white p-4 rounded">
               <h5>Call us</h5>
               <a href="tel: +94768799665" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +94 768799665</a>
               <br>
               <a href="tel: +94768799665" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +94 768799665</a>
           </div>
           <div class="bg-white p-4 rounded">
               <h5>Follow us</h5>
               <a href="#" class="d-inline-block mb-3">
                   <span class="badge bg-light text-dark fs-6 p-2">
                       <i class="bi bi-twitter me-1"></i>Twitter
                   </span>
               </a>
               <br>
               <a href="#" class="d-inline-block mb-3">
                   <span class="badge bg-light text-dark fs-6 p-2">
                       <i class="bi bi-facebook me-1"></i>Facebook
                   </span>
               </a>
               <br>
               <a href="#" class="d-inline-block">
                   <span class="badge bg-light text-dark fs-6 p-2">
                       <i class="bi bi-instagram me-1"></i>Instagram
                   </span>
               </a>
           </div>
       </div>
   </div>
</div>
<hr>

<!-- JavaScript Bundle with Popper -->


<!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
          delay: 3500,
          disableOnInteraction: false,
      }
    });

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
              slidesPerView: 2,
          },
          1024: {
              slidesPerView: 3,
          },
      }
    });
  </script>
@endsection
