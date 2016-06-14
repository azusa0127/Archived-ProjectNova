<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome to nova!</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/signin.css" rel="stylesheet">

<?php
require_once('../connect.php');
$username = $_COOKIE['user'];
 $insertsql = "SELECT * FROM Members WHERE username='$username'";
 $res = mysqli_query($connect,$insertsql);
if(!$res){
    echo '<script type="text/javascript">';
    echo 'alert("the user does not exist or has expired.");';
    echo 'window.location.href = "index.php";';
    echo '</script>'; 
  }else{
 
      echo '
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Project Nova</a>
    </div>

    <ul class="nav navbar-nav">
  
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Home <span class="caret"></span></a>
        <ul class="dropdown-menu">
         <li><a>'. $_COOKIE['user'] .'</a></li>
         <li><a href="#">signout</a></li> 
        </ul>
      </li>
      
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">SEARCH <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">BY AUTHOR</a></li> 
          <li><a href="#">BY BOOK</a></li> 
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">MY FAVOURITE <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">AUTHORS</a></li> 
          <li><a href="#">BOOKS</a></li> 
        </ul>
      </li>


    </ul>
  </div>
</nav>


</body>
</html>
';
      
   }
  mysqli_free_result($res);
  mysqli_close($connect);
?>

</head>

</html>