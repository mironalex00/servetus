<!--    CSS     -->
<link rel="stylesheet" href="<?= $setup->project->directories->paths->assets->css ?>owl/owl.carousel.min.css">
<link rel="stylesheet" href="<?= $setup->project->directories->paths->assets->css ?>owl/owl.theme.default.min.css">
<link href="<?= $setup->project->directories->paths->assets->css ?>owl/style.css" rel="stylesheet" />
<!--    APP JS  -->
<script type="module">
window.onload = (e) => {
    let pixelSize = document.body.scrollHeight * 0.3;
    if(document.body.scrollWidth < 975){
        pixelSize *= 0.75;
    }
    document.getElementById('brand-video').height=`${pixelSize}px`;
}
window.onresize = (e) => {
    let pixelSize = document.body.scrollHeight * 0.3;
    if(document.body.scrollWidth < 975){
        pixelSize *= 0.75;
    }
    document.getElementById('brand-video').height=`${pixelSize}px`;
}

</script>
<!--    CSS && JS     -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-lg-6 p-5 pt-4 pb-sm-0">
            <iframe 
                id="brand-video"
                class="w-100"
                src="<?= $section->video->url?>" 
                title="YouTube video player" 
                frameborder="0"
                allowfullscreen>
            </iframe>
        </div>
        <div class="col-12 col-lg-6 p-5 pt-4 pb-sm-0">
            <h4 class="text-uppercase text-center mb-3"><?= $section->video->title ?></h4>
            <?php
                foreach ($section->aptitudes as $key => $aptitude) {
                    $key = $key + 1;
                    $image = preg_replace('/\${([^}]*)}/', $key, $aptitude->image);
                    echo <<<HTML
                    <div id="aptitude-$key" class="overflow-hidden d-flex align-items-center mb-5">
                        <img src="$image" class="img-thumbnail float-start me-3" alt="Imagen">
                        <div class="my-auto flex-fill">
                            <h5 class="text-capitalize">$aptitude->title</h5>
                            <p class="m-0">$aptitude->desc.</p>
                        </div>
                    </div>
                    HTML . PHP_EOL;
                }
            ?>
        </div>
        <hr class="d-none d-lg-block col-10 ms-5 mb-4">
        <h4 class="text-uppercase text-center mb-4">elige el servicio que más se acomode a tus necesidades</h4>
        <div class="col-10 col-lg-8 offset-1 offset-lg-2 mb-5">
            <div class="featured-carousel owl-carousel">
            <?php
                foreach ($section->services as $key => $service) {
                    $key = $key + 1;
                    $image = rawurlencode(preg_replace('/\${([^}]*)}/', $key, $service->image));
                    $servicio = preg_replace('/\${([^}]*)}/', $key, $service->title);
                    $url = preg_replace('/\${([^}]*)}/', $key, get_path().DIRECTORY_SEPARATOR.$service->url);
                    echo <<<HTML
                     <div class="item" id="item-$key">
                        <a href="$url" title="Más información" class="work text-decoration-none">
                            <div class="text pt-3 w-100 text-center">
                                <span>$servicio</span>
                            </div>
                            <div 
                                class="img d-flex align-items-center justify-content-center rounded" 
                                crossorigin="anonymous"
                                style="background-image: url(http://placehold.it/300/f4f4f4&amp;text=$image);">
                            </div>
                            <div class="text pt-3 w-100 text-center">
                                <span>$service->desc</span>
                            </div>
                        </a>
                    </div> 
                    HTML . PHP_EOL;
                }
            ?>
            </div>
        </div>
    </div>
</div>
<!--    LIBRERIAS   -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="<?= $setup->project->directories->paths->assets->js ?>owl/main.js"></script>