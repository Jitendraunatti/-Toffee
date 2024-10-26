<?php
include("jitendraunatti.php");
$JITENDRAUNATTI = bloody_sweet();
$ROLEX = date('l jS \of F Y h:i:s A');
$jio_data = "#EXTM3U\n#DEVELOPED_BY_JITENDRA_PRO_DEV\n#AUTHOR:-JITENDRA_KUMAR\n#DATE:- $ROLEX\n
      #     ██  ██ ████████ ███████ ███   ██ ██████  ██████   █████        ██   ██ ██    ██ ███    ███  █████  ██████
      #     ██  ██    ██    ██      ████  ██ ██   ██ ██   ██ ██   ██       ██  ██  ██    ██ ████  ████ ██   ██ ██   ██
      #     ██  ██    ██    █████   ██ ██ ██ ██   ██ ██████  ███████ █████ █████   ██    ██ ██ ████ ██ ███████ ██████
      #██   ██  ██    ██    ██      ██  ████ ██   ██ ██   ██ ██   ██       ██  ██  ██    ██ ██  ██  ██ ██   ██ ██   ██
      # █████   ██    ██    ███████ ██   ███ ██████  ██   ██ ██   ██       ██   ██  ██████  ██      ██ ██   ██ ██   ██\n" . PHP_EOL;
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
$JITENDRA_PRO_DEV_X_THANOS = parse_url($_SERVER["REQUEST_URI"]);
$JITENDRA_PRO_DEV_X_THANOS = str_replace("playlist.php", "live.php", $JITENDRA_PRO_DEV_X_THANOS["path"]);


foreach ($JITENDRAUNATTI["channels"] as $BLOODY_SWEET) {

    if (!empty($BLOODY_SWEET["link"]) && isset($BLOODY_SWEET["link"])) {

        $jio_data .= '#EXTINF:-1 tvg-id="JITENRDAUNATTI" tvg-name="' . htmlspecialchars($BLOODY_SWEET["name"]) . '" tvg-type="IRON_MAN" group-title="TOFFEE LIVE" tvg-language="BLOODY_SWEET" tvg-logo="' . htmlspecialchars($BLOODY_SWEET["logo"]) . '", ' . htmlspecialchars($BLOODY_SWEET["name"]) . PHP_EOL;
        $jio_data .= $protocol . $host . $JITENDRA_PRO_DEV_X_THANOS . '?id=' . $BLOODY_SWEET["link"] . PHP_EOL;
        $jio_data .= PHP_EOL;
    }
}

header("Content-Type: text/plain");
echo $jio_data;
file_put_contents("playlist.m3u", $jio_data);
