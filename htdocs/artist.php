<?php
include "index.php";
$artistName = $_POST["artist"];
$artist = "\"" . $artistName . "\"";

$regionName = $_POST["region"];
$region = "\"" . $regionName . "\"";

$db = connect();
$serviceQuery = $db->query("SELECT DISTINCT * FROM song WHERE artist=$artist AND region=$region");
$serviceResult = $serviceQuery->fetchAll(PDO::FETCH_ASSOC);

$total = 0;

for ($i = 0; $i < sizeof($serviceResult); $i++)
{
    $total += $serviceResult[$i]["streams"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" />
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <title>Document</title>
    <style>
        body {
            overflow-x: hidden;
        }
        
        svg {
            border:1px solid black;
            border-radius: 10px;                
            width: 680px;   
            height: 500px;   
            display:block;
            margin: auto;
        } 
    </style>
</head>
<body>
    <div class="row">
        <div class="col-3">
            <a href="home.php"><button type="button" class="btn btn-dark" style="margin-bottom: 5%; width: 80%; text-align: center;">Return Home</button></a>
        </div>
    </div>
    <p style="font-size: 30px; text-align: center;"><?=$artistName;?> was streamed</p>
    <div style="text-align: center;">
        <svg>
            <path fill="#ffd700" d="m161.39698,235.17649l131.39724,0l40.60276,-112.68027l40.60278,112.68027l131.39722,0l-106.30241,69.63944l40.60486,112.68027l-106.30245,-69.64134l-106.30243,69.64134l40.60487,-112.68027l-106.30244,-69.63944z" id="svg_2" stroke="#000"/>
            <ellipse fill="#ffd700" cx="330.6" cy="286.7" id="svg_1" rx="88" ry="88" stroke="#000"/>
            <text xml:space="preserve" text-anchor="start" font-family="Noto Sans JP" font-size="24" id="svg_4" y="295" x="290" stroke-width="0" stroke="#000" fill="#000000"><?=$total;?></text>
        </svg>
    </div>
    <p style="font-size: 30px; text-align: center;">times in $region</p>
</body>