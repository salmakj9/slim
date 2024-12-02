<?php
    //1-
    $etudiant = [
        "nom"=>"Chair",
        "prenom"=>"salma",
        "matricule"=>"'2554232'",
    ];
    
    foreach($etudiant as $key => $value){
        echo "$key : $value\n";
    }
    
    //2-
    $etudiant["note"] = 17;
    
    //3-
    foreach($listeProduits as $produit){
        foreach($produit as $key => $value){
            echo "$key : $value\n";
        }
        echo "\n";
    }
    
    //4-
    $scoreEtudiants = [17,20,16,14,15];
    $moyenne = array_sum($scoreEtudiants) / 5;
    echo "La moyenne est : $moyenne";
    
    //5-
    $pop_pays = [
        "Maroc" => 38081173,
        "Inde" => 1450935791,
        "Chine" => 	1419321278,
        "Etats Unis" => 345426571,
    ];
    arsort($pop_pays);
    foreach($pop_pays as $key => $value){
        echo "$key : $value\n";
    }
    
    //6-
    if(isset($_POST['nom']) && isset($_POST['age'])){
        $nom = $_POST['nom'];
        $age = $_POST['age'];
        echo "Bienvenue, $nom, vous avez $age ans!";
    }
    
    //7-
    if(isset($_POST['nom']) && isset($_POST['age'])){
        if($_POST['age'] > 0){
            $nom = $_POST['nom'];
            $age = $_POST['age'];
            echo "Bienvenue, $nom, vous avez $age ans!";
        }
        else echo "Erreur, l'age ne peut pas etre negatif.";
    }
    
    //8-
    if(isset($_POST['couleur'])){
        $couleur = $_POST['couleur'];
        echo "Votre couleur preferee est: $couleur";
    }
    
    //9-
    if(isset($_GET['num1']) && isset($_GET['num2'])){
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $somme = $num1 + $num2;
        echo "La somme de $num1 et $num2 est : $somme";
    }
    
    //10-
    if(isset($_POST['compte'])){
        $compte = $_POST['compte'];
        switch ($compte){
            case "Administrateur": echo "Bienvenue, administrateur!";break;
            case "Utilisateur": echo "Bienvenue, utilisateur simple!";break;
        }
    }
?>