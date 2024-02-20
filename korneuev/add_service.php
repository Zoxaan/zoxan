<?php
// Подключение к базе данных
$servername = "localhost";
$username = "zoxan";
$password = "123";
$dbname = "textovarorg";

try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Ошибка подключения: " . $e->getMessage();
    exit;
}

// Проверка, была ли отправлена форма для добавления услуги
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    try {
        // Подготовка и выполнение запроса на добавление новой услуги
        $stmt = $db->prepare("INSERT INTO services (name, price, description) VALUES (:name, :price, :description)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':description', $description);
        $stmt->execute();

        // Перенаправление на страницу просмотра услуг после успешного добавления
        header("Location: view_services.php");
        exit;
    } catch(PDOException $e) {
        echo "Ошибка добавления услуги: " . $e->getMessage();
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить услугу</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Добавить услугу</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group">
            <label for="name">Название:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="price">Цена:</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="form-group">
            <label for="description">Описание:</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Добавить услугу</button>
    </form>
</div>
</body>
</html>
