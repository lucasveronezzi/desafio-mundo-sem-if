<?php
require __DIR__ . '/vendor/autoload.php';

use Lucas\PersonManager;

$managerDay = new PersonManager('day');

$managerNight = new PersonManager('night');

$developerDay = $managerDay->driver('developer');

$dancerDay = $managerDay->driver('dancer');

$playerDay = $managerDay->driver('player');

$developerNight = $managerNight->driver('developer');

$dancerNight = $managerNight->driver('dancer');

$playerNight = $managerNight->driver('player');

echo "<br><br>";
echo "////////////////////////////////////////////////////";
echo "<br><br>";

echo "<pre>";
echo $dancerDay->work() . "\n";
echo "<br>----------------<br>";
echo $dancerNight->work() . "\n";
echo "<br><br>================<br><br>";
echo $developerDay->work() . "\n";
echo "<br>----------------<br>";
echo $dancerNight->work() . "\n";
echo "<br><br>================<br><br>";
echo $playerDay->work() . "\n";
echo "<br>----------------<br>";
echo $playerNight->work() . "\n";
echo "<br>----------------<br>";
echo "</pre>";

echo "<br><br>";
echo "////////////////////////////////////////////////////";
echo "<br><br>";
