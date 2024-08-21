<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Edit User</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit User</h1>
			</div>
		</div><!--/.row-->

        <?php
        $id = $_GET['id'];

        // include('functions/connection.php');
        $selectThatUser = "SELECT * FROM users WHERE id ='$id' ";
        $queryOfThatUser = $conn->query($selectThatUser);
        $queryOfThatUser2 = $queryOfThatUser-> fetch_assoc();
        // var_dump($queryOfThatUser2);
        
        ?>
		
		<form action="functions/edituser.php" method="post" >
            <input type="hidden" name="id" value="<?= $queryOfThatUser2['id']?>"> 
			<input type="text" name="username" placeholder="username"    value="<?= $queryOfThatUser2['username']?>" class="form-control"><br>
			<input type="email" name="email" placeholder="email"  value="<?= $queryOfThatUser2['email']?>" class="form-control"><br>
			<input type="text" name="phone" placeholder="phone"  value="<?= $queryOfThatUser2['phone']?>" class="form-control"><br>
			<input type="text" name="address" placeholder="address"  value="<?= $queryOfThatUser2['address']?>" class="form-control"><br>
			<input type="password" name="password" placeholder="password" class="form-control"><br>
			<input type="radio" name="gender" id="gendermale" value="0" <?= $queryOfThatUser2['gender'] == 0 ? 'checked' :'' ?>>
			<label for="gendermale">male</label><br>
			<input type="radio" name="gender" id="genderfemale" value="1" <?= $queryOfThatUser2['gender'] == 1 ? 'checked' :'' ?>>
			<label for="genderfemale">female</label><br>
			<select name="priv" id=""  class="form-control">
				<option value="0" <?= $queryOfThatUser2['priv'] == 0 ? 'selected' :'' ?>  >admin</option>
				<option value="1" <?= $queryOfThatUser2['priv'] == 1 ? 'selected' :'' ?>>user</option>
			</select>
			<br><br><br>
			<input type="submit" value="Add User"  class="btn btn-primary">
		</form>

        <div class="row">
            <div class="col-lg-12">

            </div>
        </div>