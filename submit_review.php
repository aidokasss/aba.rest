<?php
// Дерекқорға қосылу
$host = 'localhost'; // Сервер атауы
$user = 'root';      // Логин
$pass = '';          // Құпиясөз
$db_name = 'restaurant_db'; // Дерекқор атауы

$conn = new mysqli($host, $user, $pass, $db_name);

// Қате болса, тоқтату
if ($conn->connect_error) {
    die("Қосылу сәтсіз: " . $conn->connect_error);
}

// Форма деректерін алу
$name = $_POST['name'];
$comment = $_POST['comment'];

// Деректерді кестеге қосу
$sql = "INSERT INTO reviews (name, comment) VALUES ('$name', '$comment')";

if ($conn->query($sql) === TRUE) {
    echo "Пікіріңіз сәтті сақталды!";
} else {
    echo "Қате: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
