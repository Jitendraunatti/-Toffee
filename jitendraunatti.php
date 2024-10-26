<?php
//=============================================================================//
//                     𝐉𝐈𝐓𝐄𝐍𝐃𝐑𝐀'𝐬 𝐔𝐍𝐈𝐕𝐄𝐑𝐒𝐄
//=============================================================================//
error_reporting(0);



function jitenraunatti_x_get($THANOS)
{
    $JITENDRAUNATTI = bloody_sweet();
    if (strpos($THANOS, "bldcmprod-cdn.toffeelive.com") !== false) {
        $CASSIE = $JITENDRAUNATTI["channels"][5]['headers']["cookie"];
    } else {
        $CASSIE = $JITENDRAUNATTI["channels"][0]['headers']["cookie"];
    }
    $ROLEX = [
        "Host: " . parse_url($THANOS, PHP_URL_HOST),
        'cookie:' . $CASSIE,
        "user-agent: Toffee (Linux;Android 14) AndroidXMedia3/1.1.1/64103898/4d2ec9b8c7534adc",
        'client-api-header: angM1aXCHQLmmSW6cDlpXMD6tLdwnhMoUeaBBFKmd98bX6Vrae5xCMbm4gg0+u33rnxeGQDZNr2GD1tW0cWwKEpWimNlGqXVQGhpiIBz1JFxN+OxXcQqaMPrjwUhCyI5mO1DGyNv18+Z2EpmHtVnLzV9SrGsQWu4oRKjxE8QIMsRs6LrvL6hWGPlOGQke/qb5QxQZNetPzI39jHhX7Zi2XrCMIT4a+gk2Wu1c3wIybwkqknPcTp4Bj1cEF3Q+q1dV05SBhzpEDfoR2BLyQ6dV3LvmY6MNKxbUjby7hMsg35lFl2Df2mZsr7C27309w/qWi8lLXDjB7B1MozIGKn8rw3bXY5YlrPKBKztyiisAjQQi7kc5ISXyGSwRmhciwkciuitsSL0LlqHY7/Qkkh71EtaK3XEgVpLdH8zRCsTwfu1iIVPiDwTycuuBy4XWkcNnd0iLB35yftQpiL8HfpO2jQnrAwzePxszJ7mewVG+M0P/qyTBD52NkPR8uW0AZmDKp5LHTCGf7sqldDzpZvU+gsSdvtsBUcmHzjINGEoyXk=',
        "accept-encoding: gzip"
    ];

    $IRON_MAN  = curl_init();
    curl_setopt_array(
        $IRON_MAN,
        [
            CURLOPT_URL => $THANOS,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => '',
            CURLOPT_HEADER => false,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 6,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_HTTPHEADER => $ROLEX,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ]
    );
    $LOKI = curl_exec($IRON_MAN);
    curl_close($IRON_MAN);
    $NATASHA = curl_getinfo($IRON_MAN);
    $WANDA  = array(
        "JITENDRAUNATTI" => array(
            "data" => $LOKI,
            "info" =>  $NATASHA,
        )
    );
    return  $WANDA;
}

function bloody_sweet()
{
    return json_decode(file_get_contents("https://raw.githubusercontent.com/byte-capsule/Toffee-Channels-Link-Headers/refs/heads/main/toffee_channel_data.json"), true);
}
