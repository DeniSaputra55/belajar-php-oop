<?php 
//dateTime
$dateTime = new DateTime();
$dateTime->setDate(1990, 1, 20);
$dateTime->setTime(10, 10, 10, 0);
//data interval
$dateTime->add(new DateInterval("P1Y"));

$minusOneMoth = new DateInterval("P1M");
$minusOneMoth->invert = true;
$dateTime->add($minusOneMoth);

var_dump($dateTime);
//DateTimeZone
$now = new DateTime();
var_dump($now);
$now->setTimezone(new DateTimeZone("America/Toronto"));
var_dump($now);
//format dattime
$string = $now->format("Y-m-d H:i:s");
echo "Waktu Saat ini : $string" . PHP_EOL;

//parse DateTime
$date = DateTime::createFromFormat("Y-m-d H:i:s", "2020-10-10 10:10:10", new DateTimeZone("Asia/Jakarta"));
if ($date) {
    var_dump($date);
} else {
    echo "Format Salah" . PHP_EOL;
}
?>