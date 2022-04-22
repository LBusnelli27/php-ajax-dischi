<?php 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>


<body>
    <?php 
        include __DIR__ . '/server/data.php';
    ?>

    <header>

    </header>


    <main>
        <?php foreach ($arrayOfDisc as $key => $disc) { ?>
            <div class="album-card-container">
                <img class="img-thumbnail" src="<?php echo $disc['poster'] ?>" alt="">
                <h2><?php echo $disc['title'] ?></h2>
                <p><?php echo $disc['author'] ?></p>
                <p><?php echo $disc['genre'] ?></p>
                <p><?php echo $disc['year'] ?></p>
            </div>
        <?php } ?>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>