<?php

$db = new PDO("mysql:host=localhost;dbname=autoecole;charset=utf8","root", "winner");

/*$sql ="CREATE TABLE IF NOT EXISTS drivers(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    category VARCHAR(10) NOT NULL,
    price INT NOT NULL,
    date_search DATE NULL,
    created_at DATETIME NOT NULL,
    update_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)
engine='MyIsam'
";*/
$sql1 = "ALTER TABLE recyclings engine=innoDB";

$db->exec($sql1);