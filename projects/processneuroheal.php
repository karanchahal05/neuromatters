<?php
  session_start();  
  echo "<script>console.log('jdkafak')</script>";
  $object1 = $_POST['object1'];
  $object2 = $_POST['object2'];
  $object3 = $_POST['object3'];
  $object4 = $_POST['object4'];
  $object5 = $_POST['object5'];

  $objectnames = array();

  for ($x=0; $x<5; $x++) {
    $narr = explode("." , $_SESSION["result"][$_SESSION["arrayofobjects"][$x]]['srcname']);
    $name = $narr[0];
    array_push($objectnames, $name);
  }

  $points = 0;

  $object1 = str_replace(' ', '', strtolower($object1));
  $object2 = str_replace(' ', '', strtolower($object2));
  $object3 = str_replace(' ', '', strtolower($object3));
  $object4 = str_replace(' ', '', strtolower($object4));
  $object5 = str_replace(' ', '', strtolower($object5));

  if ($object1 == $objectnames[0]) {
    $points += 1;
  }
  if ($object2 == $objectnames[1]) {
    $points += 1;
  }
  if ($object3 == $objectnames[2]) {
    $points += 1;
  }
  if ($object4 == $objectnames[3]) {
    $points += 1;
  }
  if ($object5 == $objectnames[4]) {
    $points += 1;
  }

  $_SESSION["scorem"] = 'on';
  $_SESSION["score"] += $points;

  $_SESSION["possiblescorem"] = 'on';
  $_SESSION["possiblescore"] += 5;

  $_SESSION["continue"] = 'true';

  header("Location: ../projects/neuroheal.php");
?>
