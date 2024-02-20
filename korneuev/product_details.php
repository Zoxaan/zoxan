<?php include "header.php"; ?>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card shadow">
                <div class="card-body">
                    <?php
                    // Подключение к базе данных
                    $servername = "localhost";
                    $username = "zoxan";
                    $password = "123";
                    $dbname = "textovarorg";

                    try {
                        $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        // Проверка наличия переданного ID товара
                        if(isset($_GET['id'])) {
                            $id = $_GET['id'];

                            // Получение информации о товаре из базы данных
                            $stmt = $db->prepare("SELECT * FROM products WHERE id = :id");
                            $stmt->bindParam(':id', $id);
                            $stmt->execute();
                            $product = $stmt->fetch(PDO::FETCH_ASSOC);

                            // Проверка, найден ли товар с указанным ID
                            if($product) {
                                // Вывод информации о товаре
                                echo '<h2 class="card-title">' . $product['name'] . '</h2>';
                                echo '<div class="text-center mb-4">';
                                echo '<img src="' . $product['image'] . '" class="img-fluid product-img" alt="Изображение товара">';
                                echo '</div>';
                                echo '<p class="card-text">' . $product['description'] . '</p>';
                                echo '<p class="card-text">Цена: ' . $product['price'] . '</p>';
                                // Добавление кнопки "Заказать"
                                echo '<a href="#" class="btn btn-success">Заказать</a>';
                                // Здесь можно добавить любую другую информацию о товаре
                            } else {
                                echo '<p class="text-danger">Товар не найден.</p>';
                            }
                        } else {
                            echo '<p class="text-danger">ID товара не указан.</p>';
                        }
                    } catch (PDOException $e) {
                        echo '<p class="text-danger">Ошибка получения данных: ' . $e->getMessage() . '</p>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "foter.php"; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
    /* Стили для установки фиксированной высоты для изображений */
    .product-img {
        height: 200px; /* Выберите желаемую высоту */
    }
</style>
</body>
