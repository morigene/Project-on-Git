  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php
				if($userRow!=0){

				echo "../admin_work/".$userRow['logo'];
				}
			  else if($admin_userRow !=0){
				echo  "../admin_work/".$admin_userRow['logo'];  
				  
			  }
			  else if($superadmin_userRow!=0){
				 echo "../school_images/logo_datasystem.jpg"; 
			  }
		  ?>
		  " class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        <p><?php 
		
					if($userRow!=0){
			     echo  $userRow['abbreviation'];
			  }
			  else if($admin_userRow !=0){
				echo  $admin_userRow['abbreviation'];  
				  
			  }
			  else if($superadmin_userRow!=0){
				  echo  "SuperAdmin"; 
			  }
		
		?><br/>
        </p>

			<a href="#"><i class="fa fa-circle text-success"></i> 
			<?php 
			//echo $userRow['class_name']
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

		
		<li class="header">MAIN NAVIGATION</li>
		


		

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>