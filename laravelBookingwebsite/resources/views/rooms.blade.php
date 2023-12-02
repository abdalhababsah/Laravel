@extends('layout.master')

@section('content')
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR HOUSES</h2>
        <div class="h-line bg-dark"></div>
    </div>

    <form action="{{ route('filter.houses') }}" method="GET">
        <div class="row">
            <div class="col-lg-12 col-md-12 mb-lg-0 mb-4 px-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">FILTERS</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                            data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                                <label class="form-label">Check-in</label>
                                <input type="date" name="check_in" class="form-control shadow-none mb-3">
                                <label class="form-label">Check-out</label>
                                <input type="date" name="check_out" class="form-control shadow-none">
                            </div>

                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">House Details</h5>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <label class="form-label">Number of Rooms</label>
                                        <select name="NumberOfRoom" class="form-select shadow-none">
                                            <option value=""></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <!-- Add other options as needed -->
                                        </select>
                                    </div>
                                    <div class="me-2">
                                        <label class="form-label">Number of Toilets</label>
                                        <select name="NumberOfToilet" class="form-select shadow-none">
                                            <option value=""></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <!-- Add other options as needed -->
                                        </select>
                                    </div>
                                    <div>
                                        <label class="form-label">Number of Balconies</label>
                                        <select name="NumberOfBelcony" class="form-select shadow-none">
                                            <option value=""></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <!-- Add other options as needed -->
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Apply Filters</button>
                        </div>
                    </div>
                </nav>
            </div>


            @foreach ($houses as $house)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card mb-4 border-0 shadow">
                        <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                <img class="img-fluid rounded" src="{{ asset($house->Image) }}" alt="House Image">

                            </div>

                            <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <h5 class="mb-3">{{ $house->Type }}</h5>
                                <div class="features mb-4">
                                    <!-- Features badges here -->
                                </div>
                                <div class="Facilities mb-3">
                                    <!-- Facilities badges here -->
                                </div>
                                <div class="guests">
                                    <!-- Guests badges here -->
                                </div>
                            </div>
                            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                                <h6 class="mb-4">{{ $house->Rent }} Per Night</h6>
                                <a href="{{ route('room-detiels', ['HouseID' => $house->HouseID]) }}"
                                    class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">More information</a>
                                {{--
                                <a href="{{ route('room-detiels', ['HouseID' => $house->HouseID]) }}"
                                    class="btn btn-sm w-100 btn-outline-dark shadow-none" role="button">
                                    More information
                                </a> --}}


                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 40,
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1
                },
                640: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 3
                },
                1024: {
                    slidesPerView: 3
                },
            }
        });
    </script>
@endsection
