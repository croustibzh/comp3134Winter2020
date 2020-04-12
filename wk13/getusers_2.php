<form method="GET">
    <input type=text name=name>
    <input type=submit name=submit value="Submit">
</form>

<?php
$server= "localhost";
$user = "morgan";
$pass = "moejoe";
$db = "my_db";

$conn=mysqli_connect($server,$user,$pass,$db);
echo "<style>table {border: 1px solid green; width: 700px;} table td, table th {padding:1em;}</style>";

if (mysqli_connect_errno())
    echo "Connection failed: " . mysqli_connect_error();

if (isset($_GET["name"])){
    $searched = $_GET['name'];
    print("Name searched: ". $searched);
    print("<br/>");
    $stmt = $conn->prepare("SELECT * FROM Users WHERE firstname LIKE ? AND active LIKE 1");
    $stmt->bind_param("s",$pname);
    $pname = $_GET['name'];
    $stmt->execute();
    $result = $stmt->get_result();

    echo "<table><tr><th>Username</th><th>Email</th><th>FirstName</th><th>LastName</th><th>Active</th>";
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc())
        {
            echo "<tr>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['firstname'] . "</td>";
            echo "<td>" . $row['lastname'] . "</td>";
            echo "<td>" . $row['active'] . "</td>";
            echo "</tr>";
        }
        echo "</tr></table></body></html>";
    }
}
mysqli_close($conn);

?>
