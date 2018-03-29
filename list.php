<?php
require_once __DIR__ . '/autoload.php';
$data = new App\Models\GetMessages();
$data->max_posts = 10;



$messages = $data->getList($_GET['page']);
foreach ($messages as $mes):?>
    <p><?php echo $mes ?></p>
    <hr>
<?php endforeach;

$nav = $data->getNav(); ?>

    <span>Страницы</span>
<?php foreach ($nav as $navigation): ?>
    <?php echo $navigation ?>
<?php endforeach;






