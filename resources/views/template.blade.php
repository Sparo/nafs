<!DOCTYPE html>
<html lang="en">
@include('_head')
	<body>
		@include('_navigation')
		@include('_header')

		@yield('main')

		@include('_footer')
		@include('_scripts')
	</body>
</html>
