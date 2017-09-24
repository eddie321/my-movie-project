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
    <style type="text/css"> 
        @font-face {
            font-family: "longmire_logo_regular"; 
            src: url("font/longmire.ttf") format("truetype");
            src: url("font/longmire.woff") format("woff");
        }
    </style>
</head>

<body>
<?php include_once 'nav.php'; ?>
    
    <div class="container">
        <div class="head_img">
            <img src="img/sny-main-title.jpg" alt="Synecdoche, New York Title Image">
        </div>
        <div class="reviews">
            <p>Metascore: 67% <a class="meta_score" href="http://www.metacritic.com/">MetaCritic.com</a></p>
            <meter value="0.67">67%</meter>
</div>
    </div>

    <div class="container">
        <h4 class="plot">Plot</h4>
        <p>A successful New York theatre director, Cotard, struggles to create a career-defining play about his own life,
                examining themes of life, death, futility, and solipsism. The city of New York is struk by disaster as as
                he creates a life-size replica of the city inside a warehouse as part of his new play. The film focuses on
                several women in his life, each of them highlighting an aspect of Cotard's own psyche.</p>
                <a href="https://www.slantmagazine.com/film/review/synecdoche-new-york">Read Film Analysis</a>
    </div>

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-8">
            <iframe width="480" height="360" src="https://www.youtube.com/embed/XIizh6nYnTU" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col-10 col-sm-8 col-md-6 col-lg-4">
            <div class="card text">
                <img class="card-img-top" style="max-height: 100%; max-width: 25rem;" src="img/kaufman_img.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Directed and Written By:</h4>
                    <h5 class="card-text">Charlie Kaufman</h5>
                    <p class="card-text">Screenwriter: <em>Being John Malkovich (1999), Adaptation (2002) Eternal Sunshine of the Spotless Mind (2004), Anomalisa (2015)</em></p>
                    <a href="http://www.imdb.com/name/nm0442109/?ref_=nv_sr_2" class="btn btn-primary">IMDB</a>
                </div>
            </div>
        </div>
    </div>
</div>
        
    <?php include_once 'footer.php'; ?>
</body>

</html>