<?php
function get_file_dir() {
    global $argv;
    $dir = dirname(getcwd() . '/' . $argv[0]);
    $curDir = getcwd();
    chdir($dir);
    $dir = getcwd();
    chdir($curDir);
    return $dir;
}
echo file_get_contents('http://127.0.0.1/index.php/phpunit/teamTest/eliminar_equipo');
echo "\n";
echo file_get_contents('http://127.0.0.1/phpunit_codeigniter/index.php/phpunit/teamTest/eliminar_equipo');
echo "\n";
echo file_get_contents('http://127.0.0.1/phpunit_codeigniter/phpunit/teamTest/eliminar_equipo');
echo "\n";
echo file_get_contents('http://127.0.0.1/phpunit/teamTest/eliminar_equipo');
echo "\n";
print_r(get_file_dir('http://127.0.0.1'));
echo "\n";
print_r(get_file_dir('http://127.0.0.1/phpunit_codeigniter'));
echo "\n";
