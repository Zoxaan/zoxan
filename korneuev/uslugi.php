<?php include "header.php"; ?>
    <style>
        .card {
            border: none;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }
        .card-body {
            padding: 1.25rem;
        }
        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: #333;
        }
        .card-text {
            font-size: 1rem;
            color: #666;
        }
        .btn-primary {
            background-color: #00853D;
            border-color: #00853D;
        }
        .btn-primary:hover {
            background-color: #005E28;
            border-color: #005E28;
        }
    </style>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="https://printeco.ru/upload/iblock/e63/e63ac07ddb3bda49708fe77cf11b7322.jpg" class="card-img" alt="Alt текст">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">IT аутсорсинг</h5>
                            <p class="card-text">Обслуживание компьютерной инфраструктуры и торгового оборудования.</p>
                            <a href="autsoring.php" class="btn btn-primary">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-4">
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="https://printeco.ru/upload/iblock/e98/e984da4a06d0d6f09db6b240c533e907.jpg" class="card-img" alt="Alt текст">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Аренда принтеров</h5>
                            <p class="card-text">Принтеры и МФУ различных марок в аренду!</p>
                            <a href="arendprinter.php" class="btn btn-primary">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-4">
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="https://printeco.ru/upload/iblock/c1d/c1d882e256b399cb4070d12796501c66.jpg" class="card-img" alt="Alt текст">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Ремонт и обслуживание оргтехники</h5>
                            <p class="card-text">Абонентское обслуживание и разовый ремонт офисной оргтехники.</p>
                            <a href="remont.php" class="btn btn-primary">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-4">
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="https://printeco.ru/upload/iblock/feb/feb4979b8ac2d17e4cb90277d8469e4b.jpg" class="card-img" alt="Alt текст">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Покопийное обслуживание</h5>
                            <p class="card-text">Вы платите только за фактически отпечатанные копии.</p>
                            <a href="obslujka.php" class="btn btn-primary">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Добавьте дополнительные карточки в том же формате здесь -->

    </div>
</div>
<?php include "foter.php"; ?>
</body>
