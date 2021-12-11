<?php include("path.php");
	include(ROOT_PATH . "/app/database/db.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script src="https://kit.fontawesome.com/6c4e504e79.js" crossorigin="anonymous"></script>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	<title>Blog</title>
</head>
<body>


	<!-- include header here -->

	<?php include(ROOT_PATH . "/app/includes/header.php");   ?>

	<?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

	

	<div class="page-wrapper">
		<div class="post-slider">
			<h1 class="slider-title">Trending Posts</h1>
			<i class="fas fa-chevron-left prev"></i>
			<i class="fas fa-chevron-right next"></i>

			<div class="post-wrapper">
				<div class="post">
					<img src="assets/images/image2.png" alt="" class="slider-image">
					<div class="post-info">
						<h4> <a href="single.php">Post One Day</a> </h4>
						<i class="far fa-user">Writer One</i>
						&nbsp;

						<i class="far fa-calendar">Nov 25,2021</i>nder

					</div>
				</div>


				<div class="post">
					<img src="assets/images/image1.png" alt="" class="slider-image">
					<div class="post-info">
						<h4> <a href="single.php">Post Two Day</a> </h4>
						<i class="far fa-user">Writer Two</i>
						&nbsp;

						<i class="far fa-calendar">Nov 26,2021</i>nder

					</div>
				</div>

				<div class="post">
					<img src="assets/images/image3.png" alt="" class="slider-image">
					<div class="post-info">
						<h4> <a href="single.php">Post Three Day</a> </h4>
						<i class="far fa-user">Writer Three</i>
						&nbsp;

						<i class="far fa-calendar">Nov 27,2021</i>nder

					</div>
				</div>

				<div class="post">
					<img src="assets/images/image4.png" alt="" class="slider-image">
					<div class="post-info">
						<h4> <a href="single.php">Post Four Day</a> </h4>
						<i class="far fa-user">Writer Four</i>
						&nbsp;

						<i class="far fa-calendar">Nov 28,2021</i>nder

					</div>
				</div>

				<div class="post">
					<img src="assets/images/image5.png" alt="" class="slider-image">
					<div class="post-info">
						<h4> <a href="single.php">Post Five Day</a> </h4>
						<i class="far fa-user">Writer Five</i>
						&nbsp;

						<i class="far fa-calendar">Nov 29,2021</i>nder

					</div>
				</div>
				
			</div>

			
				
			


		</div>
	</div>
	<!-- menu drop down -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- menu drop down -->
	<script src="assets/js/script.js"></script>

	<!-- slider --->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<!-- slider -->

    <!-- content  -->

	<div class="content clearfix">

	    <!-- Main content      -->

		<div class="main-content">
			<h1 class="recent-post-title">Recent Posts</h1>

			<div class="post clearfix">
				<img src="assets/images/image_3.png" alt="" class="post-image">
				<div class="post-preview">
					<h2><a href="single.html">Post Title One</a></h2>
					<i class="far fa-user">User One</i>
					&nbsp;
					<i class="far calendar">Nov 25, 2021</i>
					<p class="preview-text">
						bla bla bla bla bla bla bla bla bla. bla bla bla bla bla bla bla.
						bla bla bla bla bla bla. bla bla bla bla bla bla.
						bla bla bla bla bla bla bla bla bla bla bla bla bla blav bla bla bla bla.
						bla bla bla bla bla. bla bla bla bla.
					</p>
					<a href="single.html" class="btn read-more">Read More</a>
				</div>
			</div>

			<div class="post clearfix">
				<img src="assets/images/image_3.png" alt="" class="post-image">
				<div class="post-preview">
					<h2><a href="single.html">Post Title One</a></h2>
					<i class="far fa-user">User One</i>
					&nbsp;
					<i class="far calendar">Nov 25, 2021</i>
					<p class="preview-text">
						bla bla bla bla bla bla bla bla bla. bla bla bla bla bla bla bla.
						bla bla bla bla bla bla. bla bla bla bla bla bla.
						bla bla bla bla bla bla bla bla bla bla bla bla bla blav bla bla bla bla.
						bla bla bla bla bla. bla bla bla bla.
					</p>
					<a href="single.html" class="btn read-more">Read More</a>
				</div>
			</div>


		</div>
		<!-- Main content  -->

		<div class="sidebar">

				<div class="section search">
				<h2 class="section-title">Search</h2>
				<form action="index.html" method="post">
					<input type="text" name="search-term" class="text-input" placeholder="Search...">
				</form>
				</div>


				<div class="section topics">
				<h2 class="section-title">Tags</h2>
				<ul>
					<li><a href="#">Poems</a></li>
					<li><a href="#">Quotes</a></li>
					<li><a href="#">Fiction</a></li>
					<li><a href="#">Biography</a></li>
					<li><a href="#">Motivation</a></li>
					<li><a href="#">Inspiration</a></li>
					<li><a href="#">Life Lessons</a></li>
				</ul>
				</div>

		</div>
	</div>


	<!-- content  -->



	<!-- include footer here -->

	<?php include(ROOT_PATH . "/app/includes/footer.php");   ?>

</body>
</html>