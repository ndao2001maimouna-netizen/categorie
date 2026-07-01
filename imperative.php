<?php
//1
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
//2
    foreach($categories as $key ) {
        if(empty($key["produits"])){
            echo $key["nom"]."\n";
        }
    } 
//3
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

//4
    $categorie = [
        "code" => $code,
        "nom"  => $nom,
        "produits" => []
    ];

    $categories[] = $categorie;

    $categorieExit = false;
    $code = readline("saisie le code: ");
    foreach($categories as $key => $categorie){
        if($categorie["code"]=== $code){
            $categorieExit = true;
        }
    }
    if ($categorieExit){
        $produit = [
            "nom" => readline("Saisie nom: "),
            "reference" => readline("Saisie reference: "),
            "prix" => (int)readline("Saisie prix: "),
            "quantite" =>(int) readline("Saisie quantite: ")
        ];
        $categories[$key["produit"][] = $produit];
    }
    echo"la categorie n'exite pas \n"; 
?>