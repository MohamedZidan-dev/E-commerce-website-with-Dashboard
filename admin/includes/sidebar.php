<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><span style="color: red; font-size:24px;"><?php 
				// include("functions/connection.php");px
				 $id_user = $_SESSION['login_id'];

				//  die( $id_user) ;
				 $sel = "SELECT * FROM users WHERE id = '$id_user'";
				 $query_user = $conn->query($sel);
				  
				 $res = $query_user->fetch_assoc();

				 echo $res['username'];


				
				
				?></span></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="<?= $current == 'index'?'active':'' ?>"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li class="<?= $current == 'users'?'active':'' ?>"><a href="users.php"><em class="fa fa-user">&nbsp;</em> Users</a></li>
			<li class="<?= $current == 'products'?'active':'' ?>"><a href="products.php"><em class="fa fa-user">&nbsp;</em> Products</a></li>
			<li><a href="functions/logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->