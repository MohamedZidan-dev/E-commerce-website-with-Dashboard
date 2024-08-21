<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Add Product</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add product</h1>
			</div>
		</div><!--/.row-->
		
		<form action="functions/addpro.php" method="post" enctype="multipart/form-data" > 
			<input type="text" name="name" placeholder="product name"  class="form-control"><br>
			<input type="number" name="price" placeholder="price"  class="form-control"><br>
			<input type="number" name="sale" placeholder="sale"  class="form-control"><br>
			<input type="text" name="discription" placeholder="description"  class="form-control"><br>
			<input type="file" name="img"   class="form-control"><br>	
			<select name="category" id=""  class="form-control">
                <?php 
                $selectALL = "SELECT * FROM category ";
                $queryofcat = $conn->query($selectALL);
                foreach($queryofcat as $category){
                ?>
				<option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                <?php } ?>
			</select>
			<br><br><br>
			<input type="submit" value="Add Product"  class="btn btn-info">
		</form>

        <!-- <div class="row">
            <div class="col-lg-12">

            </div>
        </div> -->