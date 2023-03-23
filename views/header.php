<!DOCTYPE html>
<html lang="<?=$lang ?>">
<head>
  <!--  Meta info  -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="<?= $setup->project->meta->description ?>" />
  <meta name="author" content="<?= $setup->project->meta->author ?>" />
  <meta name="keywords" content="<?= implode(', ', $setup->project->meta->keywords)?>"/>
  <title><?= $header->title ?></title>
  <!--  Site image  -->
  <link rel="icon" type="image/x-icon" href="<?= $setup->project->directories->paths->assets->img ?>favicon.ico" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Google fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
  <!-- Core CSS (includes Bootstrap)-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
  <!--  Project CSS -->
  <link href="<?= $setup->project->directories->paths->assets->css ?>main.css" rel="stylesheet" />
</head>
<body>
<header>
<nav class="navbar navbar-light navbar-expand-md pt-md-4">
  <div class="container-fluid">
    <a class="navbar-brand align-self-start" href="<?= HOST ?>"><?= $header->title ?></a>
    <span class="navbar-text align-self-start position-lg-absolute" style="left: 10em">
      <?= $header->slogan ?>
    </span>
    <button class="navbar-toggler w-100 mt-2 mt-md-0 mb-4 mb-md-0" data-bs-toggle="collapse" data-bs-target="#navcol-1">
        <span class="visually-hidden">
          Toggle navigation
        </span>
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navcol-1" class="collapse navbar-collapse">
      <div class="row w-100">
        <div class="col-12">
          <ul class="navbar-nav text-capitalize text-sm-center flex-row justify-content-evenly">
            <li class="nav-item">
              <a class="nav-link" href="<?= HOST ?>">
                <?= $header->menu->home->title ?>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= $header->menu->about->url ?>">
                <?= $header->menu->about->title ?>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?= $header->menu->services->title ?>
              </a>
              <ul class="dropdown-menu position-absolute">
                <?php
                  foreach ($header->menu->services->url as $key => $value) {
                    $url = get_path().DIRECTORY_SEPARATOR.$value->url;
                    echo <<<HTML
                    <li>
                      <a class="dropdown-item" href="$url">
                        $value->title
                      </a>
                    </li>
                    HTML;
                  }
                ?>
              </ul>
            </li>
          </ul>
        </div>
        <div class="col-12 order-first">
          <ul class="navbar-nav float-md-end flex-row justify-content-evenly text-center">
            <li class="nav-item ms-2 ms-md-0 me-2 me-md-4">
              <a class="btn btn-primary rounded-pill" style="width: 9em" href="<?= HOST . $header->menu->login->url ?>">
                <span class="d-flex align-items-start">
                  <i class="bi bi-person-fill me-2"></i>
                  <span><?= $header->menu->login->title ?></span>
                </span>
              </a>
            </li>
            <?php
              foreach($header->socials as $value){
                echo <<<HTML
                <li class="nav-item">
                  <a class="nav-link me-lg-2 p-2" href="$value->url">
                    <i class="$value->icon fs-5"></i>
                  </a>
                </li>
                HTML;
              }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>
</header>