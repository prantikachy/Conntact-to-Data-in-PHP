<?php



$servername = "localhost";
$username = "root";
$password = "";
$database = "prantika";

$con = mysqli_connect($servername, $username, $password, $database);
if(!$con){
    die("failed to Connect". mysqli_connect_error());

}
else{
    echo "Connected Successfully<br>";
}

$name = "Prantika";
$from = "Sulakbahar";

$sql = "INSERT INTO `dola` (`name`, `from`) VALUES ('$name', '$from')";


$result = mysqli_query($con, $sql);

if($result){
    echo "record has been inserted<br>";
}
else{
    echo "error----->" .mysqli_error($con);
}





?>