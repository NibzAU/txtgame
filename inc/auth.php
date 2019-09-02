<?php
  session_start();
  $cp = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  echo $cp;

  if(!isset($_POST['username'])){
    print ("USERNAME NOT SET");

  }else{
    $unameResult;
    $uname=$_POST['username'];
    print ('uname = ' . $uname);
    $pass = $_POST['password'];
    $qry5 = ("SELECT * FROM users where username = '$uname' AND password = '$pass'");
    $result = mysqli_query($conn, $qry5);
    if (mysqli_num_rows($result) == 0){
      Print("EMPTY RESULT");
    }else{
      Print("CAUGHT RESULT!");

    }
  }

  /*

      foreach ($result  as $row) {
        $unameResult =  $row['username'];
      }
      if($uname == $unameResult){
        $_SESSION['loggedin'] = true;
      }

      }
  */
   ?>
