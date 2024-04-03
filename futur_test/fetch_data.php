<?php
include '../config/config.php';

$conn = new mysqli($servername, $username, $password, "myDB");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM votre_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Nom: " . $row["nom"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
