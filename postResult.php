<?php
header("Content-Type: text/html; charset=UTF-8");

$name = $_POST['name'];
$password  = $_POST['pw'];

include('db.php');

?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<?php

//db connection
$link = mysql_connect($db['host'], $db['user'], $db['pw']);
if(!$link){
   die('Could not connect : ' . mysql_error());
}

//choose db
mysql_select_db($db['db']);
//sql write
$sql = "select * from members where id='".$name."' and pwd=password('".$password."')";
echo $sql;

$result = mysql_query($spl);
$users = mysql_fetch_assoc($result);
echo "<pre>";
print_r($users);
echo "</pre>";

exit();
//db start

//db connection end
mysql_close($link);


if( $name== "bts" && $password="army" ){
   $_SESSION['isLogin'] = 1;
   $_SESSION['name'] = $name;
?>

<h1>로그인 완료!</h1>
I know you, your name is  <?=$name?>!!<br>
Your password is <?=$password?><br>
return to log in page <a href="./postForm.php">go back</a>

<?php
}else{
$_SESSION['isLogin'] = 0;
$_SESSION['name'] = '';
?>
<h1>who are you?</h1>
no matching ID, password!<br>
try agian.
return to log in page <a href="./postForm.php">go back</a>
<?php
}
?>
