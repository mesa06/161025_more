<?php
require_once  "Benchmark/Timer.php";

$timer = new BenchMark_Timer();

$timer->start();
usleep(10000);
$timer->setMarker('Flag 1');
usleep(10000);
$timer->setMarker('Flag 2');
usleep(20000);
$timer->stop();

$profiling = $timer->getProfiling();

echo "<pre>";
print_r($profiling);
echo "</pre>";

?>

