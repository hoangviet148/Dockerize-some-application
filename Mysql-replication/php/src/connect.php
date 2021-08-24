<?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$masterHost = 'mysql_master';
$slaveHost = 'mysql_slave';


// Database use name
$masterUser = 'mydb_user';
$slaveUser = 'mydb_slave_user';

//database user password
$masterPass = 'mydb_pwd';
$slavePass = 'mydb_slave_pwd';

// database name
$masterDatabase = 'mydb';
$slaveDatabase = 'mydb';

// check the MySQL connection status
$masterConn = new mysqli($masterHost, $masterUser, $masterPass, $masterDatabase);
if ($masterConn->connect_error) {
    die("Master Connection failed: " . $masterConn->connect_error);
} else {
    echo "Master Connected to MySQL server successfully! \n";
}

echo "<br>";

$slaveConn = new mysqli($slaveHost, $slaveUser, $slavePass, $slaveDatabase);
if ($slaveConn->connect_error) {
    die("Slave Connection failed: " . $slaveConn->connect_error);
} else {
    echo "Slave Connected to MySQL server successfully!";
}