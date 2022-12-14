<?php
include "index.php";
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
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Microbe&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        body {
            overflow-x: hidden;
            background: #1DB954;
        }

        svg {
            border:1px solid black;
            border-radius: 10px;                
            width: 700px;   
            height: 450px;   
            display:block;
            margin: auto;
        } 

        .wrap {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            }

            .button {
            width: 140px;
            height: 45px;
            font-family: 'Roboto', sans-serif;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 2.5px;
            font-weight: 450;
            color: #000;
            background-color: #fff;
            border: none;
            border-radius: 45px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease 0s;
            cursor: pointer;
            outline: none;
            }

            .button:hover {
            background-color: #2EE59D;
            box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
            color: #fff;
            transform: translateY(-7px);
}
    </style>
</head>
<body>
    <div class="content" style="margin-bottom: 5%;">
        <div class="row">
            <div class="col-4" style="margin-top: 2%; margin-left: 2%;">
                <img src="applicationimages/spotify.png" width="400px">
            </div>
        </div>
        <div class="row">
            <div class="col-12" style="text-align: center; font-size: 60px; margin-top: 5%; margin-bottom: 2%; color: white; font-family: 'Rubik Microbe', cursive;">A Case Study on Spotify Songs from 2017 to 2021</div>
        </div>

        <!-- What needs to be copied -->
        <div style="margin-left: 2%;">
            <div class="row">
                <div class="col-2">
                    <!-- Icon 1 -->
                    <div class="card text-white bg-dark mb-3" style="max-width: 18rem; height: 450px;">
                        <div class="card-header" style="font-size: 20px; text-align: center">Regions Best Song</div>
                        <div class="card-body" style="text-align: center">
                            <img src="applicationimages/412imagetwo.png" width="120px" height ="120px">
                            <form action="region_song.php" method="POST">
                                <label for="regionchoose" style="margin-bottom: 5%; margin-top: 15%;">Region:</label>
                                <input name="region" id="regionchoose" list="regions" value="United States">
                                <datalist id="regions">
                                    <option value="United States">
                                    <option value="Brazil">
                                    <option value="Germany">
                                    <option value="Italy">
                                    <option value="Japan">
                                    <option value="Mexico">
                                    <option value="Spain">
                                </datalist>    
                                </select>
                                <div class="wrap">
                                    <input class="card-footer button" style="margin-bottom: 5%; width: 80%; text-align: center; margin-top: 15%; background-color: #1DB954; border-radius: 45px;
  box-shadow: 3px 3px 15px #fff" type="submit" value="Search"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card text-white bg-dark mb-3" style="max-width: 18rem; height: 450px;">
                        <div class="card-header" style="font-size: 20px; text-align: center;">All Time Artists</div>
                        <div class="card-body" style="text-align: center">
                            <img src="applicationimages/412imagefour.png" width="120px" height ="120px" style="margin-bottom: 48%;">
                            <form action="all_time.php" method="POST">
                                <div class="wrap">
                            <input class="card-footer button" style="margin-bottom: 5%; width: 80%; text-align: center; margin-top: 15%; background-color: #1DB954; border-radius: 45px;
  box-shadow: 3px 3px 15px #fff" type="submit" value="Search"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card text-white bg-dark mb-3" style="max-width: 18rem; height: 450px;">
                        <div class="card-header" style="font-size: 20px; text-align: center">Years Best</div>
                        <div class="card-body" style="text-align: center">
                            <img src="applicationimages/412imagefive.png" width="120px" height ="120px">
                            <form action="years_best.php" method="POST">
                                <label for="datechoose" style="margin-bottom: 5%; margin-top: 15%;">Date:</label>
                                <input type="month" id="start" name="start" min="2017-12" max="2021-12" value="2017-12" style="width: 200px;">
                                </select>
                                <div class="wrap">
                                <input class="card-footer button" style="margin-bottom: 5%; width: 80%; text-align: center; margin-top: 15%; background-color: #1DB954; border-radius: 45px;
  box-shadow: 3px 3px 15px #fff" type="submit" value="Search"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card text-white bg-dark mb-3" style="max-width: 18rem; height: 450px;">
                        <div class="card-header" style="font-size: 20px; text-align: center">Songs From Artist</div>
                        <div class="card-body" style="text-align: center">
                            <img src="applicationimages/412imagesix.png" width="120px" height ="120px">
                            <form action="song_artist.php" method="POST">
                                <label for="artistchoose" style="margin-bottom: 5%; margin-top: 15%;">Artist:</label>
                                <input name="artist" id="artistchoose" list="artist" value="Anastacia">
                                <datalist id="artist">
                                    <option value="Kyber Krystals">
                                    <option value="BACI">
                                    <option value="Anastacia">
                                    <option value="Skrillex">
                                    <option value="Felipe Pelaez">
                                    <option value="Ladilla Rusa">
                                    <option value="Branchez">
                                    <option value="Taylor Swift">
                                    <option value="Jonny3000">
                                    <option value="Bhad Bhabie">
                                    <option value="XXXTENTACION">
                                    <option value="Grinch Hill">
                                    <option value="Falling Apart">
                                    <option value="Mick Jagger">
                                    <option value="Louis Tomlinson">
                                    <option value="Elza Soares e Pitty">
                                    <option value="Trettman">
                                    <option value="Vitalic">
                                    <option value="Camila Cabello">
                                    <option value="Ghemon">
                                    <option value="La Maravillosa Orquesta del Alcohol">
                                    <option value="Captian Cuts">
                                    <option value="Banda A Favorita">
                                    <option value="SBM">
                                    <option value="Veysel">
                                    <option value="BrunOG">
                                    <option value="Captain Cuts">
                                    <option value="Ingo ohne Flamingo">
                                    <option value="MCNZI"> 
                                    <option value="GrizzRivers">
                                    <option value="Becky G">
                                    <option value="Sam Smith">
                                    <option value="Colapesce">
                                    <option value="Santa Estilo">
                                    <option value="Pablo Alboran">
                                    <option value="Caparezza">
                                    <option value="Fifth Harmony">
                                    <option value="Gianluca Vacchi"> 
                                    <option value="Avicii">
                                    <option value="Sebastian"> 
                                    <option value="Alice Glass">
                                    <option value="Marshmello">
                                    <option value="Willie Peyote">
                                    <option value="Tribalistas">
                                    <option value="Justin Bieber">
                                    <option value="Bjark">
                                    <option value="Post Malone">
                                    <option value="JNS">
                                    <option value="Bejito" >
                                    <option value="Mala">
                                    <option value="CNCO">
                                    <option value="Aly & AJ">
                                    <option value="Delacruz"> 
                                    <option value="P!nk">
                                    <option value="Natti Natasha">
                                    <option value="U2">
                                    <option value="Marissa Mur">
                                    <option value="Friyie">
                                    <option value="Big Shaq">
                                    <option value="Giorgio Poi">
                                    <option value="Morrissey">
                                    <option value="Vetusta Morla">
                                    <option value="Nicks Vieira">
                                    <option value="Romina Falconi">
                                    <option value="Hardwell">
                                </datalist>    
                                </select>
                                <div class="wrap">
                                <input class="card-footer button" style="margin-bottom: 5%; width: 80%; text-align: center; margin-top: 15%; background-color: #1DB954; border-radius: 45px;
  box-shadow: 3px 3px 15px #fff" type="submit" value="Search"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card text-white bg-dark mb-3" style="max-width: 18rem; height: 450px;">
                        <div class="card-header" style="font-size: 20px; text-align: center">Artists Total Streams</div>
                        <div class="card-body" style="text-align: center">
                            <img src="applicationimages/412imagethree.png" width="120px" height ="120px">
                            <form action="total_streams.php" method="POST">
                                <label for="artistschoose" style="margin-bottom: 5%; margin-top: 15%;">Artist:</label>
                                <input name="artist" id="artistschoose" list="artists" value="Anastacia">
                                <datalist id="artists">
                                    <option value="Kyber Krystals">
                                    <option value="BACI">
                                    <option value="Anastacia">
                                    <option value="Skrillex">
                                    <option value="Felipe Pelaez">
                                    <option value="Ladilla Rusa">
                                    <option value="Branchez">
                                    <option value="Taylor Swift">
                                    <option value="Jonny3000">
                                    <option value="Bhad Bhabie">
                                    <option value="XXXTENTACION">
                                    <option value="Grinch Hill">
                                    <option value="Falling Apart">
                                    <option value="Mick Jagger">
                                    <option value="Louis Tomlinson">
                                    <option value="Elza Soares e Pitty">
                                    <option value="Trettman">
                                    <option value="Vitalic">
                                    <option value="Camila Cabello">
                                    <option value="Ghemon">
                                    <option value="La Maravillosa Orquesta del Alcohol">
                                    <option value="Captian Cuts">
                                    <option value="Banda A Favorita">
                                    <option value="SBM">
                                    <option value="Veysel">
                                    <option value="BrunOG">
                                    <option value="Captain Cuts">
                                    <option value="Ingo ohne Flamingo">
                                    <option value="MCNZI"> 
                                    <option value="GrizzRivers">
                                    <option value="Becky G">
                                    <option value="Sam Smith">
                                    <option value="Colapesce">
                                    <option value="Santa Estilo">
                                    <option value="Pablo Alboran">
                                    <option value="Caparezza">
                                    <option value="Fifth Harmony">
                                    <option value="Gianluca Vacchi"> 
                                    <option value="Avicii">
                                    <option value="Sebastian"> 
                                    <option value="Alice Glass">
                                    <option value="Marshmello">
                                    <option value="Willie Peyote">
                                    <option value="Tribalistas">
                                    <option value="Justin Bieber">
                                    <option value="Bjark">
                                    <option value="Post Malone">
                                    <option value="JNS">
                                    <option value="Bejito" >
                                    <option value="Mala">
                                    <option value="CNCO">
                                    <option value="Aly & AJ">
                                    <option value="Delacruz"> 
                                    <option value="P!nk">
                                    <option value="Natti Natasha">
                                    <option value="U2">
                                    <option value="Marissa Mur">
                                    <option value="Friyie">
                                    <option value="Big Shaq">
                                    <option value="Giorgio Poi">
                                    <option value="Morrissey">
                                    <option value="Vetusta Morla">
                                    <option value="Nicks Vieira">
                                    <option value="Romina Falconi">
                                    <option value="Hardwell">
                                </datalist>    
                                </select>
                                <div class="wrapper">
                                    <input class="card-footer button" style="margin-bottom: 5%; width: 80%; text-align: center; margin-top: 15%; background-color: #1DB954; border-radius: 45px;
  box-shadow: 3px 3px 15px #fff" type="submit" value="Search"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card text-white bg-dark mb-3" style="max-width: 18rem; height: 450px;">
                        <div class="card-header" style="font-size: 19px; text-align: center">Regional Artist Streams</div>
                        <div class="card-body" style="text-align: center">
                            <img src="applicationimages/412imageone.png" width="120px" height ="120px">
                            <form action="artist_region.php" method="POST">
                                <label for="bothchoose" style="margin-bottom: 5%; margin-top: 15%;">Artist and Region:</label>
                                <input name="artist" id="bothchoose" list="both" value="Anastacia">
                                <datalist id="both">
                                    <option value="Kyber Krystals">
                                    <option value="BACI">
                                    <option value="Anastacia">
                                    <option value="Skrillex">
                                    <option value="Felipe Pelaez">
                                    <option value="Ladilla Rusa">
                                    <option value="Branchez">
                                    <option value="Taylor Swift">
                                    <option value="Jonny3000">
                                    <option value="Bhad Bhabie">
                                    <option value="XXXTENTACION">
                                    <option value="Grinch Hill">
                                    <option value="Falling Apart">
                                    <option value="Mick Jagger">
                                    <option value="Louis Tomlinson">
                                    <option value="Elza Soares e Pitty">
                                    <option value="Trettman">
                                    <option value="Vitalic">
                                    <option value="Camila Cabello">
                                    <option value="Ghemon">
                                    <option value="La Maravillosa Orquesta del Alcohol">
                                    <option value="Captian Cuts">
                                    <option value="Banda A Favorita">
                                    <option value="SBM">
                                    <option value="Veysel">
                                    <option value="BrunOG">
                                    <option value="Captain Cuts">
                                    <option value="Ingo ohne Flamingo">
                                    <option value="MCNZI"> 
                                    <option value="GrizzRivers">
                                    <option value="Becky G">
                                    <option value="Sam Smith">
                                    <option value="Colapesce">
                                    <option value="Santa Estilo">
                                    <option value="Pablo Alboran">
                                    <option value="Caparezza">
                                    <option value="Fifth Harmony">
                                    <option value="Gianluca Vacchi"> 
                                    <option value="Avicii">
                                    <option value="Sebastian"> 
                                    <option value="Alice Glass">
                                    <option value="Marshmello">
                                    <option value="Willie Peyote">
                                    <option value="Tribalistas">
                                    <option value="Justin Bieber">
                                    <option value="Bjark">
                                    <option value="Post Malone">
                                    <option value="JNS">
                                    <option value="Bejito" >
                                    <option value="Mala">
                                    <option value="CNCO">
                                    <option value="Aly & AJ">
                                    <option value="Delacruz"> 
                                    <option value="P!nk">
                                    <option value="Natti Natasha">
                                    <option value="U2">
                                    <option value="Marissa Mur">
                                    <option value="Friyie">
                                    <option value="Big Shaq">
                                    <option value="Giorgio Poi">
                                    <option value="Morrissey">
                                    <option value="Vetusta Morla">
                                    <option value="Nicks Vieira">
                                    <option value="Romina Falconi">
                                    <option value="Hardwell">
                                </datalist>    
                                </select>
                                <input name="region" id="regionchoose" list="region" value="United States" style="margin-top: 15px;">
                                <datalist id="region">
                                    <option value="United States">
                                    <option value="Brazil">
                                    <option value="Germany">
                                    <option value="Italy">
                                    <option value="Japan">
                                    <option value="Mexico">
                                    <option value="Spain">
                                </datalist>    
                                </select>
                                <div class="wrapper">
                                <input class="card-footer button" style="margin-bottom: 5%; width: 80%; text-align: center; margin-top: 15%; background-color: #1DB954; border-radius: 45px;
  box-shadow: 3px 3px 15px #fff" type="submit" value="Search"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <div>
        </div>
    </div>
    <div style="color: #fff; font-family: 'Gloria Hallelujah', cursive; margin-top: 4%;">© Rishik, Luke, and Nandika</div>
</body>
</html>