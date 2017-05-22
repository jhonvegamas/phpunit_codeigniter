<?php
$enlace = mysql_connect('localhost', 'root', '');
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}

$sql = 'CREATE DATABASE torneo';
if (mysql_query($sql, $enlace)) {
    echo "Database created successfully\n\n";
} else {
    echo 'Error creating database: ' . mysql_error() . "\n";
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "torneo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "
CREATE TABLE IF NOT EXISTS `match` (
  `id_match` int(11) NOT NULL,
  `id_tournament` int(11) NOT NULL,
  `id_phase` int(11) NOT NULL,
  `team_id_a` int(11) NOT NULL,
  `score_a` int(2) NOT NULL,
  `team_id_b` int(11) NOT NULL,
  `score_b` int(2) NOT NULL,
  PRIMARY KEY (`id_match`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";

if ($conn->query($sql) === TRUE) {
    echo "Table match created successfully\n\n";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "
CREATE TABLE IF NOT EXISTS `phase` (
  `id_phase` int(11) NOT NULL AUTO_INCREMENT,
  `id_tournament` int(11) NOT NULL,
  `name` varchar(21) NOT NULL,
  PRIMARY KEY (`id_phase`,`id_tournament`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
";

if ($conn->query($sql) === TRUE) {
    echo "Table phase created successfully\n\n";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "
CREATE TABLE IF NOT EXISTS `team` (
  `id_team` int(11) NOT NULL AUTO_INCREMENT ,
  `name` varchar(25) NOT NULL ,
  `tournament` varchar(25) NOT NULL ,
  PRIMARY KEY (`id_team`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";

if ($conn->query($sql) === TRUE) {
    echo "Table team created successfully\n\n";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "
CREATE TABLE IF NOT EXISTS `tournament` (
  `name` varchar(21) NOT NULL,
  `user_email` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  `image_url` varchar(45) NOT NULL,
  `color` varchar(8) NOT NULL,
  PRIMARY KEY (`name`,`user_email`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";

if ($conn->query($sql) === TRUE) {
    echo "Table tournament created successfully\n\n";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "
CREATE TABLE IF NOT EXISTS `user` (
  `email` varchar(45) NOT NULL,
  `user_name` varchar(12) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";

if ($conn->query($sql) === TRUE) {
    echo "Table user created successfully\n\n";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
