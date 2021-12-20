require_once "login.php";
include_once "formResponse.html";
$conn = myspli_connect($host, $user, $pass, $db, $port);
if($conn->connect_error) die ($conn->connect_error);
$query = "insert into respTable
(fullName, email, msg)values(" . $_Post[name] . "," . $_Post[email] . "," . $_Post[message] . ");" ;
mysqli_query($conn, $query); 