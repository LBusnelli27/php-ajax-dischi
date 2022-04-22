<?php 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>


<body>
    <header>
        <img id="spotify-logo" src="https://upload.wikimedia.org/wikipedia/commons/7/71/Spotify.png" alt="Spotify Logo">
    </header>


    <main id="app">
        <div class="album-card" v-for="album in albums">
            <img class="img-thumbnail" :src="album.poster" :alt="album.title">
            <h2>{{ album.title }}</h2>
            <p>{{ album.author }}</p>
            <p>{{ album.genre }}</p>
            <p>{{ album.year }}</p>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>