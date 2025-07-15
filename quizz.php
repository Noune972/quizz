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

$NB_QUESTIONS = count($questions);

for($i = 0; $i < $NB_QUESTIONS; $i++){
    echo $questions[$i]."\n";
   $answer=trim(fgets(STDIN));
    echo "$i\n";
    if($answer==$reponses[$i]) {
        $score+=10;
        echo"bonne reponse";
    }else{ 
echo "mauvaise reponse"; 
    
}
}
$fichier = fopen("utilisateur.txt","a+");

$score_max = $NB_QUESTIONS * 10;
$pourcentage = ($score / $score_max) * 100;
echo "Votre score en pourcentage est : " . $pourcentage ."%\n";

if ($pourcentage >=50){
echo "vous avez gagné \n";
}else{
echo "Vous avez perdu \n";
}

fwrite($fichier,$pourcentage. ";");

//Lire et afficher le contenu d’un fichier
$contenu = file_get_contents("utilisateur.txt");
echo $contenu;


?>