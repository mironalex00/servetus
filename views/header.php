<!DOCTYPE html>
<html lang="<?=$lang ?>" class="h-100">
<head>
  <!--  Meta info  -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="<?= $setup->project->meta->description ?>" />
  <meta name="author" content="<?= $setup->project->meta->author ?>" />
  <meta name="keywords" content="<?= implode(', ', $setup->project->meta->keywords)?>"/>
  <title><?= $header->title ?></title>
  <!--  Site image  -->
  <link rel="icon" type="image/x-icon" href="<?= $header->logo ?>" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Google fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
  <!-- Core CSS (includes Bootstrap)-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
  <!--  Project CSS -->
  <link href="<?= $setup->project->directories->paths->assets->css ?>main.css" rel="stylesheet" />
</head>
<body class="d-flex flex-column h-100">
<header>
<!--  CABECERA  -->
<nav class="navbar navbar-light navbar-expand-md pt-md-4">
  <div class="container-fluid">
    <!--  BRAND  -->
    <a class="navbar-brand align-self-start fs-4" href="<?= HOST ?>"><?= $header->title ?></a>
    <span class="navbar-text align-self-start position-lg-absolute fs-6" style="left: 10em">
      <?= $header->slogan ?>
    </span>
    <!--  BRAND  -->
    <!--  COLLAPSE MENU BUTTON  -->
    <button class="navbar-toggler w-100 mt-2 mt-md-0 mb-4 mb-md-0" data-bs-toggle="collapse" data-bs-target="#collapsable">
        <span class="visually-hidden">
          Toggle navigation
        </span>
        <span class="navbar-toggler-icon"></span>
    </button>
    <!--  COLLAPSE MENU BUTTON  -->
    <!--  COLLAPSE MENU  -->
    <div id="collapsable" class="collapse navbar-collapse">
      <div class="row w-100">
        <!--  FIRST MENU  -->
        <div class="col-12">
          <ul class="navbar-nav text-capitalize flex-md-row justify-content-md-evenly text-center mt-4">
            <li class="nav-item">
              <a class="nav-link" href="<?= HOST ?>">
                <?= $header->menu->home->title ?>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= HOST . $header->menu->about->url ?>">
                <?= $header->menu->about->title ?>
              </a>
            </li>
            <li class="nav-item dropdown" 
              onmouseenter="this.lastElementChild.classList.add('show')"
              onmouseleave="this.lastElementChild.classList.remove('show')">
              <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?= $header->menu->services->title ?>
              </a>
              <ul class="dropdown-menu position-absolute start-50 translate-middle-x">
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
        <!--  FIRST MENU  -->
        <!--  SECOND MENU  -->
        <div class="col-12 order-first">
          <ul class="navbar-nav float-md-end flex-row justify-content-evenly align-items-center text-center">
            <li class="nav-item ms-2 ms-md-0 me-2 me-md-4">
              <a class="btn btn-primary rounded-pill" style="width: 9em" href="<?= HOST . $header->menu->login->url ?>">
                <span class="d-flex align-items-start">
                  <i class="bi bi-person-fill me-2"></i>
                  <span><?= $header->menu->login->title ?></span>
                </span>
              </a>
            </li>
            <!--  SOCIALS  -->
            <?php
              foreach($header->socials as $value){
                echo <<<HTML
                <li class="nav-item">
                  <a class="nav-link me-lg-2 p-2" target="_blank" href="$value->url">
                    <i class="$value->icon fs-5"></i>
                  </a>
                </li>
                HTML;
              }
            ?>
            <!--  SOCIALS  -->
          </ul>
        </div>
        <!--  SECOND MENU  -->
      </div>
    </div>
    <!--  COLLAPSE MENU  -->
  </div>
</nav>
</header>
<!--  MAIN CONTENT  -->
<main class="flex-shrink-0">