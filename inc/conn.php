<?php

$host = 'localhost';
$username = 'nibz';
$password = 'password123';
$database = 'txtSpace';
$email = "my@email.com";

$playerUsername;
$playerLevel;
$playerMoney;
$playerPoints;


$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn){
  echo 'connection error' . mysqli_connect_error();
}

/*
$sql = "SELECT * from users WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

if ( mysqli_num_rows($result) == 1){
  while($row = mysqli_fetch_assoc($result)) {
    $playerUsername = $row['username'];
    $playerLevel = $row['level'];
    $playerMoney = $row['money'];
    $playerPoints = $row['points'];
}

}else{
    echo "no one available";
}
*/
$player = new Character();

?>
