
<?php




$Telephone=$_POST['tel'];
$Probleme=$_POST['probleme'];


$host = "localhost";
$username = "root";
$password = "";
$dbname = "cars";


$mysqli= new mysqli($host,$username,$password,$dbname);

$statement=$mysqli->prepare("insert into users(Probleme,Telephone) values(?,?);");

$statement->bind_param('ss',$Probleme,$Telephone);
$statement->close();
header("Location: index.php?message=success");
?>