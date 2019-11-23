 <?php
$servername = "localhost";
$username = "user";
$password = "password";
$dbname = "Politic";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql1 = "CREATE TABLE dataset_Candidates(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
states VARCHAR(30) PRIMARY KEY,
party1 VARCHAR(30) DEFAULT NULL,
party2 VARCHAR(30) DEFAULT NULL,
leader_1 varchar(23) DEFAULT NULL,
leader_2 varchar(21) DEFAULT NULL,
picture_l1 varchar(10) DEFAULT NULL,
picture_l2 varchar(10) DEFAULT NULL 
)";
if ($conn->query($sql1) === TRUE) {
    echo "Table dataset_Candidates created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql2 = "CREATE TABLE `dataset_HistoryAgriculture` (
  `states` varchar(27) PRIMARY KEY,
  `a2019.0` decimal(3,1) DEFAULT NULL,
  `a2014.0` decimal(3,1) DEFAULT NULL,
  `a2009.0` decimal(3,1) DEFAULT NULL,
  `a2004.0` decimal(3,1) DEFAULT NULL,
  `a1999.0` decimal(3,1) DEFAULT NULL
)";
if ($conn->query($sql2) === TRUE) {
    echo "Table dataset_HistoryAgriculture created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql3 = "CREATE TABLE `dataset_HistoryHome` (
  `states` varchar(27) PRIMARY KEY,
  `h2019.0` decimal(3,1) DEFAULT NULL,
  `h2014.0` decimal(3,1) DEFAULT NULL,
  `h2009.0` decimal(3,1) DEFAULT NULL,
  `h2004.0` decimal(3,1) DEFAULT NULL,
  `h1999.0` decimal(3,1) DEFAULT NULL
)";
if ($conn->query($sql3) === TRUE) {
    echo "Table dataset_HistoryHome created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql3 = "CREATE TABLE `dataset_Party` (
  `Party Name` varchar(37) DEFAULT NULL,
  `Agriculture` decimal(3,1) DEFAULT NULL,
  `Education` decimal(3,1) DEFAULT NULL,
  `Infrastructure` decimal(3,1) DEFAULT NULL,
  `Millitary` decimal(3,1) DEFAULT NULL,
  `Industry` decimal(3,1) DEFAULT NULL,
  `Telecom` decimal(3,1) DEFAULT NULL,
  `Other` decimal(3,1) DEFAULT NULL
)";
if ($conn->query($sql3) === TRUE) {
    echo "Table dataset_Party created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();
?>
