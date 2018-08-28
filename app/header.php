
	<!-- Main navbar -->
	<div class="navbar navbar-default header-highlight">
		<div class="navbar-header">
			<!--a class="navbar-brand" href="index.html"><img src="assets/images/logo_light.png" alt=""></a-->
			<center>
			<img src="uploads/logo.png" id="main-h1-11" style="width:36%;margin:0 auto;" alt="">
			</center>
			<!--a class="navbar-brand" href="index.html"></a-->

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<!-- mnu hide btn -->
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
			<!-- mnu hide btn -->
			

			<ul class="nav navbar-nav navbar-right">
			
				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<span><i class="icon-user"></i>&nbsp;&nbsp;&nbsp;<?=$USERNAME; ?></span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="admin_edit.php"><i class="icon-cog"></i> My profile</a></li>
						<!--li><a href="notifications.php"><i class="icon-bell"></i> My Notifications</a></li-->
						<li><a href="logout.php"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">



					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

<!-- Main -->
<li class="<?php if($pID==1){echo 'active';} ?>"><a href="index.php"><i class="icon-home4"></i> <span>Dashboard</span></a></li>

<!-- mnu STRT -->
<li>
	<a href="#"><i class="icon-users"></i> <span>System Users</span></a>
	<ul>
		<li class="<?php if($pID==2){echo 'active';} ?>"><a href="admins_list.php"><i class="icon-new"></i>Administrators</a></li>
		<li class="<?php if($pID==3){echo 'active';} ?>"><a href="cust_list.php"><i class="icon-new"></i>Customers</a></li>
		<li class="<?php if($pID==4){echo 'active';} ?>"><a href="captains_list.php"><i class="icon-new"></i>Captains</a></li>
		<!--li class="<?php if($pID==5){echo 'active';} ?>"><a href="carts_list.php"><i class="icon-new"></i>Carts Managers</a></li-->
	</ul>
</li>

<li>
	<a href="#"><i class="icon-server"></i> <span>System Banners</span></a>
	<ul>
		<li class="<?php if($pID==7){echo 'active';} ?>"><a href="banners_list.php"><i class="icon-list"></i>Banner List</a></li>
	</ul>
</li>

<li>
	<a href="#"><i class="icon-file-text2"></i> <span>Nutrition Diets</span></a>
	<ul>
		<li class="<?php if($pID==10){echo 'active';} ?>"><a href="nutrions_plans.php"><i class="icon-list"></i>Nutrition Diets</a></li>
		<li class="<?php if($pID==11){echo 'active';} ?>"><a href="nutrions_plans_subs.php"><i class="icon-list"></i>Subscribers</a></li>
	</ul>
</li>

<li>
	<a href="#"><i class="icon-file-text2"></i> <span>Exercise Plans</span></a>
	<ul>
		<li class="<?php if($pID==14){echo 'active';} ?>"><a href="exercise_plans.php"><i class="icon-list"></i>Exercise Videos</a></li>
		<li class="<?php if($pID==15){echo 'active';} ?>"><a href="exercise_plans_subs.php"><i class="icon-list"></i>Subscribers</a></li>
	</ul>
</li>

<li>
	<a href="#"><i class="icon-file-text2"></i> <span>Private Trainer</span></a>
	<ul>
		<li class="<?php if($pID==20){echo 'active';} ?>"><a href="private_subs.php"><i class="icon-list"></i>Subscribers</a></li>
	</ul>
</li>

<li>
	<a href="#"><i class="icon-file-text2"></i> <span>Contests Preps</span></a>
	<ul>
		<li class="<?php if($pID==17){echo 'active';} ?>"><a href="contest_preps.php"><i class="icon-list"></i>Contests</a></li>
		<li class="<?php if($pID==18){echo 'active';} ?>"><a href="contest_preps_month.php"><i class="icon-list"></i>This Month Contests</a></li>
	</ul>
</li>

<!--li>
	<a href="#"><i class="icon-cart-add"></i> <span>Reports</span></a>
	<ul>
		<li class="<?php if($pID==19){echo 'active';} ?>"><a href="ss.php"><i class="icon-new"></i>Add New</a></li>
	</ul>
</li-->

<li>
	<a href="#"><i class="icon-file-text2"></i> <span>System Subscriptions</span></a>
	<ul>
		<li class="<?php if($pID==21){echo 'active';} ?>"><a href="subs_prices.php"><i class="icon-list"></i>Prices</a></li>
		<li class="<?php if($pID==22){echo 'active';} ?>"><a href="subs_active.php"><i class="icon-list"></i>Active Subscribtions</a></li>
		<li class="<?php if($pID==23){echo 'active';} ?>"><a href="subs_expired.php"><i class="icon-list"></i>Expired Subscribtions</a></li>
	</ul>
</li>

<li>
	<a href="#"><i class="icon-file-text2"></i> <span>System Messaging</span></a>
	<ul>
		<li class="<?php if($pID==24){echo 'active';} ?>"><a href="messages.php"><i class="icon-list"></i>Messages</a></li>
	</ul>
</li>



<!-- mnu END 24 -->
							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">
