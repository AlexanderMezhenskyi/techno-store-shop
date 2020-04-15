<?php
session_start();

if (!isset($_SESSION['login']) || $_SESSION['login'] !== 'on') {
    header('Location: index.php');
}

$pageTitle = 'Добавить товар';
include('templates/_head.php');
?>

<!-- white-plate -->
<div class="white-plate">
    <div class="container-fluid">
        <!-- header -->
        <div class="header">
            <div class="row">
                <div class="col-md-10">
                    <div class="site-logo">
                        Админ панель
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="admin-link">
                        <!-- <i class="fas fa-unlock-alt"></i> -->
                        <a href="../index.html">
                            <img width="38" src="../img/icons/logout.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- // header -->
        <div class="line-between"></div>
        <!-- content block -->
        <div class="row">
            <div class="col-12">
                <div class="title-1">Добавить товар</div>

                <form method="post" action="add-new.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Название">
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="category">
                            <option value="Телефоны">Телефоны</option>
                            <option value="Планшеты">Планшеты</option>
                            <option value="Ноутбуки">Ноутбуки</option>
                            <option value="Компьютеры">Компьютеры</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Цена">
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" name="sale">
                        <label class="form-check-label" for="inlineCheckbox1">распродажа</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="new">
                        <label class="form-check-label" for="inlineCheckbox2">новинка</label>
                    </div>

                    <div class="form-group pt-3">
                        <label for="exampleFormControlFile1">Фото:</label>
                        <input name="img" type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Описание:</label>
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Добавить</button>
                    </div>
                </form>

            </div>

        </div>
        <!-- content block -->
    </div>
</div>
<!-- // white-plate -->
<?php include('templates/_footer.php'); ?>
