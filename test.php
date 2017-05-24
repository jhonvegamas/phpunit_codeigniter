<?php
function getFruit($conn) {
  $sql = 'select * from team;';
  foreach ($conn->query($sql) as $row) {
      print $row['id_team'] . "\t";
      print $row['name'] . "\t";
      print $row['tournament'] . "\n";
  }
}
echo "_________________________________________\n";
  $bd_host = "sql9.freesqldatabase.com";
  $bd_usuario = "sql9176210";
  $bd_password = "XeSgbE1QAr";
  $bd_base = "sql9176210";

	$con = mysqli_connect($bd_host, $bd_usuario, $bd_password);

  $db_select = mysqli_select_db($con, $bd_base);
  if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
  }
  getFruit($con);
  echo "_________________________________________\n";
