        <div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Add User</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add User</h1>
			</div>
		</div><!--/.row-->
		
		<form action="functions/adduser.php" method="post" > 
			<input type="text" name="username" placeholder="username"  class="form-control"><br>
			<input type="email" name="email" placeholder="email"  class="form-control"><br>
			<input type="text" name="phone" placeholder="phone"  class="form-control"><br>
			<input type="text" name="address" placeholder="address"  class="form-control"><br>
			<input type="password" name="password" placeholder="password"  class="form-control"><br>
			<input type="radio" name="gender" id="gendermale" value="0" >
			<label for="gendermale">male</label><br>
			<input type="radio" name="gender" id="genderfemale" value="1">
			<label for="genderfemale">female</label><br>
			<select name="priv" id=""  class="form-control">
				<option value="0">admin</option>
				<option value="1">user</option>
			</select>
			<br><br><br>
			<input type="submit" value="Add User"  class="btn btn-info">
		</form>

        <!-- <div class="row">
            <div class="col-lg-12">

            </div>
        </div> -->