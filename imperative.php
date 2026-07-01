<?php
$categories = [

   0 =>      [
            "code" => "01",
            "nom" => "categorie1",
            "produits" => [
                  0 => [
                    "nom" => "prodt1",
                    "reference" => "reference1",
                    "prix" => 8000,
                    "quantite" => 3
                  ],
                  1 => [
                    "nom" => "prodt2",
                    "reference" => "reference2",
                    "prix" => 200,
                    "quantite" => 3 
                  ]
            ]
         ],
   1 =>      [
            "code" => "02",
            "nom" => "categorie2",
            "produits" => []
         ]
];

    foreach($categories as $key ) {
        if(empty($key["produits"])){
            echo $key["nom"]."\n";
        }
    } 

        $codValide = true;
    do{
        $code = readline("Saisie le code : ");
        if (empty($code)){
            echo "Le code est obligatiore.\n";
            $codValide = false;
        }
       
        foreach($categories as $key){
            if ($key["code"]=== $code){
                $codValide = false;
                echo"le code exite deja. \n";
                
            }
        }
       
    }while($codValide);

     $nomValide = true;

    do{
        $nom = readline("Saisie le nom : ");
        if (empty($nom)){
            echo "Le code est obligatiore.\n";
            $nomValide = false;
        }
       
        foreach($categories as $key){
            if ($key["nom"]=== $nom){
                $nomValide = false;
                echo"le code exite deja. \n";
                
            }
        }
       
    }while($nomValide);


?>