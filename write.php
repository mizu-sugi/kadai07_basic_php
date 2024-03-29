<?php
$name = $_POST["name"];
$email = $_POST["email"];
$company = $_POST["company"];

if (isset($_POST['bottlenecks']) && is_array($_POST['bottlenecks'])) {
    $bottlenecks = implode("、", $_POST["bottlenecks"]);
}

if (isset($_POST['conditions']) && is_array($_POST['conditions'])) {
    $conditions = implode("、", $_POST["conditions"]);
}
//  if (isset($_POST["bottlenecks"])) {
//      foreach ($_POST["bottlenecks"] as $bottleneck) {
//          echo htmlspecialchars($bottleneck, ENT_QUOTES, 'UTF-8') . "<br>";
//      }
//  } else {
//      echo "何も選択されていません。<br>";
//  }

//  if (isset($_POST["conditions"])) {
//      foreach ($_POST["conditions"] as $condition) {
//          echo htmlspecialchars($condition, ENT_QUOTES, 'UTF-8') . "<br>";
//              }
//  } else {
//      echo "何も選択されていません。<br>";
//  }

$memo = $_POST["memo"];
$c = ",";
$str = $name.$c.$email.$c.$company.$c.$bottlenecks.$c.$conditions.$c.$memo;


$file = fopen("data.csv", "a");
fwrite($file, $str."\n");
fclose($file);

header("Location: index.php");
exit;
?>
