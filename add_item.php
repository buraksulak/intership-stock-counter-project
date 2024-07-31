<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $amount = $_POST['amount'];
    $description = $_POST['description'];

    $sql = "INSERT INTO stock_items (name, amount, description) VALUES ('$name', $amount, '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<h2>Add Stock Item</h2>
<form method="post" action="">
    Name: <input type="text" name="name" required><br>
    Amount: <input type="number" name="amount" required><br>
    Description: <textarea name="description"></textarea><br>
    <input type="submit" value="Add Item">
</form>
