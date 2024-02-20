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

// Проверка наличия идентификатора товара в запросе
if(isset($_POST['id'])) {
    // Получение идентификатора товара из запроса
    $id = $_POST['id'];

    try {
        // Подготовка запроса на удаление товара из базы данных
        $stmt = $db->prepare("DELETE FROM products WHERE id = :id");
        // Привязка значения параметра к запросу
        $stmt->bindParam(':id', $id);
        // Выполнение запроса
        $stmt->execute();

        // Перенаправление обратно на страницу просмотра товаров после успешного удаления
        header("Location: view_products.php");
        exit;
    } catch(PDOException $e) {
        echo "Ошибка удаления товара: " . $e->getMessage();
        exit;
    }
} else {
    // Если идентификатор товара не указан в запросе, выводим сообщение об ошибке
    echo "Ошибка: Идентификатор товара не указан.";
    exit;
}
?>
