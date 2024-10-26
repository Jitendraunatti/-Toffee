<?php
include("jitendraunatti.php");
$BLOODY_SWEET = bloody_sweet();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="https://toffeelive.com/favicon.ico">
    <title>Toffee - More than TV</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: black;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .container {
            width: 100%;
            overflow-x: hidden;

        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 2.5em;
            margin: 0;
            color: #333;
        }

        .channel-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            /* Center the cards */
            gap: 30px;
        }

        .channel {
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            width: 250px;
            height: 250px;
            text-align: center;
            position: relative;
        }

        .channel:hover {
            transform: translateY(-5px);
        }

        .channel-info {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 10px;
            border-radius: 5px;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .channel-info h2 {
            font-size: 1em;
            margin: 0;
            color: #333;
        }

        .channel-info p {
            font-size: 0.8em;
            margin: 5px 0;
            color: #666;
        }

        .channel-info a {
            display: inline-block;
            padding: 8px 16px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-size: 0.8em;
        }

        .channel-info a:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1 style="color: white;">Toffee - More than Tv</h1>

        </div>
        <div class="channel-container">
            <?php foreach ($BLOODY_SWEET["channels"]  as $DANAV): ?>
                <?php if (!empty($DANAV["link"]) && isset($DANAV["link"])): ?>
                    <div class="channel" style="background-image: url('<?php echo htmlspecialchars($DANAV["logo"]); ?>')">
                        <div class="channel-info">
                            <h2><?php echo htmlspecialchars($DANAV["name"]); ?></h2>
                            <a href="play.php?id=<?php echo htmlspecialchars(str_replace(".m3u8", "", $DANAV["link"])); ?>">Watch Now</a>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>