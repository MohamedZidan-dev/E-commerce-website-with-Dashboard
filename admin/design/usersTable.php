<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Users</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Users</h1>
			</div>
		</div><!--/.row-->
		

<div class="row">
            <div class="col-lg-12">

                <a href="?action=add" class="btn btn-info">Add User</a>
                <br><br><br>


                <table class="table tabel-hover table-borderd table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>address</th>
                            <th>phone</th>
                            <th>gender</th>
                            <th>privliges</th>
                            <th>Control</th>
                        </tr>
                    </thead>
                    <tbody>
    <?php 

    $id = 0; // to keep counting even if user deleted
        // include('functions/connection.php');

        $select = "SELECT * FROM users";

        $query = $conn->query($select);
        // die(var_dump($query)); //to view the data 
        foreach($query as $users){

    ?>                
                        <tr>
                            <td><?= $users['id'] ?></td>
                            <td><?= $users['username'] ?></td>
                            <td><?= $users['email'] ?></td>
                            <td><?= $users['address'] ?></td>
                            <td><?= $users['phone'] ?></td>
                            <td><?= $users['gender'] == 0 ? 'male' :'female' ?></td>
                            <td><?= $users['priv'] == 0 ? 'Admin' : 'User'?></td>
                            <td>
                                <a href="?action=edit&&id=<?= $users['id']?>" class="btn btn-primary">Edit</a>
                                <!-- <a href="" class="btn btn-danger">Delete</a> -->

                                <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?= $users['id']?>">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="<?= $users['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you want to delete user <span style="color: red;font-size:larger;"> <?= $users['username']?></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="functions/deleteuser.php?id=<?= $users['id']?>" class="btn btn-primary">Save changes</a>
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