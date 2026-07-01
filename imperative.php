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

        $codvalide = true;
    do{
        $code = readline("Saisie le code : ");
        if (empty($code)){
            echo "Le code est obligatiore.\n";
            $codvalide = false;
        }
        $codExiste = true;
        foreach($categories as $key){
            if ($key["code"]=== $code){
                $codExiste = true;
                break;
            }
        }
        if($codExiste){
            echo"le code exite deja. \n";
        }
    }while($codExiste);

?>