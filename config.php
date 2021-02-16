<?php
//Configuration File

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
ini_set("error_reporting", 1);
error_reporting(E_ALL);

ini_set("memory_limit", "50M");
ini_set("max_execution_time", "10000");
ini_set("post_max_size", "500M");
ini_set("upload_max_filesize", "500M");

date_default_timezone_set("Canada/Eastern");
$tz_object = new DateTimeZone("Canada/Eastern");
$datetime = new DateTime();
$datetime->setTimeZone($tz_object);
setlocale(LC_MONETARY, "en_US");

define("YEARX", $datetime->format("Y"));
define("DATEX", $datetime->format("Y-m-d"));
define("TIMEX", $datetime->format("h:i:s"));
define("DATEXTIMEX", $datetime->format("Y-m-d h:i:s"));
?>