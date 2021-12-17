require_once "login.php";
include_once "response.html";
$conn = myspli_connect($host, $user, $pass, $db, $port);
if($conn->connect_error) die ($conn->connect_error);
while ($row = mysqli_fetch_assoc($result)) { 
    echo  $row["fullName"] . "," . $row["email"] . ":" . $row["msg"];
}