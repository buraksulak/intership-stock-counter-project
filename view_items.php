<?php
include 'db.php';

$sql = "SELECT * FROM stock_items";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Stock Items</h2>";
    echo "<table border='1'><tr><th>ID</th><th>İsim</th><th>Miktar</th><th>Açıklama</th><th>Düzenle</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['amount']}</td>
                <td>{$row['description']}</td>
                <td><a href='edit_item.php?id={$row['id']}'>Edit</a></td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
