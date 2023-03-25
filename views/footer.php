</main> 
<!--  MAIN CONTENT  -->
<!--  FOOTER  -->
<footer class="bg-dark text-center mt-auto text-white-50 py-2 px-4">
    <!--  FIRST ROW  -->
    <section class="container-fluid py-3 py-lg-5">
        <!--  BUSINESS ROW  -->
        <div class="row align-items-center">
            <!--  TITLE  -->
            <div class="col-12 col-lg-8 mb-4 mb-lg-0 text-uppercase text-light text-lg-start ps-lg-5">
                <span>&copy;<?= $now = date('Y', strtotime('now')) ?></span>
                <span>Copyright: 
                    <a class="text-decoration-none link-light" href="<?= HOST ?>">
                        <?= $header->title ?>
                    </a>
                </span>
            </div>
            <!--  TITLE  -->
            <!--  SOCIALS  -->
            <?php
              foreach($header->socials as $value){
                echo <<<HTML
                <div class="col">
                  <a class="nav-link me-lg-2 p-2" target="_blank" href="$value->url">
                    <i class="$value->icon fs-5"></i>
                  </a>
                </div>
                HTML;
              }
            ?>
            <!--  SOCIALS  -->
        </div>
        <!--  BUSINESS ROW  -->
    </section>
    <!--  FIRST ROW  -->
    <!--  SEPARATOR ROW  -->
    <hr class="mx-4 border border-white my-0">
    <!--  SEPARATOR ROW  -->
    <!--  SECOND ROW  -->
    <section class="container-fluid pt-5 pb-2">
        <div class="row">
            <!--  FIRST SUB-ROW  -->
            <div class="col-12 col-lg-5 border border-0 border-light-subtle border-lg-end">
                <!--  BUSINESS CONTACT TITLE  -->
                <h5 class="text-uppercase mb-4"><?= $footer->title ?></h5>
                <!--  BUSINESS CONTACT TITLE  -->
                <!--  BUSINESS CONTACT DATA  -->
                <div class="logo-part">
                    <img src="<?= $footer->logo ?>" style="width: 18em" class="py-4" >
                    <?php
                        foreach ($footer->contact as $contact) {
                            if(isset($contact->url) && strlen(trim($contact->url)) !== 0){
                                $url = preg_replace('/\${([^}]*)}/', $contact->data, $contact->url);
                                echo <<<HTML
                                    <p>
                                        <i class="$contact->icon"></i>
                                        <a href="$url" target="_blank" class="nav-link d-inline">
                                            $contact->data
                                        </a>    
                                    </p>
                                HTML . PHP_EOL;
                            }else {
                                echo <<<HTML
                                    <p><i class="$contact->icon"></i>$contact->data</p>
                                HTML . PHP_EOL;
                            }
                        }
                    ?>
                </div>
                <!--  BUSINESS CONTACT DATA  -->
            </div>
            <!--  FIRST SUB-ROW  -->
            <!--  SECOND SUB-ROW  -->
            <div class="col-12 col-lg-7 pt-sm-4 pt-lg-0">
                <!--  BUSINESS SERVICES TITLE  -->
                <h5 class="text-uppercase mb-4 pb-4 border border-0 border-light-subtle border-lg-bottom">
                    <?= $footer->promotions->title ?>
                </h5>
                <!--  BUSINESS SERVICES TITLE  -->
                <!--  BUSINESS SERVICES DATA  -->
                <ol class="list-group mx-5 py-lg-5">
                    <?php
                    $randviews = range(100, 9999);
                    shuffle($randviews);
                    $randviews = array_slice($randviews, 0, count($footer->promotions->data));
                    rsort($randviews);
                    foreach ($footer->promotions->data as $index => $value) {
                        $url = get_path().DIRECTORY_SEPARATOR.$value->url;
                        $view = preg_replace('/\${([^}]*)}/', $randviews[$index], $value->views);
                        echo <<<HTML
                        <a href="$url" class="list-group-item-dark d-flex justify-content-between justify-content-md-evenly align-items-center nav-link mb-4">
                            <span class="text-capitalize">$value->title</span>
                            <span class="badge bg-primary rounded-pill">$view</span>
                        </a>
                        HTML;
                    }
                    ?>
                </ol>
                <!--  BUSINESS SERVICES DATA  -->
            </div>
            <!--  SECOND SUB-ROW  -->
        </div>
    </section>
    <!--  SECOND ROW  -->
</footer>
<!--  FOOTER  -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/bf8e2c8f1b.js" crossorigin="anonymous"></script>
<script src="<?= $setup->project->directories->paths->assets->js ?>main.js"></script>
</body>
</html>