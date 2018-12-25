<?php
include "../engine/Autoload.php";

spl_autoload_register([new app\engine\Autoload(), 'loadClass']);

$product = new app\model\Products( new app\engine\Db());

var_dump($product);