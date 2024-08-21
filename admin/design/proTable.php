<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Products</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Products</h1>
			</div>
		</div><!--/.row-->
		

<div class="row">
            <div class="col-lg-12">

                <a href="?action=addPro" class="btn btn-info">Add Products</a>
                <br><br><br>


                <table border="1" class="table tabel-hover table-borderd table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>price</th>
                            <th>sale</th>
                            <th>img</th>
                            <th>category</th>
                            <th>Control</th>
                        </tr>
                    </thead>
                    <tbody>
    <?php 

    $id = 0; // to keep counting even if user deleted
        // include('functions/connection.php');

        $select = "SELECT * FROM products";

        $query = $conn->query($select);
        // die(var_dump($query)); //to view the data 
        foreach($query as $pro){

    ?>                
                        <tr>
                            <td><?= $pro['id'] ?></td>
                            <td><?= $pro['name'] ?></td>
                            <td><?= $pro['price'] ?></td>
                            <td><?= $pro['sale'] ?></td>
                            <td><img  style="width: 50px;height:50px;border-radius:50%;" src="images/<?php
                                
                                echo $pro['img']
                            
                            ?>" alt="no img"></td>
                            <td><?php 

                            $cat_id = $pro["cat_id"];
                            $category = "SELECT name FROM category WHERE id ='$cat_id' ";
                            $res2 = $conn->query($category) -> fetch_assoc();
                            echo $res2['name'];
                            
                            
                            
                            ?></td>


                            <td>
                                <a href="?action=editproduct&&id=<?= $pro['id']?>" class="btn btn-primary">Edit</a>
                                <!-- <a href="" class="btn btn-danger">Delete</a> -->

                                <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?= $pro['id']?>">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="<?= $pro['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you want to delete user <span style="color: red;font-size:larger;"> <?= $pro['name']?></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="functions/deleteproduct.php?id=<?= $pro['id']?>" class="btn btn-primary">Save changes</a>
      </div>
    </div>
  </div>
</div>
                            </td>
                        </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>