<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL ?>css/app.css">
    <script src="<?= URL ?>js/app.js" defer></script>
    <title><?= $title ?? 'No title' ?></title>
</head>
<header>
    <div class="hero">
        <h1 class="bankName">Central Bank</h1>
        <img class='logo' src="<?= URL ?>/bank.png" alt="logo">
    </div>
    <?php if(App\Middlewares\Auth::isLoged()) : ?>
    <div class="logout">
        <div class="name">Hi <?= $_SESSION['user']['name'] ?></div>
        <form action="<?= URL ?>logout" method="post">
        <button type="submit" class="nav-btn">Logout</button>
        </form>
    </div>
    <?php else : ?>     
    <div class="login">
        <a class="nav-btn" href="<?=URL?>login">Login</a>
    </div>
    <?php endif ?>
</header>

<body>
    <?php
    App\App::view('nav');
