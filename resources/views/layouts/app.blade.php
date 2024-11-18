<!DOCTYPE html>
<html lang="zxx">
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap Min CSS -->
		<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">
		<!-- Owl Theme Default Min CSS -->
		<link rel="stylesheet" href="{{ asset('/assets/css/owl.theme.default.min.css')}}">
		<!-- Owl Carousel Min CSS -->
		<link rel="stylesheet" href="{{ asset('/assets/css/owl.carousel.min.css')}}">
		<!-- Animate Min CSS -->
		<link rel="stylesheet" href="{{ asset('/assets/css/animate.min.css')}}">
		<!-- Boxicons Min CSS -->
		<link rel="stylesheet" href="{{ asset('/assets/css/boxicons.min.css')}}">
		<!-- Magnific Popup Min CSS -->
		<link rel="stylesheet" href="{{ asset('/assets/css/magnific-popup.min.css')}}">
		<!-- Flaticon CSS -->
		<link rel="stylesheet" href="{{ asset('/assets/css/flaticon.css')}}">
		<!-- Meanmenu Min CSS -->
		<link rel="stylesheet" href="{{ asset('/assets/css/meanmenu.min.css')}}">
		<!-- Nice Select Min CSS -->
		<link rel="stylesheet" href="{{ asset('/assets/css/nice-select.min.css')}}">
		<!-- Odometer Min CSS-->
		<link rel="stylesheet" href="{{ asset('/assets/css/odometer.min.css')}}">
		<!-- Style CSS -->
		<link rel="stylesheet" href="{{ asset('/assets/css/style.css')}}">
		<!-- Dark CSS -->
		<link rel="stylesheet" href="{{ asset('/assets/css/dark.css')}}">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="{{ asset('/assets/css/responsive.css')}}">

		<style>
			section#login-section h3 span {
				color: #B99B5C !important;
			}
			section#login-section input {
				width: 291px;
				height: 55px;
				opacity: 1;
				background-color: #E0D3B8;
				color: #ffffff;
			}
			section#login-section input:valid {
				width: 291px;
				height: 55px;
				opacity: 1;
				background-color: #E0D3B8;
				color: #ffffff;
			}
			section#login-section button {
				height: 55px;
				width: 291px;
				background-color: black
			}
			section#login-section .img-thumbnail {
				border: none;
    			height: 55px;
			}

			section#login-section input::-webkit-input-placeholder {
				color: #ffffff; /* Chrome, Safari */
			}
			section#login-section input:-ms-input-placeholder {
				color: #ffffff; /* Internet Explorer 10-11 */
			}
			section#login-section input::placeholder {
				color: #ffffff; /* Standard */
			}

			.active>.page-link, .page-link.active {
				z-index: 3;
				color: #fff;
				background-color: #b99b5c;
				border-color: #fff;
				border-color: #b99b5c;
			}

			.page-link {
				color: var(--ct-pagination-color);
				background-color: #fff;
				border: 1px solid #b99b5c;
			}
		</style>
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="{{ asset('/assets/img/favicon.png')}}">
		<!-- Title -->
		<title>Barreau</title>

        @yield('customcss')
    </head>
    <body>
		<!-- Start Preloader Area -->
		<div class="preloader">
			<div class="lds-ripple">
				<div></div>
				<div></div>
			</div>
		</div>
		<!-- End Preloader Area -->

		<!-- Start Header Area -->
		@include('partiels.header')
		<!-- End Header Area -->

        <!-- Start Header Area -->
        @yield('content')
        <!-- End Header Area -->

		<!-- Start Footer Area -->
		@include('partiels.footer')
		<!-- End Footer Area -->

		<!-- Start Copy Right Area -->
		@include('partiels.copyright')
		<!-- End Copy Right Area -->

		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class="bx bx-chevrons-up"></i>
			<i class="bx bx-chevrons-up"></i>
		</div>
		<!-- End Go Top Area -->


        <!-- Jquery Min JS -->

        </script><script src="{{asset('/assets/js/jquery.min.js')}}"></script>
        <!-- Bootstrap Bundle Min JS -->
        <script src="{{asset('/assets/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Meanmenu Min JS -->
		<script src="{{asset('/assets/js/meanmenu.min.js')}}"></script>
        <!-- Wow Min JS -->
        <script src="{{asset('/assets/js/wow.min.js')}}"></script>
        <!-- Owl Carousel Min JS -->
		<script src="{{asset('/assets/js/owl.carousel.min.js')}}"></script>
        <!-- Nice Select Min JS -->
		<script src="{{asset('/assets/js/nice-select.min.js')}}"></script>
        <!-- Magnific Popup Min JS -->
		<script src="{{asset('/assets/js/magnific-popup.min.js')}}"></script>
		<!-- Jarallax Min JS -->
		<script src="{{asset('/assets/js/jarallax.min.js')}}"></script>
		<!-- Appear Min JS -->
        <script src="{{asset('/assets/js/appear.min.js')}}"></script>
		<!-- Odometer Min JS -->
		<script src="{{asset('/assets/js/odometer.min.js')}}"></script>
		<!-- Smoothscroll Min JS -->
		<script src="{{asset('/assets/js/smoothscroll.min.js')}}"></script>
		<!-- Form Validator Min JS -->
		<script src="{{asset('/assets/js/form-validator.min.js')}}"></script>
		<!-- Contact JS -->
		<script src="{{asset('/assets/js/contact-form-script.js')}}"></script>
		<!-- Ajaxchimp Min JS -->
		<script src="{{asset('/assets/js/ajaxchimp.min.js')}}"></script>
        <!-- Custom  JS -->
		<script src="{{asset('/assets/js/custom.js')}}"></script>

    </body>

</html>
