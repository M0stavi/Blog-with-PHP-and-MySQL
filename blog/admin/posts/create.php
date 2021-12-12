<?php include("../../path.php");
	// include(ROOT_PATH . "/app/database/db.php");
     include(ROOT_PATH . "/app/controllers/posts.php" );

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
	<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">

    <link rel="stylesheet" type="text/css" href="../../assets/css/admin.css">

	<title>Admin Section - Add Post</title>
</head>
<body>


	<header>
		<div class = "logo">
			<h1 class = "logo-text"><span>AB</span>CD</h1>
			
		</div>
	<i class="fa fa-bars menu-toggle"></i>	
	<ul class="nav">
		
		<li>
			<a href="#">
				<i class="fa fa-user"></i>
				 User name
				<i class="fa fa-chevron-down" style = "font-size: .8em;"></i> 
			</a>
			<ul>
				
				<li><a href="#" class="logout"> Logout</a> </li>
			</ul> 
		</li>
		
	</ul>	
	</header>

	<div class="admin-wrapper">


    <!-- left sidebar -->

    <div class="left-sidebar">
        <ul>
            <li><a href="index.php">Manage Posts</a></li>
            <li><a href="../users/index.php">Manage Users</a></li>
            <li><a href="../topics/index.php">Manage Topics</a></li>

        </ul>

    </div>

    <!-- left sidebar -->
		
    <!-- admin content -->

    <div class="admin-content">
        <div class="button-group">
            <a href="create.php" class="btn btn-big"> Add Post </a>
            &nbsp;
            <a href="index.php" class="btn btn-big"> Manage Post </a>
        </div>


        <div class="content">

            <h2 class="page-title">Manage Posts</h2>

            <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>


            <form action="create.php" method="post" enctype="multipart/form-data">
                <div>
                    <label>Title</label>
                    <input type="text" name="title" value="<?php echo $title ?>" class="text-input">
                </div>
                <div>
                    <label>Body</label>
                    <textarea name="body" value="<?php echo $body ?>" id="body"></textarea>
                </div>

                <div>
                    <label>Image</label>
                    <input type="file" name="image">
                </div>
                <div>
                    <label>Topic</label>
                    <select name="topic_id" class="text-input">
                    <option value=""></option>
                    <?php foreach ($topics as $key => $topic): ?>
                        <?php if (!empty($topic_id) && $topic_id == $topic['id'] ): ?>
                            <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                        <?php else: ?>
                            <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                        <?php endif; ?>

                    <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <?php if (empty($published)): ?>
                        <label>
                            <input type="checkbox" name="published">
                            Publish
                        </label>
                    <?php else: ?>
                        <label>
                            <input type="checkbox" name="published" checked>
                            Publish
                        </label>
                    <?php endif; ?>
                    

                </div>
                <div>
                   <button type="submit" name="add-post" class="btn btn-big">Add Post</button>
                </div>
            </form>

        </div>

    </div>

    <!-- admin content -->

	</div>
	<!-- menu drop down -->
	<script
         src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- menu drop down -->

    

    <!-- CKeditor -->
    <script
         src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js"></script>

     
    
    <!-- jquery  -->

	<script src="../../assets/js/script.js"></script>


	

    <!-- content  -->

	


	<!-- content  -->



	<!-- footer -->
	
	


   <!-- // footer -->

</body>
</html>