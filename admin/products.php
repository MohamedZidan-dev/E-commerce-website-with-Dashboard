<?php 
        $current = 'products';
		include("includes/header.php");
		include("includes/sidebar.php");
?>

		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <?php 

            if(!isset($_GET['action'])){
                include("design/proTable.php");
            }else if($_GET['action'] == 'addPro'){
                include('design/addPro.php');
            }else if($_GET['action'] == 'editproduct'){
                include('design/editproduct.php');
            }
        ?>

	</div>	<!--/.main-->
	
<?php include("includes/footer.php")  ?>