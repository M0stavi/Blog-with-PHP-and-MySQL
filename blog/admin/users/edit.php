<?php include("../../path.php");
	// include(ROOT_PATH . "/app/database/db.php");
    include(ROOT_PATH . "/app/controllers/users.php");
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

	<title>Admin Section - Edit User</title>
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
            <a href="create.php" class="btn btn-big"> Add User </a>
            &nbsp;
            <a href="index.php" class="btn btn-big"> Manage USer </a>
        </div>


        <div class="content">

            <h2 class="page-title">Add User</h2>
            <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

            <form action="edit.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>" >
                <div>
                    <label>Username</label>
                    <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
                </div>
                <div>
                    <label>Email</label>
                    <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
                </div>
                <div>
                    <label>Password</label>
                    <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
                </div>
                <div>
                    <label>Password Confirmation</label>
                    <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input">
                </div>

                <div>
                    <?php if (isset($admin) && $admin == 1): ?>
                        <label>
                            <input type="checkbox" name="admin" checked>
                            Admin
                        </label>
                    <?php else: ?>
                        <label>
                            <input type="checkbox" name="admin">
                            Admin
                        </label>
                    <?php endif; ?>
                        
                </div>
                <div>
                    <button type="submit" name="update-user" class="btn btn-big">Update user</button>
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