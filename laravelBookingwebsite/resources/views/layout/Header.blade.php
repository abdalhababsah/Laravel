<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200&family=Poppins:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Nunito:ital,wght@1,200&family=Poppins:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZwT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <title>Document</title>
    <style>
.modal-backdrop {
    --bs-backdrop-zindex: 0 !important;
    --bs-backdrop-bg: #0000 !important;
    --bs-backdrop-opacity: 0.5;
    position: fixed;
    top: 0;
    left: 0;
    z-index: var(--bs-backdrop-zindex);
    width: 100vw;
    height: 100vh;
    background-color: var(--bs-backdrop-bg);
}

.box{
    border-top-color: var(--teal) !important;
  }
        :root{
	--teal: #2ec1ac;
	--teal_hover:#279e8c;
}
*{
		font-family: 'Poppins', sans-serif;
	}
	.h-font{
		font-family: 'Merienda' cursive;
	}

	input::-webkit-outer-spin-button,
	input::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
	}

	input[type=number] {
		-moz-appearance: textarea;
	}
	.custom-bg{
		background-color: var(--teal);
		border: 1px solid var(--teal);
	}
	.custom-bg:hover{
		background-color: var(--teal-hover);
		border-color: var(--teal-hover);
	}

	.h-line{
		width: 150px;
		margin: 0 auto;
		height: 1.7px;
	}

	.availability-form{
		margin-top: -50px;
		z-index: 2;
		position: relative;
	}

	@media screen and (max-width: 575px) {
	.availability-form{
		margin-top: 25px;
		padding: 0 35px;
	}

	}
    form {
        box-shadow: none !important;
    }
    .button_profile{
        margin-left: 20px;
    }
    .shadow-none {
    box-shadow: none!important;
    margin-left: 20px !important;
}
    </style>
</head>
<body>
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-uefJpMakEE0fsxUK1hkfPh/j8i3QFa/beE/8W+6Gu8dZ8XOdaU6zrBy+6Hx/kMxr" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofNtlE+8+8/00ngF1d9Rg6q5S+0ZPaNck=" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg bg-light px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="{{ route('home') }}">TJ HOTEL</a>
          <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                       <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                       </li>
                       <li class="nav-item">
                          <a class="nav-link me-2" href="{{ route('rooms') }}">Rooms</a>
                       </li>
                       <li class="nav-item">
                          <a class="nav-link me-2" href="{{ route('facilities') }}">Facilities</a>
                       </li>
                       <li class="nav-item">
                          <a class="nav-link me-2" href="{{ route('contact') }}">Contact Us</a>
                       </li>
                       <li class="nav-item">
                          <a class="nav-link me-2" href="{{ route('about') }}">About</a>
                       </li>
                    </ul>
           @if (!session('iduser'))
    <div class="d-flex" role="search">
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModel">Login</button>
        <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModel">Register</button>
    </div>
@else
    <div class="d-flex" role="search">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-outline-dark shadow-none">Logout</button>

        </form>
    </div>

    <div class="button_profile">
        <button type="submit" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#ProfileModel">Profile</button>

    </div>
    <div>
    <a href="{{ route('redirect.to.role') }}" class="btn btn-outline-dark shadow-none" class="ahmad"  >Dashboard</a>
</div>

</div>


@endif

          </div>
        </div>
        @php
      $users = App\Models\User::find(session('iduser'));
  @endphp

{{-- //////////////////////////////////////////login/////////////////////////////////////////////// --}}
      <div class="modal fade" id="loginModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form action="{{ route('login') }}" method="post">
                @if($errors->any())
                <div style="color: red;">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                @csrf
                @method('post')
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-circle fs-3 me-2">User Login</i>
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control shadow-none">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control shadow-none">
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </form>

          </div>
        </div>
      </div>




{{-- ////////////////////////////////////signup////////////////////////////////////////// --}}
      <div class="modal fade" id="registerModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <form action="{{ route('signup') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-lines-fill fs-3 me-2">User Registration</i>
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                        Note: Your details must match with your ID (Aadhaar card, passport, driving license, etc.) that will be required during check-in.
                    </span>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 p-0">
                                <label class="form-label">Contact</label>
                                <input type="number" name="contact" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-12 ps-0 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 p-0">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control shadow-none" required>
                            </div>
                            <div class="text-center my-1">
                                <button type="submit" class="btn btn-dark shadow-none">Register</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


          </div>
        </div>
      </div>

      @php
      $users = App\Models\User::find(session('iduser'));
  @endphp
 {{-- ////////////////////////////////////profile//////////////////////////////////// --}}
      <div class="modal fade" id="ProfileModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <form action="{{ route('update_profile') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-lines-fill fs-3 me-2">Update Profile</i>
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                        Note: Your details must match with your ID (Aadhaar card, passport, driving license, etc.) that will be required during check-in.
                    </span>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control shadow-none" value="{{ $users ? $users->Name : '' }}" required>
                            </div>
                            <div class="col-md-6 p-0">
                                <label class="form-label">Contact</label>
                                <input type="number" name="contact" class="form-control shadow-none" value="{{ $users ? $users->Contact : '' }}" required>
                            </div>
                            <div class="col-md-12 ps-0 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control shadow-none" value="{{ $users ? $users->Email : '' }}" required>
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">New Password</label>
                                <input type="password" name="password" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 p-0">
                                <label class="form-label">Confirm New Password</label>
                                <input type="password" name="password_confirmation" class="form-control shadow-none">
                            </div>
                            <div class="text-center my-1">
                                <button type="submit" class="btn btn-dark shadow-none">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


</div>
</div>
</div>

      </nav>




