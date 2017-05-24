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
print_r(get_file_dir('http://127.0.0.1'));
echo "\n";
print_r(get_file_dir('http://127.0.0.1/phpunit_codeigniter'));
echo "\n";
