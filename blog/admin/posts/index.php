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

	<title>Admin Section - Manage Posts</title>
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

            <h2 class="page-title">Manage Posts</h2>

            <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

            <table>
                <thead>
                    <th>SN</th>
                    <th>Title</th>
                    
                    <th colspan = "3">Action</th>
                </thead>
                <tbody>
                <?php foreach ($posts as $key => $post): ?>
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $post['title'] ?></td>
                        
                        <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">edit</a></td>
                        <td><a href="edit.php?delete_id=<?php echo $post['id']; ?>" class="delete">delete</a></td>
                        <!-- <td><a href="#" class="publish">Publish</a></td> -->
                        <?php if ($post['published']): ?>
                            <td><a href="edit.php?published=0&p_id=<?php echo $post['id'] ?>" class="unpublish">unpublish</a></td>
                        <?php else: ?>
                            <td><a href="edit.php?published=1&p_id=<?php echo $post['id'] ?>" class="publish">publish</a></td>
                        <?php endif; ?>
                        
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

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