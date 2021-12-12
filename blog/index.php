<?php include("path.php");
	// include(ROOT_PATH . "/app/database/db.php");
	include(ROOT_PATH . "/app/controllers/topics.php" );
	// $posts = getPublishedPosts();
	// ss($posts);

	$posts = array();
	$postsTitle = 'Recent Posts';

	if (isset($_GET['t_id'])) {
		$posts = getPostsByTopicId($_GET['t_id']);
		$postsTitle = "You searched for posts under '" . $_GET['name'] . "'";
	} else if (isset($_POST['search-term'])) {
		$postsTitle = "You searched for '" . $_POST['search-term'] . "'";
		$posts = searchPosts($_POST['search-term']);
	} else {
		$posts = getPublishedPosts();
	}

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
				<?php foreach ($posts as $post): ?>
					<div class="post">
						<img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="slider-image">
						<div class="post-info">
						<h4><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h4>
						<i class="far fa-user"> <?php echo $post['username']; ?></i>
						&nbsp;
						<i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
						</div>
					</div>
				<?php endforeach; ?>


				
				
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
			<h1 class="recent-post-title"><?php echo $postsTitle ?></h1>

			<?php foreach ($posts as $post): ?>
				<div class="post clearfix">
					<img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="post-image">
					<div class="post-preview">
					<h2><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
					<i class="far fa-user"> <?php echo $post['username']; ?></i>
						&nbsp;
					<i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
					<p class="preview-text">
						<?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?>
					</p>
					<a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more">Read More</a>
					</div>
				</div>    
			<?php endforeach; ?>


		</div>
		<!-- Main content  -->

		<div class="sidebar">

			<div class="section search">
			<h2 class="section-title">Search</h2>
			<form action="index.php" method="post">
				<input type="text" name="search-term" class="text-input" placeholder="Search...">
			</form>
			</div>


			<div class="section topics">
			<h2 class="section-title">Topics</h2>
			<ul>
				<?php foreach ($topics as $key => $topic): ?>
				<li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
				<?php endforeach; ?>
			</ul>
			</div>

      </div>
	</div>


	<!-- content  -->



	<!-- include footer here -->

	<?php include(ROOT_PATH . "/app/includes/footer.php");   ?>

</body>
</html>