<?php

class StopWatch
{
    private $startTime;
    private $endTime;

    public function __construct()
    {
        $this->startTime;
    }

    public function start()
    {
        $this->startTime = microtime(true);
        return $this->startTime;

    }

    public function stop()
    {
        $this->endTime = microtime(true);
        return $this->endTime;
    }

    public function getElapsedTime()
    {
        return $this->endTime - $this->startTime;
    }
}
$stopwatch = new StopWatch();
$arr = [];
function random()
{
    return rand(0, 10000);
}

for ($i = 0; $i < 10000; $i++) {
    array_push($arr, random());
}

$stopwatch->start();
for ($i = 0; $i <= count($arr) - 2; $i++) {
    $imin = $arr[$i];
    for ($j = $i + 1; $j <= count($arr) - 1; $j++)
        if ($arr[$j] < $imin) {
            $imin = $arr[$j];
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
        }
}
$stopwatch->stop();
echo $stopwatch->getElapsedTime();