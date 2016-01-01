<?php

$title = $_POST['title'];
$content = $_POST['textArea'];

echo($title)."<br><br>";
echo($content);

$db_connect = mysqli_connect('localhost', 'root', '', 'filehost');

  if($db_connect == false){
    echo('could not connect to server');
  } 

  elseif ($db_connect == true) {
      echo('connected to server');
    }

?>
