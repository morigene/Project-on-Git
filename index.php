
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Megastore | Construction ltd</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <?PHP

   $type = "";
      $message = ""; 
      $dsn = 'mysql:host=localhost;dbname=revisephp';
      $username = 'root';
      $password = '';
      $options = array(
      PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
      PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION,
      );
      $connPDO = new PDO($dsn, $username, $password, $options);
   if(isset($_POST['login'])){
   $query="SELECT * FROM users WHERE email =:username AND password=:password";
      $statement = $connPDO->prepare($query);
      $statement->execute(
       array(
           'username'=>$_POST["email"],
           'password'=>$_POST["password"]
         )
      );
      $number_of_rows = $statement->rowCount();
      echo $number_of_rows;

     if($number_of_rows > 0 && !empty($statement)){
       session_start();
       $_SESSION['login']=$email;
       header('Location:index2.php');
     }
     else{
     
     /*echo '<script>'.document.getElementById("Invalid email or password").'</script>';*/
     echo 'not valid';
     }
   }


/*if(isset($_POST['login'])){
$user_name = "root";
$password = "";
$database = "revisephp";
$server   = "127.0.0.1";
$uname    = $_POST['email'];
$pword    = $_POST['password'];

$db_found =new mysqli($server, $user_name, $password,$database);
$SQL = $db_found->prepare('SELECT * FROM users WHERE email = ?');
$SQL->bind_param('s', $uname);
$SQL->execute();
$result = $SQL->get_result();
if ($result->num_rows == 1) {
  $db_field = $result->fetch_assoc();
if (password_verify($pword, $db_field['password'])) {
session_start();
$_SESSION['login'] = "1";
header ("Location: index2.php");

}
else{
  echo 'password not valid';
}

}
else{

  echo 'email not valid';
}

}


/*$connect = mysqli_connect("localhost","root","","revisephp");
if (mysqli_connect_errno())
{
echo 'MySQLi Connection was not established: '. mysqli_connect_error();
}
if(isset($_POST['login'])){
 $email = mysqli_real_escape_string($connect,$_POST['email']);
 $password= mysqli_real_escape_string($connect,$_POST['password']);
 $sql ="SELECT * FROM users WHERE email = '$email' AND password ='$password' AND type='staff'";

 $run_user = mysqli_query($connect,$sql);

$check_user = mysqli_num_rows($run_user);

if($check_user > 0){
session_start();
$_SESSION['user_email']=$email;

header("location:index2.php");

}

else {

echo "<script>alert('Email or password is not correct, try again!')</script>";

}
}*/

  ?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Megastore Construction</b>LTD</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
  <div id= "message"></div>
    <p class="login-box-msg">Sign in to start your session</p>

    <form  method="POST">
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
    </div>
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3.1.1 -->
<script src="../../plugins/jQuery/jquery-3.1.1.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
