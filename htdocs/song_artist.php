<?php
include "index.php";
$artist = "\"" . $_POST["artist"] . "\"";
$db = connect();
$serviceQuery = $db->query("SELECT * FROM song WHERE artist=$artist");
$serviceResult = $serviceQuery->fetchAll(PDO::FETCH_ASSOC);
//print_r($serviceResult);
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
        }

        body {
            overflow-x: hidden;
        }
        svg {
            border:1px solid black;
            border-radius: 10px;                
            width: 700px;   
            height: 500px;   
            display:block;
            margin: auto;
        } 

        h1{
        font-size: 30px;
        color: #fff;
        text-transform: uppercase;
        font-weight: 300;
        text-align: center;
        margin-bottom: 15px;
        }
        table{
        width:100%;
        table-layout: fixed;
        }
        .tbl-header{
        background-color: rgba(255,255,255,0.3);
        }
        .tbl-content{
        /* overflow-x:auto; */
        /* margin-top: 0px; */
        border: 1px solid rgba(255,255,255,0.3);
        }
        th{
        padding: 20px 15px;
        text-align: left;
        font-weight: 500;
        font-size: 12px;
        color: #fff;
        text-transform: uppercase;
        }
        td{
        padding: 15px;
        text-align: left; 
        /* vertical-align:middle; */
        font-weight: 300;
        font-size: 12px;
        color: #fff;
        border-bottom: solid 1px rgba(255,255,255,0.1);
        }


        /* demo styles */

        @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
        body{
        background: -webkit-linear-gradient(left, #25c481, #25b7c4);
        background: linear-gradient(to right, #25c481, #25b7c4);
        font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-3">
            <a href="home.php"><button type="button" class="btn btn-dark" style="margin-bottom: 5%; width: 80%; text-align: center;  margin-top: 5%; margin-left: 5%;">Return Home</button></a>
        </div>
    </div>
    <div class="row" style="margin: auto;">
        <div class="col-1"></div>
        <div class="col-10" style="text-align: left;">
            <h1><?=$artist?></h1>
            <div class="the-table">
                <div class="tbl-header">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Streams</th>
                                <th>Region</th>
                            </tr>
                        </thead>
                    <table>
                </div>
                <div class="tbl-content">
                    <table>
                        <tbody>
                        <?php for($i = 0; $i < sizeof($serviceResult); $i++):?>
                            <tr>
                                <td><?=$i?></td>
                                <td><?=$serviceResult[$i]["name"]?></td>
                                <td><?=$serviceResult[$i]["date"]?></td>
                                <td><?=$serviceResult[$i]["streams"]?></td>
                                <td><?=$serviceResult[$i]["region"]?></td>
                            </tr>
                        <?php endfor;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
</body>