<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
 - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati. -->
<?php
require_once __DIR__ . "/models/Movie.php";

$generi = [
    "Azione ",
    "Avventura ",
    "Fantascienza ",
    "Horror ",
];

$movies = [
    new Movie("Mission Impossible", $generi, "106 min", "inglese"),
    new Movie("Creed", $generi, "134 min ", "inglese"),
    new Movie("Smetto quando voglio ", $generi, "90 min", "italiano "),
]



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Php oop 1</title>
</head>

<body>
    <h1 class=" mt-5 text-center">PHP oop 1 Film!</h1>
    <div class="container d-flex mt-5 p-5">
        <?php foreach ($movies as $movie) { ?>
            <div class="card m-4" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $movie->title ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $movie->lingua ?></h6>
                    <p class="card-text">
                        <?php foreach ($movie->genere as $genere) {
                            echo $genere;
                        } ?></p>
                    <p class="card-text"><?php echo $movie->durata ?></p>
                    <p class="card-text"><?php echo $movie->description ?></p>
                </div>
            </div>
        <?php } ?>
    </div>

</body>

</html>