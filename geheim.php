<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: index.php");
  exit;
}
 ?>
<html>
<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><3</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
<body>

<style>
    div.gallery {
        margin: 5px;
        float: left;
        width: 180px;
    }

    div.gallery img {
        width: 100%;
        height: auto;
    }

    div.gallery img {
        border-radius: 10%;
        border-color: white;
    }
    div.gallery img:hover {
        border-radius: 0;
        border-color: aqua;
        border-style:groove;
    }

    body {
        background-color: rgb(11, 0, 58);
    }
    h1 {
        font-size: 100px;
        color: aqua;
        font-family: 'Raleway', sans-serif;
        text-align: center;
    }
    footer {
        background-color: black;
        color: white;
        padding: 60px;
        padding-bottom: 0;
        align-items: center;
    }








</style>
</body>
<body>
<h1>HDGDL <3 </h1>
<div class="gallery">
    <img src="\img\Snapchat-108135833.jpg" alt="Cinque Terre" width="600" height="400">
</div>

<div class="gallery">
    <img src="\img\Snapchat-243461815.jpg" alt="Forest" width="600" height="400">
</div>

<div class="gallery">
    <img src="\img\Snapchat-534913730.jpg" alt="Northern Lights" width="600" height="400">
</div>

<div class="gallery">
    <img src="\img\Snapchat-575483664.jpg" alt="Mountains" width="600" height="400">
</div>

<div class="gallery">
    <img src="\img\Snapchat-877622068.jpg" alt="Mountains" width="600" height="400">
</div>

<div class="gallery">
    <img src="\img\Snapchat-1586401486.jpg" alt="Mountains" width="600" height="400">
</div>

<div class="gallery">
    <img src="\img\Snapchat-1637991985.jpg" alt="Mountains" width="600" height="400">
</div>

<div class="gallery">
    <img src="\img\Snapchat-2057470020.jpg" alt="Mountains" width="600" height="400">
</div>

<div class="gallery">
    <img src="\img\Snapchat-2139598257.jpg" alt="Mountains" width="600" height="400">
</div>

<footer>
<a href="logout.php">Ausloggen</a>
</footer>

</body>

</html>

