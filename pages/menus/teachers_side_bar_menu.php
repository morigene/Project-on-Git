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
<!--
			<a href="#"><i class="fa fa-circle text-success"></i> <?php echo $userRow['class_name']?></a>
-->
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

		<li class="header">TEACHER'S MAIN NAVIGATION</li>
        <li>
          <a href="../folder_functionality/teachers_folder_list_view.php?folder_id=0 &course_id=<?php echo $_GET['course_id']; ?> ">
            <i class="glyphicon glyphicon-folder-close"></i> <span>Content</span>
 <!--           <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span> -->
          </a>
        </li>
		<li>
          <a href="../chat_staff/staff_chat_students_list.php?course_id=<?php echo $_GET["course_id"]?>&folder_id=<?php echo $_GET["folder_id"]?>">
            <i class="fa fa-user"></i> <span>Students</span>
 <!--           <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span> -->
          </a>
        </li>
		<li>
          <a href="../class_comunications/posts.php?course_id=<?php echo $_GET["course_id"]?>&folder_id=<?php echo $_GET["course_id"]?>">
            <i class="fa fa-newspaper-o"></i> <span>Class Communications</span>
 <!--           <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span> -->
          </a>
        </li>
		
		

 <!--      <li class="treeview">
          <a href="#">
            <i class="fa fa-question"></i>
            <span>Assesments</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Write Assignment</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Upload Assignment</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Add Quiz</a></li>
            <li><a href="../layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> View Assesments</a></li>
          </ul>
        </li>
-->		
<!--
        <li>
          <a href="#">
            <i class="glyphicon glyphicon-user"></i> <span>Students</span>
 <!--           <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span> -->
<!--          </a>
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
            <li><a href="#"><i class="fa fa-circle-o"></i> Add Class Communications</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> View Communications</a></li>
 <!--           <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li> 
          </ul>
        </li>
		
-->
		
		
     </ul>
    </section>
    <!-- /.sidebar -->
  </aside>