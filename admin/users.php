<?php 
        $current = 'users';
		include("includes/header.php");
		include("includes/sidebar.php");
?>

		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <?php 

            if(!isset($_GET['action'])){
                include("design/usersTable.php");
            }else if($_GET['action'] == 'add'){
                include('design/addUser.php');
            }else if($_GET['action'] == 'edit'){
                include('design/editUser.php');
            }
        ?>

	</div>	<!--/.main-->
	
<?php include("includes/footer.php")  ?>