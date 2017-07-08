  
    <?php
session_start();
include_once '../admin_work/dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location:../admin_work/index.php");
}
$query = $connect->query("SELECT * FROM students JOIN school ON school.school_id=students.school_id 
JOIN class ON students.class_id= class.class_id WHERE students.id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$connect->close();





?>
  
  <header class="main-header " >
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>G</b>ES</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>GIRA</b>eshuli</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

  		  <li>
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			<i class="fa fa-envelope-o"></i>
		    <!-------------------------------this code snippet of counts MESSAGES from DB ------------------------------->
			<span class="label label-success">
			  <?php
			   $username=$userRow['name'];
		       $user=$_SESSION['userSession'];
               $mysqli = new mysqli("localhost","root","morigene123","giraeshuli");
                /* check connection */
               if (mysqli_connect_errno()) {
               printf("Connect failed: %s\n", mysqli_connect_error());
               exit();
               }
               if ($answer_result = $mysqli->query("SELECT * FROM chats WHERE status=0 AND student_id=$user AND senders!='$username'")) {
               /* determine number of rows result set */
               $row_cnt = $answer_result->num_rows;
               printf(" %d ", $row_cnt);
              /* close result set */
              $answer_result->close();
              }
              /* close connection */
              $mysqli->close();
              ?>
			  </span> inbox</a>
			<!-------------------------------end of lines that counts MESSAGES from DB-------------------------------> 
	    <ul class="dropdown-menu">
              <!-- User image -->
           <li class="user-header">
           <p>
		   <div >
		   
		   	<!------------------------------- lines of codes that list all chatted teachers ------------------------------->

		   <?php 
            
			$user=$_SESSION['userSession'];
			$username=$userRow['name'];
			//to select differnt senders and staffs_id
            $query = "SELECT DISTINCT senders,staffs_id,course_id FROM chats WHERE status=0 AND student_id=$user AND senders!='$username' ORDER BY chat_id DESC";
            $result_by_distinct_name = mysqli_query($connection,$query);
			
            ?>
		    <div class="box-body"  style="padding: 10px 60px 10px 10px;width: 400px; height: 400px; background-color:#d1dced;font-size: 10pt; font-family: verdana, arial; overflow:auto; text-align: left;">
            <table  class="table table-striped">
			<?php 
			$index=0;
			while($row1=mysqli_fetch_array($result_by_distinct_name)){
				++$index;
				?>
			<tr>
                <td>
			    <?php echo $index;?>&nbsp;&nbsp;<?php echo $row1['senders'];?> <!--- teacher who sent MESSAGES --->
				</td>
            <td>
			<!-- To redirect to a page that reset MESSAGES (to decrement message read)-->
			<a href="../chat_student/update_status.php?staffs_id=<?php echo $row1['staffs_id'];?>&course_id=<?php echo $row1['course_id'];?> ">
			<span class="glyphicon glyphicon-user">			
			<!-- To count message-->
			<?php
            //$mysqli = new mysqli("localhost","root","","giraeshuli");
		    $user=$_SESSION['userSession'];
			$username=$userRow['name'];
            $query = $mysqli->query("SELECT COUNT(senders) AS num FROM chats WHERE status=0 AND student_id=$user AND senders!='$username' ");
			$rows=$query->fetch_array();
            echo $rows['num']." message(s)";
            ?>
			</span>
			</a>
			<!-- To count message-->
			 
		</td>
			</tr>
			<?php }?>
		</table>
            </div>
	       </div>
              </p>
              </li>

        </ul>
			  
		  </li>
		  
		  
          <!-- Notifications: style can be found in dropdown.less 

          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>Notifications
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 class and 2 school notifications</li>
              <li>
                <!-- inner menu: contains the actual data -
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less 
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span> Agent
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 2 assignments and 3 quizzes</li>
              <li>
                <!-- inner menu: contains the actual data 
                <ul class="menu">
                  <li><!-- Task item 
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item 
                  <li><!-- Task item 
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item 
                  <li><!-- Task item 
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item 
                  <li><!-- Task item 
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item 
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
-->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../admin_work/admin_upload_edit_profile/user_images/<?php echo $userRow['picture']; ?>" class="user-image" alt="User Image">
              
			  <span class="hidden-xs"><?php echo $userRow['name']?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../admin_work/admin_upload_edit_profile/user_images/<?php echo $userRow['picture']; ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $userRow['name']?>
        <!--          <small>student since Nov. 2012</small>  -->
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
  <!--              <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>  -->
				<div class="pull-left">
                  <a href="../admin_work/admin_upload_edit_profile/student_editform.php?id=<?php echo $userRow['id']?>" class="btn btn-default btn-flat">Edit Profile</a>
                </div>
                <div class="pull-right">
                  <a href="../admin_work/logout.php?logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
 <!--         <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
		  
	-->	  
        </ul>&nbsp &nbsp &nbsp
      </div>
    </nav>
  </header>