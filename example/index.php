<title><?= $title = "Paginator Component"; ?></title>
<?php

require __DIR__ . "/../vendor/autoload.php";

$page = filter_input(INPUT_GET, "page", FILTER_VALIDATE_INT);
$pager = new \Brito101\Paginator\Paginator();
$pager->pager(100, 10, $page);

?>
<link rel="stylesheet" href="style.css" />

<div class="container">
    <h1><?= $title; ?></h1>
    <p>Simple component to generate pagination in PHP web applications</p>
    <p>Without breaking the layout ;)</p>
    <pre>SELECT * table LIMIT <?= $pager->limit(); ?> OFFSET <?= $pager->offset(); ?>;</pre>
    <?= $pager->render(null, false); ?>
</div>