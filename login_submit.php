<?php
$db_hostname = "127.0.0.1";
$db_username = "root";
$db_password = "";
$db_name = "get_ur_way";

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if(!$conn) {
    echo "Connection failed: " .mysqli_connect_error();
    exit;
}

if(isset($_POST['email'])){
$email = $_POST['email'];
}
if(isset($_POST['password'])){
$password = $_POST['password'];
}
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

$result = mysqli_query($conn, $sql);
if(!result) {
    echo "Error: " . mysqli_error($conn);
    exit;
}

$row = mysqli_fetch_assoc($result);
if($row) {
    echo "Hello" . $row['name'] . "<br/>";
}
else {
    echo "Login failed <br/>";

}

mysqli_close($conn);

?>