<!DOCTYPE html>
<html lang="<?=$lang ?>">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= $url ?>/assets/css/main.css">
  <title><?= $data->header->title ?></title>
</head>
<body>
  <header>
    <div class="cabecera">
      <div class="branding">
        <div class="logo">
          <a href="<?= $url ?>" class="nombre text-uppercase"><?= $data->header->title ?></a>
          <img src="<?= $url ?>/assets/img/logo.png" alt="logotipo" class="imagen">
        </div>
        <p class="slogan"><?= $data->header->slogan ?></p>
        <div class="social-media">
          <a href="<?= $url ?><?= $data->header->login->url ?>"><i class="fa-solid fa-user fa-2xl"></i></a>
          <a href="https://www.facebook.com/public/servetus" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-square-facebook fa-2xl"></i></a>
          <a href="https://www.instagram.com/servetus" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram fa-2xl"></i></a>
          <a href="http://www.twitter.com/servetus" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-square-twitter fa-2xl"></i></a>
          <a href="http://www.linkedin.com/servetus" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin fa-2xl"></i></a>
        </div>
      </div>
      <div class="menu">
        <a href="<?= $url ?>" class="c_menu text-capitalize"><?= $data->header->menu->home ?></a>
        <a href="<?= $url ?>/sobre_nosotros" class="c_menu text-capitalize"><?= $data->header->menu->about ?></a>
        <a href="<?= $url ?>/servicios" class="c_menu text-capitalize"><?= $data->header->menu->services ?></a>
      </div>
    </div>
  </header>