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
    $movie_1 = new Movie('2012', 'Sci-Fi', 2009, 'USA, Canada');
    $movie_1->setHours(158);

    $movie_2 = new Movie('The Day After Tomorrow', 'Sci-Fi', 2004, 'USA' );
    $movie_2->setHours(125);

    $movie_3 = new Movie('Giustizia Privata', 'Thriller', 2010, 'USA');
    $movie_3->setHours(109);

    $movie_4 = new Movie('La guerra dei mondi', 'Action, Sci-Fi', 2005, 'USA');
    $movie_4->setHours(103);

    $arrMovies = [
        $movie_1,
        $movie_2,
        $movie_3,
        $movie_4
    ];

    var_dump($arrMovies);

    foreach ($arrMovies as $movie) {
        echo "<strong>$movie->name</strong>"  .' è uscito nel '.$movie->year.' è un film di genere '.$movie->genre.' prodotto in '.$movie->country. ' e dura '.$movie->getHours();
        echo '<br>';
        echo '<br>';
    }

?>
