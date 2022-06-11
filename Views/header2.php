	<!-- Header -->

	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="#">.The River</a></div>
			<div class="ml-auto d-flex flex-row align-items-center justify-content-start">
				<nav class="main_nav">
					<ul class="d-flex flex-row align-items-start justify-content-start">
						<li class="active"><a href="../index.php">Home</a></li>
						<li ><a id="booking" onclick="booking()" href="employee.php#bookingList">BookingList</a></li>
						<li ><a id="confirm" onclick="confirm()" href="employee.php#bookingList">ConfirmBooking</a></li>
					</ul>
				</nav>
				<div class="book_button"><a href="#">Log Out</a></div>
				<!-- Hamburger Menu -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
		</div>
	</header>

	<style>
		.header{
			background-image: url("../images/index.jpg");
        	background-size: cover;
        	background-repeat: no-repeat;
        	background-position: center;
		}
	</style>