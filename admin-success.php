<?php
session_start();

if (!isset($_SESSION['login']) || $_SESSION['login'] !== 'on') {
    header('Location: index.php');
}

$pageTitle = 'Товар успешно добавлен';
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
                <div class="title-1">Товар успешно добавлен!</div>
                <a href="admin.php" class="btn btn-success">Добавить еще один товар</a>
                <a href="index.php" class="btn btn-secondary">Перейти на главную</a>

            </div>

        </div>
        <!-- content block -->
    </div>
</div>
<!-- // white-plate -->
<?php include('templates/_footer.php'); ?>
