<?php
date_default_timezone_set('Africa/lagos');
$servername = "localhost"; //45.63.97.186---10.99.0.11
$username = "root"; //brytoz
$password = ""; //OzoemenA1%
$dbname = "IMT-GROUP-4";
// Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
/*	

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
	echo "successfully connected! <br>";
}



// sql to create table PGD students
$sql = "CREATE TABLE PGD (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
fullname VARCHAR(50) NOT NULL,
Reg VARCHAR(11) NOT NULL,
email VARCHAR(30),
serial VARCHAR(15) NOT NULL,
password VARCHAR(40) NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table PGD created successfully <br>";
} else {
    echo "Error creating table: <br>" . $conn->error;
}

// sql to create table PGD students file
$sql = "CREATE TABLE filePGD (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Reg VARCHAR(11) NOT NULL,
stage1 VARCHAR(2) NOT NULL,
stage2 VARCHAR(2) NOT NULL,
stage3 VARCHAR(2) NOT NULL,
report VARCHAR(2) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table PGD file uploads created successfully <br>";
} else {
    echo "Error creating table 1: <br>" . $conn->error;
}



// sql to create table PhD students
$sql = "CREATE TABLE PhD (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
fullname VARCHAR(50) NOT NULL,
Reg VARCHAR(11) NOT NULL,
email VARCHAR(30),
serial VARCHAR(15) NOT NULL,
password VARCHAR(40) NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table PhD created successfully <br>";
} else {
    echo "Error creating table4: <br>" . $conn->error;
}


// sql to create table PhD students file
$sql = "CREATE TABLE filePhD (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Reg VARCHAR(11) NOT NULL,
stage1 VARCHAR(2) NOT NULL,
stage2 VARCHAR(2) NOT NULL,
stage3 VARCHAR(2) NOT NULL,
stage4 VARCHAR(2) NOT NULL,
stage5 VARCHAR(2) NOT NULL,
stage6 VARCHAR(2) NOT NULL,
stage7 VARCHAR(2) NOT NULL,
report VARCHAR(2) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table PhD file uploads created successfully <br>";
} else {
    echo "Error creating table 1: <br>" . $conn->error;
}



// sql to create table Masters students
$sql = "CREATE TABLE Masters (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
fullname VARCHAR(50) NOT NULL,
Reg VARCHAR(11) NOT NULL,
email VARCHAR(30),
serial VARCHAR(15) NOT NULL,
password VARCHAR(40) NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Masters created successfully <br>";
} else {
    echo "Error creating table 1: <br>" . $conn->error;
}

// sql to create table Masters students file
$sql = "CREATE TABLE fileMasters (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Reg VARCHAR(11) NOT NULL,
stage1 VARCHAR(2) NOT NULL,
stage2 VARCHAR(2) NOT NULL,
stage3 VARCHAR(2) NOT NULL,
stage4 VARCHAR(2) NOT NULL,
stage5 VARCHAR(2) NOT NULL,
report VARCHAR(2) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Masters file uploads created successfully <br>";
} else {
    echo "Error creating table 1: <br>" . $conn->error;
}

// sql to create table  supervisor
$sql = "CREATE TABLE supervisor (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
fullname VARCHAR(50) NOT NULL,
school VARCHAR(4) NOT NULL,
code VARCHAR(14) NOT NULL,
password VARCHAR(40) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Masters supervisor created successfully <br>";
} else {
    echo "Error creating table2: <br>" . $conn->error;
}


*/

?>
