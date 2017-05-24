<?php
echo "_________________________________________\n";
  $bd_host = "localhost";
  $bd_usuario = "root";
  $bd_password = "";
  $bd_base = "torneo";

	$con = mysql_connect($bd_host, $bd_usuario, $bd_password);  
	mysql_select_db($bd_base, $con);
  echo "_________________________________________\n";


function get_file_dir() {
    global $argv;
    $dir = dirname(getcwd() . '/' . $argv[0]);
    $curDir = getcwd();
    chdir($dir);
    $dir = getcwd();
    chdir($curDir);
    return $dir;
}
echo "______________________________________________________________ \n";
echo file_get_contents('http://127.0.0.1/phpunit_codeigniter/index.php/phpunit/teamTest/eliminar_equipo');
echo "______________________________________________________________ \n";
print_r(get_file_dir('http://127.0.0.1/phpunit_codeigniter/index.php/phpunit/teamTest/eliminar_equipo'));
echo "\n";
