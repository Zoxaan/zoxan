<?php include "header.php"; ?>
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

// Получение списка товаров
$stmt = $db->query("SELECT * FROM products");
$products = $stmt->fetchAll();
?>

<h2>Просмотр товаров</h2>

<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #f2f2f2;
    }
    img {
        max-width: 100px;
        height: auto;
    }
</style>

<table>

    <tr>
        <th>ID</th>
        <th>Название</th>
        <th>Цена</th>
        <th>Описание</th>
        <th>Изображение</th>
        <th>Действие</th>
    </tr>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo $product['id']; ?></td>
                <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['price']; ?></td>
                <td><?php echo $product['description']; ?></td>
                <td><img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>"></td>
                <td>
                    <!-- Кнопка для удаления товара -->
                    <form method="post" action="delete_product.php">
                        <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                        <button type="submit">Удалить</button>
                    </form>
                </td>
                <td>
                    <!-- Кнопка для редактирования товара -->
                    <form method="get" action="edit_product.php">
                        <a href="edit_product.php?id=<?php echo $product['id']; ?>">Редактировать</a>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>


</table>
