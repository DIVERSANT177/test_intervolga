<!doctype html>
<html lang=ru>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Тестовое задание</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://kit.fontawesome.com/d326a8df2a.css" crossorigin="anonymous">
</head>
<body>
<header>
    <nav class="navbar bg-secondary">
        <div class="container-fluid">
            <a href="/" class="navbar-brand">
                Главная
            </a>
            <?php if($_SESSION['user'] == ''){ ?>
            <div class="d-flex justify-content-around w-25">
                <a href="/admin/login" class="text-decoration-none text-black">
                    Авторизация
                </a>
                <a href="/admin/registration" class="text-decoration-none text-black">
                    Регистрация
                </a>
            </div>
            <?php } else { ?>
                <div class="d-flex justify-content-around w-25">
                    <div>
                        <a href="/admin/personalAccount" class="text-decoration-none text-black">
                            Личный кабинет
                        </a>
                    </div>
                    <a href="/admin/logout" class="text-decoration-none text-black">
                        Выход
                    </a>
                </div>
            <?php } ?>
        </div>
    </nav>
</header>