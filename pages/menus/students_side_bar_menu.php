  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo "../admin_work/".$userRow['logo']?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        <p><?php echo $userRow['abbreviation']?><br/>
        </p>

			<a href="#"><i class="fa fa-circle text-success"></i> <?php echo $userRow['class_name']?></a>

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

		
		<li class="header">MAIN NAVIGATION</li>
		

        <li>
          <a href="../folder_functionality/students_folder_list_view.php?folder_id=0 &course_id=<?php echo $_GET['course_id']; ?>">
            <i class="glyphicon glyphicon-folder-close"></i> <span>Content</span>

          </a>
        </li>	
		<li>
          <a href="../chat_student/student_posts.php?course_id=<?php echo $_GET["course_id"]?>&folder_id=<?php echo $_GET["folder_id"]?>">
            <i class="fa fa-user"></i> <span>Teacher</span>
 <!--           <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span> -->
          </a>
        </li>
		
<!--        <li>
          <a href="#">
            <i class="fa fa-question"></i> <span>Assesments</span>

          </a>
        </li>
-->		
<!--		<li>
          <a href="#">
            <i class="glyphicon glyphicon-user"></i> <span>Teacher</span>
 <!--           <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span> -->
 <!--         </a>
        </li>
<!--		
        <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i>
            <span>Communications</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Inbox</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Class</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> School</a></li>
   
          </ul>
        </li>
	-->	
		

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>