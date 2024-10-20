<!DOCTYPE html>
<html class="no-js" lang="en">
	
@include('layouts.head')
<body>
		<!--Preloader-->
		<div id="preloader">
			<div id="loader" class="loader">
				<div class="loader-container">
					<div class="loader-icon"><img src="assets/img/logo/preloader.png" alt="Preloader" /></div>
				</div>
			</div>
		</div>
		<!--Preloader-end -->
		<!-- Scroll-top -->
		<button class="scroll__top scroll-to-target" data-target="html">
			<i class="fas fa-angle-up"></i>
		</button>
		<!-- Scroll-top-end-->
        @include('layouts.header')
		<!-- main-area -->
		@yield('content')
		<!-- main-area-end -->
        @include('layouts.footer')
		<!-- JS here -->
		@include('layouts.scripts')
</body>
</html>
