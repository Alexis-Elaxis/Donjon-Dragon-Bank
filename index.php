<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dragon & Dongeons - Your Wealth</title>
</head>
<body>
    <topbar>
        Dragon & Bongeons - Your Wealth
    </topbar>


    <div class="main-page">
        <?php
        ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

        $data = file_get_contents('./database/coins.json');
        $coins = json_decode($data);

        for($i = 0; $i < 5; $i++) {
            ?>
            <div class="money-container">
                <span class="show-money">0</span>
                <span class="name-money">Money name</span>
            </div>
            <?php
        } 
        ?>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=MedievalSharp&display=swap');

        body {
            margin: auto 0;
            background: #101B54;
            color: white;
            font-family: 'MedievalSharp', cursive;
        }

        topbar {
            background: #0A1445;
            border-bottom: 1px solid white;
            display: block;
            padding: 10px;
            font-size: 200%;
        }

        .main-page {
            margin-top: 10vh;
            width: 91vw;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .money-container {
            width: 18vw;
            float: left;
            text-align: center;
            border-left: 1px solid white;
            border-right: 1px solid white;
        }

        .money-container .show-money {
            font-size: 300%;
            display: block;
            padding: 5vh;
        }

        .money-container .name-money {
            font-size: 100%;
            display: block;
            padding: 5vh;
        }
    </style>
</body>
</html>