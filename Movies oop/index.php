<?php

/* 
creare un file index.php in cui: -- ok
- è definita una classe ‘Movie’ -- ok
=> all'interno della classe sono dichiarate delle variabili d'istanza -- ok
=> all'interno della classe è definito un costruttore -- ok
=> all'interno della classe è definito almeno un metodo -- ok
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -- ok
 */

class Movie
{
    public $id;
    public $title;
    public $genre;
    public $year;
    public $author;
    // construct
    public function __construct($_id, $_title, $_genre, $_year, $_poster, $_author = 'anonimo')
    {
        $this->id = $_id;
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->poster = $_poster;
        $this->author = $_author;
    }
    // raccolgo i dettagli del film (genere, anno e autore)
    public function getMovieDetails()
    {
        return $this->genre . $this->year . $this->author;
    }
}

$movie1 = new Movie(1, 'Lord Of The Rings', 'Fantasy, ', '29 July, 1954 ', "./images/LOTR.jpg", 'J. R. R. Tolkien');
$movie2 = new Movie(2, 'Sotto il sole di Amalfi', 'Commedia, ', '4 Sept, 2022 ',  "./images/SISDA.png", 'Netflix');
$movie3 = new Movie(3, 'The Godfather', 'Crime, ', '14 March, 1972 ', "./images/thegodfather.jpg", 'Francis Ford Coppola');
$movie4 = new Movie(4, 'Pinocchio', 'Family, ', '6 Aug, 2022 ', "./images/pinocchio.jpg", 'Walt Disney+ Pictures');
$movie5 = new Movie(5, 'Uncharted', 'Action, ', '25 Jan, 2022 ', "./images/uncharted.jpg", 'Columbia Pictures, Atlas');
$movie6 = new Movie(6, 'Thor: Love and Thunder,', 'Action, ', '13 Feb, 2022 ', "./images/thor.jpg", 'Marvel Studios');


$movies = [
    $movie1,
    $movie2,
    $movie3,
    $movie4,
    $movie5,
    $movie6,
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP LINK-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Movies</title>
</head>

<body>
    <div class="container">
        <h2 class="text-center my-3 text-light bg-success">My Movies</h2>
        <div class="row">
            <?php foreach ($movies as $movie) : ?>
                <div class="col bg-dark rounded m-1 p-4 text-light text-center">
                    <ul>
                        <li>
                            <h3>Movie ID</h3>
                            <p class="font-bold"><?= $movie->id ?></p>
                        </li>
                        <li>
                            <h3>Movie Title</h3>
                            <p><?= $movie->title ?></p>
                        </li>
                        <img src="<?= $movie->poster ?>" alt="">
                        <li>
                            <h3>Movie details:</h3>
                            <p><?= $movie->getMovieDetails() ?></p>
                        </li>
                    </ul>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>
<style>
    ul {
        list-style: none;
    }
    h2{
        font-size: 150px;
    }
    body{
        background-color: black;
    }
    img{
        width: 300px;
        height: 320px;
    }
    
</style>

</html>