<?php
// Дерекқорға қосылу
$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'restaurant_db';

$conn = new mysqli($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die("Қосылу сәтсіз: " . $conn->connect_error);
}

// Пікірлерді алу
$sql = "SELECT name, comment, created_at FROM reviews ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h3>Қонақтардың пікірлері:</h3>";
    while ($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h4>" . htmlspecialchars($row['name']) . "</h4>";
        echo "<p>" . htmlspecialchars($row['comment']) . "</p>";
        echo "<small>" . $row['created_at'] . "</small>";
        echo "</div><hr>";
    }
} else {
    echo "<p>Әзірге пікірлер жоқ.</p>";
}

$conn->close();
?>
