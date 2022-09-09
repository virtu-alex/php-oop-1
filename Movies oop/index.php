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
    public function __construct($_id, $_title, $_genre, $_year, $_author = 'anonimo')
    {
        $this->id = $_id;
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->author = $_author;
    }
    // raccolgo i dettagli del film (genere, anno e autore)
    public function getMovieDetails()
    {
        return $this->genre . $this->year . $this->author;
    }
}

$movie1 = new Movie(1, 'Lord Of The Rings', 'Fantasy ', '29 July, 1954 ', 'J. R. R. Tolkien');
$movie2 = new Movie(2, 'Sotto il sole di Amalfi', 'Commedia ', '4 Sept, 2022 ', 'Netflix');
$movie3 = new Movie(3, 'The Godfather', 'Crime ', '14 March, 1972 ', 'Francis Ford Coppola');
$movie4 = new Movie(4, 'Pinocchio', 'Family ', '6 Aug, 2022 ', 'Walt Disney+ Pictures');
$movie5 = new Movie(5, 'Uncharted', 'Action ', '25 Jan, 2022 ', 'Columbia Pictures, Atlas');
$movie6 = new Movie(6, 'Thor: Love and Thunder', 'Action ', '13 Feb, 2022 ', 'Marvel Studios');


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
    <title>Movies</title>
</head>

<body>
    <h2>I miei Films</h2>
    <ul>
            <li>
                <h3>Movie ID</h3>
                <p><?= $movie->id ?></p>
            </li>
            <li>
                <h3>Movie Title</h3>
                <p><?= $movie->title ?></p>
            </li>
            <li>
                <h3>Movie details</h3>
                <p><?= $movie->getMovieDetails() ?></p>
            </li>
    </ul>
</body>

</html>