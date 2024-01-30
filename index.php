<?php 
    /* DEFINIZIONE DELLA CLASSE MOVIE */
    class Movie
    {
        public $name;
        public $genre;
        public $year;
        public $country;
        public $duration = 0;

        /* DEFINIZIONE DI UN COSTRUTTO */

        public function __construct($_name, $_genre, $_year, $_country)
        {
            $this->name = $_name;
            $this->genre = $_genre;
            $this->year = $_year;
            $this->country = $_country;
        }

        /* CREO UN METODO PER CONVERTIRE I MINUTI IN ORE  */
        public function setHours($time)
        {
            $this->duration = gmdate('H:i', ($time * 60));
        }

        public function getHours(){
            return $this->duration;
        }
    }

    /* CREAZIONE DELLE ISTANZE MOVIE */
    $movie_1 = new Movie('2012', ['Action', 'Drama', 'Sci-Fi'], 2009, 'USA, Canada');
    $movie_1->setHours(158);

    $movie_2 = new Movie('The Day After Tomorrow', ['Drama', 'Sci-Fi', 'Thriller'], 2004, 'USA' );
    $movie_2->setHours(125);

    $movie_3 = new Movie('Giustizia Privata', ['Drama', 'Thriller', 'Crime'], 2010, 'USA');
    $movie_3->setHours(109);

    $movie_4 = new Movie('La guerra dei mondi', ['Action', 'Sci-Fi'], 2005, 'USA');
    $movie_4->setHours(103);

    $arrMovies = [
        $movie_1,
        $movie_2,
        $movie_3,
        $movie_4
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container text-white mt-5">
        <div class="row">
            <h1 class="fw-bolder">My Movies</h1>
        </div>
        <div class="row">
            <div class="col-12 py-3">
                <?php foreach ($arrMovies as $movie) { ?>                
                    <div>Nome: <span class="fw-bolder"><?php echo $movie->name ?></span></div>
                
                    <div>Genere:
                        <?php foreach ($movie->genre as $genre) { ?>
                            <span><?php echo $genre ?></span>
                        <?php } ?>
                    </div>
                    <div>Anno: <?php echo $movie->year ?></div> 
                    <div class="mb-5">Durata: <?php echo $movie->duration ?></div>   
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>
