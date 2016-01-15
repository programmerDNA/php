<?php
header("Content-Type: text/html; charset=UTF-8");

$name = $_POST['name'];
$password  = $_POST['pw'];

?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<?php
if( $name== "bts" && $password="army" ){
   setCookie('isLogin', '1');
   setCookie('name', $name);
?>

<h1>로그인 완료!</h1>
I know you, your name is  <?=$name?>!!<br>
Your password is <?=$password?><br>
return to log in page <a href="./postForm.php">go back</a>

<?php
}else{
setCookie('isLogin', '0');
setCookie('name', '');
?>
<h1>who are you?</h1>
no matching ID, password!<br>
try agian.
return to log in page <a href="./postForm.php">go back</a>
<?php
}
?>
