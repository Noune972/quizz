<?php


$questions = [
    "Quelle est la couleur du cheval blanc d'Henri IV?\n1. Blanc\n2. Rouge\n3. Noir\n",
    "Date de la prise de la Bastille ?\n1. 1750\n2. 1789\n3. 1800\n",
    "Quel est le plus grand océan du monde ?\n1. Océan Atlantique\n2. Océan Indien\n3. Océan Pacifique\n",
    "Qui a écrit Les Misérables ?\n1. Victor Hugo\n2. Emile Zola\n3. Marcel Proust\n",
    "Quelle est la capitale de l'Australie ?\n1. Sydney\n2. Melbourne\n3. Canberra\n"
];


$reponses = [1, 2, 3, 1, 3];
$score = 0;

// if ($reponse == ) {
//     $score += 10;
//     echo "Bonne réponse\n";
// } else {
//     $score += 0;
//     echo "Mauvaise réponse\n";
// }

$NB_QUESTIONS = count($questions);

for($i = 0; $i < $NB_QUESTIONS; $i++){
    echo $questions[$i]."\n";
    // Votre code
    echo "$i\n";
    
}

echo $score." \n";

?>