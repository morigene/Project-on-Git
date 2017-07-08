  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php		  
		  			  if($userRow!=0){
						echo "../school_images/logo_datasystem.jpg";
			  }
			  else if($admin_userRow !=0){
				echo  "../admin_work/".$admin_userRow['logo'];  
				  
			  } ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        <p><?php 
			if($userRow!=0){
			  echo  "SuperAdmin"; 
			  }
			  else if($admin_userRow !=0){
				echo  $admin_userRow['abbreviation'];  
				  
			  } 
		
		?><br/>
        </p>

			<a href="#"><i class="fa fa-circle text-success"></i> <?php 
			
			if($userRow!=0){
			     echo  $userRow['class_name'];
			  }
			  else if($admin_userRow !=0){
				echo "Admin";  
				  
			  }
			  else if($superadmin_userRow!=0){
				  echo  "SuperAdmin"; 
			  }
			
			?></a>

			</div>
      </div>
      <!-- search form -->
 <!--     <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>   -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">

		<li class="header">ADMINISTRATOR'S MAIN NAVIGATION</li>
        
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Accounts</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
				  <span class="label label-primary pull-right"></span>
                </span>
          </a> 
          <ul class="treeview-menu">
            <li><a href="../admin_teachers_accounts_functionality/admin_teachers_view.php?school_id=<?php echo $_GET['school_id']?>"><i class="fa fa-circle-o"></i> Staff Accounts</a></li>
            <li><a href="../admin_students_accounts_functionality/admin_students_view.php?school_id=<?php echo $_GET['school_id']?>"><i class="fa fa-circle-o"></i> Students Accounts</a></li>
 <!--           <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li> -->
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-group"></i>
            <span>School Structure</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
				 
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../admin_class_functionality/class_function.php?school_id=<?php echo $_GET['school_id']?>"><i class="fa fa-circle-o"></i> Classes </a></li>
            <li><a href="../admin_course_functionality/course_function.php?school_id=<?php echo $_GET['school_id']?>"><i class="fa fa-circle-o"></i> Courses </a></li>
 <!--           <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li> -->
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Library</span>
           <span class="pull-right-container">
			  <i class="fa fa-angle-left pull-right"></i>
              			  
            </span>

			</a>
          <ul class="treeview-menu">
            <li><a href="../book_functionality/admin_library.php?school_id=<?php echo $_GET['school_id']?>"><i class="fa fa-circle-o"></i> Books</a></li>
            <li><a href="../past_paper_function/view_admin.php?school_id=<?php echo $_GET['school_id']?>"><i class="fa fa-circle-o"></i> Past Papers</a></li>

		  </ul>
        </li>
        <li>
          <a href="../news_feed_functionarity/view_post.php?school_id=<?php echo $_GET['school_id'] ?>">
            <i class="fa fa-newspaper-o"></i> <span>News Feeds</span>
 <!--           <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span> -->
          </a>
        </li>
		
        <li>
          <a href="../admin_posts/posts.php?school_id=<?php echo $_GET['school_id'] ?>">
            <i class="glyphicon glyphicon-bookmark"></i> <span>Communications</span>
 <!--           <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span> -->
          </a>
        </li>



		
		
     </ul>
    </section>
    <!-- /.sidebar -->
  </aside>