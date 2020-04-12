<form method="GET">
    <input type=text name=name>
    <input type=submit name=submit value="Submit">
</form>

<?php
$conn=mysqli_connect("localhost","morgan","moejoe","my_db");
echo "<style>table {border: 1px solid green; width: 700px;} table td, table th {padding:1em;}</style>";

if (mysqli_connect_errno())
    echo "Connection failed: " . mysqli_connect_error();

if (isset($_GET["name"])){

        print("Name searched: ". $_GET['name']);
        print("<br/>");
        $data = $conn->query("SELECT * FROM Users WHERE firstname LIKE '" . $_GET["name"] . "' AND active LIKE 1;");

        echo "<table><tr><th>Username</th><th>Email</th><th>FirstName</th><th>LastName</th><th>Active</th>";
if($data->num_rows > 0) {
while($row = $data->fetch_assoc())
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
