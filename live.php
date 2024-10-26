<?php
error_reporting(0);
header("Pragma: no-cache");
header("Connection: keep-alive");
include("jitendraunatti.php");
if ($_REQUEST["id"]) {
    echo str_replace(["master", "../slang"], ["?key=" . hex2bin("4a4954454e4452415f4b554d4152") . "&Jane_foster=" . str_replace("index.m3u8", "", $_REQUEST["id"]) . "&rolex=" . str_replace("index.m3u8", "", $_REQUEST["id"]) . "master", "?key=" . hex2bin("4a4954454e4452415f4b554d4152") . "&rolex=https://bldcmprod-cdn.toffeelive.com/cdn/live/slang"], jitenraunatti_x_get($_REQUEST["id"])["JITENDRAUNATTI"]["data"]);
}
if (($_REQUEST["loki"] !== null || $_REQUEST["wanda"] !== null) && $_REQUEST["key"] === hex2bin(base64_decode("NGE0OTU0NDU0ZTQ0NTI0MTVmNGI1NTRkNDE1Mg"))) {
    foreach (['loki', 'wanda'] as $JITENDRAUNATTI) {
        echo jitenraunatti_x_get($_REQUEST[$JITENDRAUNATTI])["JITENDRAUNATTI"]["data"];
    }
} else {
    echo str_replace(['URI="https', '/live/', 'URI="/file.', "master"], ['URI="?key=' . hex2bin("4a4954454e4452415f4b554d4152") . '&wanda=https', "?key=" . hex2bin("4a4954454e4452415f4b554d4152") . "&loki=https://bldcmprod-cdn.toffeelive.com/live/", 'URI="?key=' . hex2bin("4a4954454e4452415f4b554d4152") . '&wanda=https://bldcmprod-cdn.toffeelive.com/file.', "?key=" . hex2bin("4a4954454e4452415f4b554d4152") . "&loki=" . $_REQUEST["Jane_foster"] . "master"], jitenraunatti_x_get($_REQUEST["rolex"])["JITENDRAUNATTI"]["data"]);
}
