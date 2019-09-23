<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<!-- Meta files -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Page Title -->
		<title>@yield('title')</title>

		<!--===============================================================================================-->
		<link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.png') }}"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<link rel="stylesheet" href="{{ asset("css/vendor.min.css") }}">
		<link rel="stylesheet" href="{{ asset("css/util.css") }}">
		<link rel="stylesheet" href="{{ asset("vendor/css-hamburgers/hamburgers.css") }}">
		<link rel="stylesheet" href="{{ asset("css/main.css") }}">
	</head>
	<body>
		<!-- Header -->
		@include('components/header')

		<!-- Sidebar -->
		@include('components/sidebar')

		<!-- Page Content -->
		@yield('page_content')

		<!-- Footer -->
		@include('components/footer')

		<!-- Back to top -->
		<div class="btn-back-to-top" id="myBtn" data-toggle="tooltip" title="Voltar ao topo">
		    <span class="symbol-btn-back-to-top">
		        <i class="fa fa-angle-double-up" aria-hidden="true"></i>
		    </span>
		</div>
 
		<!-- Javascript files -->
		<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="{{ asset("js/vendor.min.js") }}"></script>
		<script src="{{ asset("js/pace.min.js") }}"></script>
		<script src="{{ asset("js/main.js") }}"></script>
		<!-- Additional Scripts-->
		@yield('additional_scripts')
	</body>
</html>
