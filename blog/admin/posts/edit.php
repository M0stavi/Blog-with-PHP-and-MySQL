<?php include("../../path.php");
	// include(ROOT_PATH . "/app/database/db.php");
    include(ROOT_PATH . "/app/controllers/posts.php" );
    adminOnly();

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

	<title>Admin Section - Edit Post</title>
</head>
<body>


	<!-- admin header here -->

    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

	<div class="admin-wrapper">


    <!-- left sidebar -->

    <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

    <!-- left sidebar -->
		
    <!-- admin content -->

    <div class="admin-content">
        <div class="button-group">
            <a href="create.php" class="btn btn-big"> Add Post </a>
            &nbsp;
            <a href="index.php" class="btn btn-big"> Manage Post </a>
        </div>


        <div class="content">

            <h2 class="page-title">Edit Posts</h2>

            <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>
            
            <form action="edit.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id ?>" class="text-input">
                <div>
                    <label>Title</label>
                    <input type="text" name="title" value="<?php echo $title ?>" class="text-input">
                </div>
                <div>
                    <label>Body</label>
                    <textarea name="body" value="<?php echo $body; ?>" id="body"></textarea>
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
                    <?php if (empty($published) && $published == 0): ?>
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
                   <button type="submit" name = "update-post" class="btn btn-big">Update Post</button>
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