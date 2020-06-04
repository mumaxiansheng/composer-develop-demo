<?php
require '../vendor/autoload.php';

use tool\AmountTool;

$money = 100.12;

echo AmountTool::bigTurnSmall($money);

echo PHP_EOL;

$money = 10012;


echo AmountTool::smallTurnBig($money);