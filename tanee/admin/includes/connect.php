<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php $dbhost='localhost';
$dbuser='root';
$dbpass='';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass);//it opean a connection

if(!$conn)
{
  die('Could not connect: '.mysqli_error ($conn));
}
echo '';

echo "<hr>";
$db=mysqli_select_db($conn,'sasini');//select the database

if(!$db)
{
  echo 'select the database first' ;
}
 else
{
  echo '';
  // this php form should be insert in local(C:\wamp\www\104_tanee) after that to execute the program (internet-->localhost:81/104_tanee)
}
?>
</body>
</html>
