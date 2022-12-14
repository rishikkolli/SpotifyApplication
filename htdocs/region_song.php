<?php
include "index.php";
$db = connect();
$region = "\"" . strval($_POST["region"]) . "\"";
$serviceQuery = $db->query("SELECT DISTINCT * FROM song WHERE region = $region ORDER BY streams DESC LIMIT 3");
$serviceResult = $serviceQuery->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" />
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        body {
            overflow-x: hidden;
            background-color: #1DB954;
        }

        svg {
            border:1px solid black;
            border-radius: 10px;                
            width: 700px;   
            height: 500px;   
            display:block;
            margin: auto;
            background-color: #191414;
        } 
    </style>
</head>
<body>
    <div class="row">
        <div class="col-3">
            <a href="home.php"><button type="button" class="btn btn-dark" style="margin-bottom: 5%; width: 80%; text-align: center; margin-top: 5%; margin-left: 5%;">Return Home</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6" style="text-align: center;">
            <p style="font-size: 30px; font-family: 'Gloria Hallelujah', cursive; color: white;"><?=$_POST["region"];?> Most Popular Songs</p>
            <svg>
                <rect fill="#A98E49" x="251" y="208" width="199" height="282" id="svg_5" stroke="#000"/>
                <rect fill="#E6C36A" stroke="#000" x="860" y="225" width="1" height="0" id="svg_6"/>
                <rect fill="#E6C36A" x="262" y="217" width="179" height="262" id="svg_7" stroke="#3B2F0E"/>
                <rect fill="#CC7C65" x="451" y="384" width="199" height="106" id="svg_9" stroke="#000000"/>
                <rect fill="#FFAC8D" x="462" y="397" width="179" height="83" id="svg_10" stroke="#4C261D"/>
                <rect fill="#999999" x="51" y="295" width="199" height="195" id="svg_11" stroke="#000"/>
                <rect fill="#BBBBBB" x="62" y="307" width="179" height="171" id="svg_12" stroke="#444444"/>
                <text xml:space="preserve" text-anchor="start" font-family="Noto Sans JP" font-size="24" stroke-width="0" id="svg_1" y="275" x="110" stroke="#3B2F0E" fill="#fff"><?=$serviceResult[1]["name"];?></text>
                <text style="cursor: move;" xml:space="preserve" text-anchor="start" font-family="Noto Sans JP" font-size="24" stroke-width="0" id="svg_2" y="191" x="315" stroke="#3B2F0E" fill="#fff"><?=$serviceResult[0]["name"];?></text>
                <text style="cursor: move;" xml:space="preserve" text-anchor="start" font-family="Noto Sans JP" font-size="24" stroke-width="0" id="svg_3" y="368" x="486" stroke="#3B2F0E" fill="#fff"><?=$serviceResult[2]["name"];?></text>
            </svg>
        </div>
        <div class="col-3"></div>
    </div>
</body>