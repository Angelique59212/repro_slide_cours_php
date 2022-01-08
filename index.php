<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Repro Slide</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
    <div class="container">
        <?php
            $myNumber = 5;
            $myChaine = "upToFourmies";
            /*affichage dune chaine*/
            echo $myChaine;
            echo $myNumber;

            /*connaître le type*/
            echo $myNumber . "<br>";
            echo gettype($myNumber);

            /*injecter des variables dans une chaine*/
            $myVariable = 5;
            $machaine1 = "Hello, il fait froid ici au moins $myVariable";
            echo $machaine1;

            /*ternaire*/
            $a = 2;
            $result = $a === 2 ? 'c\'est vrai : c\'est faux';

            /* parcourir un tableau */
            $array = [1 , 2, 3, 4];
            foreach ($array as $items) {
                echo "Dans ce tableau j'ai trouvé la valeur $items";
             }

            /* methode count pour longeur du tableau */
            for ($i = 0 ; $i < count($array) ; $i++) {
                echo "j'ai trouvé la valeur ".array[$i];
            }

            /* FONCTIONS */

            /* fonction sans param */
            function helloWorld () {
                echo "Hello World<br>";
            }
            helloWorld();

            /* ss param et sans valeur de retour */
            $helloWorld = function () {
                echo "Hello World<br>";
            };
            $helloWorld();

            /* avec param */
            function helloWorlds ($nom, $prenom) {
                echo "Hello $nom $prenom<br>";
            }
            helloWorlds('Dehainaut', 'Angélique');

            /* A privilégier avec le type */
            function helloDwwm (String $nom, Int $number) {
                while($number > 0) { //bonjour autant de fois que spécifier par nombre
                    echo "Hello $nom<br>";
                    $number--;
                }
            };
            helloDwwm("Dehainaut", 5);

            /* fonction avec tableau en param */
            /**
             * @param array $myarray
             */
            function typeHint (array $myarray) {
                foreach ($myarray as $items) {
                    echo "<span>items</span>";
                }
            };
            typeHint([1,2,3,4]);

            /* fonction de rappel */
            /**
             * @param callable $myCallable
             */
            function typHint (callable $myCallable) {
                $myCallable();
            }
            function hello() {
                echo "Hello!";
            }
            typHint('Hello!');

            /* retour de fonction */
            function hint (String $name) : string {
                return ucfirst($name);
            }
            $result = hint('dehainaut');
            echo $result ."<br>";

            /* conserver le résultat en utilisant return A PRiVILEGIER */
            function plusDeux($numbers) {
                $numbers = $numbers +2;
                echo "Variable nombre depuis la fonction: $numbers <br>";
                return $numbers;
            }

            /* le & devant la variable permet d'obtenir la ref de la variable */
            function plusTrois (& $number) {
                $number = $number +2;
                echo "Variable nombre depuis la fonction: $number <br>";
            }
            $value = 0;
            /* recup du retour de la fonction */
            plusTrois($value);
            echo "Variable nombre aprés l'avoir fourni à une fonction: $value";


            /* Param step optionnel */
            function incrementation ($nombre, $step =1) { // specification d'une valeur par défaut
                return $nombre += $step;
            }
            // en passant tout les param
            $value = 0;
            $value = incrementation($value,5);
            echo "Variable valeur aprés avoir incrémenté: $value <br>";
            // en ne passant que le param obligatoire
            $value =0;
            $value = incrementation($value);
            echo "Variable valeur apres avoir incremente: $value <br>";

            /* nombre indefini de param */
            function toto (...$param) {
                foreach ($param as $item) {
                    echo "parametre fourni: $param <br>";
                }
            }

            /* METHODE SUR LES STRINGS */
            /* addslashes() ajoute des antislash ds une chaine */
            $monMot = "Aujourd'hui nous sommes le 8 janvier 2022";
            echo $monMot . "<br>";

            $monMot = addcslashes($monMot);
            echo addslashes($monMot . "<br>");

            /* count_chars() statisque du nombre de fois que la lettre est appelé */
            $myMot = "Aujourd'hui nous sommes le 8 janvier, hier nous étions le 7 janvier";
            $statistique = count_chars($myMot);
            print_r($statistique);
            // paramètre mode ( deuxième paramètre ) à 1a la méthode ne retourne que les caractères utilisés dans la chaîne.
            $myMot = "Aujourd'hui nous sommes le 8 janvier, hier nous étions le 7 janvier";
            $statistique = count_chars($myMot, 1);
            foreach ($statistique as $char => $valeur) {
                //$char est l'index du tableau , contient la val num de la lettre
                // chr() permet de transformer char en carac
                echo "le carctere " .chr($char) .  "est utilisé " . $valeur . "fois <br>";
            }



        ?>
    </div>
</body>
</html>