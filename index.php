<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Film Center</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/mymovie.css">
    <link rel="icon" type="image/png" href="img/favicon.png">
</head>

<body>
<?php include_once 'nav.php'; ?>
    
    <div class="container">
        <h1 class="movie_title">Synecdoche, New York</h1>
        <img class="hero" src="img/sny_hero.jpg" alt="Synecdoche, New York cover image">
    </div>
    <div class="container coffee">

        <div class="container">
            <h4 class="plot">Plot</h4>
            <p>A successful New York theatre director, Cotard, struggles to create a career-defining play about his own life,
                examining themes of life, death, futility, and solipsism. The city of New York is struk by disaster as as
                he creates a life-size replica of the city inside a warehouse as part of his new play. The film focuses on
                several women in his life, each of them highlighting an aspect of Cotard's own psyche.</p>
        </div>
<div class="container">

        <!-- <iframe width="420" height="315"
        src="https://www.youtube.com/watch?v=XIizh6nYnTU">
        </iframe> -->
        <iframe width="480" height="360" src="https://youtu.be/XIizh6nYnTU" frameborder="0" allowfullscreen></iframe> 

</div>
        <div class="container director">
            <div class="card" style="width: 25rem;">
                <img class="card-img-top" src="img/kaufman_img.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Directed By:</h4>
                    <p class="card-text">Charlie Kaufman</p>
                    <a href="http://www.imdb.com/name/nm0442109/?ref_=nv_sr_2" class="btn btn-primary">IMDB</a>
                </div>
            </div>
        </div>
    <?php include_once 'footer.php'; ?>
</body>

</html>