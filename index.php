<?php
$pageTitle = 'Главня страница';
include('./templates/_head.php');
require('./config.php');
?>

    <!-- white-plate -->
    <div class="white-plate">
        <div class="container-fluid">
            <!-- header -->
            <?php include('templates/_header.php'); ?>
            <!-- // header -->
            <div class="line-between"></div>
            <!-- content block -->
            <div class="row">
                <!-- Left aside -->
                <?php include('templates/_aside.php'); ?>
                <!-- // Left aside -->
                <!-- Center Part -->
                <div class="col-md-9 col-lg-10">
                    <div class="row">

                        <!-- Товар 1 -->
                        <?php
                        //2. Описываем запрос к базе данных
                        $sql = "SELECT * FROM products";

                        //3. Выполняем запрос к базе данных и результат записываем в переменную
                        $result = $db->query($sql);

                        //4. Преобразовываем ответ в ассоциативный массив и зыписываем в переменную
                        $products = $result->fetchAll(PDO::FETCH_ASSOC);

                        foreach ($products as $product) {
                            include('./templates/_product-item.php');
                        }

                        ?>
                        <!-- // Товар 1 -->

                    </div>
                </div>
                <!-- // Center Part -->
            </div>
            <!-- content block -->
        </div>
    </div>
    <!-- // white-plate -->
<?php include('templates/_footer.php'); ?>