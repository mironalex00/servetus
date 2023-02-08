<footer>
    <div class="columnas">
        <div class="datos">
            <h5 class="text-capitalize"><?= $data->footer->contact->title?></h5>
            <h6 class="text-capitalize"><?= $data->footer->contact->data->phone->title ?></h6>
            <p><?= $data->footer->contact->data->phone->data ?></p>
            <h6 class="text-capitalize"><?= $data->footer->contact->data->location->title ?></h6>
            <p><?= $data->footer->contact->data->location->data ?></p>
            <h6 class="text-capitalize"><?= $data->footer->contact->data->email->title ?></h6>
            <p><?= $data->footer->contact->data->email->data ?></p>
        </div>
        <div class="promociones text-capitalize">
            <h5><?= $data->footer->promotions->title?></h5>
            <h6><a href="<?= $url . $data->footer->promotions->data[0]->url ?>">
                <?= $data->footer->promotions->data[0]->title ?>
            </a></h6>
            <h6><a href="<?= $url . $data->footer->promotions->data[1]->url ?>">
                <?= $data->footer->promotions->data[1]->title ?>
            </a></h6>
            <h6><a href="<?= $url . $data->footer->promotions->data[2]->url ?>">
                <?= $data->footer->promotions->data[2]->title ?>
            </a></h6>
            <h6><a href="<?= $url . $data->footer->promotions->data[3]->url ?>">
                <?= $data->footer->promotions->data[3]->title ?>
            </a></h6>
            <h6><a href="<?= $url . $data->footer->promotions->data[4]->url ?>">
                <?= $data->footer->promotions->data[4]->title ?>
            </a></h6>
        </div>
    </div>
    <p class="terminos">Copyright © 2023 <?= $json->project->name ?> Inc. Reservados todos los derechos.</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/bf8e2c8f1b.js" crossorigin="anonymous"></script>
<script src="<?= dirname($_SERVER['SCRIPT_NAME']) ?>/assets/js/main.js"></script>
</body>
</html>