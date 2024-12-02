<?php
    //1-
    $employes = [
        ["nom" => "salma", "poste" => "Développeur", "salaire" => 9000],
        ["nom" => "marwa", "poste" => "Comptable", "salaire" => 5000],
        ["nom" => "Mohamed", "poste" => "Technicien", "salaire" => 4000],
        ["nom" => "hanane", "poste" => "Comptable", "salaire" => 5000],
        ["nom" => "hamza", "poste" => "Technicien", "salaire" => 4000]
    ];
    
    function salaireMoy($employes){
        $somme = 0;
        
        
        ;
        foreach($employes as $employe){
            $somme += $employe["salaire"];
        }
        $moyenne = $somme / count($employes);
        echo "Salaire moyen des employes: $moyenne";
    }
    
    //2-
    if(isset($_POST['nomEmp'])){
        $nomEmp = $_POST['nomEmp'];
        foreach($employes as $employe){
            if($nomEmp === $employe['nom']){
                echo "Nom: ".$employe['nom'];
                echo "Poste: ".$employe['poste'];
                echo "Salaire: ".$employe['salaire'];
                break;
                
            }
        }
    }
    
    //3-
    $utilisateurs = [
    ["email" => "test@exemple.com", "motDePasse" => "1234"],
    ["email" => "ex@exemple.com", "motDePasse" => "0000"],
    ];
    
    if(isset($_POST['email']) && isset($_POST['motDePasse'])){
        $email = $_POST['email'];
        $motDePasse = $_POST['motDePasse'];
        $authentifie = false;
    
        foreach ($utilisateurs as $utilisateur) {
            if ($utilisateur["email"] === $email && $utilisateur["motDePasse"] === $motDePasse) {
                echo "Connexion réussie !";
                $authentifie = true;
                break;
            }
        }
        if (!$authentifie) echo "Email ou mot de passe incorrect.";
    }
    
    //4
    $panier = [
    ["nom" => "Produit 1", "quantite" => 3, "prix" => 100],
    ["nom" => "Produit 2", "quantite" => 1, "prix" => 200],
    ];
    $total = 0;
    foreach($panier as $produit){
        $total += $produit['prix'] * $produit['quantite'];
    }
    echo "Total: $total";
    
    //5
    if(isset($_POST['commentaire'])){
        $commentaires = [];
        $nouveauCommentaire = [
            "contenu" => $_POST['commentaire'],
            "date" => date("Y-m-d H:i:s"),
        ];
        $commentaires[] = $nouveauCommentaire;
        foreach($commentaires as $commentaire){
            echo "Commentaire: ".$commentaire['contenu']." date: ".$commentaire['date'];
        }
    }
    
    //6
    $villes = [
        "Casablanca" => 26,
        "Marrakech" => 35,
        "Rabat" => 20
    ];
    $villeMax = "";
    $tempMax = -100;
    foreach($villes as $ville => $temp){
        if($temp > $tempMax){
            $tempMax = $temp;
            $villeMax = $ville;
        }
    }
    echo "La ville ayant la temperature la plus elevee est : ".$villeMax;
    
    //7
    
    //8
    $produits = [
        ["nom" => "Produit 1", "prix" => 100],
        ["nom" => "Produit 2", "prix" => 200],
        ["nom" => "Produit 3", "prix" => 300]
    ];
    
    if (isset($_POST['produits'])) {
        $total = 0;
        foreach ($_POST['produits'] as $produit) {
            $total += $produits[$produit]['prix'];
        }
        echo "Total: $total";
    }
    
    //9
    $etudiants = [
        "hanane" => ["Maths" => 19, "Physique" => 20, "Francais" => 18],
        "hamza" => ["Maths" => 15, "Physique" => 16, "Francais" => 12],
        "mohammed" => ["Maths" => 10, "Physique" => 9, "Francais" => 11]
    ];
    
    foreach($etudiants as $nom => $notes){
        $sommeNotes = 0;
        $totalMat = count($notes);
        foreach($notes as $matiere => $note){
           $sommeNotes += $note;
        }
        $moyenne = $sommeNotes / $totalMat;
        echo "Etudiant: $nom ; Moyenne: $moyenne";
    }
    
    //10
    $utilisateurs = [
        ["nom" => "salma", "email" => "salma@example.com"],
        ["nom" => "hamza", "email" => "hamza@example.com"]
    ];
    if (isset($_POST['action']) && $_POST['action'] === "ajouter") {
        $nouvelUtilisateur = [
            "id" => count($utilisateurs) + 1,
            "nom" => $_POST['nom'],
            "email" => $_POST['email']
        ];
        $utilisateurs[] = $nouvelUtilisateur;
    }

    if(isset($_POST['action']) && $_POST['action'] === 'modifier'){
        foreach($utilisateurs as $utilisateur){
            if($utilisateur['id'] == $_POST['id']){
                $utilisateur['nom'] = $_POST['nouveauNom'];
                $utilisateur['email'] = $_POST['nouveauEmail'];
                break;
            }
        }
    }

    if (isset($_POST['action']) && $_POST['action'] === "supprimer") {
        foreach ($utilisateurs as $indice => $utilisateur) {
            if ($utilisateur['id'] == $_POST['id']) {
                unset($utilisateurs[$indice]);
                break;
            }
        }
    }
?>