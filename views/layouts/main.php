<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pop it MVC</title>

    <link rel="stylesheet" href="/css/styles.css">


</head>
<body>
<header>
    <nav>
        <a href="<?= app()->route->getUrl('/') ?>">Главная</a>
        <?php
        if (!app()->auth::check()):
            ?>

            <a href="<?= app()->route->getUrl('/login') ?>">Вход</a>

        <?php
        else:
            ?>
            <?php if (app()->auth::user() && app()->auth::user()->role_id == 1): ?>
                <a href="<?= app()->route->getUrl('/admin') ?>">Админ-панель</a>
                <a href="<?= app()->route->getUrl('/admin/directory') ?>">Вся информация</a>
                <a href="<?= app()->route->getUrl('/signup') ?>">Регистрация нового пользователя</a>
            <?php endif; ?>

            <a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a>

            <?php if (app()->auth::user() && app()->auth::user()->role_id == 2): ?>
                <a href="<?= app()->route->getUrl('/my-phones') ?>">Мои телефоны</a>
            <?php endif; ?>


        <?php
        endif;
        ?>
    </nav>
</header>
<main>
    <?= $content ?? '' ?>
</main>

</body>
</html>
